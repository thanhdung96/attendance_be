<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\PaymentInfo;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class PaymentInfoRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentInfo::class);
    }
}
