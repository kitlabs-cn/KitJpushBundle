<?php

namespace Kit\JpushBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitJpushBundle:Default:index.html.twig');
    }
}
