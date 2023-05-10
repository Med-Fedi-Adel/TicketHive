<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\EventRepository;
use Dompdf\Options;
use DateTime;

class MainController extends AbstractController
{
    #[Route('/main', name: 'main')]
    public function index(Session $session, EventRepository $eventRepository): Response
    {
        // events
        $today = new DateTime();
        $eventT = $eventRepository->findByDate($today);
        $threeDaysAhead = (new DateTime())->modify('+3 days');
        $eventW = $eventRepository->findByDateRange($threeDaysAhead, $today);
        $date = (new DateTime())->modify('+2 weeks');
        $eventU = $eventRepository->findByDateUpcoming($date);

        // cart
        $cart = $session->get('cart', []);
        $cartWithData = [];
        $total = 0;
        foreach ($cart as $id => $quantity) {
            $event = $eventRepository->find($id);
            if (!$event) {
                continue;
            }
            $subtotal = $event->getPrice() * $quantity;
            $total += $subtotal;
            array_push($cartWithData, ['event' => $event, 'quantity' => $quantity]);
        }

        return $this->render('main/index.html.twig', [
            'eventT' => $eventT,
            'eventW' => $eventW,
            'eventU' => $eventU,
            'items' => $cartWithData,
            'total' => $total
        ]);
    }

    #[Route('/main/createevent', name: 'main.create_event')]
    public function createEventPage(): Response
    {
        return $this->render('main/create.html.twig');
    }

    #[Route('/generate', name: 'pdf_gen')]
    public function pdf_gen()
    {
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
