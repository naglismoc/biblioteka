<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->surname = $request->surname;
        $author->age = $request->age;
        $author->save();
        return redirect()->route('authors.index')->with('success_message', 'Autorius sėkmingai sukurtas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('authors.edit', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $author->name = $request->name;
        $author->surname = $request->surname;
        $author->age = $request->age;
        $author->save();
        return redirect()->route('authors.index')->with('success_message', 'Autorius sėkmingai atnaujintas');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
      if($author->books()->count() > 0){
        

        return redirect()->route('authors.index')->with('info_message', 'Autorius '. $author->name.' '. $author->surname .' negali būti ištrintas. Parašytų knygų yra: '.$author->books()->count());
      }
        $author->delete();
        return redirect()->route('authors.index')->with('success_message', 'Autorius sėkmingai ištrintas');
    }
}
