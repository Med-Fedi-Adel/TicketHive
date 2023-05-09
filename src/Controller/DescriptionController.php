<?php

namespace App\Controller;

use App\Entity\Event;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DescriptionController extends AbstractController
{
    #[Route('/event/{id}', name: 'event_description')]

    public function showEventAction(ManagerRegistry $doctrine,$id): Response
    {
        $repo = $doctrine->getRepository(Event::class);
        // événement à partir de l'ID
        $event = $repo->findOneBy(['id'=>$id]);
        
        // Récupérer le nombre de billets disponibles
        $ticketsRemaining = $event->getNbplaces();

        //dd($ticketsRemaining);

        return $this->render('description/index.html.twig', [
            'event' => $event,
            'tickets_remaining' => $ticketsRemaining
        ]);
    }
}

