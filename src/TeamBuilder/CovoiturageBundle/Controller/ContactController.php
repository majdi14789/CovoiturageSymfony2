<?php

namespace TeamBuilder\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
		 $em = $this->getDoctrine()->getEntityManager();
		$contacts = $em->getRepository('TeamBuilderCovoiturageBundle:Contact')->findAll();
		return $this->render('TeamBuilderCovoiturageBundle:Contact:contact.html.twig', array('contacts' => $contacts));
    }
	
	public function sendEmail($email, $msg)
    {
      
       
         $message = \Swift_Message::newInstance()
        ->setSubject($msg)
        ->setFrom($email)
        ->setTo($email)
        ->setBody("")
        ;
		$this->get('mailer')->send($message);
        
        
    }
  
}
