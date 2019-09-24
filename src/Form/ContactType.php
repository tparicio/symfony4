<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ContactType
 * @package App\Form
 */
class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' =>  'contact.form.name.placeholder',
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'email',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' =>  'contact.form.email.placeholder',
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'subject',
                TextType::class,
                [
                    'attr' => [
                        'placeholder' =>  'contact.form.subject.placeholder',
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'message',
                TextareaType::class,
                [
                    'attr' => [
                        'rows' => 6,
                        'placeholder' =>  'contact.form.message.placeholder',
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'priority',
                RangeType::class,
                [
                    'attr' => [
                        'max' => 100,
                        'default' => 50,
                        'class' => 'form-control-range'
                    ]
                ]
            )
            ->add(
                'department'
            )
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
