<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view ('Comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required|max:255',
        'thumb' =>'max:255',
        'price' => 'required|max:10',
        'sale_date'  => 'require|date',
        'type' =>'require|max:255'
       ]);

        $form_data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($form_data);
        
        $new_comic->save();
        
        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic )
    {
        return view ('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic )
    {
          return view ('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
        'title' => 'required|max:255',
        'thumb' =>'max:255',
        'price' => 'required|max:10',
        'sale_date'  => 'require|date',
        'type' =>'require|max:255'
       ]);
        
        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
