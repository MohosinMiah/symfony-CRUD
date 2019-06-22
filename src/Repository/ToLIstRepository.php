<?php

namespace App\Repository;

use App\Entity\ToLIst;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ToLIst|null find($id, $lockMode = null, $lockVersion = null)
 * @method ToLIst|null findOneBy(array $criteria, array $orderBy = null)
 * @method ToLIst[]    findAll()
 * @method ToLIst[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToLIstRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ToLIst::class);
    }

    // /**
    //  * @return ToLIst[] Returns an array of ToLIst objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ToLIst
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
