<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\MonthlyBilling;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class MonthlyBillingRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MonthlyBilling::class);
    }
}
