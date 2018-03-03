<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TempUserRepository extends EntityRepository
{
    public function findOneByToken($token){

        $qb = $this->createQueryBuilder('tempUser');

        $qb
            ->where('tempUser.token = :token')
            ->setParameter('token',$token)
        ;

        return $qb
            ->getQuery()
            ->getSingleResult();

    }
}
