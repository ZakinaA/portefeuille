<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201126082326 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE domaine_taches (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jour (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(20) DEFAULT NULL, libelle VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semaine_stage (id INT AUTO_INCREMENT NOT NULL, stage_id INT DEFAULT NULL, tache_semaine_id INT DEFAULT NULL, num_semaine INT DEFAULT NULL, apprentissage VARCHAR(150) DEFAULT NULL, bilan VARCHAR(150) DEFAULT NULL, INDEX IDX_877C1C32298D193 (stage_id), INDEX IDX_877C1C312763F1D (tache_semaine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, coordonneestut VARCHAR(50) DEFAULT NULL, teltut INT DEFAULT NULL, mailtut VARCHAR(50) DEFAULT NULL, lieu VARCHAR(50) DEFAULT NULL, nbsemaine INT DEFAULT NULL, nomentreprise VARCHAR(100) DEFAULT NULL, adrentreprise VARCHAR(50) DEFAULT NULL, directeur VARCHAR(50) DEFAULT NULL, codenaf VARCHAR(5) DEFAULT NULL, siret VARCHAR(15) DEFAULT NULL, telentreprise INT NOT NULL, faxentreprise VARCHAR(25) DEFAULT NULL, mailentreprise VARCHAR(50) DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, duree_stage INT DEFAULT NULL, sujet VARCHAR(50) DEFAULT NULL, hor_lun INT DEFAULT NULL, hor_mar INT DEFAULT NULL, hor_mer INT DEFAULT NULL, hor_jeu INT DEFAULT NULL, hor_ven INT DEFAULT NULL, hor_sam INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tache_semaine (id INT AUTO_INCREMENT NOT NULL, domainetaches_id INT DEFAULT NULL, jour_id INT DEFAULT NULL, duree INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_B11BB55F2107D6CF (domainetaches_id), INDEX IDX_B11BB55F220C6AD0 (jour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE semaine_stage ADD CONSTRAINT FK_877C1C32298D193 FOREIGN KEY (stage_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE semaine_stage ADD CONSTRAINT FK_877C1C312763F1D FOREIGN KEY (tache_semaine_id) REFERENCES tache_semaine (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F2107D6CF FOREIGN KEY (domainetaches_id) REFERENCES domaine_taches (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55F2107D6CF');
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55F220C6AD0');
        $this->addSql('ALTER TABLE semaine_stage DROP FOREIGN KEY FK_877C1C32298D193');
        $this->addSql('ALTER TABLE semaine_stage DROP FOREIGN KEY FK_877C1C312763F1D');
        $this->addSql('DROP TABLE domaine_taches');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE semaine_stage');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE tache_semaine');
    }
}
