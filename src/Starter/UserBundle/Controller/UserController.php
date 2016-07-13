<?php

namespace Starter\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('StarterUserBundle:User:index.html.twig');
    }

    public function menuAction()
    {
        return $this->render('StarterUserBundle:User:menu.html.twig');
    }
}
