<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 06/07/2018
 * Time: 17:24
 */

namespace FGS\GestionComptesBundle\Controller;


use FGS\GestionComptesBundle\Entity\Reclamation;
use FGS\GestionComptesBundle\Form\Type\AjouterReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReclamationController extends Controller

{

    public function LireReclamationsAction()
    {
        $em = $this->getDoctrine();
        $repository = $em->getRepository(Reclamation::class);
        $reclamations = $repository->findAll();
        return $this->render('FGSGestionComptesBundle:Reclamations:readA_reclamation.html.twig', array(
            'reclamations' => $reclamations
        ));
    }



    public function AjoutReclamationAction(Request $request)
    {
        $user = $this->getUser();// hetha 1
        $reclamations = new Reclamation();
        $reclamations->setUtilisateur($user);
        $form = $this->createForm(AjouterReclamationType::class, $reclamations);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamations);
            $em->flush();
            return $this->redirectToRoute("fgs_gestion_comptes_welcome");
        }
        return $this->render('FGSGestionComptesBundle:Reclamations:ajoutreclamation.html.twig', array(
            "form" => $form->createView()
        ));
    }


    public function EtatAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository(Reclamation::class)->find($id);
        $rec->setEtat(1);
        $em->persist($rec);
        $em->flush();

        return $this->redirecttoRoute("lire_reclamations");


    }

    public function LireReclamations2Action()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine();
        $repository = $em->getRepository(Reclamation::class);
        $reclamations = $repository->MesReclamationsDQL($user);
        return $this->render('FGSGestionComptesBundle:Reclamations:readC_reclamation.html.twig', array(
            'reclamations' => $reclamations
        ));
    }



}