<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class ServiceCategoryRepository extends EntityRepository
{

    public function findAllValidOrderedByName(){

        $qb = $this->createQueryBuilder('category');

        $qb
            ->where('category.validity = :validity')
            ->setParameter('validity',true)
            ->leftJoin('category.serviceImage', 'serviceImage')
            ->addSelect('serviceImage')
            ->orderBy('category.name', 'ASC')
        ;

        return $qb
            ->getQuery()
            ->getResult();

    }

    public function findOneBySlug($slug)
    {
        $qb = $this->createQueryBuilder('sc');

        $qb
            ->where('sc.slug = :slug')
            ->setParameter('slug', $slug)
            ->leftJoin('sc.providers', 'providers')
            ->addSelect('providers')
            ->leftJoin('providers.logos', 'logos')
            ->addSelect('logos')
            ->leftJoin('sc.serviceImage', 'serviceImage')
            ->addSelect('serviceImage')

        ;

        return $qb
            ->getQuery()
            ->getSingleResult()
            ;
    }

    public function createAlphabeticalOrderQueryBuilder(){

        $qb = $this->createQueryBuilder('serviceCategory');

        $qb
            ->orderBy('serviceCategory.name', 'ASC');

        return $qb
            ;
    }

}
