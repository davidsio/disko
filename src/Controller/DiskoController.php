<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DiskoController
 *
 * @author David <nadal.david34300@gmail.com>
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DiskoController extends AbstractController{
    
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function accueilDisko() {
        
        return $this->render('formulaire/formulaire.html.twig');
        
    }
    
    
}
