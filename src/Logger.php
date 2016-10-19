<?php declare(strict_types=1);

namespace Room11\AsyncLogger;

use Amp\Promise;

interface Logger
{
    public function log(int $level, string $message, $extraData = null): Promise;
}
