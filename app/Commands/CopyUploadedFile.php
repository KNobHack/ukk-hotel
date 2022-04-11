<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class CopyUploadedFile extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Upload';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'upload:copy';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Copy all uploaded files to public directory';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'upload:copy';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [
        '-o' => 'Whether individual files overwrite on collision'
    ];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        helper('filesystem');

        $overwrite = $params['o'] ?? CLI::getOption('o') ?? true;

        try {
            directory_mirror(WRITEPATH . 'uploads/', FCPATH . 'uploads/', !!$overwrite);
        } catch (\Throwable $th) {
            $this->showError($th);
        }

        CLI::write('Semua file upload berhasil di copy', 'green');
    }
}
