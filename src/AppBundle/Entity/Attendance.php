<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\AttendanceRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttendanceRepository::class)]
final class Attendance extends BaseEntity
{

}
