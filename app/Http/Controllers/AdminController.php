<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evenementen;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function showEvenementen()
    {
        $evenementen = Evenementen::orderBy('created_at', 'desc')->get();
        return view('admin.evenementen')->with('evenementen', $evenementen);
    }

    public function addEvenementen()
    {
        return view('admin.toevoegen');
    }

    // Initialize evenementen
    public function storeEvenementen(Request $request)
    {
        $imagePath = $request->evenementImage->storeAs('public/images', $request->evenementImage->getClientOriginalName());

        $evenementen = new Evenementen();
        $evenementen->naam = $request->evenementNaam;
        $evenementen->beschrijving = $request->evenementBeschrijving;
        $evenementen->samenvatting = $request->evenementSamenvatting;
        $evenementen->locatie = $request->evenementLocatie;
        $evenementen->datum = $request->evenementDatum;
        $evenementen->begintijd = $request->evenementBegintijd;
        $evenementen->eindtijd = $request->evenementEindtijd;
        $evenementen->totalTicket = $request->evenementTicketAantal;
        $evenementen->eventPrice = $request->evenementPrijs;
        $evenementen->imagepad = $imagePath;
        $evenementen->imagenaam = $request->evenementImage->getClientOriginalName();
        $evenementen->bodyColor = $request->evenementBodyColor;
        $evenementen->headerColor = $request->evenementHeaderColor;
        $evenementen->accentColor = $request->evenementAccentColor;


        $evenementen->save();

        // Successfully saved
        // Flash is beying used to destroy the session variable
        session()->flash('Gelukt', 'Evenement ' . $evenementen->naam . ' succesvol toegevoegd');

        return redirect()->back();
    }
}
