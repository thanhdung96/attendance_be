<?php

namespace App\AppBundle\Enum;

final class InfrastructureStatus
{
    public const READY = 'ready';

    public const UNDER_MAINTENANCE = 'maintaining';

    public const UNDER_CONSTRUCTION = 'constructing';

    public const UNAVAILABLE = 'unavailable';
}
