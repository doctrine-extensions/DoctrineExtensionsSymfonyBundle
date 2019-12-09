<?php

namespace DoctrineExtensions\SymfonyBundle;

use DoctrineExtensions\SymfonyBundle\DependencyInjection\Compiler\ValidateExtensionConfigurationPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoctrineExtensionsSymfonyBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ValidateExtensionConfigurationPass());
    }
}
