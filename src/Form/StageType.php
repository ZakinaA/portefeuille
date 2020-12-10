<?php

namespace App\Form;

use App\Entity\Stage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class StageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('coordonneestut')
            ->add('teltut')
            ->add('mailtut')
            ->add('lieu')
            ->add('nbsemaine')
            ->add('nomentreprise')
            ->add('adrentreprise')
            ->add('directeur')
            ->add('codenaf')
            ->add('siret')
            ->add('telentreprise')
           // ->add('faxentreprise')
            ->add('mailentreprise')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('sujet')
            ->add('horLun')
            ->add('horMar')
            ->add('horMer')
            ->add('horJeu')
            ->add('horVen')
            ->add('horSam')
            ->add('ville',EntityType::class, array('class'=>'App\Entity\Ville','choice_label' =>'nom' ))

            //->add('etudiant ',EntityType::class, array('class'=>'App\Entity\Etudiant','choice_label' =>'nom'))
            //->add('enseignant')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stage::class,
        ]);
    }
}
