<?php

namespace TeamBuilder\CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// entities
use TeamBuilder\CovoiturageBundle\Entity\Contact;
use TeamBuilder\CovoiturageBundle\Entity\Trajet;
use TeamBuilder\CovoiturageBundle\Entity\Adherent;

// form
use TeamBuilder\CovoiturageBundle\Form\ContactType;
use TeamBuilder\CovoiturageBundle\Form\TrajetType;


class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('TeamBuilderCovoiturageBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction() {


        return $this->render('TeamBuilderCovoiturageBundle:Default:home.html.twig');
    }

    public function contactAction() {

        $em = $this->getDoctrine()->getEntityManager();
        $contact = new Contact();
        $form_contact = $this->createForm(new ContactType(), $contact);
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {

            $form_contact->bind($request);
            // 5outh tous les datas mel formulaire qu'on a cree
            $contact = $form_contact->getData();


            // supposing bech na3mel el ville depart ville arrivee

            if ($form_contact->isValid()) {
                
            }
            $em->persist($contact);
            $em->flush();
            // la redirection vers une autre page
            //  return $this->redirect($this->generateUrl("team_builder_covoiturage_map"));
        }


        return $this->render('TeamBuilderCovoiturageBundle:Default:contact.html.twig', array('form_contact' => $form_contact->createView()));
    }

    
    
    
    
    public function affichertrajetAction() {

        
        
        $em = $this->getDoctrine()->getEntityManager();
        $dateDuJour=  date('Y-m-d');
        
    //     $id = 22;
        $user = $this->container->get('security.context')->getToken()->getUser();

        $repository = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet');
        $queryFp = $repository->createQueryBuilder('T')
                ->where('T.idConducteur = :idAdh')
                ->andWhere(' T.jours >= :DateDuJour')
                ->setParameter('DateDuJour', $dateDuJour)
                ->setParameter('idAdh', $user->getId())
                ->getQuery();
        $trajets = $queryFp->getResult();
        
        
        
        
        
        //$trajets = $em->getRepository("TeamBuilderCovoiturageBundle:trajet")->findAll();
        //$voitures=  $em->getRepository("TeamBuilderCovoiturageBundle:voiture")->findAll();



        return $this->render('TeamBuilderCovoiturageBundle:Default:trajetcourants.html.twig', array('trajets' => $trajets)
        );
    }

   
    
    ////*************************TO SALMAAA TORJMEN EL MASTA BECH Ta3mel el Reclamation Evaluation************************************************
    
     public function archivetrajetAction() {

        
        
        $em = $this->getDoctrine()->getEntityManager();
        $dateDuJour=  date('Y-m-d');
  

        
  //       $id = 10;
  //       $user = $this->container->get('security.context')->getToken()->getUser();

		$user = $this->container->get('security.context')->getToken()->getUser();

        $repository = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet');
        $queryFp = $repository->createQueryBuilder('T')
                ->where('T.idConducteur = :idAdh')
                ->andWhere(' T.jours < :DateDuJour')
                ->setParameter('DateDuJour', $dateDuJour)
                ->setParameter('idAdh', $user->getId())
                ->getQuery();
        $trajets = $queryFp->getResult();
        
        

        return $this->render('TeamBuilderCovoiturageBundle:Default:archive.html.twig', array('trajets' => $trajets)
        );
    }

    
    ////*************************************************************************************
    ////*************************************************************************************
    
    
    
    
    public function ajoutertrajetAction() {

        $user = $this->container->get('security.context')->getToken()->getUser();
        $em1 = $this->getDoctrine()->getEntityManager();
      
        $trajet = new Trajet();
        $infoTrajet = new Trajet();


        $form_ajouter = $this->createForm(new TrajetType(), $trajet);



        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form_ajouter->bind($request);

// 5outh tous les datas mel formulaire qu'on a cree
            //$trajet = $form_ajouter->getData();




            $ville1 = $form_ajouter->get('villeDepart')->getData();
            $ville2 = $form_ajouter->get('villeArrivee')->getData();
            $nbrPlaces = $form_ajouter->get('places')->getData();
            $frequence = $form_ajouter->get('frequence')->getData();
            $type = $form_ajouter->get('typeTrajet')->getData();
            $prix = $form_ajouter->get('prix')->getData();
            $heure = $form_ajouter->get('heure')->getData();
            $jours = $form_ajouter->get('jours')->getData();
			
            $kilometrage = $form_ajouter->get('kilometrage')->getData();
            $bagage = $form_ajouter->get('bagages')->getData();
            $commentaire = $form_ajouter->get('commentaire')->getData();




            $trajet->setVilleDepart($ville1);
            $trajet->setVilleArrivee($ville2);
            $trajet->setIdConducteur($user);
            $trajet->setJours($jours);
            $trajet->setHeure($heure);
            $trajet->setPrix($prix);
            $trajet->setPlaces($nbrPlaces);
            $trajet->setFrequence($frequence);
            $trajet->setTypeTrajet($type);
            $trajet->setKilometrage($kilometrage);
            $trajet->setBagages($bagage);
            $trajet->setCommentaire($commentaire);
			
			


            foreach ($infoTrajet as $trajet) {
                $infoTrajet = $trajet;
            }


// supposing bech na3mel el ville depart ville arrivee
            if ($form_ajouter->isValid()) {
            }


			$em1->persist($trajet);
			$em1->flush();
			
			

            // la redirection vers une autre page
            // return $this->redirect($this->generateUrl("team_builder_covoiturage_myroute"));

         return $this->render('TeamBuilderCovoiturageBundle:Default:affichertrajet.html.twig', array('ville1' => $ville1, 'ville2' => $ville2, 
                'places'=>$nbrPlaces,'frequence'=>$frequence,'typeTrajet'=>$type,'prix'=>$prix,'heure'=>$heure,'jours'=>$jours,
                    'kilometrage'=>$kilometrage,'bagages'=>$bagage,'commentaire'=>$commentaire));
        }




        return $this->render('TeamBuilderCovoiturageBundle:Default:ajoutertrajet.html.twig', array('form_ajouter' => $form_ajouter->createView()));
    }

    ////*************************************************************************************
    ////*************************************************************************************
    
    
    
    public function mytrajetAction() {


        return $this->render('TeamBuilderCovoiturageBundle:Default:affichertrajet.html.twig');
    }

    
    
    public function modifierTrajetAction() {
    
        
        
        
    }
    
    
    ////*************************************************************************************
    ////*************************************************************************************
    
    public function annulerTrajetAction() {
    
        
        $idTrajet=$this->getRequest()->get('idTrajet');

        
                           

        $em1 = $this->getDoctrine()->getManager();
           
        $query1 = $em1->createQuery('
                            DELETE FROM TeamBuilderCovoiturageBundle:Trajet t
                            WHERE t.idTrajet = :idTrajetsup'
                            )->setParameter('idTrajetsup', $idTrajet);
                            
                            $query1->getResult();
        if($query1){
            return $this->redirect($this->generateUrl("team_builder_covoiturage_mesroutes")); 
        }
        
              
        
        
       // return $this->render('TeamBuilderCovoiturageBundle:Default:test.html.twig', array('idTrajet' => $idTrajet));
  
        
    }
    
   
     ////*************************************************************************************
    ////*************************************************************************************
   
    
    
     public function envoyermailAction() {
    
         $name='Test Prevention';
         $email='team.builder.3a18@gmail.com';
         $message='Mezzelet me b3athet chey';
         $mailer = $this->container->get('mailer');


        $em = $this->getDoctrine()->getEntityManager();
   

        
      $option=0;

 $repository = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet');
    $queryFp = $repository->createQueryBuilder('T')
             ->where('T.jours = :DateDuJour')
            ->andWhere('T.villeArrivee = :destination')
            ->setParameter('DateDuJour', '')
              ->setParameter('destination', '')

              ->getQuery();
      $trajets = $queryFp->getResult();

     $dateDuJour='';
     $destination='';
      
      
$request = $this->getRequest();
if ($request->isMethod('POST')) {

$option=$this->getRequest()->get('option');

//if($option==='Chercher'){
    
$dateDuJour=$this->getRequest()->get('date1');
$destination=$this->getRequest()->get('villeDepart');  

//
//    
//        $repository = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet');
//        $queryFp = $repository->createQueryBuilder('T')
//                ->where('T.jours = :DateDuJour')
//                ->andWhere('T.villeArrivee = :destination')
//                ->setParameter('DateDuJour', $dateDuJour)
//                ->setParameter('destination', $destination)
//
//                ->getQuery();
//        $trajets = $queryFp->getResult();
//       
//
//
// 
// 
//
// 
//return $this->render('TeamBuilderCovoiturageBundle:Default:prevention.html.twig', array('trajets'=>$trajets));        
// 
//
// }
//     


 $repository = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet');
    $queryFp = $repository->createQueryBuilder('T')
             ->where('T.jours = :DateDuJour')
            ->andWhere('T.villeArrivee = :destination')
            ->setParameter('DateDuJour', $dateDuJour)
              ->setParameter('destination', $destination)

              ->getQuery();
      $trajets = $queryFp->getResult();
       





   if($option==='Prevention climatique') {
             $option=1;
         } else if($option==='Prevention Emb') {
             $option=2;
         } else if($option==='Prevention sec') {
             $option=3;
         }
         



    
    
        $i=0;
        $adherents=[];
        foreach($trajets as $trajet){
       
        $repository1 = $em->getRepository('CovoiturageUserBundle:User');
        $queryFp1 = $repository1->createQueryBuilder('A')
                ->where('A.id = :idConducteur')
                ->setParameter('idConducteur',$trajet->getIdConducteur())
                ->getQuery();
        $adherents[$i] = $queryFp1->getResult();       
$i=$i+1;
   
//var_dump($adherents);


        }

  
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('team.builder.3a18@gmail.com')
                ->setPassword('123456789S');

        
         
         
         if($option==1) {
             $message1='hani b3athet prevention climatique ';
        
             
             
             $adherent = new Adherent();
        
        $j=0;
        foreach($adherents as $adherent) {

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test Prevention')
                ->setSubject('Prevention From :' . $email)
                ->setFrom('team.builder.3a18@gmail.com')
                ->setTo($adherents[$j][0]->getEmail())
                ->setBody($message1);

       $this->get('mailer')->send($message);
        
               //$message->getBody('');

           //   var_dump($adherents[$j][0]->getEmail());

       
       $j=$j+1;

       

       
        }
             
             
             
             
         } else if($option==2) {
             $message1='hani b3athet prevention em';
        
             
             
             
             $adherent = new Adherent();
        
        $j=0;
        foreach($adherents as $adherent) {

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test Prevention')
                ->setSubject('Prevention From :' . $email)
                ->setFrom('team.builder.3a18@gmail.com')
                ->setTo($adherents[$j][0]->getEmail())
                ->setBody($message1);

       $this->get('mailer')->send($message);
        

       $j=$j+1;
       
        }
             
             
         } else if($option==3){
         
             $message1='hani b3athet sec';
             
         
             
             $adherent = new Adherent();
        
        $j=0;
        foreach($adherents as $adherent) {

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test Prevention')
                ->setSubject('Prevention From :' . $email)
                ->setFrom('team.builder.3a18@gmail.com')
                ->setTo($adherents[$j][0]->getEmail())
                ->setBody($message1);

       $this->get('mailer')->send($message);
        

       $j=$j+1;
       
        }
             
     
         }
         
         
         
         
          return $this->render(
                            'TeamBuilderCovoiturageBundle:Default:prevention.html.twig', array('trajets'=>$trajets,'date'=>$dateDuJour,'destination'=>$destination));
        }

        
        

        
       
        
        
        return $this->render(
                            'TeamBuilderCovoiturageBundle:Default:prevention.html.twig', array('trajets'=>$trajets ,'date'=>$dateDuJour,'destination'=>$destination));
        }
    }
    
    
    
    


