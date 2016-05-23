<?php

namespace TeamBuilder\CovoiturageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FaqForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {		
		$builder
			->add('objet')
            ->add('contenu', 'textarea', array())
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeamBuilder\CovoiturageBundle\Entity\Faq'
        ));
    }

    public function getName()
    {
        return 'faq';
    }
}
