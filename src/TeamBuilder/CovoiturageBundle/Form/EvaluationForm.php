<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EvaluationFOrm
 *
 * @author Salma
 */
namespace TeamBuilder\CovoiturageBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class EvaluationForm extends AbstractType{
    //put your code here
     public function buildForm(FormBuilderInterface $builder, array $options)
    {		
	$builder
			->add('commentaire','textarea');
			// ->add('note','text')
            	
                
        
    }
        public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
            
        $resolver->setDefaults(array(
            'data_class' => 'TeamBuilder\CovoiturageBundle\Entity\Evaluation'
        ));
    }

    public function getName()
    {
        return 'evaluation';
    }


}
