<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingController extends Controller
{
    public function exportPDF(Booking $booking)
    {
        $pdf = PDF::loadView('booking.pdf', compact('booking'));
        return $pdf->download('booking-'.$booking->id.'.pdf');
    }
}
