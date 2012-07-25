<?php

namespace Acme\MainBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\MainBundle\Entity\Edificio;

class Edificios implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$edificios = array(
			array('nombre' => 'Edificio1', 'direccion' => 'direccion1'),
			array('nombre' => 'Edificio2', 'direccion' => 'direccion2'),
		);
		
		foreach($edificios as $edificio)
		{
			$entidad = new Edificio();
			
			$entidad->setNombre($edificio['nombre']);
			$entidad->setDireccion($edificio['direccion']);
			
			$manager->persist($entidad);
		}
		
		$manager->flush();
		
	}
	
	public function getOrder()
	{
		return 1;
	}
}