<?php

namespace Starter\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StarterUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
