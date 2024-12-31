<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->message = $request->message;
        $feedback->save();
    
        return redirect()->route('feedback');
    }
    
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('feedback');
    }
    
    public function update(Request $request, Feedback $feedback)
    {
        $feedback->name = $request->name;
        $feedback->message = $request->message;
        $feedback->save();
    
        return redirect()->route('feedback'); 
    }
    
}
