<?php

namespace App\Commands\Database;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MigrationSupport extends BaseCommand
{

    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Database';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'migrations:test';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Copy all migration in App to Tests\\Support';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'migration:test [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [
        '-n' => 'namespace'
    ];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $dbapp = \APPPATH . 'Database\\Migrations';
        $dbsup = realpath(TESTPATH . '_support/') . DIRECTORY_SEPARATOR . 'Database\\Migrations';

        helper('filesystem');

        $migrations = directory_map($dbapp);

        foreach ($migrations as $migration) {
            $content = file_get_contents($dbapp . '\\' . $migration);
            $content = str_replace("namespace App\\Database\\Migrations;\n", 'namespace Tests\\Support\\Database\\Migrations;', $content);
            $content = str_replace("use CodeIgniter\\Database\\Migration;\n", '', $content);
            file_put_contents($dbsup . '\\' . $migration, $content);
        }
    }
}
