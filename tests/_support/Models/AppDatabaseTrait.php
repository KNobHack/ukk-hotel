<?php

namespace Tests\Support\Models;

trait AppDatabaseTrait
{
	protected function setUp(): void
	{
		$this->basePath  = APPPATH . 'Database';
		$this->namespace = 'App';

		parent::setUp();
	}
}
