<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\PaymentInfoRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentInfoRepository::class)]
final class PaymentInfo extends BaseEntity
{

}
