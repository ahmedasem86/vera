<?php

use Illuminate\Database\Seeder;
class Landseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('lands')->insert([
        'name' => 'أرض الممر',
        'address' => 'أمام الممر',
        'type' => '0',
        'area' => '2000',
        'price' => '15000000',
        'predicted_cost' => '2000000',
        'contract_date' => '2018-04-28',
        'delivery_date' => '2022-04-28',
    ]);
    }
}
