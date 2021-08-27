<?php

namespace App\Repository;

use App\Entity\UtilisateurConnecte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UtilisateurConnecte|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtilisateurConnecte|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtilisateurConnecte[]    findAll()
 * @method UtilisateurConnecte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurConnecteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtilisateurConnecte::class);
    }

    // /**
    //  * @return UtilisateurConnecte[] Returns an array of UtilisateurConnecte objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UtilisateurConnecte
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
