<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('guest.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:comics', 'max:5'],
            'description' => ['required'],
            'thumb' => ['required'],
            'price' => ['required', 'max:10'],
            'series' => ['required', 'max:15'],
            'sale_date' => ['required', 'max:25'],
            'type' => ['required', 'max:50'],
        ]);
        $data = $request->all();
        $newComic = Comic::create($data);
        // $newComic = new Comic();
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->save();
        return redirect()->route('guest.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);

        return view('guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        // $comic = Comic::findOrFail($id);

        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $validatedData = $request->validate([
            'title' => ['required', 'unique:comics', 'max:5', Rule::unique('comics')->ignore($comic->id)],
            'description' => ['required'],
            'thumb' => ['required'],
            'price' => ['required', 'max:10'],
            'series' => ['required', 'max:15'],
            'sale_date' => ['required', 'max:25'],
            'type' => ['required', 'max:50'],
        ]);
        // $comic = Comic::findOrFail($id);
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('guest.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
