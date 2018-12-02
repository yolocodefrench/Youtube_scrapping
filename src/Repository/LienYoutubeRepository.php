<?php

namespace App\Repository;

use App\Entity\LienYoutube;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LienYoutube|null find($id, $lockMode = null, $lockVersion = null)
 * @method LienYoutube|null findOneBy(array $criteria, array $orderBy = null)
 * @method LienYoutube[]    findAll()
 * @method LienYoutube[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LienYoutubeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LienYoutube::class);
    }

    // /**
    //  * @return LienYoutube[] Returns an array of LienYoutube objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LienYoutube
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
