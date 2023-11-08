<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\Enrollment;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class EnrollmentRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enrollment::class);
    }
}
