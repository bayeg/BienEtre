<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProviderRepository extends EntityRepository
{

    public function findAllNotBannedOrderedByName(){

        $qb = $this->createQueryBuilder('provider');

            $qb
                ->where('provider.banned = :banned')
                ->setParameter('banned',false)
                ->leftJoin('provider.photos', 'photos')
                ->addSelect('photos')
                ->orderBy('provider.name', 'ASC')
            ;

            return $qb
                ->getQuery()
                ->getResult();

    }

    public function findOneBySlug($slug){

        $qb = $this->createQueryBuilder('provider');

            $qb
                ->where('provider.slug = :slug')
                ->setParameter('slug',$slug)
                ->leftJoin('provider.serviceCategories', 'categories')
                ->addSelect('categories')
                ->leftJoin('provider.courses', 'courses')
                ->addSelect('courses')
                ->leftJoin('provider.promotions', 'promotions')
                ->addSelect('promotions')
                ->leftJoin('provider.photos', 'photos')
                ->addSelect('photos')
                ->leftJoin('provider.logos', 'logos')
                ->addSelect('logos')

            ;

            return $qb
                ->getQuery()
                ->getSingleResult();

    }


    public function findProvider($name, $postCode, $categorie){
        $qb = $this->createQueryBuilder('p');
        if($name != '')
        {
            $qb->andWhere('p.name LIKE :name')
                ->setParameter('name','%'.$name.'%');
        }
        if($postCode != '')
        {
            $qb
                ->leftJoin('p.postCode','pc')
                ->addSelect('pc')
                ->andWhere('pc.id = :postCode')
                ->setParameter('postCode',$postCode);
        }
        if($categorie != '')
        {
            $qb
                ->leftJoin('p.serviceCategories', 'sc')
                ->addSelect('sc')
                ->andWhere('sc.id = :serviceCategories')
                ->setParameter('serviceCategories', $categorie)
            ;
        }
        return $qb
            ->getQuery()
            ->getResult()
            ;
    }

}
