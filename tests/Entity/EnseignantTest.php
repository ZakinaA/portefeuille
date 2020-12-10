<?php
// tests/Entity/EnseignantTest.php
namespace App\Tests\Entity;
use App\Entity\Enseignant;
use PHPUnit\Framework\TestCase;
use App\Controller\EnseignantController;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;


class EnseignantTest extends KernelTestCase{ //TestCase
	/**
	* @var \Doctrine\ORM\EntityManager
	*/
	private $entityManager;
	/**
	* @var \App\Entity\Etudiant
	*/
	private $enseignant;
	// méthode permettant d’hydrater un étudiant depuis la bdd (ici l’étudiant ayant l’id 30
	// cette méthode est exécutée avant les méthodes de tests
	protected function setUp(): void{
		$kernel = self::bootKernel();
		$this->entityManager = $kernel->getContainer()
		->get('doctrine')
		->getManager();
		$this->enseignant = $this->entityManager
		->getRepository(Enseignant::class)
		->find(6);
	}

	

	/**
	* @dataProvider nbRpSelonNomPromo
	*/
	public function testGetNbRpDeLaPromo($nomPromo, $resultExpected)
	{
	//$result = $this->enseignant->getNbRpDeLaPromo('SIO_2019-2021');
	$result = $this->enseignant->getNbRpDeLaPromo($nomPromo);
	$this->assertEquals($resultExpected, $result);
	}

	

	protected function tearDown(): void{
		parent::tearDown();
		$this->entityManager->close();
		$this->entityManager = null;
	}
}
