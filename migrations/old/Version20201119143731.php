<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201119143731 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, enseignant_id INT DEFAULT NULL, rp_id INT NOT NULL, commentaire LONGTEXT NOT NULL, date_commentaire DATE NOT NULL, INDEX IDX_67F068BCE455FCC0 (enseignant_id), INDEX IDX_67F068BCB70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE production (id INT AUTO_INCREMENT NOT NULL, rp_id INT NOT NULL, num INT NOT NULL, designation VARCHAR(255) DEFAULT NULL, adresse LONGTEXT DEFAULT NULL, INDEX IDX_D3EDB1E0B70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE source (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE production ADD CONSTRAINT FK_D3EDB1E0B70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE etudiant ADD bac_id INT DEFAULT NULL, ADD promotion_id INT DEFAULT NULL, ADD option_i_id INT DEFAULT NULL, ADD ville_perso_id INT DEFAULT NULL, ADD ville_famille_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3E03F15C0 FOREIGN KEY (bac_id) REFERENCES bac (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E31664D154 FOREIGN KEY (option_i_id) REFERENCES `option` (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3D0C00A17 FOREIGN KEY (ville_perso_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E349FB9F8D FOREIGN KEY (ville_famille_id) REFERENCES ville (id)');
        $this->addSql('CREATE INDEX IDX_717E22E3E03F15C0 ON etudiant (bac_id)');
        $this->addSql('CREATE INDEX IDX_717E22E3139DF194 ON etudiant (promotion_id)');
        $this->addSql('CREATE INDEX IDX_717E22E31664D154 ON etudiant (option_i_id)');
        $this->addSql('CREATE INDEX IDX_717E22E3D0C00A17 ON etudiant (ville_perso_id)');
        $this->addSql('CREATE INDEX IDX_717E22E349FB9F8D ON etudiant (ville_famille_id)');
        $this->addSql('ALTER TABLE rp ADD localisation_id INT DEFAULT NULL, ADD statut_id INT DEFAULT NULL, ADD source_id INT NOT NULL, ADD etudiant_id INT NOT NULL, ADD enseignant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7C68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7953C1C61 FOREIGN KEY (source_id) REFERENCES source (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_CD578B7C68BE09C ON rp (localisation_id)');
        $this->addSql('CREATE INDEX IDX_CD578B7F6203804 ON rp (statut_id)');
        $this->addSql('CREATE INDEX IDX_CD578B7953C1C61 ON rp (source_id)');
        $this->addSql('CREATE INDEX IDX_CD578B7DDEAB1A3 ON rp (etudiant_id)');
        $this->addSql('CREATE INDEX IDX_CD578B7E455FCC0 ON rp (enseignant_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7C68BE09C');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7953C1C61');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7F6203804');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP TABLE production');
        $this->addSql('DROP TABLE source');
        $this->addSql('DROP TABLE statut');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3E03F15C0');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3139DF194');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E31664D154');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3D0C00A17');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E349FB9F8D');
        $this->addSql('DROP INDEX IDX_717E22E3E03F15C0 ON etudiant');
        $this->addSql('DROP INDEX IDX_717E22E3139DF194 ON etudiant');
        $this->addSql('DROP INDEX IDX_717E22E31664D154 ON etudiant');
        $this->addSql('DROP INDEX IDX_717E22E3D0C00A17 ON etudiant');
        $this->addSql('DROP INDEX IDX_717E22E349FB9F8D ON etudiant');
        $this->addSql('ALTER TABLE etudiant DROP bac_id, DROP promotion_id, DROP option_i_id, DROP ville_perso_id, DROP ville_famille_id');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7DDEAB1A3');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7E455FCC0');
        $this->addSql('DROP INDEX IDX_CD578B7C68BE09C ON rp');
        $this->addSql('DROP INDEX IDX_CD578B7F6203804 ON rp');
        $this->addSql('DROP INDEX IDX_CD578B7953C1C61 ON rp');
        $this->addSql('DROP INDEX IDX_CD578B7DDEAB1A3 ON rp');
        $this->addSql('DROP INDEX IDX_CD578B7E455FCC0 ON rp');
        $this->addSql('ALTER TABLE rp DROP localisation_id, DROP statut_id, DROP source_id, DROP etudiant_id, DROP enseignant_id');
    }
}
