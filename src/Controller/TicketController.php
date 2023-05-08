<?php

namespace App\Controller;

use App\Entity\Event;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TicketController extends AbstractController
{
    #[Route('/ticket/{id}', name: 'ticket')]
    
    public function index(ManagerRegistry $doctrine,$id): Response
    {
        $entityManager = $doctrine->getManager();
        $repo = $entityManager->getRepository(Event::class);
        $event = $repo->findOneBy(['id'=>$id]);

        return $this->render('ticket/index.html.twig', [
            'event' => $event,
        ]);
    }
}