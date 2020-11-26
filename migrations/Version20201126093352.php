<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201126093352 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE semaine_stage (id INT AUTO_INCREMENT NOT NULL, stage_id INT DEFAULT NULL, num_semaine INT DEFAULT NULL, apprentissage VARCHAR(255) DEFAULT NULL, bilan VARCHAR(255) DEFAULT NULL, INDEX IDX_877C1C32298D193 (stage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE semaine_stage ADD CONSTRAINT FK_877C1C32298D193 FOREIGN KEY (stage_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55FE928EFB1 FOREIGN KEY (semaine_stage_id) REFERENCES semaine_stage (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55FE928EFB1');
        $this->addSql('DROP TABLE semaine_stage');
    }
}
