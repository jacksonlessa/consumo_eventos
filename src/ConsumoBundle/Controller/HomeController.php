<?php

namespace ConsumoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConsumoBundle:Home:index.html.twig');
    }
}
