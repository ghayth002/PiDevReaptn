<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\ProductType as ProductTypeEntity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('category', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('type', EntityType::class, [
                'class' => ProductTypeEntity::class,
                'choice_label' => function(ProductTypeEntity $type) {
                    return sprintf('%s (%s)', $type->getProductionMethod(), $type->getSeason());
                },
                'attr' => ['class' => 'form-control']
            ])
            ->add('quantity', NumberType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('weight', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'scale' => 2
            ])
            ->add('price', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'scale' => 2
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Product Image',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPEG, PNG, WEBP)',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
