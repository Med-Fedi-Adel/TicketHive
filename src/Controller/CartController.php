<?php
namespace App\Controller;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Event;
use Doctrine\Persistence\ManagerRegistry;
class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart_index")
     */
    public function index(SessionInterface $session, EventRepository $eventRepository)
    {
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
//        dd($total);
//        dd($cartWithData);

        return $this->render('main/index.html.twig', [
            'items' => $cartWithData,
            'total' => $total
        ]);
    }



    /**
* @Route("/cart/add/{id}", name="cart_add")
*/
    public function add($id, SessionInterface $session)
    {
//        dd($id);
        $cart = $session->get('cart', []);
        if (!isset($cart[$id])) {
            $cart[$id] = 0;
        }
        $cart[$id]++;
        $session->set('cart', $cart);
//        dd($cart);
        return $this->redirectToRoute('cart_index');
    }



/**
* @Route("/cart/remove/{id}", name="cart_remove")
*/
public function remove($id, SessionInterface $session)
{
 $cart = $session->get('cart', []);
 if (!empty($cart[$id])) {
 unset($cart[$id]);
}
 $session->set('cart', $cart);
 return $this->redirectToRoute("cart_index");
}


/**
* @Route("/cart/checkout", name="cart_payment")
*/
public function payment(Request $request, SessionInterface $session, EventRepository $eventRepository)
{
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
//    dd($total);
//    dd($cartWithData);




 return $this->redirectToRoute('paymentEvent', [
 'items' => $CartWithData,
 'total' => $total,

]);

}

}
