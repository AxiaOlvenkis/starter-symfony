<?php

namespace Starter\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('StarterCoreBundle:Core:index.html.twig');
    }

    public function menuAction()
    {
        return $this->render('StarterCoreBundle:Core:menu.html.twig');
    }
}
