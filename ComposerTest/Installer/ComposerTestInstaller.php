<?php

namespace ForkCMS\Modules\ComposerTest\Installer;

use ForkCMS\Modules\Extensions\Domain\Module\ModuleInstaller;

final class ComposerTestInstaller extends ModuleInstaller
{
    public function preInstall(): void
    {
        $this->createTableForEntities(
        );
    }

    public function install(): void
    {
        throw new \RuntimeException('Not implemented yet');
    }
}
