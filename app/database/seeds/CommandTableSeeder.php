<?php

class CommandTableSeeder extends Seeder {

    private function randDate()
	{
		return date("Y-m-d H:i:s", mt_rand(strtotime('Jan 01 2015'),strtotime('Dec 31 2015')));
	}

	public function run()
	{
		for($i = 0; $i < 100; ++$i)
		{
			$date = $this->randDate();
			DB::table('commands')->insert(array(
					'titre' => 'Type' . rand(1, 5),
					'contenu' => 'Contenu' . $i . ' Lorem make an order Lorem make an order Lorem make an order Lorem make an order Lorem make an order Lorem make an order .',
					'user_id' => rand(1, 10),
					'created_at' => $date,
          'updated_at' => $date
				));
		}
	}
}