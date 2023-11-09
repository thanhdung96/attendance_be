<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\BillingDetail;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class BillingDetailRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BillingDetail::class);
    }
}
