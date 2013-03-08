<?php

namespace Zoonet\YpusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResearchController extends Controller
{
		public function showAction($id)
		{
				$em = $this->getDoctrine()->getManager();

				$research = $em->getRepository('ZoonetYpusBundle:Research')->find($id);

				if (!$research) {
					throw $this->createNotFoundException('Non è stata trovata nessuna ricerca.');
				}

				return $this->render('ZoonetYpusBundle:Research:show.html.twig', array('research' => $research ));
		}
}