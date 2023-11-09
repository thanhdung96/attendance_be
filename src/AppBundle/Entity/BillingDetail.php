<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\BillingDetailRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BillingDetailRepository::class)]
final class BillingDetail extends BaseEntity
{

}
