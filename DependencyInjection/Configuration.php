<?php

namespace Lab5Com\RedisFixturesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @author Romain Richard
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @var bool
     */
    private $debug;

    /**
     * Configuration constructor.
     * @param $debug
     */
    public function  __construct($debug)
    {
        $this->debug = (bool) $debug;
    }

    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lab5com.redis_fixtures');

        $rootNode
            ->children()
            ->booleanNode('debug')->defaultValue($this->debug)->end()
            ->scalarNode('client')->defaultValue('snc_redis.default')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
