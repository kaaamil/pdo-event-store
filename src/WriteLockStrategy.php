<?php

/**
 * This file is part of prooph/pdo-event-store.
 * (c) 2016-2021 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2016-2021 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStore\Pdo;

interface WriteLockStrategy
{
    public function getLock(string $name): bool;

    public function releaseLock(string $name): bool;
}
