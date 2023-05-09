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

    // /**
    //  * @Route("/main", name="cart_index")
    //  */

    // public function index(SessionInterface $session, EventRepository $EventRepository, ManagerRegistry $doctrine)
    // {
    //     //showing cart and events to buy in it
    //     $cart = $session->get('cart', []);
    //     $cartWithData = [];
    //     $reposity = $doctrine->getRepository(Event::class);
    //     $events = $reposity->findAll();

    //     foreach ($events as $event) {
    //         $cartWithData[] = [
    //             'event' => $EventRepository->find($event->getId()),
    //             'quantity' => $EventRepository->find($event->getId())->getNbplaces()
    //         ];
    //     }
    //     //dd($cartWithData);
    //     //calculating total price
    //     $total = 0;

    //     foreach ($cartWithData as $item) {
    //         $totalItem = $item['event']->getPrice() * $item['quantity'];
    //         $total += $totalItem;
    //     }
    //     return $this->render('main/index.html.twig', [
    //         'items' => $cartWithData,
    //         'total' => $total
    //     ]);

    // }

    // /**
    //  * @Route("/main/add/{id}", name="cart_add")
    //  */
    // public function add($id, SessionInterface $session)
    // {
    //     $cart = $session->get('cart', []);
    //     if (!empty($cart[$id])) {
    //         $cart[$id]++;//quantity++
    //     } else {
    //         $cart[$id] = 1; //quantity
    //     }
    //     $session->set('cart', $cart);
    //     return $this->redirectToRoute("cart_index");
    // }

    // /**
    //  * @Route("/main/remove/{id}", name="cart_remove")
    //  */
    // public function remove($id, SessionInterface $session, EventRepository $eventRepository, ManagerRegistry $doctrine)
    // {
    //     // Rebuild cartWithData and calculate total price
    //     $cartWithData = [];
    //     $reposity = $doctrine->getRepository(Event::class);
    //     $events = $reposity->findAll();

    //     foreach ($events as $event) {
    //         $cartWithData[] = [
    //             'event' => $eventRepository->find($event->getId()),
    //             'quantity' => $eventRepository->find($event->getId())->getNbplaces()
    //         ];
    //     }

    //     // Removing an event from cart
    //     $cart = $cartWithData;
    //     $index = null;
    //     foreach ($cart as $i => $item) {
    //         if ($item['event']->getId() == $id) {
    //             $index = $i;
    //             break;
    //         }
    //     }
    //     if ($index !== null) {
    //         array_splice($cart, $index, 1);
    //     }

    //     $total = 0;
    //     foreach ($cart as $item) {
    //         $total += $item['event']->getPrice() * $item['quantity'];
    //     }
    //     $session->set('cart', $cart);

    //     // Updating the database after removing an event from cart with query builder
    //     $em = $doctrine->getManager();
    //     $qb = $em->createQueryBuilder();

    //     $qb->delete('App\Entity\Event', 'e')
    //         ->where('e.id = :id')
    //         ->setParameter('id', $id);

    //     $qb->getQuery()->execute();

    //     return $this->redirectToRoute("cart_index", [
    //         'items' => $cart,
    //         'total' => $total
    //     ]);
    // }

    // /**
    //  * @Route("/payment", name="cart_payment")
    //  */
    // public function payment(Request $request, SessionInterface $session, EventRepository $eventRepository, ManagerRegistry $doctrine)
    // {
    //     // Rebuild cartWithData and calculate total price
    //     $cartWithData = [];
    //     $repository = $doctrine->getRepository(Event::class);
    //     $events = $repository->findAll();

    //     foreach ($events as $event) {
    //         $cartWithData[] = [
    //             'event' => $eventRepository->find($event->getId()),
    //             'quantity' => $eventRepository->find($event->getId())->getNbplaces()
    //         ];
    //     }

    //     $items = [];
    //     $total = 0;

    //     // if form is submitted, assume quantity input is valid and redirect to payment page
    //     foreach ($cartWithData as $evt) {
    //         $event = $eventRepository->find($evt['event']->getId());
    //         $quantity = $request->request->get('quantity_'.$event->getId());
    //         $items[] = [
    //             'event' => $event,
    //             'quantity' => $quantity
    //         ];
    //         $totalItem = $event->getPrice() * $quantity;
    //         $total += $totalItem;
    //     }

    //     // for debugging
    //     //dd($items);
    //     // dd($total);
    //     return $this->redirectToRoute('cart_payment', [
    //         'items' => $items,
    //         'total' => $total,
    //     ]);

    // }


}
