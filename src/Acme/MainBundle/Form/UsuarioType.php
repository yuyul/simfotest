<?php

namespace Acme\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('usuario')
            ->add('password')
            ->add('usuario_roles')
        ;
    }

    public function getName()
    {
        return 'acme_mainbundle_usuariotype';
    }
}
