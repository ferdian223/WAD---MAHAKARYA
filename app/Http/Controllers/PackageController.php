<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('booking.index');
    }

    public function create($id)
    {
        $package = $this->getPackageById($id);
        return view('booking.create', ['package' => $package]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'package_id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'ktp_number' => 'required|string|max:20',
            'passport_number' => 'required|string|max:20',
        ]);

        // Get package details
        $package = $this->getPackageById($request->package_id);

        // Create booking record
        Booking::create([
            'package_id' => $request->package_id,
            'package_name' => $package->name,
            'name' => $request->name,
            'phone' => $request->phone,
            'ktp_number' => $request->ktp_number,
            'passport_number' => $request->passport_number,
            'price' => $package->price
        ]);

        return redirect()->route('booking.cart')->with('success', 'Booking berhasil ditambahkan ke keranjang!');
    }

    public function cart()
    {
        // Get all bookings
        $bookings = Booking::orderBy('created_at', 'desc')->get();
        
        return view('booking.cart', [
            'bookings' => $bookings
        ]);
    }

    private function getPackageById($id)
    {
        // Define package data
        $packages = [
            1 => [
                'id' => 1,
                'name' => 'Terlahir Kembali di Tanah Suci',
                'price' => 30900000,
                'description' => 'Program Syawal untuk perjalanan spiritual Anda',
                'guide' => 'Ustadz Ahmad',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC',
                'main_image' => 'img/syawal (3).png',
                'gallery_images' => [
                    'img/syawal (1).png',
                    'img/syawal (2).png',
                    'img/syawal (3).png',
                    'img/syawal (1).png',
                ]
            ],
            2 => [
                'id' => 2,
                'name' => 'Langkah Menuju Fitrah',
                'price' => 42500000,
                'description' => 'Program Syawal dengan fasilitas ekstra untuk kenyamanan Anda',
                'guide' => 'Ustadz Mahmud',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC',
                'main_image' => 'img/syawal (1).png',
                'gallery_images' => [
                    'img/syawal (1).png',
                    'img/syawal (2).png',
                    'img/syawal (3).png',
                    'img/syawal (1).png',
                ]
            ],
            3 => [
                'id' => 3,
                'name' => 'Langkah Menuju Fitrah Extra',
                'price' => 46800000,
                'description' => 'Program Syawal premium dengan fasilitas terbaik',
                'guide' => 'Ustadz Ibrahim',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC VIP',
                'main_image' => 'img/syawal (2).png',
                'gallery_images' => [
                    'img/syawal (1).png',
                    'img/syawal (2).png',
                    'img/syawal (3).png',
                    'img/syawal (1).png',
                ]
            ],
            4 => [
                'id' => 4,
                'name' => 'Paket Reguler 9 Hari',
                'price' => 27000000,
                'description' => 'Program Promo dengan durasi 9 hari yang ekonomis',
                'guide' => 'Ustadz Yusuf',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC',
                'main_image' => 'img/promo (2).png',
                'gallery_images' => [
                    'img/promo (1).png',
                    'img/promo (2).png',
                    'img/promo (3).png',
                    'img/promo (1).png',
                ]
            ],
            5 => [
                'id' => 5,
                'name' => 'Paket Reguler 12 Hari',
                'price' => 29300000,
                'description' => 'Program Promo dengan durasi 12 hari yang nyaman',
                'guide' => 'Ustadz Hamzah',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC',
                'main_image' => 'img/promo (3).png',
                'gallery_images' => [
                    'img/promo (1).png',
                    'img/promo (2).png',
                    'img/promo (3).png',
                    'img/promo (1).png',
                ]
            ],
            6 => [
                'id' => 6,
                'name' => 'Paket Mahakarya 9 Hari',
                'price' => 30500000,
                'description' => 'Program Promo spesial Mahakarya dengan pelayanan premium',
                'guide' => 'Ustadz Abdullah',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC VIP',
                'main_image' => 'img/promo (1).png',
                'gallery_images' => [
                    'img/promo (1).png',
                    'img/promo (2).png',
                    'img/promo (3).png',
                    'img/promo (1).png',
                ]
            ],
            7 => [
                'id' => 7,
                'name' => 'Penuhi Pangilannya Di Akhir Tahun',
                'price' => 32300000,
                'description' => 'Program November spesial akhir tahun',
                'guide' => 'Ustadz Umar',
                'destination' => 'Makkah & Madinah',
                'transportation' => 'Pesawat + Bus AC VIP',
                'main_image' => 'img/november.png',
                'gallery_images' => [
                    'img/november.png',
                    'img/november.png',
                    'img/november.png',
                    'img/november.png',
                ]
            ]
        ];

        return (object) ($packages[$id] ?? null);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        
        return redirect()->route('booking.cart')->with('success', 'Booking berhasil dihapus dari keranjang!');
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.edit', ['booking' => $booking]);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'ktp_number' => 'required|string|max:20',
            'passport_number' => 'required|string|max:20',
        ]);

        $booking->update($validated);

        return redirect()->route('booking.cart')
            ->with('success', 'Booking berhasil diperbarui!');
    }
}
