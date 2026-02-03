<?php

namespace Inachis\Timeline\Menu;

use Inachis\Menu\MenuProviderInterface;

final class TimelineMenuProvider implements MenuProviderInterface
{
    public function getMenuItems(): array
    {
        return [
            [
                'label' => 'Timeline',
                'route' => 'incc_timeline_index',
                'icon' => 'timeline',
                'priority' => 20,
            ],
        ];
    }
}
