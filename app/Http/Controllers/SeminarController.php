<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::all(); // Menampilkan semua seminar
        return view('Seminar.index', compact('seminars')); // Pastikan variabel sesuai
    }

    public function create()
    {
        return view('Seminar.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'type' => 'required|in:online,offline',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        Seminar::create($validated);
        return redirect()->route('Seminar.index')->with('success', 'Seminar berhasil ditambahkan.');
    }

    public function show($id)
    {
        $seminar = Seminar::findOrFail($id);
        return view('Seminar.show', compact('seminar'));
    }

    public function edit($id)
    {
        $seminar = Seminar::findOrFail($id);
        return view('Seminar.edit', compact('seminar'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'type' => 'required|in:online,offline',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $seminar = Seminar::findOrFail($id);
        $seminar->update($validated);

        return redirect()->route('Seminar.index')->with('success', 'Seminar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $seminar = Seminar::findOrFail($id);
        $seminar->delete();

        return redirect()->route('Seminar.index')->with('success', 'Seminar berhasil dihapus.');
    }
}
