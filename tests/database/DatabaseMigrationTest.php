<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;

/**
 * @internal
 */
final class DatabaseMigrationTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    public function testUp()
    {
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
