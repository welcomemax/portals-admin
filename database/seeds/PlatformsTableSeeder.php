<?php

use App\Platform;
use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_platforms = config('platforms');
        $platforms = Platform::get()->keyBy('alias');

        foreach ($config_platforms as $alias => $config_platform) {
            $platform = $platforms->where('alias', $alias)->first();

            $config_platform['alias'] = $alias;

            if (empty($platform)) {
                Platform::create($config_platform);
            } else {
                $platform->update($config_platform);
            }
        }
    }
}
