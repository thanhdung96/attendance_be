<?php

namespace App\BaseBundle\Repository;

use App\BaseBundle\Entity\BaseEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

abstract class BaseRepository extends ServiceEntityRepository implements IBaseRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass)
    {
        parent::__construct($registry, $entityClass);
    }

    public function save(BaseEntity $entity, bool $flush = true): void{
        $this->getEntityManager()->persist($entity);

        if($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function saveMany(array $entities, bool $flush = true): void{
        $entityManager = $this->getEntityManager();
        foreach ($entities as $entity) {
            $entityManager->persist($entity);
        }

        if($flush) {
            $entityManager->flush();
        }
    }

    public function remove(BaseEntity $entity, bool $flush = true): void{
        $this->getEntityManager()->remove($entity);

        if($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
