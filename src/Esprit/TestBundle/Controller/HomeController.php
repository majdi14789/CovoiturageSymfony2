<?php

namespace Esprit\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller {
    //static $id=2;
    public function indexAction($name) {
        return $this->render('TestBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction() {
        return $this->render('TestBundle:Home:Accueil.html.twig', array());
    }

    public function AfficheAllTrajetAction() {
        $em = $this->getDoctrine()->getManager();
        $trajets = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findAll();
        return $this->render('TestBundle:Home:AfficheTrajet.html.twig', array(
                    'trajets' => $trajets
        ));
    }

    public function AfficheTrajetByDepartAction() {
        //$em = $this->getDoctrine()->getManager();
        //$trajets = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findAll();
        $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');

        $query = $repository->createQueryBuilder('t')
                ->where('t.villeDepart = :ville')
                ->setParameter('ville', 'Ariana')
                ->orderBy('t.villeDepart', 'ASC')
                ->getQuery();
        $trajets = $query->getResult();
        return $this->render('TestBundle:Home:AfficheTrajet.html.twig', array('trajets' => $trajets
        ));
    }

    public function afficheTrajetAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $vd = $this->getRequest()->get('villeDepartText');
        $va = $this->getRequest()->get('villearriveeText');
        $date = $this->getRequest()->get('datepicker');
        $dateDuJour = date("Y-m-d");
        $trajets = NULL;
        if (($vd == "") && ($va == "") && ($date == "")) {
            $em = $this->getDoctrine()->getManager();
            //$trajets = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findAll();
            $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');
            $query = $repository->createQueryBuilder('t')
                    ->where('t.idConducteur <> :idCond')
                    ->setParameter('idCond', $user->getId())
                    ->andWhere(' t.jours > :DateDuJour')
                    ->setParameter('DateDuJour', $dateDuJour)
                    
                    ->getQuery();
            $trajets = $query->getResult();
            return $this->render('TestBundle:Home:AfficheTrajet.html.twig', array(
                'trajets' => $trajets,
                 'dateDuJour'=>$dateDuJour   ));
        } else
        if ((!$vd == "") && (!$va == "") && ($date == "")) {
            $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');
            $query = $repository->createQueryBuilder('t')
                    ->where('t.villeDepart =:ville')
                    ->setParameter('ville', $vd)
                    ->andWhere(' t.villeArrivee =:villea')
                    ->setParameter('villea', $va)
                     ->andWhere(' t.idConducteur <> :cond')
                     ->setParameter('cond', $user->getId())
                     ->andWhere(' t.jours > :DateDuJour')
                    ->setParameter('DateDuJour', $dateDuJour)
                    ->getQuery();
            $trajets = $query->getResult();
            return $this->render('TestBundle:Home:AfficheTrajet.html.twig', array('trajets' => $trajets));
        } else
        if ((!$vd == "") && ($va == "") && ($date == "")) {
            $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');
            $query = $repository->createQueryBuilder('t')
                    ->where('t.villeDepart = :ville')
                    ->setParameter('ville', $vd)
                    ->andWhere(' t.idConducteur <> :cond')
                     ->setParameter('cond', $user->getId())
                     ->andWhere(' t.jours > :DateDuJour')
                    ->setParameter('DateDuJour', $dateDuJour)
                    ->getQuery();
            $trajets = $query->getResult();
            return $this->render('TestBundle:Home:AfficheTrajet.html.twig', array('trajets' => $trajets
            ));
        } else
        if ((!$vd == "") && (!$va == "") && (!$date == "")) {

            $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');
            $query = $repository->createQueryBuilder('t')
                    ->where('t.villeDepart =:ville')
                    ->setParameter('ville', $vd)
                    ->andWhere(' t.villeArrivee =:villea')
                    ->setParameter('villea', $va)
                    ->andWhere(' t.jours =:jour')
                    ->setParameter('jour', $date)
                    ->andWhere(' t.idConducteur <> :cond')
                     ->setParameter('cond', $user->getId())
                     ->andWhere(' t.jours > :DateDuJour')
                    ->setParameter('DateDuJour', $dateDuJour)
                    //->orderBy('t.villeDepart', 'ASC')
                    ->getQuery();
            $trajets = $query->getResult();
            return $this->render('TestBundle:Home:AfficheTrajet.html.twig', array('trajets' => $trajets));
        }

        //return $this->render('TestBundle:Home:essai.html.twig', array("vd" => $vd ,"va" =>$va , "date"=>$date));
        //return $this->render('TestBundle:Home:essai.html.twig',array('villeDepartText'=>$villeDepartText));
    }

    public function reserverAction() {
         $em = $this->getDoctrine()->getManager();
        $idConducteur = $this->getRequest()->get('idConducteur');
        $idTrajet = $this->getRequest()->get('idTrajet');
        $conducteur = $em->getRepository('CovoiturageUserBundle:User')->findOneById($idConducteur);
        /// $conducteur = $em->getRepository('CovoiturageUserBundle:User')->find(array('id'=>$idConducteur));
        $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');

        $query = $repository->createQueryBuilder('t')
                ->where('t.idTrajet = :id')
                ->setParameter('id', $idTrajet)
                ->getQuery();
        $trajet = $query->getResult();
       // var_dump($trajet);
        /*$query2 = $repository1->createQueryBuilder('c')
                ->where('c.id = :idConduct')
                ->setParameter('idConduct', $idConducteur)
                ->getQuery();
        $conducteur = $query2->getResult();*/
        $Tra=new \TeamBuilder\CovoiturageBundle\Entity\Trajet();
        foreach ($trajet as $Tra){
        $villeDepart=$Tra->getVilleDepart();
           $villeArivee = $Tra->getVilleArrivee();    
        
           
        }
       
        return $this->render('TestBundle:Home:DetailTrajet.html.twig',
               array("idConducteur" => $idConducteur,
                    "idTrajet" => $idTrajet,
                    "conducteur" => $conducteur, 
                    "trajet" => $trajet,
                    "villeDepart"=>$villeDepart,
                    "villeArrivee"=>$villeArivee,
                "nom"=>$conducteur->getNom(),
                "prenom"=>$conducteur->getPrenom(),
                    "telephone"=>$conducteur->getTelephone(),
                   "email"=>$conducteur->getEmail()
                ));
    }

    public function ajoutReservationAction() {
        
		$user = $this->container->get('security.context')->getToken()->getUser();
		$trajet =  new \TeamBuilder\CovoiturageBundle\Entity\Trajet();
        
                $reclamationReservation=new \TeamBuilder\CovoiturageBundle\Entity\Reclamationreservation();
                         $mailer = $this->container->get('mailer');
         $email='team.builder.3a18@gmail.com';

                
        $idConducteur = $this->getRequest()->get('idConducteur');
        $idTrajet = $this->getRequest()->get('idTrajet');
        
        $repository = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Trajet');
        $query = $repository->createQueryBuilder('t')
                ->where('t.idTrajet = :idTrajet')
                ->setParameter('idTrajet', $idTrajet)
                ->getQuery();
        $trajets = $query->getResult();
        //******************************************
        $em5 = $this->getDoctrine()->getManager();
           
            $repository5 = $this->getDoctrine()->getRepository('TeamBuilderCovoiturageBundle:Reservation');
            $query5 = $repository5->createQueryBuilder('r')
                    ->where('r.idPassager = :idpass')
                    ->setParameter('idpass', $user->getId())
                    ->andWhere(' r.idTrajet = :idTra')
                    ->setParameter('idTra', $idTrajet)
                    ->getQuery();
            $reserver = $query5->getResult();
            if($reserver){
                 return $this->render('TestBundle:Home:ErreurDeReservation.html.twig', array());
                //var_dump("vous avez deja reserver mesieur");
                //var_dump($reserver);
            }else
              
                {
        
        
        //var_dump($trajets);exit(0);
        $reservation = new \TeamBuilder\CovoiturageBundle\Entity\Reservation();
        
        if ($trajets) {
            foreach ($trajets as $trajet) {
            $em3 = $this->getDoctrine()->getManager();
                $reservation->setDate($trajet->getJours());
                $reservation->setHeure($trajet->getHeure());
                $reservation->setIdPassager($user);
                $reservation->setIdTrajet($trajet);
                $reservation->setPlaces($trajet->getPlaces() - 1);
                $reservation->setVilleDepart($trajet->getVilleDepart());
                $reservation->setVilleArrivee($trajet->getVilleArrivee());
                
                
                  ////salma
              $user = $this->container->get('security.context')->getToken()->getUser();
              $reclamationReservation->setJours("lundi");
              $reclamationReservation->setIdAdherentconcerne($trajet->getIdConducteur());
              $reclamationReservation->setIdReclamateur($user);
              $reclamationReservation->setNbrreclamation(0);
              $reclamationReservation->setIdTrajet($trajet);
              $em3->persist($reclamationReservation);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
           
			$trajets = $trajets[0];
			$trajets->setPlaces($trajets->getPlaces() - 1);
			$em->persist($trajets);
            $em->flush();

            
            $message1='une nouvelle reservation a ete faite sur un de vos trajets';
            
             $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('team.builder.3a18@gmail.com')
                ->setPassword('123456789S');

             
             
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Test Prevention')
                ->setSubject('Contact From :' . $email)
                ->setFrom('team.builder.3a18@gmail.com')
                ->setTo($trajet->getIdConducteur()->getEmail())
                ->setBody($message1);

       $this->get('mailer')->send($message);
            
            
       
       
            
            
            return $this->render('TestBundle:Home:reservation.html.twig', array("idConducteur" => $idConducteur, "idTrajet" => $idTrajet, "reservation" => $reservation));
        } else {
            return $this->render('TestBundle:Home:reservation.html.twig', array("idConducteur" => $idConducteur, "idTrajet" => $idTrajet));
        }
    }}

	public function afficheReservationCourrantesAction() 
	{
			$user = $this->container->get('security.context')->getToken()->getUser();
			$date = new \datetime();
			$date = $date->format('Y-m-d');
            $em = $this->getDoctrine()->getManager();  
			$repository = $em->getRepository('TeamBuilderCovoiturageBundle:Reservation');
			$query = $repository->createQueryBuilder('r')
                     ->where(' r.idPassager= :passager')
                     ->andWhere(' r.date > :date')
                     ->setParameter('passager', $user->getId())
                     ->setParameter('date', $date)
                    ->getQuery();
            $reservations = $query->getResult();
         
        return $this->render('TestBundle:Home:AfficheReservationCourrantes.html.twig', array(
                    'reservations' => $reservations
        ));
    }   
    public function AfficheDetailsReservationsCourrantesAction() {
		$user = $this->container->get('security.context')->getToken()->getUser();
	$idReservation = $this->getRequest()->get('idReservation');
        $idTrajet = $this->getRequest()->get('idTrajet');
         $idReservation = $this->getRequest()->get('idReservation');
        $idTrajet = $this->getRequest()->get('idTrajet');
        
		$em = $this->getDoctrine()->getManager();
                $reservation = $em->getRepository('TeamBuilderCovoiturageBundle:Reservation')->findOneBy(array('idReservation' => $idReservation));
		$trajets = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findOneBy(array('idTrajet' => $idTrajet));
                $conducteur = $em->getRepository('CovoiturageUserBundle:User')->findOneBy(array('id'=>$trajets->getIdConducteur()));
              
                $villeDepart = $trajets->getVilleDepart();
        $villeArivee = $trajets->getVilleArrivee();    
         $idConducteur = $trajets->getidConducteur();    
        $d=date("d/M/Y");
        return $this->render('TestBundle:Home:AfficheDetailReservationsCourrantes.html.twig', array(
                        'reservation' => $reservation,
                        'trajet' => $trajets,
                        'adherent' => $user,
                        'idReservation' => $idReservation,
                        'date' => $d,
                        'idTrajet'=>$idTrajet,
                        'villeDepart'=>$villeDepart,
                        'villeArrivee'=>$villeArivee,
                        'date'=>$reservation->getDate(),
                        'heure'=>$reservation->getHeure(),
                        'places'=>$reservation->getPlaces(),
                        //'nomConducteur'=>$trajets->getNom(),
            'idConducteur'=>$idConducteur
        ));
    } 

    
    public function deleteReservationAction() 
	{
            $idReservation = $this->getRequest()->get('idReservation');
            $idTrajet = $this->getRequest()->get('idTrajet');
            
            $em = $this->getDoctrine()->getManager();
            $trajet = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findOneBy(array('idTrajet' => $idTrajet));
            $reservation = $em->getRepository('TeamBuilderCovoiturageBundle:Reservation')->findOneBy(array('idReservation' => $idReservation));
                            
            $em->remove($reservation);
			$em->flush();
                            
            $trajet->setPlaces($trajet->getPlaces() + 1);
            $em->persist($trajet);
			$em->flush();
            
			$url = $this->get('router')->generate('afficheReservationCourrantes');
			return new RedirectResponse($url);
          
    }
	
    public function AfficheReservtionAnciennesAction(){
        $user = $this->container->get('security.context')->getToken()->getUser();
			$date = new \datetime();
			$date = $date->format('Y-m-d');
            $em = $this->getDoctrine()->getManager();  
			$repository = $em->getRepository('TeamBuilderCovoiturageBundle:Reservation');
			$query = $repository->createQueryBuilder('r')
                     ->where(' r.idPassager= :passager')
                     ->andWhere(' r.date < :date')
                     ->setParameter('passager', $user->getId())
                     ->setParameter('date', $date)
                    ->getQuery();
            $reservations = $query->getResult();
         
        return $this->render('TestBundle:Home:AfficheReservationAnciennes.html.twig', array(
                    'reservations' => $reservations
        ));
    } 
    
    public function AfficheDetailsReservationsAnciennesAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
	$idReservation = $this->getRequest()->get('idReservation');
        $idTrajet = $this->getRequest()->get('idTrajet');
         $idReservation = $this->getRequest()->get('idReservation');
        $idTrajet = $this->getRequest()->get('idTrajet');
        
		$em = $this->getDoctrine()->getManager();
                $reservation = $em->getRepository('TeamBuilderCovoiturageBundle:Reservation')->findOneBy(array('idReservation' => $idReservation));
		$trajets = $em->getRepository('TeamBuilderCovoiturageBundle:Trajet')->findOneBy(array('idTrajet' => $idTrajet));
                $conducteur = $em->getRepository('CovoiturageUserBundle:User')->findOneBy(array('id'=>$trajets->getIdConducteur()));
              
                $villeDepart = $trajets->getVilleDepart();
        $villeArivee = $trajets->getVilleArrivee();    
         $idConducteur = $trajets->getidConducteur();    
        $d=date("d/M/Y");
        return $this->render('TestBundle:Home:AfficheDetailReservationAnciennes.html.twig', array(
                        'reservation' => $reservation,
                        'trajet' => $trajets,
                        'adherent' => $user,
                        'idReservation' => $idReservation,
                        'date' => $d,
                        'idTrajet'=>$idTrajet,
                        'villeDepart'=>$villeDepart,
                        'villeArrivee'=>$villeArivee,
                        'date'=>$reservation->getDate(),
                        'heure'=>$reservation->getHeure(),
                        'places'=>$reservation->getPlaces(),
                        //'nomConducteur'=>$trajets->getNom(),
            'idConducteur'=>$idConducteur
        ));
    } 

       
    
    public function ErreurDeReservationAction(){
        
        
         return $this->render('TestBundle:Home:ErreurDeReservation.html.twig', array());
                    
    }
   public function retourAction (){
      return $this->render('TestBundle:Home:ErreurDeReservation.html.twig', array()); 
   } 
    }
       
