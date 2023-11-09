<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\PaymentMethod;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class PaymentMethodRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentMethod::class);
    }
}
