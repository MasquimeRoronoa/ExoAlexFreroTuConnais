<?php

namespace App\Form;

use App\Entity\Features;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FeaturesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomFeatures', TextType::class, [
                'label'=>' '
            ])
            ->add('DescFeatures', TextType::class, [
                'label'=>' '
            ])
            ->add('IconFeatures', TextType::class, [
                'label'=>' '
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Features::class,
        ]);
    }
}
