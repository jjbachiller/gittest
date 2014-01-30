<?php

namespace Jjbachiller\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JjbachillerHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
