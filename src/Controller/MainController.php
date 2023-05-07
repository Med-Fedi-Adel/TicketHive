<?php

namespace App\Controller;

use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/main/createevent', name: 'main.create_event')]
    public function createEventPage(): Response
    {
        return $this->render('main/create.html.twig');
    }

    #[Route('/generate',name:'pdf_gen')]
    public function pdf_gen(){
        $html = $this->renderView('pdf/invoice.html');

        // Configure Dompdf options
        $options = new Options();
        $options->set('defaultFont', 'Helvetica');

        // Create a new instance of Dompdf
        $dompdf = new \Dompdf\Dompdf($options);

        // Load the HTML content
        $dompdf->loadHtml($html);

        // Render the PDF
        $dompdf->render();

        // Output the generated PDF to the browser
        $dompdf->stream('invoice.pdf', [
            'Attachment' => false,
        ]);
    }
}
