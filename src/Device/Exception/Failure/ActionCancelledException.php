<?php

declare(strict_types=1);

namespace BitWasp\Trezor\Device\Exception\Failure;

use BitWasp\Trezor\Device\Exception\CommandFailureException;

class ActionCancelledException extends CommandFailureException
{
}
