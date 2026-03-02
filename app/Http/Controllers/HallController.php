<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class HallController extends Controller
{
    
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::Where('slug', request('category'))->first();
            $title = ' of ' . $category->name;
        }

        if (request('author')) {
            $author = Author::Where('slug', request('author'))->first();
            $title = ' by ' . $author->name;
        }

        $title = 'Hall' . $title;
        $books = Book::latest()
            ->search(request(['search', 'category', 'author']))
            ->paginate(10)
            ->withQueryString();

        return view('hall', compact('title', 'books'));
    }

    public function singleBook(Book $book)
    {
        $title = $book->name;
        return view('book', compact('title', 'book'));
    }

    public function GetByBook(Book $book)
    {
        $title = $book->name;

        return view('book', compact('title', 'book'));
    }

    public function GetByCategory(Category $category)
    {
        $title = 'Hall Category';
        $books = Book::where('category_id', $category->id)->paginate(10);
        $title = 'Books Of ' . $category->name;
        return view('hall', compact('title', 'books'));
    }

    public function GetByAuthor(Author $author)
    {
        $books = Book::where('author_id', $author->id)->paginate(10);
        $title = 'Books By ' . $author->name;
        return view('hall', compact('title', 'books'));
    }
}