<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\SiteRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteRepository::class)]
final class Site extends BaseEntity
{

}
