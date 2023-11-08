<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\RoomRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
final class Room extends BaseEntity
{

}
