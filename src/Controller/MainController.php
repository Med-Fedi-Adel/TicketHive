<?php

namespace App\Controller;

use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $reposity = $doctrine -> getRepository(Event::class);
        $today = new DateTime();
        $eventT = $reposity -> findByDate ($today);
        $threeDaysAhead = (new DateTime())->modify('+3 days');
        $eventW = $reposity -> findByDateRange ($threeDaysAhead,$today);
        $date = (new DateTime())->modify('+2 weeks');
        $eventU = $reposity -> findByDateUpcoming ($date);
        return $this->render('main/index.html.twig',['eventT' => $eventT,'eventW' => $eventW,'eventU' => $eventW]);
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
