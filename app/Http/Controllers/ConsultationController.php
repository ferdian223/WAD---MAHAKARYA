<?php

namespace App\Http\Controllers;

use App\Models\consultations;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'passport_number' => 'required|string|max:20',
            'consultation_topic' => 'required|string',
            'consultation_date' => 'required|date',
            'ustad_name' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Simpan data
        consultations::create($request->all());

        return redirect()->back()->with('success', 'Jadwal konsultasi berhasil dibuat.');
    }
    public function schedule()
    {
        return view('consultations.schedule');
    }
    
}
