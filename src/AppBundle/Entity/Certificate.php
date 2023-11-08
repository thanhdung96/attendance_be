<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\CertificateRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificateRepository::class)]
final class Certificate extends BaseEntity
{

}
