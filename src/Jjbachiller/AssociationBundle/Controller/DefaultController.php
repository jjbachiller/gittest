<?php

namespace Jjbachiller\AssociationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JjbachillerAssociationBundle:Default:index.html.twig');
    }
}
