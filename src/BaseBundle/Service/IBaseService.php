<?php

namespace App\BaseBundle\Service;

use App\BaseBundle\Entity\BaseEntity;

interface IBaseService
{
    public function getAll(): array;

    public function getWithFilter(array $condition = []): array;

    public function getDetail(string $id, array $condition = []): ?BaseEntity;

    public function save(BaseEntity $entity, bool $flush = true): void;

    public function delete(BaseEntity $entity, bool $flush = true): void;
}
