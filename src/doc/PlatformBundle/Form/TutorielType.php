<?php

namespace doc\PlatformBundle\Form;

use doc\PlatformBundle\Entity\Tutoriel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use doc\PlatformBundle\Entity\Formation;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TutorielType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomTuto', TextType::class, array('label'=> 'Nom du tutoriel'))
            ->add('tutoDetails', TextType::class, array('label' =>'Descriptif'))
            ->add('save', SubmitType::class)
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Tutoriel::class,
        ));
    }
}
