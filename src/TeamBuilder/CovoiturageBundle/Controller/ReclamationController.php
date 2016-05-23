<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TeamBuilder\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

use TeamBuilder\CovoiturageBundle\Form\ReclamationForm;
use TeamBuilder\CovoiturageBundle\Entity\Reclamation;
use TeamBuilder\CovoiturageBundle\Entity\Adherent;
use TeamBuilder\CovoiturageBundle\Entity\Trajet;
use TeamBuilder\CovoiturageBundle\Entity\Reclamationreservation ;
use TeamBuilder\CovoiturageBundle\Entity\Reclamationadherent ;
class ReclamationController extends Controller {

    public function indexAction($name) {
        return $this->render('TeamBuilderCovoiturageBundle:Default:nom.html.twig', array(
                    'name' => $name
        ));
    }

    public function listeAction() {
        $ab = 0;
        $fp = 0;
        $inp = 0;
        $em = $this->getDoctrine()->getEntityManager();
        $adherentconcernes = array();
        $reclamateurs = array();
        $reclamations = $em->getRepository('TeamBuilderCovoiturageBundle:Reclamation')->findAll();
        // var_dump($reclamations);exit(0);
        return $this->render('TeamBuilderCovoiturageBundle:Reclamation:ListeReclamation.html.twig', array(
                    'reclamations' => $reclamations, "ab" => $ab, "fp" => $fp, "inp" => $inp
        ));
    }


    public function ajouterAction($id,$idR, $idTrajet) {

        $em1 = $this->getDoctrine()->getEntityManager();
        $reclamation = new Reclamation();
        $form_reclamation = $this->createForm(new ReclamationForm(), $reclamation);
        
        return $this->render('TeamBuilderCovoiturageBundle:Reclamation:Ajouter.html.twig', array(
			'form_reclamation' => $form_reclamation->createView(),
            'idAdhCon' => $id,
            'idTrajet' =>$idTrajet,
			));
    }

    public function statAction($id) 
	{

		$em = $this->getDoctrine()->getManager();

		$reclamation = new Reclamation();
		$em = $this->getDoctrine()->getEntityManager();
		$adherentconcernes = array();
		$reclamateurs = array();
		$reclamations = $em->getRepository('TeamBuilderCovoiturageBundle:Reclamation')->findAll();
		//var_dump($reclamations);exit(0);
		
		$inponctualite = "inponctualité";
		$ida = 2;

		//Motif inponctualité
		$repository = $em->getRepository('TeamBuilderCovoiturageBundle:Reclamationadherent');
		$queryFp = $repository->createQueryBuilder('RA')
		->Select("count(RA.cause) as rec")
		->where('RA.idAdherentconcerne = :idAdh')
		->setParameter('idAdh', $id)
		->ANDwhere('RA.cause = :cause')
		->setParameter('cause', $inponctualite)
		->getQuery();
		$inp = $queryFp->getResult();
		//var_dump($inp);exit(0);
		//Motif Faux Profil
		$fauxP = "faux profil";
		$ida = 2;

		$repository = $em->getRepository('TeamBuilderCovoiturageBundle:Reclamationadherent');
		$queryFp = $repository->createQueryBuilder('RA')
		->Select("count(RA.cause) as rec")
		->where('RA.idAdherentconcerne = :idAdh')
		->setParameter('idAdh', $id)
		->ANDwhere('RA.cause = :cause')
		->setParameter('cause', $fauxP)
		->getQuery();
		$fp = $queryFp->getResult();
		//var_dump($fp[0].rec);exit(0);
		//Absence
		$ab = "Absence non prevenue";
		$ida = 2;
		$offset = 0;
		$repository = $em->getRepository('TeamBuilderCovoiturageBundle:Reclamationadherent');
		$queryFp = $repository->createQueryBuilder('RA')
		->Select("count(RA.cause) as rec")
		->where('RA.idAdherentconcerne = :idAdh')
		->setParameter('idAdh', $id)
		->ANDwhere('RA.cause = :cause')
		->setParameter('cause', $ab)
		->getQuery();
		$ab = $queryFp->getResult();

		//var_dump($ab[0]);exit(0);
		// adherent 

		$repository = $em->getRepository('CovoiturageUserBundle:User');
		$queryFp = $repository->createQueryBuilder('A')
		->where('A.id = :idAdh')
		->setParameter('idAdh', $id)
		->getQuery();
		$adhC = $queryFp->getOneOrNullResult();
		//var_dump($adhC[0]);exit(0);
		$reclamation = new Reclamation();
		$reclamation->setIdAdherentconcerne($adhC);
		
		return $this->render('TeamBuilderCovoiturageBundle:Reclamation:ListeReclamation.html.twig', array(
			'reclamations' => $reclamations, "ab" => $ab, "fp" => $fp,"inp" => $inp,"adhC"=>$adhC
		));
    }

     public function reclamerTrajetAction($id) 
	 {

        $user = $this->container->get('security.context')->getToken()->getUser();
		
		$em1 = $this->getDoctrine()->getEntityManager();
        $reclamationereservation = new Reclamationreservation();
        $request = $this->container->get('request');
       // $adherentConcernes=array();
        //Reclamation Reservation
        $idTrajet = $id;
        $repository = $em1->getRepository('TeamBuilderCovoiturageBundle:Reclamationreservation');
        $queryR = $repository->createQueryBuilder('R')
                ->where('R.idTrajet = :id')
                ->setParameter('id', $idTrajet)
                ->getQuery();
        $reclamationRs = $queryR->getResult();
        // print_r($reclamationRs);exit(0);
        //Adherent concerné
        // adherent 
        $adhC =new Adherent();
		$adherentC = array();
        for($i=0;$i<count($reclamationRs); $i++)
        {
        $idAdh = $reclamationRs[$i]->getIdAdherentconcerne();
        $repository = $em1->getRepository('CovoiturageUserBundle:User');
        $queryA = $repository->createQueryBuilder('A')
                ->where('A.id = :idAdh')
                ->setParameter('idAdh',$idAdh)
                ->getQuery();
        $adhC= $queryA->getOneOrNullResult();
        $adherentC[$i] = $adhC;
       }
    //  var_dump($adherentC);exit(0);
      
      ////ajout 
      
        $em1 = $this->getDoctrine()->getEntityManager();
        $reclamation = new Reclamation();
        $form_reclamation = $this->createForm(new ReclamationForm(), $reclamation);
        $request = $this->container->get('request');

        $em1 = $this->getDoctrine()->getEntityManager();
       
        if ($request->getMethod() == 'POST') 
		{
            //adherent Concerné 
			$idc = $request->get('idR');
			$repository = $em1->getRepository('CovoiturageUserBundle:User');
			$queryR = $repository->createQueryBuilder('A')
					->where('A.id = :idAdh')
					->setParameter('idAdh', $idc)
					->getQuery();
			$adhc = $queryR->getOneOrNullResult();
			
			$form_reclamation->bind($request);
            $cause = $form_reclamation->get('cause')->getData();
            $description = $form_reclamation->get('description')->getData();
            $reclamation->setCause($cause);
            $reclamation->setDescription($description);
            $reclamation->setIdAdherentconcerne($adhc);
            $reclamation->setIdReclamateur($user);
            $reclamation->setIdAdminisrateur(null);
            $reclamation->setReport("false");


            $em1->persist($reclamation);
            
            //Reclamation Reservation
            $reclamationAdherent=new Reclamationadherent();
            $reclamationAdherent->setIdAdherentconcerne($adhc);
            $reclamationAdherent->setCause($cause);
            $reclamationAdherent->setDescription($description);
            $em1->persist($reclamationAdherent);
            
            $em1->flush();
			
			$trj = $em1->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findOneBy(array('idTrajet' => $idTrajet));
			$rr = $em1->getRepository('TeamBuilderCovoiturageBundle:Reclamationreservation')->findOneBy(array(
				'idAdherentconcerne' => $adhc->getId(), 
				'idReclamateur' => $user->getId(),
				'idTrajet' => $idTrajet
				));
				
			
			if(is_object($rr))
			{
				$rr->setNbrreclamation(1);
				$em1->persist($rr);
				$em1->flush();
			}else{
				$date = new \Datetime();
				$rr = new Reclamationreservation();
				$rr->setNbrreclamation(1);
				$rr->setIdAdherentconcerne($adhc);
				$rr->setIdReclamateur($user);
				$rr->setJours($date->format('y-m-d'));
				$rr->setIdTrajet($trj);
				$em1->persist($rr);
				$em1->flush();
			
			}
            
            //////Update 
			
            
        }
   
        return $this->render('TeamBuilderCovoiturageBundle:Reclamation:ListeAdherent.html.twig',array(
					"idTrajet"=>$idTrajet,
					"adherentConcernes"=>$adherentC,
					"reclamationRs"=>$reclamationRs,
					'form_reclamation' => $form_reclamation->createView()
					));
    }

    
    
       public function bloquerAction($id) 
	   {
        
	    $em = $this->getDoctrine()->getEntityManager();
            $adh = $em->getRepository('CovoiturageUserBundle:User')->findOneById($id);
			
			$adh->setLocked(true);
			$em->persist($adh);
			$em->flush();
                        
                        
           $mailer = $this->container->get('mailer');
   $email='team.builder.3a18@gmail.com';
                         
                         
                         
                         
            $message1='Vous avez ete bloque';
            
             $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('team.builder.3a18@gmail.com')
                ->setPassword('123456789S');

             
             
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test Prevention')
                ->setSubject('Contact From :' . $email)
                ->setFrom('team.builder.3a18@gmail.com')
                ->setTo($adh->getEmail())
                ->setBody($message1);

       $this->get('mailer')->send($message);
            
			
			$response = new Response(json_encode(array('message' => "L'utilisateur a ete bloqué !")));
			return $response;
        
    }
    
}
