<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class SiteController extends Controller
{
    // Métodos para mostrar las diferentes vistas de la aplicación
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function events()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Evento registrado exitosamente.');
    }
}
