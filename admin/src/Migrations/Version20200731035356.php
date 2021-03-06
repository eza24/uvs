<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200731035356 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE msg_log (id INT AUTO_INCREMENT NOT NULL, number VARCHAR(20) NOT NULL, text VARCHAR(255) NOT NULL, datetime INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE content CHANGE group_id group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupheader CHANGE maingroup_id maingroup_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE msg_log');
        $this->addSql('ALTER TABLE content CHANGE group_id group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupheader CHANGE maingroup_id maingroup_id INT DEFAULT NULL');
    }
}
