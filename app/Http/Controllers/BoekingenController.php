<?php

namespace App\Http\Controllers;

use App\Models\Boekingen;

use Illuminate\Http\Request;

class BoekingenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boekingen = boekingen::paginate(9);

        return view('boekingen.index', compact('boekingen'))->with(request()->input('page'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boekingen.create');

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
            'aankomstdatum' => 'required',
            'vertrekdatum'=> 'required',
        ]);

        // Maakt een nieuwe boekingen in database
        boekingen::create($request-> all());

        //vriendelijke bericht na versturen
        return redirect()->route('boekingen.index')->with('success','boeking is succesvol toegevoegd');


    }








    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boekingen  $boekingen
     * @return \Illuminate\Http\Response
     */
    public function show(Boekingen $boekingen)
    {
        //
    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boekingen  $boekingen
     * @return \Illuminate\Http\Response
     */
    public function edit(Boekingen $boekingen)
    {
        return view('boekingen.edit', compact('boekingen'));

    }






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boekingen  $boekingen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boekingen $boekingen)
    {
        $request-> validate([
            'vertrekdatum' => 'required',
            'aankomstdatum'=> 'required',
        ]);



        // Maakt een nieuwe soortkamer in database
        $boekingen->update($request-> all());

        //vriendelijke bericht na versturen
        return redirect()->route('boekingen.index')->with('success','boeking is succesvol geupdate');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boekingen  $boekingen
     * @return \Illuminate\Http\Response

     */
    public function destroy(boekingen $boekingen)
    {
        // delete
        $boekingen->delete();

        //return the user with mooi bericht erbij
        return redirect()->route('boekingen.index')->with('success','boeking is verwijderd');


    }
}
