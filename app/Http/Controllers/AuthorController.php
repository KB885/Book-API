<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function random()
    {
        return $this->createResponse(Author::inRandomOrder()->limit(1)->first());
    }

    public function author($id)
    {
        $author = Author::query()
            ->where('id', $id)
            ->select('id', 'name', 'death_date', 'about')
            ->get();

        return $this->createResponse($author);
    }

    public function createResponse($author)
    {
        if($author == null)
        {
            return response()->json([
                'status' => 404,
                'reason' => 'Author was not found',
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'data' => $author,
        ], 200);
    }
}
