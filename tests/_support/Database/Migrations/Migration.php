<?php

namespace Tests\Support\Database\Migrations;

use CodeIgniter\Database\Migration as CI_Migration;

abstract class Migration extends CI_Migration
{
	protected $DBGroup = 'tests';
}
