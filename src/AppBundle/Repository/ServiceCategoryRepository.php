<?php

namespace AppBundle\Repository;

/**
 * ServiceCategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceCategoryRepository extends \Doctrine\ORM\EntityRepository
{

// Dans un repository

    public function myFindOne($slug)
    {
        $qb = $this->createQueryBuilder('sc');

        $qb
            ->where('sc.slug = :slug')
            ->setParameter('slug', $slug)
            ->leftJoin('sc.providers', 'prov')
            ->addSelect('prov')
        ;

        return $qb
            ->getQuery()
            ->getSingleResult()
            ;
    }

// Depuis le repository d'Advert
//    public function getServiceCategoriesWithProviders($slug)
//    {
//        $qb = $this
//            ->createQueryBuilder('sc')
//            ->where('sc.slug = :slug')
//            ->setParameter('slug', $slug)
//            ->leftJoin('sc.providers', 'prov')
//            ->addSelect('prov')
//        ;
//
//        return $qb
//            ->getQuery()
//            ->getResult()
//            ;
//    }



//    public function getAdvertWithApplications()
//    {
//        $qb = $this
//            ->createQueryBuilder('a')
//            ->leftJoin('a.applications', 'app')
//            ->addSelect('app')
//        ;
//
//        return $qb
//            ->getQuery()
//            ->getResult()
//            ;
//    }
}
