<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 08/07/2018
 * Time: 16:58
 */

namespace FGS\GestionComptesBundle\Controller;


use FGS\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{



    public function afficherAllAction(){

        $roles="a:0:{}";
        $em = $this->getDoctrine();

        $reclamations = $em->getRepository(User::class)->AllUsersDQL($roles);
        return $this->render('FGSGestionComptesBundle:Users:afficherUsers.html.twig', array(
            'Users' => $reclamations
        ));
    }

    public function EtatAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usr = $em->getRepository(User::class)->find($id);
        $usr->setEnabled(0);
        $em->persist($usr);
        $em->flush();

        return $this->redirecttoRoute("fgs_gestion_comptes_afficher_Utilisateurs");


    }

    public function Etat2Action($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usr = $em->getRepository(User::class)->find($id);
        $usr->setEnabled(1);
        $em->persist($usr);
        $em->flush();

        return $this->redirecttoRoute("fgs_gestion_comptes_afficher_Utilisateurs");


    }

}