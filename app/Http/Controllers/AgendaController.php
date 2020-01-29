<?php

namespace App\Http\Controllers;

use App\Evenementen;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
  public function index() {
    return view('homepage.agenda');
  }

    public function showEvenementen() {
        return view('homepage.agenda')->with(['evenementen' => Evenementen::paginate(6)]);
    }

    public function showEvent($id)
    {
        $evenementen = Evenementen::orderBy('created_at', 'desc')->where('id',$id)->get();
        return view('homepage.detail', ['id' => $id])->with('evenementen', $evenementen[0]);
    }
}
