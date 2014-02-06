<?php

namespace Jjbachiller\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function indexAction()
	{
		return $this->render('JjbachillerBlogBundle:Page:index.html.twig');
	}
}