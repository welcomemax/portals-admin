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
            1 => [
                'text' => 'Deployed',
                'color' => 'green'
            ],
            2 => [
                'text' => 'Ready',
                'color' => 'blue'
            ],
            3 => [
                'text' => 'In Progress',
                'color' => 'blue'
            ],
            4 => [
                'text' => 'Waiting',
                'color' => 'yellow'
            ],
            5 => [
                'text' => 'Deffered',
                'color' => 'black'
            ],
            6 => [
                'text' => 'Nope',
                'color' => 'red'
            ],
            7 => [
                'text' => 'New',
                'color' => 'white'
            ]
        ];
        $tags = Tag::get()->keyBy('id');

        foreach ($config_tags as $id => $config_tag) {
            $tag = $tags->where('id', $id)->first();

            if (empty($tag)) {
                Tag::create($config_tag);
            } else {
                $tag->update($config_tag);
            }
        }
    }
}
