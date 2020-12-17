<?php 

// tests/Entity/StageTest.php
namespace App\Tests\Entity;

use App\Entity\Stage;
use App\Entity\SemaineStage;
use PHPUnit\Framework\TestCase;
use App\Controller\StageControlleur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StageTest extends KernelTestCase //TestCase
{
	/**
	* @var \Doctrine\ORM\EntityManager
	*/
	private $entityManager;

	/**
	* @var \App\Entity\Stage
	*/
	private $stage;

	public function testGetNbSemaineRealisees()
	{
		$result = $this->stage->getNbSemaineRealisees();
		$this->assertEquals(1, $result);
	}

	public function testGetNbTacheParDomaine()
	{
		$result = $this->stage->getNbTacheParDomaine();
		$this->assertEquals(1, $result);
	}

	public function testGetNbTacheParIdDomaine()
	{
		$result = $this->stage->getNbTacheParIdDomaine(1);
		$this->assertEquals(1, $result);
	}
}
