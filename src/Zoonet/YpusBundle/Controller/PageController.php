<?php

namespace Zoonet\YpusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZoonetYpusBundle:Page:index.html.twig');
    }
}