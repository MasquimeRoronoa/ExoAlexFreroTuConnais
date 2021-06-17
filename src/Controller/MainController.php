<?php

namespace App\Controller;

use App\Repository\ChefRepository;
use App\Repository\ContactRepository;
use App\Repository\FeaturesRepository;
use App\Repository\ImageRepository;
use App\Repository\MenuRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(FeaturesRepository $featuresRepository, MenuRepository $menus, ProduitRepository $produits, ChefRepository $chefs): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'features' => $featuresRepository->findLastFeatures(),
            'featuress'=> $featuresRepository->findFirstFeatures(),
            'menus' => $menus->findAll(),
            'produits'=> $produits->findBy(array('categories'=>'3')),
            'produitss'=> $produits->findLastImage(),
            'chefs'=> $chefs->findAll(),
            'slide'=> $produits->findLastSlider()

        ]);
    }

}
