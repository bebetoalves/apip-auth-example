<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240822230435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE book_identifier_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_identifier_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE book (identifier INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(identifier))');
        $this->addSql('CREATE TABLE "user" (identifier INT NOT NULL, lastname VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(identifier))');
        //senha 123
        $this->addSql("INSERT INTO user (identifier, lastname, password) VALUES (3, 'maria', :password);", ['password' => '$2y$13$dWnzP/kh9XnlW96uue5nGusTzjyibI9YDINHAER5T3GLJHQoGOgii']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE book_identifier_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_identifier_seq" CASCADE');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE "user"');
    }
}
