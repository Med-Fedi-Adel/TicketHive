<?php 

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
  private $domPdf;


  public function __construct(){
    $this->domPdf = new Dompdf();

    $pdfOption = new Options();

    $pdfOption->set('defaultFont','Garamond');


    $this->domPdf->setOptions($pdfOption);
  }


  public function showpdfFile($html)
  {


    $this->domPdf->loadHtml($html);
    $this->domPdf->render();

    $this->domPdf->stream("Details.pdf",[
      'Attachement'=>false
    ]);

  }

  public function generateBinaryPdf($html){
    $this->domPdf->loadHtml($html);
    $this->domPdf->render();

    $this->domPdf->output();
  }    
}
