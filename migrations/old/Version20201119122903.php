<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201119122903 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant ADD ville_perso_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3D0C00A17 FOREIGN KEY (ville_perso_id) REFERENCES ville (id)');
        $this->addSql('CREATE INDEX IDX_717E22E3D0C00A17 ON etudiant (ville_perso_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3D0C00A17');
        $this->addSql('DROP INDEX IDX_717E22E3D0C00A17 ON etudiant');
        $this->addSql('ALTER TABLE etudiant DROP ville_perso_id');
    }
}
