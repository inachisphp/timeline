<?php

namespace Inachis\Timeline\Installer;

use Inachis\Plugin\PluginInstallerInterface;

final class TimelineInstaller implements PluginInstallerInterface
{
    public function install(): void
    {
        // seed default timeline data or setup permissions
    }

    public function update(string $from, string $to): void
    {
        // handle version upgrades
    }

    public function uninstall(): void
    {
        // clean up plugin-specific data
    }
}
