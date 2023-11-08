<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\User;
use App\BaseBundle\Repository\BaseRepository;
use Doctrine\Persistence\ManagerRegistry;

class UserRepository extends BaseRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
}
