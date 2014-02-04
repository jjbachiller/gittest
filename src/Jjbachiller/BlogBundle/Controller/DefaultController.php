<?php

namespace Jjbachiller\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JjbachillerBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
