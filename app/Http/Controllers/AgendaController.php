<?php

namespace App\Http\Controllers;

use App\Evenementen;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
  public function index() {
    return view('homepage.agenda');
  }

//  public function showEvent($event_name) {
//    // return 'Evenement: ' . $event_name;
//    return view('homepage.agenda', ['event_name' => $event_name]);
//  }

    public function showEvenementen() {
//        $evenementen = Evenementen::orderBy('created_at', 'desc')->get();
//        return view('homepage.agenda')->with('evenementen', $evenementen);
        return view('homepage.agenda')->with(['evenementen' => Evenementen::paginate(6)]);
    }

    public function showEvent($id)
    {
        $evenementen = Evenementen::orderBy('created_at', 'desc')->where('id',$id)->get();
        return view('homepage.detail', ['id' => $id])->with('evenementen', $evenementen[0]);
    }
}
