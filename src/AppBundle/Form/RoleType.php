<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Security\Core\SecurityContext;


class RoleType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                'label' => 'Title',
                'attr' => array(
                    'maxlength' => 70, 
                    'minlength' => 1,
                )
            ))
            ->add('content', TextareaType::class, array(
                'label' => 'Task content',
                'attr' => array(
                    'maxlength' => 255, 
                    'minlength' => 1,
                )
            ))
            ->add('assignee', EntityType::class, array(
                'class' => 'AppBundle:User',
                'choice_label' => 'username',
                'empty_data' => null,
                'label' => 'Assignee',
                'placeholder' => 'Choose assignee'
            ))
            ->add('status', EntityType::class, array(
                'class' => 'AppBundle:Status',
                'choice_label' => 'name',
                'empty_data' => null,
                'label' => 'Status',
                'placeholder' => 'Choose status'
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
            'data_class' => 'AppBundle\Entity\Task',
        ));
    }

}
