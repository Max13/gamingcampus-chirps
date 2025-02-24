<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $chirps = $request->user()->chirps()->orderBy('id', 'asc')->get();

        return view('chirps.index', [
            'tweets' => $chirps,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chirps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string|max:10',
        ]);

        $chirp = new Chirp;
        $chirp->content = $request->input('content');
        $chirp->author()->associate($request->user());
        $chirp->save();

        // Redirection vers l'index
        return redirect()->route('chirps.index');

        // Redirection vers CE chirp
        // return redirect()->route('chirps.show', ['chirp' => $chirp->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        return view('chirps.show', [
            'chirp' => $chirp,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        $chirp->delete();

        return redirect()->route('chirps.index');
    }
}
