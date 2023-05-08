<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TCPDF;

class PdfController extends AbstractController
{
    #[Route('/pdf', name: 'app_pdf')]
    public function index(): Response
    {
        return $this->render('pdf/index.html.twig', [
            'controller_name' => 'PdfController',
        ]);
    }


    #[Route('/generated',name:'generated_pdf')]
    public function generatePdf()
    {
        // Create a new instance of TCPDF
        $pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Title of Generated PDF');
        $pdf->SetSubject('Subject of Generated PDF');
        $pdf->setFontSubsetting(true);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add a page
        $pdf->AddPage();

        // Add an image to the PDF
        //$pdf->Image('path/to/image.jpg', 10, 10, 50, 0, 'JPG', '', 'T', false, 300);

        // Write some content to the page
        $pdf->writeHTML(
            '<h1 style="background-color: red">
                Hello World!
            </h1>'
        );

        // Output the generated PDF to the browser
        $pdf->Output('filename.pdf', 'D');
    }
}
