<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evenementen;

class AdminController extends Controller
{
  public function index() {
    return view('admin.admin');
  }

  public function showEvenementen() {
    $evenementen = Evenementen::orderBy('created_at', 'desc')->get();
    return view('admin.evenementen')->with('evenementen', $evenementen);
  }

  public function addEvenementen() {
    return view('admin.toevoegen');
  }

  public function storeEvenementen(Request $request) {
    // Initialize evenementen
    $evenementen = new Evenementen();
    $evenementen->naam = $request->evenementNaam;
    $evenementen->beschrijving = $request->evenementBeschrijving;
    $evenementen->samenvatting = $request->evenementSamenvatting;
    $evenementen->locatie = $request->evenementLocatie;
    $evenementen->datum = $request->evenementDatum;
    $evenementen->begintijd = $request->evenementBegintijd;
    $evenementen->eindtijd = $request->evenementEindtijd;

    $evenementen->save();

    return redirect()->back();
  }
}
