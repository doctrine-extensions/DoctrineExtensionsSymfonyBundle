<?php

namespace DoctrineExtensions\SymfonyBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @internal
 */
class ValidateExtensionConfigurationPass implements CompilerPassInterface
{
    /**
     * Validate the DoctrineExtensions DIC extension config.
     *
     * This validation runs in a discrete compiler pass because it depends on
     * DBAL and ODM services, which aren't available during the config merge
     * compiler pass.
     */
    public function process(ContainerBuilder $container)
    {
        $container->getExtension('doctrine_extensions')->configValidate($container);
    }
}
