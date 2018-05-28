<?php

namespace doc\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use doc\PlatformBundle\Entity\Document;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DocumentType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('documentFile',FileType::class, array('label' => ' '));
    }
 
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Document::class,
        ));
    }

 
    public function getBlockPrefix()
    {
        return 'doc_platformbundle_document';
    }
    
}
