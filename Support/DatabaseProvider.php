<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Laravel Tenancy & Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Hooks\Database\Support;

use Tenancy\Support\Provider;
use Illuminate\Support\Facades\Event;
use Tenancy\Hooks\Database\Events;

class DatabaseProvider extends Provider{
    public function register()
    {
        parent::register();

        if ($this->listener) {
            Event::listen(Events\Resolving::class, $this->listener);
        }
    }
}
