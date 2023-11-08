<?php

namespace App\BaseBundle\Service;

use App\BaseBundle\Entity\BaseEntity;
use App\BaseBundle\Repository\BaseRepository;
use App\BaseBundle\Repository\IBaseRepository;

abstract class BaseService implements IBaseService
{
    private IBaseRepository $repository;

    public function __construct(BaseRepository $repository) {
        $this->repository = $repository;
    }

    public function getAll(): array{
        return $this->repository->findAll();
    }

    public function getDetail(string $id, array $condition = []): ?BaseEntity{
        $condition['id'] = $id;

        return $this->repository->findOneBy($condition);
    }

    public function save(BaseEntity $entity, bool $flush = true): void{
        $this->repository->save($entity, $flush);
    }

    public function delete(BaseEntity $entity, bool $flush = true): void{
        $this->repository->remove($entity, $flush);
    }

    public function getWithFilter(array $condition = []): array{
        return $this->repository->findOneBy($condition);
    }

    abstract protected function validate(BaseEntity $entity): bool;
}
