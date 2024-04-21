<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fairytale;
use App\Models\User;


class FairytaleController extends Controller
{
    public function index()
    {
        $frt = Fairytale::all();

        return view('fairytale_manager/fairytale_manager', ['fr' => $frt]);
    }

    public function detail(Request $request) 
    {
        $frt = Fairytale::find($request->fr_id);
        if(!$frt)
            abort(403, "Somehing went wrong. This frt doesn't exist in database. ");
        
        return view('fairytale_manager/details', ['fr' => $frt]);
    }

    public function edit(Request $request) 
    {
        $frt = Fairytale::find($request->fr_id);
        if(!$frt)
            abort(403, "Somehing went wrong. This frt doesn't exist in database. ");
        
        return view('fairytale_manager/edit', ['fr' => $frt]);
    }
    
    public function update(Request $rq)
    {
        $frt = Fairytale::find($rq->fr_id);
        if(!$frt)
            abort(403, "Somehing went wrong. This frt doesn't exist in database. ");

        $frt->update([
            'name' => $rq->name,
            'date_of_birth' => $rq->birth,
            'place_of_live' => $rq->place,
            'biography' => $rq->bio,
        ]);

        return redirect('fairytale');
    }

    public function open_creator()
    {
        return view('fairytale_manager/creator');
    }

    public function create(Request $rq) {
        $frt = Fairytale::create([
            'name' => $rq->name,
            'date_of_birth' => $rq->birth,
            'place_of_live' => $rq->place,
            'biography' => $rq->bio,            
        ]);
        return redirect('fairytale');
    }

    public function delete(Request $request) 
    {
        $frt = Fairytale::find($request->fr_id);
        if(!$frt)
            abort(403, "Somehing went wrong. This frt doesn't exist in database. ");
        
        $frt->delete();
        return redirect('fairytale');
    }
}
