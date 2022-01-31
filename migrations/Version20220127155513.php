<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220127155513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage ADD univers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D89551CF61C0B FOREIGN KEY (univers_id) REFERENCES univers (id)');
        $this->addSql('CREATE INDEX IDX_3F9D89551CF61C0B ON voyage (univers_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D89551CF61C0B');
        $this->addSql('DROP INDEX IDX_3F9D89551CF61C0B ON voyage');
        $this->addSql('ALTER TABLE voyage DROP univers_id');
    }
}
