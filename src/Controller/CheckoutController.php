<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class CheckoutController extends AbstractController
{   
    #[Route('/checkout', name: 'checkout')]
    public function checkout(ManagerRegistry $doctrine ,Request $request): Response
    {
        //dd($request);
        $data = $request->request;

        $total = $data->get('total');

        return $this->render('checkout/index.html.twig', [
            'total' => $total
        ]);
    }
}
