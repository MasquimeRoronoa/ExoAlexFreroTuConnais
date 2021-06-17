<?php

namespace App\Form;

use App\Entity\Chef;
use App\Entity\Image;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChefType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomChef', TextType::class, [
                'label'=>' '
            ])
            ->add('PrenomChef', TextType::class, [
                'label'=>' '
            ])
            ->add('PosteChef', TextType::class, [
                'label'=>' '
            ])
            ->add('image', EntityType::class, [
                'class'=>Image::class,
                'label'=>' ',
                'choice_label'=>'NomImage'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chef::class,
        ]);
    }
}
