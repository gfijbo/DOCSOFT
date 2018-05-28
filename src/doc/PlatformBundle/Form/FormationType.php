<?php

namespace doc\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use doc\PlatformBundle\Entity\Formation;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormationType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomForm', TextType::class, array('label'=> 'Nom de la formation'))
        ->add('formDetails', TextType::class, array('label' =>'Détails de la formation'))
        ->add('date_debut', DateTimeType::class, array('label'=>'Date de début de la formation'))
        ->add('date_fin', DateTimeType::class, array('label'=>'Date de la fin de la formation'))
        ->add('Ajouter', SubmitType::class)
        ->getForm();
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Formation::class,
        ));
    }
}
