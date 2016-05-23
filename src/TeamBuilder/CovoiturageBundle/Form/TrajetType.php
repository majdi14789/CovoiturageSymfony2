<?php

namespace TeamBuilder\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrajetType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jours', 'date', array(
				'format' => 'dd-M-yyyy',
				'widget' => 'single_text',
			))
            ->add('heure')
            //->add('frequence')
            ->add('frequence', 'choice', array(
    'choices'   => array('Quotidien' => 'Quotidien', 'Hebdomadaire' => 'Hebdomadaire','Mensuel' => 'Mensuel'),
    'required'  => true,
          ))
           // ->add('typeTrajet')
            
          ->add('typeTrajet', 'choice', array(
    'choices'   => array('Occasionel' => 'Occasionel', 'Regulier' => 'Regulier'),
    'required'  => true,
          ))      
                
           ->add('places')
                
           
                
         //   ->add('bagages')
                 ->add('bagages', 'choice', array(
    'choices'   => array('Pas de Bagage' => 'Pas de Bagage', 'Petits Bagages' => 'Petits Bagages', 'Bagages Moyens' => 'Bagages Moyens' , 'Gros Bagages Autorises' => 'Gros Bagages Autorises'),
    'required'  => true,
          ))   
            ->add('commentaire','textarea')
            ->add('kilometrage')
           
           
                
            ->add('prix','number')
                
                
            ->add('villeArrivee')
            ->add('villeDepart')
            //->add('codeHtml')
           // ->add('idVoiture')
           // ->add('idConducteur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeamBuilder\CovoiturageBundle\Entity\Trajet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'teambuilder_covoituragebundle_trajet';
    }
}
