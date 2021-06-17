<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210616095031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE about ADD image_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE about ADD CONSTRAINT FK_B5F422E33DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_B5F422E33DA5256D ON about (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE about DROP FOREIGN KEY FK_B5F422E33DA5256D');
        $this->addSql('DROP INDEX IDX_B5F422E33DA5256D ON about');
        $this->addSql('ALTER TABLE about ADD image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP image_id');
    }
}
