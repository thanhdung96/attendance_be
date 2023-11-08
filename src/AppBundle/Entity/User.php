<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\UserRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User extends BaseEntity
{

}
