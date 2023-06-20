<?php

namespace App\Http\Controllers;

use App\Models\Klant;
use App\Models\User;
use Illuminate\Http\Request;

class KlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //make the join between users, adres and gezin
        $klanten = User::join('adres', 'adres.id', '=', 'users.adres_id')
            ->join('gezin', 'gezin.id', '=', 'users.gezin_id')
            ->join('wensen', 'wensen.id', '=', 'users.wensen_id')
            ->select('users.id', 'users.voornaam', 'users.tussenvoegsel', 'users.achternaam', 'users.email', 'users.telefoonnummer', 'adres.straatnaam', 'adres.huisnummer', 'adres.postcode', 'adres.plaats', 'gezin.aantal_kinderen', 'gezin.aantal_volwassenen', 'gezin.aantal_babys', 'wensen.wensen', 'wensen.allergie', 'gezin.gezin_naam')
            ->get();

        //return the view with the data
        return view('klant.index', ['klanten' => $klanten]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'id' => $request->input('id'),
            'gezin_naam' => $request->input('gezin_naam'),
            'voornaam' => $request->input('voornaam'),
            'tussenvoegsel' => $request->input('tussenvoegsel'),
            'achternaam' => $request->input('achternaam'),
            'aantal_kinderen' => $request->input('aantal_kinderen'),
            'aantal_volwassenen' => $request->input('aantal_volwassenen'),
            'aantal_babys' => $request->input('aantal_babys'),
            'wensen' => $request->input('wensen'),
            'allergie' => $request->input('allergie'),
            'straatnaam' => $request->input('straatnaam'),
            'huisnummer' => $request->input('huisnummer'),
            'postcode' => $request->input('postcode'),
            'plaats' => $request->input('plaats'),
            'email' => $request->input('email'),
            'telefoonnummer' => $request->input('telefoonnummer'),
        ]);

        //redirect to the index
        return redirect()->route('klant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $klanten = User::join('adres', 'adres.id', '=', 'users.adres_id')
            ->join('gezin', 'gezin.id', '=', 'users.gezin_id')
            ->join('wensen', 'wensen.id', '=', 'users.wensen_id')
            ->select('users.id', 'users.voornaam', 'users.tussenvoegsel', 'users.achternaam', 'users.email', 'users.telefoonnummer', 'adres.straatnaam', 'adres.huisnummer', 'adres.postcode', 'adres.plaats', 'gezin.aantal_kinderen', 'gezin.aantal_volwassenen', 'gezin.aantal_babys', 'wensen.wensen', 'wensen.allergie', 'gezin.gezin_naam')
            ->where('users.id', '=', $id)
            ->get();
        //dd($klanten);
        //return the view with the data
        return view('klant.show')->with('klanten', $klanten);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // function for edit product
    public function edit($id)
    {
        //make an inner join and make a funtion edit function
        $klanten = User::join('adres', 'adres.id', '=', 'users.adres_id')
            ->join('gezin', 'gezin.id', '=', 'users.gezin_id')
            ->join('wensen', 'wensen.id', '=', 'users.wensen_id')
            ->select('users.id', 'users.voornaam', 'users.tussenvoegsel', 'users.achternaam', 'users.email', 'users.telefoonnummer', 'adres.straatnaam', 'adres.huisnummer', 'adres.postcode', 'adres.plaats', 'gezin.aantal_kinderen', 'gezin.aantal_volwassenen', 'gezin.aantal_babys', 'wensen.wensen', 'wensen.allergie', 'gezin.gezin_naam')
            ->where('users.id', '=', $id)
            ->get();

        //return the view with the data
        return view('klant.edit')->with('klanten', $klanten);
    }

    // function for update product
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'gezin_naam' => $request->input('gezin_naam'),
            'voornaam' => $request->input('voornaam'),
            'tussenvoegsel' => $request->input('tussenvoegsel'),
            'achternaam' => $request->input('achternaam'),
            'aantal_kinderen' => $request->input('aantal_kinderen'),
            'aantal_volwassenen' => $request->input('aantal_volwassenen'),
            'aantal_babys' => $request->input('aantal_babys'),
            'wensen' => $request->input('wensen'),
            'allergie' => $request->input('allergie'),
            'straatnaam' => $request->input('straatnaam'),
            'huisnummer' => $request->input('huisnummer'),
            'postcode' => $request->input('postcode'),
            'plaats' => $request->input('plaats'),
            'email' => $request->input('email'),
            'telefoonnummer' => $request->input('telefoonnummer'),
        ]);

        //redirect to the index
        return redirect()->route('klant.index', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //make a delete function where it gets deleted connected to the id
        User::where('id', $id)->delete();

        //redirect to the index
        return redirect()->route('klant.index');
    }
}
