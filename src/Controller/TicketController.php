<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;

class TicketController extends AbstractController
{
    #[Route('/ticket/{id}', name: 'ticket')]
    
    public function index($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $event = $entityManager->getRepository(Event::class)->find($id);

        return $this->render('ticket.html.twig', [
            'event' => $event,
        ]);
    }
}
