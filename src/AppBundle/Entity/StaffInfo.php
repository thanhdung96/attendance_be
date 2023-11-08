<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\StaffInfoRepository;
use App\BaseBundle\Entity\CommonUserInfo;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StaffInfoRepository::class)]
final class StaffInfo extends CommonUserInfo
{

}
