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
		$cities = array(
			array("name"=>"Tokyo","latitude"=>35.685,"longitude"=>139.751389),
			array("name"=>"Ōsaka","latitude"=>34.683333,"longitude"=>135.516667),
			array("name"=>"Yokohama","latitude"=>35.433333,"longitude"=>139.65),
			array("name"=>"Nagoya","latitude"=>35.183333,"longitude"=>136.9),
			array("name"=>"Fukuoka","latitude"=>33.6,"longitude"=>130.416667),
			array("name"=>"Sapporo","latitude"=>43.066667,"longitude"=>141.35),
			array("name"=>"Sendai","latitude"=>38.266667,"longitude"=>140.866667),
			array("name"=>"Hiroshima","latitude"=>34.4,"longitude"=>132.45),
			array("name"=>"Kyōto","latitude"=>35.016667,"longitude"=>135.75),
			array("name"=>"Kōbe","latitude"=>34.683333,"longitude"=>135.183333),
			array("name"=>"Shinkawasaki","latitude"=>35.550193,"longitude"=>139.670327),
			array("name"=>"Hamamatsu","latitude"=>34.7,"longitude"=>137.733333),
			array("name"=>"Zahana","latitude"=>26.166667,"longitude"=>127.666667),
			array("name"=>"Okayama","latitude"=>34.65,"longitude"=>133.933333),
			array("name"=>"Kumamoto","latitude"=>32.783333,"longitude"=>130.733333),
			array("name"=>"Shizuoka","latitude"=>34.983333,"longitude"=>138.383333),
			array("name"=>"Utsunomiya","latitude"=>36.566667,"longitude"=>139.883333),
			array("name"=>"Nagano","latitude"=>36.65,"longitude"=>138.183333),
			array("name"=>"Hachiōji","latitude"=>35.655833,"longitude"=>139.323889),
			array("name"=>"Niigata","latitude"=>37.9,"longitude"=>139),
			array("name"=>"Kagoshima","latitude"=>31.566667,"longitude"=>130.55),
			array("name"=>"Kanazawa","latitude"=>36.6,"longitude"=>136.616667),
			array("name"=>"Ōtsu","latitude"=>35,"longitude"=>135.866667),
			array("name"=>"Mitsuhama","latitude"=>33.85,"longitude"=>132.716667),
			array("name"=>"Tsu","latitude"=>34.733333,"longitude"=>136.516667),
			array("name"=>"Ōita","latitude"=>33.233333,"longitude"=>131.6),
			array("name"=>"Tokushima","latitude"=>34.066667,"longitude"=>134.566667),
			array("name"=>"Wakayama","latitude"=>34.233333,"longitude"=>135.166667),
			array("name"=>"Nagasaki","latitude"=>32.75,"longitude"=>129.883333),
			array("name"=>"Gifu","latitude"=>35.433333,"longitude"=>136.783333),
			array("name"=>"Iwaki","latitude"=>37.05,"longitude"=>140.883333),
			array("name"=>"Asahikawa","latitude"=>43.767778,"longitude"=>142.370278),
			array("name"=>"Mito","latitude"=>36.35,"longitude"=>140.45),
			array("name"=>"Maebashi","latitude"=>36.4,"longitude"=>139.083333),
			array("name"=>"Kawagoe","latitude"=>35.908611,"longitude"=>139.485278),
			array("name"=>"Kōchi","latitude"=>33.55,"longitude"=>133.533333),
			array("name"=>"Takamatsu","latitude"=>34.333333,"longitude"=>134.05),
			array("name"=>"Toyama","latitude"=>36.7,"longitude"=>137.216667),
			array("name"=>"Miyazaki","latitude"=>31.916667,"longitude"=>131.416667),
			array("name"=>"Akita","latitude"=>39.716667,"longitude"=>140.1),
			array("name"=>"Hakodate","latitude"=>41.775833,"longitude"=>140.736667),
			array("name"=>"Aomori","latitude"=>40.816667,"longitude"=>140.733333),
			array("name"=>"Morioka","latitude"=>39.7,"longitude"=>141.15),
			array("name"=>"Fukushima","latitude"=>37.75,"longitude"=>140.466667),
			array("name"=>"Yamagata","latitude"=>38.233333,"longitude"=>140.366667),
			array("name"=>"Fuku","latitude"=>36.04803,"longitude"=>136.188686),
			array("name"=>"Shinkai","latitude"=>33.956834,"longitude"=>130.984615),
			array("name"=>"Ashino","latitude"=>43.015176,"longitude"=>144.397259),
			array("name"=>"Kōfu","latitude"=>35.666667,"longitude"=>138.566667),
			array("name"=>"Kure","latitude"=>34.23222,"longitude"=>132.566583),
			array("name"=>"Hiraokamachi","latitude"=>40.609461,"longitude"=>140.453279),
			array("name"=>"Takaoka","latitude"=>36.75,"longitude"=>137.016667),
			array("name"=>"Matsue","latitude"=>35.483333,"longitude"=>133.05),
			array("name"=>"Muroran","latitude"=>42.317222,"longitude"=>140.988056),
			array("name"=>"Tottori","latitude"=>35.5,"longitude"=>134.233333),
			array("name"=>"Otaru","latitude"=>43.189444,"longitude"=>141.002222),
			array("name"=>"Kitami","latitude"=>43.803056,"longitude"=>143.890833),
			array("name"=>"Sakata","latitude"=>38.916667,"longitude"=>139.855),
			array("name"=>"Tsuruoka","latitude"=>38.721667,"longitude"=>139.821667),
			array("name"=>"Naka-maizuru","latitude"=>35.466667,"longitude"=>135.366667),
			array("name"=>"Kasano","latitude"=>31.390993,"longitude"=>130.903752),
			array("name"=>"Onagawa Chō","latitude"=>38.444912,"longitude"=>141.432692),
			array("name"=>"Matsuyama","latitude"=>33.833333,"longitude"=>132.766667),
			array("name"=>"Inuotose","latitude"=>40.601757,"longitude"=>141.326615),
			array("name"=>"Saitama","latitude"=>35.9,"longitude"=>139.65),
			array("name"=>"Hirado","latitude"=>33.368533,"longitude"=>129.552469),
			array("name"=>"Naha","latitude"=>26.216667,"longitude"=>127.683333),
			array("name"=>"Kozakai-chō","latitude"=>34.8,"longitude"=>137.358889),
			array("name"=>"Nara","latitude"=>34.683333,"longitude"=>135.833333),
			array("name"=>"Furudate","latitude"=>40.529338,"longitude"=>141.305532),
			array("name"=>"Fukui","latitude"=>36.066667,"longitude"=>136.216667),
			array("name"=>"Uchimaru","latitude"=>40.514368,"longitude"=>141.492673),
			array("name"=>"Saga","latitude"=>33.233333,"longitude"=>130.3),
			array("name"=>"Yawatahama-shi","latitude"=>33.463056,"longitude"=>132.423334),
			array("name"=>"Yamaguchi","latitude"=>34.183333,"longitude"=>131.466667),
			array("name"=>"Chiba","latitude"=>35.6,"longitude"=>140.116667),
			array("name"=>"Ikata-chō","latitude"=>33.488334,"longitude"=>132.354167)
		  );
		DB::table('cities')->insert($cities);
    }
}
