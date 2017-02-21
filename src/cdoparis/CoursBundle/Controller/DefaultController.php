<?php

namespace cdoparis\CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('cdoparisCoursBundle:Default:index.html.twig');
    }
}
