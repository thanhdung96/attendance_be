<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\EnrollmentRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnrollmentRepository::class)]
final class Enrollment extends BaseEntity
{

}
