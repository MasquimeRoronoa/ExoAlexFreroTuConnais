<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210615074213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC271ABE1FD5');
        $this->addSql('DROP INDEX IDX_29A5EC271ABE1FD5 ON produit');
        $this->addSql('ALTER TABLE produit CHANGE relation_image_id image_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC273DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC273DA5256D ON produit (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC273DA5256D');
        $this->addSql('DROP INDEX IDX_29A5EC273DA5256D ON produit');
        $this->addSql('ALTER TABLE produit CHANGE image_id relation_image_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC271ABE1FD5 FOREIGN KEY (relation_image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC271ABE1FD5 ON produit (relation_image_id)');
    }
}
