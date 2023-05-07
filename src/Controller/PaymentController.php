<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentController extends AbstractController
{
    public function checkout(Request $request): Response
    {
        $total = $request->get('total');

        return $this->render('payment/checkout.html.twig', [
            'total' => $total
        ]);
    }
}
