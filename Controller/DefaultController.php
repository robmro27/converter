<?php

namespace Unit\ConverterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UnitConverterBundle:Default:index.html.twig');
    }
}
