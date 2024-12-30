<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('feedback.index', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Feedback berhasil ditambahkan!');
    }

    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $feedback->update($request->all());

        return redirect()->back()->with('success', 'Feedback berhasil diupdate!');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->back()->with('success', 'Feedback berhasil dihapus!');
    }
}
