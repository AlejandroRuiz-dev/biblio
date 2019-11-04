<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\bookModel;

class bookController extends Controller
{
    public function getBooks()
    {
        $books = bookModel::all();
        foreach ($books as $key => $value) {
            print($value);
        }
    }

    public function addBooks(Request $request)
    {
        $book = new bookModel;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->save();
    }
}
