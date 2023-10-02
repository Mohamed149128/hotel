<?php

namespace App\Http\Controllers;

use App\Models\Kamer;

use Illuminate\Http\Request;

class KamerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamer = kamer::paginate(9);

        return view('kamer.index', compact('kamer'))->with(request()->input('page'));



    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamer.create');
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate de input


        $request-> validate([
            'soortkamer' => 'required',
            'kamernummer'=> 'required',
            'kameropervlakte'=> 'required',
            'aantalpersonen'=> 'required',
            'kamerbad'=> 'required',
            'prijspernacht'=> 'required',
        ]);


        // Maakt een nieuwe soortkamer in database
        kamer::create($request-> all());

        //vriendelijke bericht na versturen
        return redirect()->route('kamer.index')->with('success','kamer is succesvol toegevoegd');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamer  $kamer
     * @return \Illuminate\Http\Response
     */
    public function show(Kamer $kamer)
    {
        return view('kamer.show', compact('kamer'));

    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamer  $kamer
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamer $kamer)
    {
        return view('kamer.edit', compact('kamer'));
    }







    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamer  $kamer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamer $kamer)
    {
        $kamer->kamerminibar = $request->has('kamerminibar') ? 1 : 0;

        $request-> validate([
            'soortkamer' => 'required',
            'kamernummer'=> 'required',
            'kameropervlakte'=> 'required',
            'aantalpersonen'=> 'required',
            'kamerbad'=> 'required',
            'prijspernacht'=> 'required',



            ]);



        // Maakt een nieuwe soortkamer in database
        $kamer->update($request-> all());

        //vriendelijke bericht na versturen
        return redirect()->route('kamer.index')->with('success','Kamer is succesvol geupdate');
    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamer  $kamer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamer $kamer)
    {
        // delete
        $kamer->delete();

        //return the user with mooi bericht erbij
        return redirect()->route('kamer.index')->with('success','Kamer is verwijderd');


    }
}
