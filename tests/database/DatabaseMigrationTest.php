<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use Tests\Support\Database\Seeds\ExampleSeeder;
use Tests\Support\Models\ExampleModel;

/**
 * @internal
 */
final class DatabaseMigrationTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    public function testUp()
    {
        $this->loadDependencies();

        $this->migrations->setNamespace(null);
        try {
            $success = $this->migrations->latest('tests');
        } catch (\Exception $th) {
            $this->fail($th->getMessage());
            return;
        }

        $this->assertTrue($success);
    }

    public function testRefresh()
    {
        $this->loadDependencies();

        $this->migrations->setNamespace(null);
        try {
            $success = $this->migrations->regress(0, 'tests');
            $success = $this->migrations->latest('tests');
        } catch (\Exception $th) {
            $this->fail($th->getMessage());
            return;
        }

        $this->assertTrue($success);
    }
}
