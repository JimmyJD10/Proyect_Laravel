<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $courses = ['Desarrollo de Software', 'Base de Datos', 'Ing. Requerimientos', 'Algoritmos']; // Ejemplo de cursos
        return view('notes.create', compact('courses'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required|string|max:255',
            'note' => 'required|string|max:1000',
        ]);
    
        // Lógica para almacenar la nota
        Note::create([
            'course' => $request->course,
            'note' => $request->note,
            'user_id' => auth()->id(),
        ]);
    
        return redirect()->route('notes.index')->with('success', 'Nota creada exitosamente.');

    }

    public function index()
{
    $notes = Note::where('user_id', auth()->id())->get();
    return view('notes.index', compact('notes'));
}
}    

