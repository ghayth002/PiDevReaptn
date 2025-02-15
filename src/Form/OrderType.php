<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('lastName', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('email', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('phone', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('address', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('city', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('state', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('zipCode', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('country', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('paymentMethod', ChoiceType::class, [
                'choices' => [
                    'Credit Card' => 'credit_card',
                    'PayPal' => 'paypal',
                    'Bank Transfer' => 'bank_transfer'
                ],
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
