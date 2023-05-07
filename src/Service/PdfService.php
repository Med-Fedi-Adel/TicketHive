<<<<<<< HEAD
<?php

namespace App\Service ;

class PdfService{
    private $domPdf ;

    public function __construct(){
        $this->domPdf = new DomPdf();

        $pdfOption = new Options();

        $pdfOption->set('defaultFont','Garamond');

        $this->domPdf-> setOptions($pdfOption);
    }

    public function showpdfFile($html)
    {
        $this->domPdf->load($html);
        $this->domPdf->render();
        $this->domPdf->stream("Details.pdf",['Attachement'=>false]); 
    }

    
=======
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
>>>>>>> main
}