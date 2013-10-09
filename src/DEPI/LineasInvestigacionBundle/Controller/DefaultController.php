<?php

namespace DEPI\LineasInvestigacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LineasInvestigacionBundle:Default:index.html.twig', array('name' => $name));
    }
}
