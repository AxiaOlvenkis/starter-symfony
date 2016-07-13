<?php

namespace Starter\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('StarterAdminBundle:Admin:index.html.twig');
    }
}
