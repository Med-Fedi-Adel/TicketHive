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
  $subtotal = $event->getPrice() * $quantity;
  $total += $subtotal;
  array_push($cartWithData, ['event' => $event, 'quantity' => $quantity]);
}


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
$cart = $session->get('cart', []);
if (!empty($cart[$id])) {
 $cart[$id]++; // si le produit existe déjà, on incrémente la quantité
} else {
 $cart[$id] = 1; // sinon, on ajoute le produit avec la quantité 1
}
 $session->set('cart', $cart);
 return $this->redirectToRoute("cart_index");
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
* @Route("/cart_payment", name="cart_payment")
*/
public function payment(Request $request, SessionInterface $session, EventRepository $eventRepository)
{
 $items = json_decode($request->request->get('items'));
 $total = $request->request->get('total');
 // Process the payment and clear the cart
 $session->set('cart', []);

 /*dd($items);
    dd($total); */
 return $this->redirectToRoute('/payment', [
 'items' => $items,
 'total' => $total,
]);

}

}