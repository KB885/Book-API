<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function random()
    {
        return $this->createResponse(Book::inRandomOrder()->limit(1)->first());
    }

    public function book($id)
    {
        $book = Book::query()
            ->where('id', $id)
            ->select('id', 'title', 'author', 'language', 'num_pages', 'publish_date')
            ->get();

        return $this->createResponse($book);
    }

    public function createResponse($book)
    {
        if($book == null)
        {
            return response()->json([
                'status' => 404,
                'reason' => 'Book was not found',
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'data' => $book,
        ], 200);
    }
}
