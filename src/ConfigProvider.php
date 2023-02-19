<?php
declare(strict_types=1);

namespace AMB\TNTSearch;

use AMB\TNTSearch\Factory\TNTSearchFactory;
use TeamTNT\TNTSearch\TNTSearch;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            'factories' => [
                TNTSearch::class => TNTSearchFactory::class,
            ],
        ];
    }
}
