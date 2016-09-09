<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class StatusType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'label' => 'Name',
                'attr' => array(
                    'maxlength' => 70, 
                    'minlength' => 1,
                    'placeholder' => 'Name'
                )
            ))
            ->add('isActive', CheckboxType::class, array(
                'label' => 'Check if is active',
                'required' => false
            ))
            ->add('reset', ResetType::class, array(
                'label' => 'Reset',
                'attr' => array('class' => 'btn')
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Save',
                'attr' => array('class' => 'btn-success')
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Status',
        ));
    }

}
