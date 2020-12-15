<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215073234 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pointage (id INT AUTO_INCREMENT NOT NULL, stage_id INT DEFAULT NULL, semaine_id INT DEFAULT NULL, datepoint DATE DEFAULT NULL, heurepoint TIME DEFAULT NULL, ip VARCHAR(255) DEFAULT NULL, INDEX IDX_7591B202298D193 (stage_id), INDEX IDX_7591B20122EEC90 (semaine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE production (id INT AUTO_INCREMENT NOT NULL, rp_id INT DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, INDEX IDX_D3EDB1E0B70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pointage ADD CONSTRAINT FK_7591B202298D193 FOREIGN KEY (stage_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE pointage ADD CONSTRAINT FK_7591B20122EEC90 FOREIGN KEY (semaine_id) REFERENCES semaine_stage (id)');
        $this->addSql('ALTER TABLE production ADD CONSTRAINT FK_D3EDB1E0B70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE etudiant CHANGE mobile mobile INT NOT NULL');
        $this->addSql('ALTER TABLE rp CHANGE statut_id statut_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stage DROP faxentreprise, CHANGE teltut teltut VARCHAR(15) DEFAULT NULL, CHANGE telentreprise telentreprise VARCHAR(50) DEFAULT NULL, CHANGE hor_lun hor_lun VARCHAR(20) DEFAULT NULL, CHANGE hor_mar hor_mar VARCHAR(20) DEFAULT NULL, CHANGE hor_mer hor_mer VARCHAR(20) DEFAULT NULL, CHANGE hor_jeu hor_jeu VARCHAR(20) DEFAULT NULL, CHANGE hor_ven hor_ven VARCHAR(20) DEFAULT NULL, CHANGE hor_sam hor_sam VARCHAR(20) DEFAULT NULL, CHANGE coordonneestut nomtut VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369a873a5c6 TO IDX_C27C9369DDEAB1A3');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369286c17bc TO IDX_C27C9369A73F0036');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c93697cf12a69 TO IDX_C27C9369E455FCC0');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE pointage');
        $this->addSql('DROP TABLE production');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE455FCC0');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCB70FF80C');
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F9B0F88B1');
        $this->addSql('ALTER TABLE etudiant CHANGE mobile mobile VARCHAR(11) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE rp CHANGE statut_id statut_id INT DEFAULT 1');
        $this->addSql('ALTER TABLE stage ADD faxentreprise VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE teltut teltut INT DEFAULT NULL, CHANGE telentreprise telentreprise INT NOT NULL, CHANGE hor_lun hor_lun INT DEFAULT NULL, CHANGE hor_mar hor_mar INT DEFAULT NULL, CHANGE hor_mer hor_mer INT DEFAULT NULL, CHANGE hor_jeu hor_jeu INT DEFAULT NULL, CHANGE hor_ven hor_ven INT DEFAULT NULL, CHANGE hor_sam hor_sam INT DEFAULT NULL, CHANGE nomtut coordonneestut VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369a73f0036 TO IDX_C27C9369286C17BC');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369ddeab1a3 TO IDX_C27C9369A873A5C6');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369e455fcc0 TO IDX_C27C93697CF12A69');
    }
}
