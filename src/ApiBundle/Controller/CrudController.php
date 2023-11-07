<?php

namespace App\ApiBundle\Controller;

use App\AppBundle\Service\BaseService;
use App\AppBundle\Service\IBaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class CrudController extends AbstractController implements ICrudController
{
    private IBaseService $service;

    public function __construct(BaseService $service) {
        $this->service = $service;
    }
}
