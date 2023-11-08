<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\MonthlyBillingRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MonthlyBillingRepository::class)]
final class MonthlyBilling extends BaseEntity
{

}
