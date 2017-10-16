<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $config_tags = [
            [
                'text' => 'Deployed',
                'color' => 'green'
            ],
            [
                'text' => 'Ready',
                'color' => 'blue'
            ],
            [
                'text' => 'In Progress',
                'color' => 'blue'
            ],
            [
                'text' => 'Waiting',
                'color' => 'yellow'
            ],
            [
                'text' => 'Deffered',
                'color' => 'black'
            ],
            [
                'text' => 'Nope',
                'color' => 'red'
            ]
        ];
        $tags = Tag::get()->keyBy('id');

        foreach ($config_tags as $id => $config_tag) {
            $tag = $tags->where('text', $id)->first();

            if (empty($product)) {
                Tag::create($config_tag);
            } else {
                $tag->update($config_tag);
            }
        }
    }
}
