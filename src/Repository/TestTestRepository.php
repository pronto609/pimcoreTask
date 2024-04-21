<?php

namespace App\Repository;

use App\Entity\TestTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestTest>
 *
 * @method TestTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestTest[]    findAll()
 * @method TestTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestTest::class);
    }

    //    /**
    //     * @return TestTest[] Returns an array of TestTest objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TestTest
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
