<?php
namespace App\Controller;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
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

<<<<<<< HEAD
/**
* @Route("/cart", name="cart_index")
*/
public function index(Session $session, EventRepository $eventRepository)
{
 $cart = $session->get('cart', []);
 $cartWithData = [];
 $total = 0;
 foreach ($cart as $id => $quantity) {
  $event = $eventRepository->find($id);
  $subtotal = $event->getPrice() * $quantity;
  $total += $subtotal;
  array_push($cartWithData, ['event' => $event, 'quantity' => $quantity]);
}
=======
        return $this->render('main/index.html.twig', [
            'items' => $cartWithData,
            'total' => $total
        ]);
    }
>>>>>>> main



<<<<<<< HEAD
/**
* @Route("/cart/add", name="cart_add")
*/
public function add(Session $session,Request $request)
{
$cart = $session->get('cart', []);
$id = $request->get('id');
$cart[$id]= ($cart[$id]?? 0 ) +1;
 $session->set('cart', $cart);
 return $this->redirectToRoute("cart_index");
}
=======
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


>>>>>>> main

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
<<<<<<< HEAD
 $items = json_decode($request->request->get('items'));
 $total = $request->request->get('total');
 // Process the payment and clear the cart
 $session->set('cart', []);

 return $this->redirectToRoute('/payment', [
 'items' => $items,
=======
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
 'items' => $cartWithData,
>>>>>>> main
 'total' => $total,

]);

}

}
