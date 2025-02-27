<?php

/**
 * This file is part of the Sylius package.
 *
 *  (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\ShopApiPlugin\Provider;

use Sylius\Component\Core\Model\ShopUserInterface;

interface LoggedInShopUserProviderInterface
{
    public function provide(): ShopUserInterface;

    public function isUserLoggedIn(): bool;
}
