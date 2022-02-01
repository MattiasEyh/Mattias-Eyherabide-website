<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebSiteController extends AbstractController {


    /**
     * @Route("/")
     */
     public function home(){
         return $this->render('website/homepage.html.twig');
     }
}