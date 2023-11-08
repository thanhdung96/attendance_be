<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\StudentInfo;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class StudentInfoRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudentInfo::class);
    }
}
