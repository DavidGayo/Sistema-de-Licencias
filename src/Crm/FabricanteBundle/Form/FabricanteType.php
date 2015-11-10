<?php

namespace Crm\FabricanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FabricanteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razonSocial')
            ->add('rfc')
            ->add('telefono1')
            ->add('ext1')
            ->add('telefono2')
            ->add('ext2')
            ->add('email')
            ->add('paginaWeb')
            ->add('estatus')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\FabricanteBundle\Entity\Fabricante'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_fabricantebundle_fabricante';
    }
}