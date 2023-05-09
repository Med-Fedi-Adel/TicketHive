<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{   
    #[Route('/payment', name: 'checkout')]
    
    public function checkout(Request $request): Response
    {
        $total = $request->get('total');

        return $this->render('payment/index.html.twig', [
            'total' => $total
        ]);
    }
}
