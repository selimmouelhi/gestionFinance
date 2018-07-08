<?php

namespace FGS\GestionComptesBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AideController extends Controller
{
    public function bienvenueAction()
    {
		//génération de la vue
    	return $this->render('FGSGestionComptesBundle:Presentation:welcome.html.twig', array(
    		
     	));

    }
    public function firstAction()
    {
        //génération de la vue
        return $this->render('FGSGestionComptesBundle:Default:first.html.twig', array(

        ));

    }
    public function adminAction()
    {
        //génération de la vue
        return $this->render('FGSGestionComptesBundle:Default:adminA.html.twig', array(

        ));

    }
    public function homeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $usr= $this->get('security.token_storage')->getToken()->getUser()->getRoles();
        //die($usr);
        $user=$this->container->get('security.authorization_checker');
        if (($user->isGranted('ROLE_ADMIN'))){
            return $this->redirectToRoute('fgs_gestion_comptes_admin');
        }elseif (($user->isGranted('ROLE_USER'))){
            return $this->redirectToRoute('fgs_gestion_comptes_homepage');
        }


    }

}
