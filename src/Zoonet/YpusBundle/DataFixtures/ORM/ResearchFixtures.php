<?php

namespace Zoonet\YpusBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Zoonet\YpusBundle\Entity\Research;


class ResearchFixtures implements FixtureInterface
{
	
		public function load(ObjectManager $manager)
		{
				$research1 = new Research();
				$research1->setWhat('Car Wash');
				$research1->setWhere('chicago, MI');
				$research1->setActive(1);
				$research1->setStatus(3);
				$research1->setCreatedAt(new \DateTime());
				$research1->setUpdatedAt($research1->getCreatedAt());

				$manager->persist($research1);



				$research2 = new Research();
				$research2->setWhat('Car');
				$research2->setWhere('new york, NY');
				$research2->setActive(1);
				$research2->setStatus(3);
				$research2->setCreatedAt(new \DateTime('2011-07-23 06:12:33'));
				$research2->setUpdatedAt($research2->getCreatedAt());

				$manager->persist($research2);




				$research3 = new Research();
				$research3->setWhat('Children Center');
				$research3->setWhere('Los Angeles, CA');
				$research3->setActive(1);
				$research3->setStatus(1);
				$research3->setCreatedAt(new \DateTime());
				$research3->setUpdatedAt($research3->getCreatedAt());

				$manager->persist($research3);



				$research5 = new Research();
				$research5->setWhat('Financial service');
				$research5->setWhere('miami, FL');
				$research5->setActive(0);
				$research5->setStatus(2);
				$research5->setCreatedAt(new \DateTime('2012-01-01 06:12:33'));
				$research5->setUpdatedAt($research5->getCreatedAt());

				$manager->persist($research5);




				$research5 = new Research();
				$research5->setWhat('Restaurants');
				$research5->setWhere('orlando, FL');
				$research5->setActive(1);
				$research5->setStatus(3);
				$research5->setCreatedAt(new \DateTime());
				$research5->setUpdatedAt($research5->getCreatedAt());

				$manager->persist($research5);



				$research6 = new Research();
				$research6->setWhat('Restaurants');
				$research6->setWhere('all states');
				$research6->setActive(0);
				$research6->setStatus(3);
				$research6->setCreatedAt(new \DateTime());
				$research6->setUpdatedAt($research6->getCreatedAt());

				$manager->persist($research6);
				


				$manager->flush();

		}
}
