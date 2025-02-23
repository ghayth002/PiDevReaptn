<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250215011146 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Create tables for product_type, product, and stock';
    }

    public function up(Schema $schema) : void
    {
        // Create product_type table
        $this->addSql('CREATE TABLE product_type (
            id INT AUTO_INCREMENT NOT NULL,
            season VARCHAR(255) NOT NULL,
            production_method VARCHAR(255) NOT NULL,
            harvest_date DATE NOT NULL,
            preservation_duration VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');

        // Create product table
        $this->addSql('CREATE TABLE product (
            id INT AUTO_INCREMENT NOT NULL,
            category VARCHAR(255) NOT NULL,
            type_id INT NOT NULL,
            quantity INT NOT NULL,
            weight FLOAT NOT NULL,
            price DECIMAL(10,2) NOT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_PRODUCT_TYPE FOREIGN KEY (type_id) REFERENCES product_type (id) ON DELETE RESTRICT');

        // Create stock table
        $this->addSql('CREATE TABLE stock (
            id INT AUTO_INCREMENT NOT NULL,
            product_id INT NOT NULL,
            available_quantity INT NOT NULL,
            stock_minimum FLOAT NOT NULL,
            stock_maximum FLOAT NOT NULL,
            entry_date DATETIME NOT NULL,
            exit_date DATETIME DEFAULT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_STOCK_PRODUCT FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // Drop stock table first
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_STOCK_PRODUCT');
        $this->addSql('DROP TABLE stock');

        // Drop product table
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_PRODUCT_TYPE');
        $this->addSql('DROP TABLE product');

        // Drop product_type table
        $this->addSql('DROP TABLE product_type');
    }
}
