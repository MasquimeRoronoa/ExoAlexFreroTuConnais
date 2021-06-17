<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Image;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomProduit', TextType::class, [
                'label'=>' '
            ])
            ->add('PrixProduit', TextType::class,[
                'label'=>' '
            ])
            ->add('image', EntityType::class, [
                'class'=>Image::class,
                'label'=>' ',
                'choice_label'=>'NomImage'
            ])
            ->add('DescProduit', TextType::class, [
                'label'=>' '
            ])
            ->add('categories', EntityType::class, [
                'class'=>Categories::class,
                'label'=>' ',
                'choice_label'=>'NomCategorie',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
