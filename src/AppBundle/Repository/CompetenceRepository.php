<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\Competence;
use Doctrine\Persistence\ManagerRegistry;

class CompetenceRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Competence::class);
    }
}
