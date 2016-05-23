<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdherentController
 *
 * @author Salma
 */
namespace TeamBuilder\CovoiturageBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeamBuilder\CovoiturageBundle\Form\AdherentForm;
use TeamBuilder\CovoiturageBundle\Entity\Adherent;

class AdherentController extends Controller
{
   
   //put your code here
	public function ajouterAction()
	{
		$em = $this->getDoctrine()->getManager();
		$adherent = new Adherent();
		$form = $this->createForm(new AdherentForm(), $adherent);
		$request = $this->container->get('request');
		if($request->getMethod() == 'POST') 
		{
			$form->bind($request);			
			if ($form->isValid())
			{
				$em->persist($reclamation);
				$em->flush();
				return  $this->render('TeamBuilderCovoiturageBundle:Adherent:ajouter.html.twig');
			}			
		}
		return $this->render('TeamBuilderCovoiturageBundle:Adherent:ajouter.html.twig', array('form'=> $form->createView()));
		}

	public function StatistiquesAdherentsAction()
	{
		$Femme="femme";
		$Homme="homme";

		$em=$this->getDoctrine()->getEntityManager();
		$adherents=$em->getRepository('CovoiturageUserBundle:User')->findAll();
		// Statistique Femmes
		$repository = $em->getRepository('CovoiturageUserBundle:User');
		$queryFp = $repository->createQueryBuilder('A')
		->Select("count(A.sexe) as sex")
		->where('A.sexe = :sf')
		->setParameter('sf', $Femme)
		->getQuery();
		$sadh = $queryFp->getOneOrNullResult();
		//var_dump($sadh);exit(0);
		// Statistique Hommes
		$repository = $em->getRepository('CovoiturageUserBundle:User');
		$queryH = $repository->createQueryBuilder('A')
		->Select("count(A.sexe) as sex")
		->where('A.sexe = :sh')
		->setParameter('sh',$Homme)
		->getQuery();
		$shadh = $queryH->getOneOrNullResult();
		//var_dump($shadh);exit(0);


		return $this->render('TeamBuilderCovoiturageBundle:Adherent:StatistiquesAdherents.html.twig' , array(
		'adherents' => $adherents,"sadh"=>$sadh,"shadh"=>$shadh
		));
	}





	public function StatistiquesAdherentsAgeAction()
	{

		$em=$this->getDoctrine()->getEntityManager();
		$adherents = $em->getRepository('CovoiturageUserBundle:User')->findAll();
		
		$date = new \Datetime();

		$date18 = $date; $date18->modify('-18 years'); $date18 = $date18->format('Y-m-d');
		$date25 = $date; $date25->modify('-7 years'); $date25 = $date25->format('Y-m-d');
		$date26 = $date; $date26->modify('-1 years'); $date26 = $date26->format('Y-m-d');
		$date30 = $date; $date30->modify('-4 years'); $date30 = $date30->format('Y-m-d');
		$date31 = $date; $date31->modify('-1 years'); $date31 = $date31->format('Y-m-d');
		$date40 = $date; $date40->modify('-9 years'); $date40 = $date40->format('Y-m-d');
		$date41 = $date; $date41->modify('-1 years'); $date41 = $date41->format('Y-m-d');
		$date50 = $date; $date50->modify('-9 years'); $date50 = $date50->format('Y-m-d');
		
		
		// Statistique age entre {18,19,20,21,22,23,24,25}
		$qb = $em->createQueryBuilder();
		$qb->Select("count(A.id) as age")
			->from('CovoiturageUserBundle:User', 'A')
			->where('A.naissance between :date25 and :date18')
			->setParameter('date18', $date18)
			->setParameter('date25', $date25)
			;
		$queryadh = $qb->getQuery();
		$ageAdh = $queryadh->getOneOrNullResult();
		
		// Statistique age entre {25,26,27,28,29,30}
		$qb = $em->createQueryBuilder();
		$qb->Select("count(A.id) as age")
			->from('CovoiturageUserBundle:User', 'A')
			->where('A.naissance between :date30 and :date26')
			->setParameter('date26', $date26)
			->setParameter('date30', $date30)
			;
		
		$queryadh = $qb->getQuery();
		$ageAdh1 = $queryadh->getOneOrNullResult();
		//var_dump($ageAdh1);exit(0);


		// Statistique age entre {31,32,33,34,35,36,37,38,39,40}
		$qb = $em->createQueryBuilder();
		$qb->Select("count(A.id) as age")
			->from('CovoiturageUserBundle:User', 'A')
			->where('A.naissance between :date40 and :date31')
			->setParameter('date31', $date31)
			->setParameter('date40', $date40)
			;
		$queryadh = $qb->getQuery();
		$ageAdh2 = $queryadh->getOneOrNullResult();

		// Statistique age entre {40,41,42,43,44,45,46,47,48,49,50}
		$qb = $em->createQueryBuilder();
		$qb->Select("count(A.id) as age")
			->from('CovoiturageUserBundle:User', 'A')
			->where('A.naissance between :date50 and :date41')
			->setParameter('date41', $date41)
			->setParameter('date50', $date50)
			;
		$queryadh = $qb->getQuery();
		$ageAdh3 = $queryadh->getOneOrNullResult();

		$total = $ageAdh['age'] + $ageAdh1['age'] + $ageAdh2['age'] + $ageAdh3['age'];
		
		
		$a1 = number_format($ageAdh['age'] * 100 / $total, 2);
		$a2 = number_format($ageAdh1['age'] * 100 / $total, 2);
		$a3 = number_format($ageAdh2['age'] * 100 / $total, 2);
		$a4 = number_format($ageAdh3['age'] * 100 / $total, 2);


		return $this->render('TeamBuilderCovoiturageBundle:Adherent:StatAge.html.twig' , array(  
			'adherents' => $adherents,
			"a1"=>$a1,
			"a2"=>$a2,
			"a3"=>$a3,
			"a4"=>$a4
		));
	}

}