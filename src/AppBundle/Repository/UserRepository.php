<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findOneById($id){

        $qb = $this->createQueryBuilder('user');

        $qb
            ->where('user.id = :id')
            ->setParameter('id',$id)
        ;

        return $qb
            ->getQuery()
            ->getSingleResult();

    }
}
