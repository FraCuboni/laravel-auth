<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $post = new Post();

            // $train->azienda = $faker->company();

            $post->title = $faker->jobTitle();
            $post->subject = $faker->sentence();
            $post->start_date = $faker->date();
            $post->end_date = $faker->date();
            $post->number_of_posts = $faker->numberBetween(1, 255);
            $post->collaborators = $faker->jobTitle();

            $post->save();

            // $table->string('title');
            // $table->text('subject');
            // $table->date('start_date');
            // $table->date('end_date');
            // $table->tinyInteger('number_of_posts')->unsigned();
            // $table->string('collaborators');

        }
    }
}
