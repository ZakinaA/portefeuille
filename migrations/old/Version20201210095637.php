<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201210095637 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE etudiant CHANGE mobile mobile INT NOT NULL');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369a873a5c6 TO IDX_C27C9369DDEAB1A3');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c93697cf12a69 TO IDX_C27C9369E455FCC0');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369286c17bc TO IDX_C27C9369A73F0036');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE455FCC0');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCB70FF80C');
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F9B0F88B1');
        $this->addSql('ALTER TABLE etudiant CHANGE mobile mobile VARCHAR(11) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369a73f0036 TO IDX_C27C9369286C17BC');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369ddeab1a3 TO IDX_C27C9369A873A5C6');
        $this->addSql('ALTER TABLE stage RENAME INDEX idx_c27c9369e455fcc0 TO IDX_C27C93697CF12A69');
    }
}
