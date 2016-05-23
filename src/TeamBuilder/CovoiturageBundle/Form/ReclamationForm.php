<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TeamBuilder\CovoiturageBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ReclamationForm extends AbstractType{
    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {		
	$builder->add('idReclamateur','entity',array('class'=>'TeamBuilderCovoiturageBundle:Adherent','property'=>'id'))
                ->add('idAdherentConcerne','entity',array('class'=>'TeamBuilderCovoiturageBundle:Adherent','property'=>'id'))
                ->add('description','textarea')
                ->add('idAdminisrateur','entity',array('class'=>'TeamBuilderCovoiturageBundle:Administrateur','property'=>'id'))  	
                ->add('cause','choice',array(
                                    'choices'=>array('Inponctualité' =>'Inponctualité','Absence non prevenue'=>'Absence non prevenue','Faux profil'=>'Faux profil'),
                                   'expanded'=>true, 'multiple'=>false
          ))
                ->add('report','text');
     }
        public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
            
        $resolver->setDefaults(array(
            'data_class' => 'TeamBuilder\CovoiturageBundle\Entity\Reclamation'
        ));
    }

    public function getName()
    {
        return 'reclamation';
    }



    
}
