<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200507005007 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE all_session ADD createur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE all_session ADD CONSTRAINT FK_4A7F859A73A201E5 FOREIGN KEY (createur_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4A7F859A73A201E5 ON all_session (createur_id)');
        $this->addSql('ALTER TABLE evaluation ADD evaluateur_id INT DEFAULT NULL, ADD evaluer_id INT DEFAULT NULL, ADD allsession_id INT DEFAULT NULL, ADD critere JSON NOT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575231F139 FOREIGN KEY (evaluateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A57555A18BD3 FOREIGN KEY (evaluer_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5752932E486 FOREIGN KEY (allsession_id) REFERENCES all_session (id)');
        $this->addSql('CREATE INDEX IDX_1323A575231F139 ON evaluation (evaluateur_id)');
        $this->addSql('CREATE INDEX IDX_1323A57555A18BD3 ON evaluation (evaluer_id)');
        $this->addSql('CREATE INDEX IDX_1323A5752932E486 ON evaluation (allsession_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE all_session DROP FOREIGN KEY FK_4A7F859A73A201E5');
        $this->addSql('DROP INDEX IDX_4A7F859A73A201E5 ON all_session');
        $this->addSql('ALTER TABLE all_session DROP createur_id');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575231F139');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A57555A18BD3');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5752932E486');
        $this->addSql('DROP INDEX IDX_1323A575231F139 ON evaluation');
        $this->addSql('DROP INDEX IDX_1323A57555A18BD3 ON evaluation');
        $this->addSql('DROP INDEX IDX_1323A5752932E486 ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP evaluateur_id, DROP evaluer_id, DROP allsession_id, DROP critere');
    }
}
