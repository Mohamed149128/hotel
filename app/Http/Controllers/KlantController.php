<?php

namespace App\Http\Controllers;

use App\Models\klant;

use Illuminate\Http\Request;

class KlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klant = klant::paginate(9);

        return view('klant.index', compact('klant'))->with(request()->input('page'));



    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klant.create');

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
            'klantnaam' => 'required',
            'adres'=> 'required',
            'creditkaartnummer'=> 'required',

        ]);

        // Maakt een nieuwe klant in database
        klant::create($request-> all());

        //vriendelijke bericht na versturen
        return redirect()->route('klant.index')->with('success','klant is succesvol toegevoegd');

    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Models\klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function show(klant $klant)
    {
        //
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function edit(klant $klant)
    {
        return view('klant.edit', compact('klant'));

    }






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, klant $klant)
    {
        $request-> validate([
            'klantnaam'=> 'required',
            'adres'=> 'required',
            'creditkaartnummer'=> 'required',
        ]);


        // Maakt een nieuwe soortklant in database
        $klant->update($request-> all());

        //vriendelijke bericht na versturen
        return redirect()->route('klant.index')->with('success','klant is succesvol geupdate');
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function destroy(klant $klant)
    {
        // delete
        $klant->delete();

        //return the user with mooi bericht erbij
        return redirect()->route('klant.index')->with('success','klant is verwijderd');    }
}
