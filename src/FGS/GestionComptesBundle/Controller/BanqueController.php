<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 07/07/2018
 * Time: 01:10
 */

namespace FGS\GestionComptesBundle\Controller;


use FGS\GestionComptesBundle\Entity\Banque;
use FGS\GestionComptesBundle\Form\Type\AjouterBanqueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BanqueController extends Controller
{


    public function ajouterBanqueAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $user= $this->get('security.token_storage')->getToken()->getUser();
        $banque=new Banque();
        $form=$this->createForm(AjouterBanqueType::class,$banque );




        $form->handleRequest($request);
        if ($form->isValid()) {

            $file=$banque->getUrlImage();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('images_directory'),$filename
            );
            $banque->setUrlImage($filename);
            $em->persist($banque);
            $em->flush();

            return $this->redirectToRoute("fgs_gestion_comptes_afficherBanques");
        }
        return $this->render('FGSGestionComptesBundle:Banque:ajouterBanque.html.twig', array(
            "form" => $form->createView()
        ));

    }

    public function afficherBanqueAction(){


        $em = $this->getDoctrine();
        $repository = $em->getRepository(Banque::class);
        $reclamations = $repository->findAll();
        return $this->render('FGSGestionComptesBundle:Banque:afficherBanque.html.twig', array(
            'Banques' => $reclamations
        ));
    }

}