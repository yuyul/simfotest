<?php

namespace Acme\SecureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TestController extends Controller
{

    public function testAction()
    {
        return $this->render('SecureBundle:Default:test.html.twig', array());
    }
}
