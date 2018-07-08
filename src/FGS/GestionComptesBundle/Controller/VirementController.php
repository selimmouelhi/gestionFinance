<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 06/07/2018
 * Time: 03:11
 */

namespace FGS\GestionComptesBundle\Controller;


use FGS\GestionComptesBundle\Entity\Compte;
use FGS\GestionComptesBundle\Entity\Virement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use FGS\GestionComptesBundle\Entity\CategorieMouvementFinancier;
use FGS\GestionComptesBundle\Entity\MouvementFinancier;
use FGS\GestionComptesBundle\Form\Type\VirementType;
use FGS\GestionComptesBundle\Security\Authorization\Voter\MouvementFinancierVoter;

class VirementController extends Controller

{

    public function ajouterVirementAction(Request $request)
    {

        $user= $this->get('security.token_storage')->getToken()->getUser();
        $virement = new Virement();


        $form = $this->createForm(VirementType::class);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em			=	$this->getDoctrine()->getManager();
            $virement->setCompteR($em->getRepository(Compte::class)->findOneByNom($request->get('Compte r')));
            $virement->setCompteS($em->getRepository(Compte::class)->findOneByNom($request->get('Compte s')));
            $compteR = $virement->getCompteR();
            $compteS = $virement->getCompteS();

            $em->persist($virement);
            $em->flush();

            return $this->redirect($this->generateUrl("fgs_gestion_comptes_homepage"));
        }
        return $this->render('FGSGestionComptesBundle:Virements:ajouter_virement.html.twig', array(
            'form'	=>	$form->createView(),
        ));
    }

}