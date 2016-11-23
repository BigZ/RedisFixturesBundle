<?php

namespace Lab5Com\RedisFixturesBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class Lab5ComRedisFixturesExtension
 * @author Romain Richard
 */
class Lab5ComRedisFixturesExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration($container->getParameter('kernel.debug'));
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('lab5com.redis_fixtures.client', $config['client']);
        $container->setParameter('lab5com.redis_fixtures.debug', $config['client']);
    }
}
