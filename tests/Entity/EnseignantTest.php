<?php
// tests/Entity/EnseignantTest.php
namespace App\Tests\Entity;

use App\Entity\Enseignant;
use PHPUnit\Framework\TestCase;
use App\Controller\EtudiantController;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class EnseignantTest extends KernelTestCase{

  /**
	* @var \Doctrine\ORM\EntityManager
	*/
	private $entityManager;

	/**
	* @var \App\Entity\Enseignant
	*/
	private $enseignant;

	protected function setUp():void{
		$kernel = self::bootKernel();
		$this->entityManager = $kernel->getContainer()
		->get('doctrine')
		->getManager();

		$this->enseignant = $this->entityManager
		->getRepository(Enseignant::class)
		->find(3);
	}

public function testGetNbRpDeLaPromo()
{
  $enseignant = new Enseignant();
	$result = $enseignant->getNbRpDeLaPromo('SIO_2019-2021');

	//$result = $enseignant->getNbRpDeLaPromo($nomPromo);
	$this->assertEquals(0, $result);
}

}
