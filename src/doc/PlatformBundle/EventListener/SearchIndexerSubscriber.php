<?php 
// src/doc/PlatformBundle/EventListener/SearchIndexerSubscriber.php
namespace doc\PlatformBundle\EventListener;

use Doctrine\Common\EventSubscriber;
// for Doctrine < 2.4: use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PropertyAccess\PropertyAccess;
use doc\PlatformBundle\Entity\Document;

class SearchIndexerSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return array(
            'postPersist',
            'postUpdate',
            'prePersist', 
            'postLoad'
        );
    }
    
    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->index($args);
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {
        $this->index($args);
    }
    
    public function prePersist(LifecycleEventArgs $args){
        $entity = $event->getEntity();
        foreach ($this->reader->getUploadableFields($entity) as $property => $annotation){
          $accessor = PropertyAccess::createPropertyAccessor();
          $file = $accessor->getValue($entity, $property);
          if($file instanceof UploadedFile){
              $fileName = $file->getClientOriginalName();
              $file->move($annotation->getPath(), $fileName);
              $accessor->setValue($entity,$annotation->getFileName(), $fileName);
          }
        }
    }
    public function index(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        // perhaps you only want to act on some "Document" entity
        if ($entity instanceof Document) {
            $args->getEntityManager();
            // ... do something with the Product
        }
    }
    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $event->getentity();
        foreach ($this->reader->getUploadableFields($entity) as $property => $annotation){
            $accessor = PropertyAccess::createPropertyAccessor();
            $fileName = $accessor->getValue($entity, $annotation->getFilename());
            $file = new File($annotation->getPath() . DIRECTORY_SEPARATOR.$fileName);
            $accessor->setValue($entity, $property, $file);
            
        }
    }
}