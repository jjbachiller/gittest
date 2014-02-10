<?php

namespace Jjbachiller\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jjbachiller\BlogBundle\Entity\Enquiry;
use Jjbachiller\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
	public function indexAction()
	{
		return $this->render('JjbachillerBlogBundle:Page:index.html.twig');
	}

	public function aboutAction()
	{
		return $this->render('JjbachillerBlogBundle:Page:about.html.twig');
	}

	public function contactAction()
	{
		$enquiry = new Enquiry();
		$form = $this->createForm(new EnquiryType(), $enquiry);

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				//Perform some action, such as sending an email

				//Redirect - This is important to prevent users re-posting
				//the form if they refresh the page
				return $this->redirect($this->generateUrl('JjbachillerBlogBundle_contact'));
			}
		}

		return $this->render('JjbachillerBlogBundle:Page:contact.html.twig', array('form' => $form->createView()));
	}
}