<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{   
    #[Route('/checkout', name: 'checkout')]
    public function checkout(Request $request): Response
    {
        $total = $request->get('total');

        return $this->render('checkout/index.html.twig', [
            'total' => $total
        ]);
    }
}
