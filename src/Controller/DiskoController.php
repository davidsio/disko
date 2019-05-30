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

use App\Entity\User;
use App\Form\FormulaireContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DiskoController extends AbstractController {

    /**
     * @Route("/", name="accueil")
     */
    public function accueilDisko(Request $request, EntityManagerInterface $em, \Swift_Mailer $mailer) {


        $formulaire = $this->createForm(FormulaireContactType::class);

        $formulaire->handleRequest($request);

        if ($formulaire->isSubmitted() && $formulaire->isValid() && $formulaire->getNormData()->getMessage() != null) {

            $em->persist($formulaire->getNormData());
            $em->flush();

            $message = (new \Swift_Message('Nouveau contact - DISKO'))
                    ->setFrom('PRECISER ADRESSE MAIL DU COMPTE EXPÉDITEUR')
                    ->setTo("PRECISER ADRESSE MAIL DE L'ADMIN")
                    ->setBody(
                    $this->renderView(
                            'emails/notification.html.twig',
                            ['nom' => $formulaire->getNormData()->getNom(),
                                'prenom' => $formulaire->getNormData()->getPrenom(),
                                'sujet' => $formulaire->getNormData()->getSujet(),
                                'url' => $_SERVER['HTTP_HOST']]
                    ),
                    'text/html'
                    )
            ;
            $mailer->send($message);

            return $this->redirectToRoute("succes");
        }

        return $this->render('formulaire/formulaire.html.twig', ['form' => $formulaire->createView()]);
    }

    /**
     * @Route("/succes", name="succes")
     */
    public function messageOk() {
        return $this->render('formulaire/formulaire_succes.html.twig');
    }


}
