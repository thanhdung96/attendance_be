<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\LessonRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LessonRepository::class)]
final class Lesson extends BaseEntity
{

}
