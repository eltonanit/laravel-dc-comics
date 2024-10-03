<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach( $comics as $comic ){
           
            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $artists_string = implode(', ', $comic['artists']);
            $writers_string = implode(', ', $comic['writers']);
            $new_comic->artists = $artists_string;
            $new_comic->writers = $writers_string;
            $new_comic->save();

        }
    }
}
