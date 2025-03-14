<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250215012217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add image field to product table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE product ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE product DROP image');
    }
}
