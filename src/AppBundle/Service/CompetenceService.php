<?php

namespace App\AppBundle\Service;

use App\AppBundle\Repository\CompetenceRepository;
use App\BaseBundle\Entity\BaseEntity;
use App\BaseBundle\Service\BaseService;

class CompetenceService extends BaseService
{
    public function __construct(CompetenceRepository $repository)
    {
        parent::__construct($repository);
    }

    protected function validate(BaseEntity $entity): bool{
        return true;
    }
}
