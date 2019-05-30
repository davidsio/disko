<?php

namespace App\Form;

use App\Entity\FormulaireContact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujet')
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('dateNaissance', DateType::class, ['widget' => 'single_text',
                'attr' => array('min' => '1900-01-01', 'max' => date("Y-m-d"))])
            ->add('message')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormulaireContact::class,
        ]);
    }
}
