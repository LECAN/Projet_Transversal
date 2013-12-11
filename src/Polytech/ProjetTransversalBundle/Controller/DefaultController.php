<?php

namespace Polytech\ProjetTransversalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Polytech\ProjetTransversalBundle\Entity;
use Symfony\Component\HttpFoundation\Request;




class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PolytechProjetTransversalBundle:Default:index.html.twig');
    }
	
	/********************************************
	* User registration page.
	*
	* @param Request $request Contain POST or GET response
	*
	*
	**********************************************/
	public function registerAction(Request $request)
    {
		$user = new Entity\User();
		 
		
		// create user form
		 $form = $this->createFormBuilder($user)
			->add('username', 'text')
            ->add('plainPassword', 'text')
            ->add('Envoyer', 'submit')
            ->getForm();

		//get POST response
		 $form->handleRequest($request);

		if ($form->isValid()) {
			
			//persist user
			$user = $form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			
			return $this->redirect($this->generateUrl('Project_user_connected'));
		}else{
			return $this->render('PolytechProjetTransversalBundle:Default:register.html.twig', array(
				'register_form' => $form->createView(),
			));
		}
    }
	
	public function connectedAction(){
		return $this->render('PolytechProjetTransversalBundle:Default:connected.html.twig');
	}
}
