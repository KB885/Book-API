<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');

        $book_json = File::get("database/data/book_out.json");
        $book_data = json_decode($book_json);

        foreach ($book_data as $book) {
            DB::table('books')->insert([
                'title' => (isset($book->title) ? $book->title : ''),
                'author' => (isset($book->author) ? $book->author : ''),
                'language' => (isset($book->language) ? $book->language : ''),
                'num_pages' => (isset($book->num_pages) ? $book->num_pages : 0),
                'publish_date' => (isset($book->publish_date) ? $book->publish_date : 0),
            ]);
        }

        $author_json = File::get("database/data/author_out.json");
        $author_data = json_decode($author_json);

        foreach ($author_data as $author) {
            DB::table('authors')->insert([
                'name' => (isset($author->name) ? $author->name : ''),
                'death_date' => (isset($author->death_date) ? $author->death_date : 0),
                // 'genres' => (isset($author->genres) ? $author->genres : ''),
                // 'influences' => (isset($author->influences) ? $author->influences : 0),
                'about' => (isset($author->about) ? $author->about : ''),
            ]);
        }

        DB::table('apirequests')->insert([
            'name' => 'Book - ID',
            'description' => 'Retrieves book by ID',
            'request' => 'api/v1/book/{id}',
            'request_type' => 'GET',
        ]);

        DB::table('apirequests')->insert([
            'name' => 'Book - Random',
            'description' => 'Retrieves a random book from the database',
            'request' => 'api/v1/book/random',
            'request_type' => 'GET',
        ]);

        DB::table('apirequests')->insert([
            'name' => 'Author - ID',
            'description' => 'Retrieves author by ID',
            'request' => 'api/v1/author/{id}',
            'request_type' => 'GET',
        ]);

        DB::table('apirequests')->insert([
            'name' => 'Author - Random',
            'description' => 'Retrieves a random author from the database',
            'request' => 'api/v1/author/random',
            'request_type' => 'GET',
        ]);

    }
}
