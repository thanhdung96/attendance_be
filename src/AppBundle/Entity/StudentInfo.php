<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\StudentInfoRepository;
use App\BaseBundle\Entity\CommonUserInfo;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentInfoRepository::class)]
class StudentInfo extends CommonUserInfo
{

}
