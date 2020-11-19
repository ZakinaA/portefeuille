<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201119121355 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant ADD bac_id INT DEFAULT NULL, ADD promotion_id INT DEFAULT NULL, ADD option_i_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3E03F15C0 FOREIGN KEY (bac_id) REFERENCES bac (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E31664D154 FOREIGN KEY (option_i_id) REFERENCES `option` (id)');
        $this->addSql('CREATE INDEX IDX_717E22E3E03F15C0 ON etudiant (bac_id)');
        $this->addSql('CREATE INDEX IDX_717E22E3139DF194 ON etudiant (promotion_id)');
        $this->addSql('CREATE INDEX IDX_717E22E31664D154 ON etudiant (option_i_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3E03F15C0');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3139DF194');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E31664D154');
        $this->addSql('DROP INDEX IDX_717E22E3E03F15C0 ON etudiant');
        $this->addSql('DROP INDEX IDX_717E22E3139DF194 ON etudiant');
        $this->addSql('DROP INDEX IDX_717E22E31664D154 ON etudiant');
        $this->addSql('ALTER TABLE etudiant DROP bac_id, DROP promotion_id, DROP option_i_id');
    }
}
