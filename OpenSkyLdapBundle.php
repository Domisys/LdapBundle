<?php

namespace OpenSky\Bundle\LdapBundle;

use OpenSky\Bundle\LdapBundle\DependencyInjection\OpenSkyLdapExtension;
use OpenSky\Bundle\LdapBundle\DependencyInjection\Security\HttpBasicPreAuthenticatedFactory;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OpenSkyLdapBundle extends Bundle
{
    public function __construct()
    {
        $this->extension = new OpenSkyLdapExtension();
    }
    
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    
        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new HttpBasicPreAuthenticatedFactory());
    }
}