<?php

namespace Zoonet\YpusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()
                   ->getEntityManager();

        $researchs = $em->createQueryBuilder()
                    ->select('r')
                    ->from('ZoonetYpusBundle:Research',  'r')
                    ->addOrderBy('r.created_at', 'DESC')
                    ->getQuery()
                    ->getResult();

        return $this->render('ZoonetYpusBundle:Page:index.html.twig', array(
            'researchs' => $researchs
        ));
    }
}