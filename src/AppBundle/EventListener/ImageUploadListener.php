<?php

namespace AppBundle\EventListener;

use AppBundle\Entity\Internaut;
use AppBundle\Entity\Provider;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\File;

class ImageUploadListener
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

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {

        if (!$entity instanceof Internaut) {
            return;
        }

        if (!$entity instanceof Provider) {
            return;
        }

        if($entity instanceof Internaut){
        $file = $entity->getImage();
        }

        if($entity instanceof Provider){
        $file = $entity->getLogos();
        }

        // only upload new files
        if ($file instanceof UploadedFile) {
            $fileName = $this->uploader->upload($file);

            if($entity instanceof Internaut){
                $entity->setImage($fileName);
            }

            if($entity instanceof Provider){
                $entity->setLogos($fileName);
            }

        }
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Internaut) {
            return;
        }

        if (!$entity instanceof Provider) {
            return;
        }

        if ($fileName = $entity->getImage()) {
            $entity->setImage(new File($this->uploader->getTargetDir().'/'.$fileName));
        }

        if ($fileName = $entity->getLogos()) {
            $entity->setLogos(new File($this->uploader->getTargetDir().'/'.$fileName));
        }



    }

}