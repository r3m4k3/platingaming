<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

use Doctrine\ORM\EntityRepository;


class UserType extends AbstractType
{
    // private $tokenStorage;

    // public function __construct(TokenStorageInterface $tokenStorage)
    // {
    //     $this->tokenStorage = $tokenStorage;
    // }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'label' => 'Username',
                'attr' => array(
                    'maxlength' => 70, 
                    'minlength' => 1,
                    'placeholder' => 'Username'
                )
            ))
            ->add('email', EmailType::class, array(
                    'label' => 'E-mail address',
                    'attr' => array( 'placeholder' => 'mail@example.com'),
            ))
            ->add('password', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'Passwords are different. ',
                    'options' => array(
                        'attr' => array(
                            'class' => 'password-field',
                            'minlength' => 5, 
                            'maxlength' => 70
                    )),
                    'required' => true,
                    'first_options' => array(
                        'label' => 'Password',
                        'attr' => array(
                            'placeholder' => 'Password'
                        )
                    ),
                    'second_options' => array(
                        'label' => 'Repeat password',
                        'attr' => array(
                            'placeholder' => 'Repeat password'
                        )
                    ),
            ))
            ->add('roles', EntityType::class, array(
                'class' => 'AppBundle:Role',
                'choice_label' => 'name',
                'empty_data' => null,
                'label' => 'Role',
                'multiple' => true,
                'query_builder' =>
                function (EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->where('r.isActive = 1');
                },
                'placeholder' => 'Choose role'
            ))
            ->add('enabled', CheckboxType::class, array(
                'label' => 'Check if account enabled',
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
            'data_class' => 'AppBundle\Entity\User',
        ));
    }

}
