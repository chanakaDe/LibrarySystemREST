<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/11/16
 * Time: 2:20 PM
 */


namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller
{

    public function index()
    {

        $Books = Book::all();

        return response()->json($Books);

    }

    public function getBook($id)
    {
        $Book = Book::where('book_id', '=', $id)->get();

        return response()->json($Book);
    }

    public function createBook(Request $request)
    {

        $Book = Book::create($request->all());

        return response()->json($Book);

    }

    public function deleteBook($id)
    {
//        $Book = Book::find($id);
        $Book = Book::where('book_id', '=', $id);
        $Book->delete();

        return response()->json('deleted');
    }

    public function updateBook(Request $request, $id)
    {
        $Book = Book::where('book_id', '=', $id)
            ->update(['title' => $request->input('title'), 'author' => $request->input('author'),
                'isbn' => $request->input('isbn'), 'publisher' => $request->input('publisher'),
                'publication_date' => $request->input('publication_date'), 'copies_count' => $request->input('copies_count'),
                'available_copies' => $request->input('available_copies'), 'description' => $request->input('description')
            ]);

        return response()->json($Book);
    }

}
