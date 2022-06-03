<?php

declare(strict_types=1);

namespace Luxemate\PhpstanTimeoutError;

set_time_limit(1);

final class Foo
{
    public \stdClass $bar;

    public function __construct(\stdClass $bar)
    {
        $this->bar = $bar;
    }
}
