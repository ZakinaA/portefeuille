<?php
// tests/Entity/EtudiantTest.php
namespace App\Tests\Entity;

use App\Entity\Etudiant;
use PHPUnit\Framework\TestCase;
use App\Controller\EtudiantController;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class EtudiantTest extends KernelTestCase {

	/*public function testAdd(){
		$etudiant= new Etudiant();
		$result = $etudiant->add(5,2);
		$this->assertEquals(7, $result);
	}*/

/**
* @var \Doctrine\ORM\EntityManager
*/
private $entityManager;
/**
* @var \App\Entity\Etudiant
*/
private $etudiant;
// méthode permettant d’hydrater un étudiant depuis la bdd (ici l’étudiant ayant l’id 30
// cette méthode est exécutée avant les méthodes de tests



	protected function setUp(): void
	{
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
		$result = $this->etudiant->add(5,2);
		$this->assertEquals(7, $result);
	}


	public function testGetNbRpValidesParStatut()
	{
	/* SELECT count(rp.id), p.id FROM `rp`, etudiant e, promotion p WHERE
`enseignant_id`=2
 and `etudiant_id`=e.id
 and e.promotion_id=p.id
 group by p.id */
 $result = $this->etudiant->getNbRpValidesParStatut(2);
 $this->assertEquals(1, $result);
}


	public function testGetNbRpValides()
	{
		$result = $this->etudiant->getNbRpValides();
		$this->assertEquals(1, $result);
	}



		protected function tearDown(): void
		{
			parent::tearDown();
			$this->entityManager->close();
			$this->entityManager = null;
}





}