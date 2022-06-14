<?php

declare(strict_types=1);

/*
 * This file is part of Vivo Group's Content Management System.
 * For the full copyright and license information, please view the
 * LICENSE.txt file that was distributed with this source code.
 */

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->symfonyContainerPhp(__DIR__.'/tests/symfony-container.php');
    $rectorConfig->symfonyContainerXml(file_exists(__DIR__.'/var/cache/dev/App_KernelDevDebugContainer.xml') ? __DIR__.'/var/cache/dev/App_KernelDevDebugContainer.xml' : __DIR__.'/var/cache/test/App_KernelTestDebugContainer.xml');

    $rectorConfig->autoloadPaths([
        __DIR__.'/vendor/autoload.php',
    ]);

    $rectorConfig->paths([
        __DIR__.'/src',
    ]);

    $rectorConfig->importNames();
    $rectorConfig->importShortClasses();

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_81,
        \Rector\Symfony\Set\SymfonyLevelSetList::UP_TO_SYMFONY_60,
        \Rector\Symfony\Set\SymfonySetList::SYMFONY_CODE_QUALITY,
        \Rector\Doctrine\Set\DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
        \Rector\Doctrine\Set\DoctrineSetList::DOCTRINE_CODE_QUALITY,
    ]);
};
