<?php

namespace App\Form;

use App\Entity\Etudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class AjoutEtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('mail', TextType::class)
            ->add('mobile', TextType::class)
            ->add('datenaiss', DateType::class, array('input' => 'datetime',
                                                          'widget' => 'single_text',
                                                          'required' => true,
                                                          'label' =>'date de naissance',
                                                          'placeholder' => 'jj/mm/aaaa'))
            ->add('photo', TextType::class)
            ->add('sexe', TextType::class)
            ->add('adrperso', TextType::class)
            ->add('ville', TextType::class)
            ->add('copos', TextType::class)
            ->add('statut', TextType::class)
            ->add('promotion', EntityType::class, array('class' => 'App\Entity\Promotion','choice_label' => 'Nom' ))

            ->add('enregistrer', SubmitType::class, array('label' => 'Nouvelle étudiant'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
