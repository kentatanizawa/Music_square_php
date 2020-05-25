<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtistBoard;
use Validator;

class ArtistBoardController extends Controller
{
    public function index()
    {
        $artistboards = ArtistBoard::all();
        return view('artist_boards.index', compact('artistboards'));
    }

    public function show($id)
    {
        return view('artist_boards.show', ['artistboard' => $artistboard]);
    }

    public function create()
    {
        return view('artist_boards.create');
    }

    public function store(Request $request)
    {
        $artistboard = new ArtistBoard;
        $artistboard->artist_name = $request->artist_name;
        $artistboard->icon_image = $request->icon_image;
        $artistboard->save();
        return redirect('artist_boards/'.$artistboard->id);
    }

    public function edit(ArtistBoard $artistboard)
    {
        return view('artist_boards.edit', ['artistboard' => $artistboard]);
    }

    public function update(Request $request, ArtistBoard $artistboard)
    {
        $artistboard->artist_name = $request->artist_name;
        $artistboard->save();
        return redirect('artist_boards/'.$artistboard->id);
    }

    public function destroy(ArtistBoard $artistboard)
    {
        $artistboard->delete();
        return redirect('artist_boards.index');
    }


}
