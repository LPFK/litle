<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210908072408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_commentateur_id INT NOT NULL, nombre_like INT NOT NULL, text_commentaire VARCHAR(1024) NOT NULL, INDEX IDX_67F068BC3E1C4EF2 (id_commentateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `like` (id INT AUTO_INCREMENT NOT NULL, id_likeur_id INT NOT NULL, INDEX IDX_AC6340B3AB43FCD5 (id_likeur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE like_commentaire (id INT AUTO_INCREMENT NOT NULL, id_com_id INT NOT NULL, INDEX IDX_D435863252BBBADA (id_com_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE like_post (id INT AUTO_INCREMENT NOT NULL, id_post_id INT NOT NULL, INDEX IDX_83FFB0F39514AA5C (id_post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC3E1C4EF2 FOREIGN KEY (id_commentateur_id) REFERENCES utilisateur_connecte (id)');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B3AB43FCD5 FOREIGN KEY (id_likeur_id) REFERENCES utilisateur_connecte (id)');
        $this->addSql('ALTER TABLE like_commentaire ADD CONSTRAINT FK_D435863252BBBADA FOREIGN KEY (id_com_id) REFERENCES commentaire (id)');
        $this->addSql('ALTER TABLE like_post ADD CONSTRAINT FK_83FFB0F39514AA5C FOREIGN KEY (id_post_id) REFERENCES post (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE like_commentaire DROP FOREIGN KEY FK_D435863252BBBADA');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE `like`');
        $this->addSql('DROP TABLE like_commentaire');
        $this->addSql('DROP TABLE like_post');
        $this->addSql('DROP TABLE user');
    }
}
