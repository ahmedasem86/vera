<?php

use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('partners')->insert([
        'name' => 'محمود احمد',
        'address' => '٢٢٢أمام الممر',
        'partner_id' => '12544738822',
    ]);
    }
}
