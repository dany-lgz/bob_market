<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190120233141 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE building (id INT AUTO_INCREMENT NOT NULL, id_building INT NOT NULL, id_ticket INT NOT NULL, floor INT NOT NULL, adress VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, adress VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, id_ticket INT NOT NULL, id_user INT NOT NULL, checked TINYINT(1) NOT NULL, validated TINYINT(1) NOT NULL, date_valid DATETIME DEFAULT NULL, text_invalid VARCHAR(255) DEFAULT NULL, done TINYINT(1) NOT NULL, date_checked DATETIME DEFAULT NULL, price_valid INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE graphity (id INT AUTO_INCREMENT NOT NULL, id_graphity INT NOT NULL, id_building INT NOT NULL, floor INT NOT NULL, orientation VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE building');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE graphity');
    }
}
