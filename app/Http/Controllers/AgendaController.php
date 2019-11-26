<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
  public function index() {
    return view('agenda');
  }

  public function showEvent($event_name) {
    // return 'Evenement: ' . $event_name;
    return view('agenda', ['event_name' => $event_name]);
  }
}
