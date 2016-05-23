<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EvaluationController
 *
 * @author Salma
 */
namespace TeamBuilder\CovoiturageBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeamBuilder\CovoiturageBundle\Form\EvaluationForm;
use TeamBuilder\CovoiturageBundle\Entity\Evaluation;
class EvaluationController extends Controller
{

    
	public function ajouterAction($id)
	{

		$user = $this->container->get('security.context')->getToken()->getUser();
		$em = $this->getDoctrine()->getEntityManager();
		$evaluation = new Evaluation();
		$form_evaluation = $this->createForm(new EvaluationForm(),$evaluation);
		$request = $this->container->get('request');

		//var_dump($adhc);exit(0);
		if($request->getMethod() == 'POST') 
		{
			$form_evaluation->bind($request);
			//Reclamateur 
			$eval = $em->getRepository('CovoiturageUserBundle:User')->findOneById($id);
			$evaluation->setNote($request->get('note'));
			$evaluation->setIdEvaluateur($user);
			$evaluation->setIdAdherentevalue($eval);
			
			$em->persist($evaluation);
			$em->flush();
			
			$from = $user->getEmail();
			$to = $eval->getEmail();
			$sujet = "Evaluation";
			$msg = "Bonjour,<br><br>Vous avez été évaluer par ".$user->getNom()." ".$user->getPrenom()."<br><br><br>Cordialement.";
			
			$this->sendEmail($from, $to, $sujet, $msg);
			$this->get('session')->getFlashBag()->set('success', "Votre évaluation de l'adherent ".$eval->getNom()." ".$eval->getPrenom()." a été enregistré avex success");
			
			// $note=$form_evaluation->get('note')->getData();
			// $commentaire=$form_evaluation->get('commentaire')->getData();
			// $evaluation->setNote($note);
			// $evaluation->setCommentaire($commentaire);
			//  var_dump($evaluation);exit(0);


		}

		return $this->render('TeamBuilderCovoiturageBundle:Evaluation:ajouterEvaluation.html.twig', array(
			'form_evaluation'=> $form_evaluation->createView(), 'id' => $id)
		);
	}
	
	public function sendEmail($from, $to, $sujet, $msg)
    {       
         $message = \Swift_Message::newInstance()
        ->setSubject($msg)
        ->setFrom($from)
        ->setTo($to)
        ->setBody($msg, 'text/html')
        ;
		$this->get('mailer')->send($message);
        
    }

	public function listeAction()
	{
		$adherents = array();
		//Recuperation des moyennes
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository('TeamBuilderCovoiturageBundle:Evaluation');
		$queryFp = $repository->createQueryBuilder('EV')
		->setMaxResults(3)        
		->Select("AVG(EV.note) as moy, CONCAT(CONCAT(adh.nom, ' '), adh.prenom) as name")
		->leftJoin("EV.idAdherentevalue", "adh")
		->groupBy("EV.idAdherentevalue")
		->getQuery();
		$evaluations = $queryFp->getResult();
		

		return  $this->render('TeamBuilderCovoiturageBundle:Evaluation:allEvaluation.html.twig', array(
			"evaluations"=>$evaluations
		));
	}
    
	public function listStatAction()
	{
		
		return  $this->render('TeamBuilderCovoiturageBundle:Evaluation:list_stat.html.twig', array(
		));
	}
    
}