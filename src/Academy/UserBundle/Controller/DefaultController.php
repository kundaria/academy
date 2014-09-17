<?php

namespace Academy\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcademyUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
