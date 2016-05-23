<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdherentForm
 *
 * @author Salma
 */
namespace TeamBuilder\CovoiturageBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdherentForm extends AbstractType{
  

    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {		
	$builder->add('nom')
		->add('prenom')
                ->add('adresseMail')
		->add('mdp')
            	->add('telephone')
                ->add('nombreReclamation');
            	
    }
        public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeamBuilder\CovoiturageBundle\Entity\Adherent'
        ));
    }

    public function getName()
    {
        return 'adherent';
    }

}
