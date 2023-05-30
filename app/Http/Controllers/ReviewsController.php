<?php
use App\Models\Books;
use App\Models\Reviews;
use App\Models\User;
namespace App\Http\Controllers;

use App\Models\User;
use Database\Seeders\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function show($id, $idCategory) {
        $books = Review::find($idReview)->Book;
        $user = User::find($id);
        return view("home", compact("books", "user"));
    }
}
