<?php

namespace ConsumoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ConsumoBundle:Default:index.html.twig', array('name' => $name));
    }
}
