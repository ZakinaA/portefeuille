<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201119153741 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cadre (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(5) NOT NULL, libelle VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bac CHANGE code code VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE enseignant ADD matiere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id)');
        $this->addSql('CREATE INDEX IDX_81A72FA1F46CD258 ON enseignant (matiere_id)');
        $this->addSql('ALTER TABLE rp ADD cadre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B79308DA90 FOREIGN KEY (cadre_id) REFERENCES cadre (id)');
        $this->addSql('CREATE INDEX IDX_CD578B79308DA90 ON rp (cadre_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B79308DA90');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1F46CD258');
        $this->addSql('DROP TABLE cadre');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('ALTER TABLE bac CHANGE code code VARCHAR(6) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX IDX_81A72FA1F46CD258 ON enseignant');
        $this->addSql('ALTER TABLE enseignant DROP matiere_id');
        $this->addSql('DROP INDEX IDX_CD578B79308DA90 ON rp');
        $this->addSql('ALTER TABLE rp DROP cadre_id');
    }
}
