<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210615100724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chef ADD image_id INT NOT NULL, DROP image_chef');
        $this->addSql('ALTER TABLE chef ADD CONSTRAINT FK_F24846E63DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_F24846E63DA5256D ON chef (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chef DROP FOREIGN KEY FK_F24846E63DA5256D');
        $this->addSql('DROP INDEX IDX_F24846E63DA5256D ON chef');
        $this->addSql('ALTER TABLE chef ADD image_chef VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP image_id');
    }
}
