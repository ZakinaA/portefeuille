<?php
// tests/Entity/EtudiantTest.php
namespace App\Tests\Entity;

use App\Entity\Etudiant;
use PHPUnit\Framework\TestCase;
use App\Controller\EtudiantController;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class EtudiantTest extends KernelTestCase{

	/**
	* @var \Doctrine\ORM\EntityManager
	*/
	private $entityManager;

	/**
	* @var \App\Entity\Etudiant
	*/
	private $etudiant;

	protected function setUp():void{
		$kernel = self::bootKernel();
		$this->entityManager = $kernel->getContainer()
		->get('doctrine')
		->getManager();

		$this->etudiant = $this->entityManager
		->getRepository(Etudiant::class)
		->find(30);
	}


	public function testAdd()
	{
		//$etudiant = new Etudiant();
		$result = $this->etudiant->add(5,2);
		$this->assertEquals(7, $result);
	}

	public function testGetNbRpValidesParStatut()
	{
		/* SELECT count(rp.id), p.id FROM `rp`, enseignant e, promotion p WHERE 				`etudiant_id`=30
        	and `enseignant_id`=e.id
        	and e.promotion_id=p.id
       	 	group by p.id */

		$result = $this->etudiant->getNbRpValidesParStatut(2);
		$this->assertEquals(1, $result);
	}

	public function testGetNbRpValides()
	{
		$result = $this->etudiant->getNbRpValides();
		$this->assertEquals(0, $result);
	}

	protected function tearDown(): void
	{
		parent::tearDown();
		$this->entityManager->close();
		$this->entityManager = null;
	}
}
