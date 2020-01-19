<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
	$states = array(
		
		array('name' => "Aichi"),
		array('name' => "Akita"),
		array('name' => "Aomori"),
		array('name' => "Chiba"),
		array('name' => "Ehime"),
		array('name' => "Fukui"),
		array('name' => "Fukuoka"),
		array('name' => "Fukushima"),
		array('name' => "Gifu"),
		array('name' => "Gumma"),
		array('name' => "Hiroshima"),
		array('name' => "Hokkaido"),
		array('name' => "Hyogo"),
		array('name' => "Ibaraki"),
		array('name' => "Ishikawa"),
		array('name' => "Iwate"),
		array('name' => "Kagawa"),
		array('name' => "Kagoshima"),
		array('name' => "Kanagawa"),
		array('name' => "Kanto"),
		array('name' => "Kochi"),
		array('name' => "Kumamoto"),
		array('name' => "Kyoto"),
		array('name' => "Mie"),
		array('name' => "Miyagi"),
		array('name' => "Miyazaki"),
		array('name' => "Nagano"),
		array('name' => "Nagasaki"),
		array('name' => "Nara"),
		array('name' => "Niigata"),
		array('name' => "Oita"),
		array('name' => "Okayama"),
		array('name' => "Okinawa"),
		array('name' => "Osaka"),
		array('name' => "Saga"),
		array('name' => "Saitama"),
		array('name' => "Shiga"),
		array('name' => "Shimane"),
		array('name' => "Shizuoka"),
		array('name' => "Tochigi"),
		array('name' => "Tokushima"),
		array('name' => "Tokyo"),
		array('name' => "Tottori"),
		array('name' => "Toyama"),
		array('name' => "Wakayama"),
		array('name' => "Yamagata"),
		array('name' => "Yamaguchi"),
		array('name' => "Yamanashi"),
		
		);
		DB::table('cities')->insert($states);
    }
}
