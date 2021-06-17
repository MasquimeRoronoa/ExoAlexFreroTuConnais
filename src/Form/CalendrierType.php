<?php

namespace App\Form;

use App\Entity\Calendrier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendrierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomCalendrier', TextType::class, [
                'label'=>' '
            ])
            ->add('MailCalendrier', EmailType::class, [
                'label'=>' '
            ])
            ->add('DateDebutCalendrier', DateTimeType::class,[
                'date_widget'=>'single_text',
                'label'=>' '
            ])
            ->add('NombreCalendrier', TextType::class, [
                'label'=>' ',
            ])
            ->add('TelCalendrier', TextType::class, [
                'label'=>' ',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Calendrier::class,
        ]);
    }
}
