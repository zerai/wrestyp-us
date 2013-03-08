<?php

namespace Zoonet\YpusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResearchController extends Controller
{
		public function indexAction()
		{
				return $this->render('ZoonetYpusBundle:Research:index.html.twig');
		}
}