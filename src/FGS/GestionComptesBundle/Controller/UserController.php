<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 08/07/2018
 * Time: 16:58
 */

namespace FGS\GestionComptesBundle\Controller;


use FGS\UserBundle\Entity\User;

class UserController
{



    public function afficherAllAction(){


        $em = $this->getDoctrine();
        $repository = $em->getRepository(User::class);
        $reclamations = $repository->findAll();
        return $this->render('FGSGestionComptesBundle:Banque:afficherBanque.html.twig', array(
            'Users' => $reclamations
        ));
    }

}