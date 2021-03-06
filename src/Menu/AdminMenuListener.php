<?php

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu->addChild('new')->setLabel('Suppliers');

        $newSubmenu->addChild('new-subitem')->setLabel('Supplier')
            ->setUri('/admin/supplier');

    }
}
