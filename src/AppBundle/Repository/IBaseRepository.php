<?php

namespace App\AppBundle\Repository;

use App\AppBundle\Entity\BaseEntity;

interface IBaseRepository
{
    public function save(BaseEntity $entity, bool $flush = true): void;

    public function saveMany(array $entities, bool $flush = true): void;

    public function remove(BaseEntity $entity, bool $flush = true): void;
}
