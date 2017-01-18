<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class InstrumentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Instrument::create([
				array('name' => 'name'.$index, 'description' => 'desc'.$index, 'category_id' => 1, )
			]);
		}
	}

}
