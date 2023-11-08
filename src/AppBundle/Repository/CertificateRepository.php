<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\Certificate;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class CertificateRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Certificate::class);
    }
}
