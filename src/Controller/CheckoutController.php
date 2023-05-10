<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\Session;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'checkout')]
    public function checkout(Request $request, Session $session,EventRepository $eventRepository): Response
    {
        $cart = $session->get('cart', []);

        if (empty($cart)) {
            return $this->redirectToRoute("main");
        }

        array_walk(
            $cart,
            function (&$quantity, $key) use ($request) {
                $quantity = $request->get("quantity_$key");
            }
        );

        $session->set('cart', $cart);

        $total = 0;

        foreach ($cart as $id => $quantity) {
            $event = $eventRepository->find($id);
            if (!$event) {
                continue;
            }
            $total += $event->getPrice() * $quantity;
        }

        return $this->render('checkout/index.html.twig', [
            'total' => $total
        ]);
    }
}
