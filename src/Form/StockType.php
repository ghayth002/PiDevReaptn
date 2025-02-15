<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Stock;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'category',
                'attr' => ['class' => 'form-control']
            ])
            ->add('availableQuantity', NumberType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('stockMinimum', NumberType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('stockMaximum', NumberType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('entryDate', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('exitDate', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
        ]);
    }
}
