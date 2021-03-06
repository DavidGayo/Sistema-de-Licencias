<?php

namespace Crm\ProductoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoLicenciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('precio','integer',array('attr' => array('class' => 'form-control')))
            ->add('meses','integer',array('attr' => array('class' => 'form-control')))
            ->add('terminoLicencia','text',array('attr' => array('class' => 'form-control')))
            ->add('producto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\ProductoBundle\Entity\TipoLicencia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_productobundle_tipolicencia';
    }
}
