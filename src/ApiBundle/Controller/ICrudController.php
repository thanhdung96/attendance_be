<?php

namespace App\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

interface ICrudController
{
    public function index(Request $request): JsonResponse;

    public function detail(string $id): JsonResponse;

    public function patch(Request $request, string $id): JsonResponse;

    public function delete(string $id): JsonResponse;
}
