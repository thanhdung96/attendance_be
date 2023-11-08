<?php

namespace App\BaseBundle\Controller;

use App\BaseBundle\Service\BaseService;
use App\BaseBundle\Service\IBaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class CrudController extends AbstractController implements ICrudController
{
    private IBaseService $service;

    public function __construct(BaseService $service) {
        $this->service = $service;
    }
}
