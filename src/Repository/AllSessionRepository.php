<?php

namespace App\Repository;

use App\Entity\AllSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AllSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method AllSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method AllSession[]    findAll()
 * @method AllSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AllSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AllSession::class);
    }

    // /**
    //  * @return AllSession[] Returns an array of AllSession objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AllSession
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
