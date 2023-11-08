<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\StaffInfo;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class StaffInfoRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StaffInfo::class);
    }
}
