<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;

use App\Models\User;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('author_manager/authors_manager', ['authors' => $authors]);
    }

    public function detail(Request $request) 
    {
        $author = Author::find($request->au_id);
        if(!$author)
            abort(403, "Somehing went wrong. This author doesn't exist in database. ");
        
        return view('author_manager/details', ['au' => $author]);
    }

    public function edit(Request $request) 
    {
        $author = Author::find($request->au_id);
        if(!$author)
            abort(403, "Somehing went wrong. This author doesn't exist in database. ");
        
        return view('author_manager/edit', ['au' => $author]);
    }
    
    public function update(Request $rq)
    {
        $author = Author::find($rq->au_id);
        if(!$author)
            abort(403, "Somehing went wrong. This author doesn't exist in database. ");

        $author->update([
            'name' => $rq->name,
            'date_of_birth' => $rq->birth,
            'place_of_live' => $rq->place,
            'biography' => $rq->bio,
        ]);

        return redirect('authors');
    }

    public function open_creator()
    {
        return view('author_manager/create');
    }

    public function create(Request $rq) {
        $author = Author::create([
            'name' => $rq->name,
            'date_of_birth' => $rq->birth,
            'place_of_live' => $rq->place,
            'biography' => $rq->bio,            
        ]);
        return redirect('authors');
    }

    public function delete(Request $request) 
    {
        $author = Author::find($request->au_id);
        if(!$author)
            abort(403, "Somehing went wrong. This author doesn't exist in database. ");
        
        $author->delete();
        return redirect('authors');
    }
}
