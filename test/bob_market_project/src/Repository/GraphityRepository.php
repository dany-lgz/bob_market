<?php

namespace App\Repository;

use App\Entity\Graphity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Graphity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Graphity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Graphity[]    findAll()
 * @method Graphity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraphityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Graphity::class);
    }

    // /**
    //  * @return Graphity[] Returns an array of Graphity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Graphity
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
