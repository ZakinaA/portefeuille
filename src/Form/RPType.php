<?php


namespace App\Form;

use App\Entity\RP;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libcourt', TextType::class, array('label' => 'Libellé court'))
            ->add('descriptif', TextType::class)
            ->add('contexte', TextType::class)
            ->add('dateDebut', DateType::class, array('input' => 'datetime',
                                                          'widget' => 'single_text',  
                                                          'required' => true,
                                                          'label' =>'Date de début',
                                                          'placeholder' => 'jj/mm/aaaa'))
            ->add('dateFin', DateType::class, array('input' => 'datetime',
                                                          'widget' => 'single_text', 
                                                          'required' => true,
                                                          'label' =>'Date de fin',
                                                          'placeholder' => 'jj/mm/aaaa'))
            ->add('environnement', TextType::class)
            ->add('moyen', TextType::class)
            ->add('dateModif', DateType::class, array('input' => 'datetime',
                                                          'widget' => 'single_text',  
                                                          'required' => true,
                                                          'label' =>'Date de mosdification',
                                                          'placeholder' => 'jj/mm/aaaa'))
            ->add('localisation', EntityType::class, array('class' => 'App\Entity\Localisation','choice_label' => 'Libelle' ))
            ->add('statut' , EntityType::class, array('class' => 'App\Entity\Statut','choice_label' => 'Libelle' ))
            ->add('source', EntityType::class, array('class' => 'App\Entity\Source','choice_label' => 'Libelle' ))
            ->add('etudiant', EntityType::class, array('class' => 'App\Entity\Etudiant','choice_label' => 'Nom' ))
            ->add('enseignant', EntityType::class, array('class' => 'App\Entity\Enseignant','choice_label' => 'Nom' ))
            ->add('cadre', EntityType::class, array('class' => 'App\Entity\Cadre','choice_label' => 'Libelle' ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RP::class,
        ]);
    }
}
