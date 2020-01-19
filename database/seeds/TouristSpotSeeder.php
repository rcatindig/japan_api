<?php

use Illuminate\Database\Seeder;

class TouristSpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourist_spots')->delete();
        $tourist_spots = array(
		
            array(
                    'name' => "Tokyo Skytree",
                    'location' => "1 Chome-1-2 Oshiage, Sumida City",
                    'description' => "1 Chome-1-2 Oshiage, Sumida City	Tokyo Skytree (東京スカイツリー, Tōkyō Sukaitsurī) is a broadcasting and observation tower in Sumida, Tokyo. It became the tallest structure in Japan in 2010[3] and reached its full height of 634.0 metres (2,080 ft) in March 2011, making it th...",
                    'city_id' => 42,
                    'photo_url' => "FcL1Ars9SBpPwTkw.jpg"
                ),
            array(
                    'name' => "Sensō-ji",
                    'location' => "Location 3, Tōkyō-to 111-0032 Asakusa",
                    'description' => "Sensoji (浅草寺, Sensōji, also known as Asakusa Kannon Temple) is a Buddhist temple located in Asakusa. It is one of Tokyo's most colorful and popular temples. The legend says that in the year 628, two brothers fished a statue of Kannon, the goddess ...",
                    'city_id' => 42,
                    'photo_url' => "2Lebl6CrWHUEuKeL.jfif"
                ),
        );

        DB::table('tourist_spots')->insert($tourist_spots);
    }
}
