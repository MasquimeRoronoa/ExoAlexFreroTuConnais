<?php

namespace App\Controller;

use App\Repository\CalendrierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendrierController extends AbstractController
{
    /**
     * @Route("/calendrier", name="calendrier")
     */
    public function index(CalendrierRepository $calendar): Response
    {
        $events = $calendar->findAll();

        $rdv = [];

        foreach ($events as $event){
            $rdv[] = [

                'id' => $event->getId(),
                'nom' => $event->getNomCalendrier(),
                'mail' => $event->getMailCalendrier(),
                'tel' => $event->getTelCalendrier(),
                'nombre' => $event->getNombreCalendrier(),
                'date' => $event->getDateDebutCalendrier(),
            ];
        }


        return $this->render('calendrier/index.html.twig', [
            'controller_name' => 'CalendrierController',
            'tab'=>$rdv
        ]);
    }
}
