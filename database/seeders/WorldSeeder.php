<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Nnjeim\World\Actions\SeedAction;

class WorldSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
	{
		$this->call([
			SeedAction::class,
		]);
	}
}
