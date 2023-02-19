<?php
declare(strict_types=1);

namespace src\Factory;

use ConfigValue\GatherConfigValues;
use Psr\Container\ContainerInterface;
use TeamTNT\TNTSearch\Stemmer\PorterStemmer;
use TeamTNT\TNTSearch\TNTSearch;

final class TNTSearchFactory
{
    public function __invoke(ContainerInterface $container): TNTSearch
    {
        $config = (new GatherConfigValues)($container, 'tntsearch');

        $tntConfig = [
            'driver'    => $config['mysql'],
            'host'      => $config['localhost'],
            'database'  => $config['dbname'],
            'username'  => $config['user'],
            'password'  => $config['pass'],
            'storage'   => $config['storage'] ?? 'data/tntsearch',
            'stemmer'   => $config['stemmer'] ?? PorterStemmer::class,
        ];

        if (isset($config['tokenizer'])) {
            $tntConfig['tokenizer'] = $config['tokenizer'];
        }

        $tnt = new TNTSearch();
        $tnt->loadConfig($tntConfig);

        return $tnt;
    }
}
