<?php

namespace Inachis\Timeline\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version202602010001 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('...');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('...');
    }
}
