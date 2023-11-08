<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\Attendance;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class AttendanceRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Attendance::class);
    }
}
