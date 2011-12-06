<?php

namespace Gitonomy\Bundle\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CreateSshKeyType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array(
                'label' => 'Your SSH key'
            ))
        ;
    }

    public function getName()
    {
        return 'create_ssh_key';
    }
}