<?php

namespace Gitonomy\Bundle\FrontendBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration of the Gitonomy core bundle.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('gitonomy_frontend');

        $rootNode
            ->children()
                ->scalarNode('ssh_access')->cannotBeEmpty()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}