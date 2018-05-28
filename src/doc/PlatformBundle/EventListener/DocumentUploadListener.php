<?php
// src/doc/PlatformBundle/EventListener/DocumentUploadListener.php
namespace doc\PlatformBundle\EventListener;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use doc\PlatformBundle\Entity\Document;
use doc\PlatformBundle\Service\FileUploader;

class DocumentUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }
    
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        // only act on some "Document" entity
        if (!$entity instanceof Document) {
            return;
        }
        
        $entityManager = $args->getEntityManager();
    }
    
public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }
    
public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        
        if (!$entity instanceof Document) {
            return;
        }
        
        if ($fileName = $entity->getDocumentFile()) {
            $entity->setDocumentFile(new File($this->uploader->getTargetDir().'/'.$fileName));
        }
    }
    
    private function uploadFile($entity)
    {
        // upload only works for Document entities
        if (!$entity instanceof Document) {
            return;
        }

        $file = $entity->getDocumentFile();

        // only upload new files
        if ($file instanceof UploadedFile) {
            $fileName = $this->uploader->upload($file);
            $entity->setDocumentFile($fileName);
        }
    }
}