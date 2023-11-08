<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\CourseRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseRepository::class)]
final class Course extends BaseEntity
{

}
