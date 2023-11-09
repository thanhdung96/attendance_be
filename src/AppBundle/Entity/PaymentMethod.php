<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\PaymentMethodRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentMethodRepository::class)]
final class PaymentMethod extends BaseEntity
{

}
