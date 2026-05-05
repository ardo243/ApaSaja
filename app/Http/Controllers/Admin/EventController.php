<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Category; // Tambahkan ini supaya bisa panggil Category langsung
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menggunakan alias Event karena sudah di-import di atas
        $events = Event::with('category')->latest()->paginate(10);
        return view('admin.events.index', compact('events')); 
        // Catatan: Pastikan path view benar (biasanya admin.events.index)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
   /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $data = $request->validate([
        'category_id' => 'required',
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'date'        => 'required|date',
        'location'    => 'required|string|max:255',
        'price'       => 'required|numeric',
        'stock'       => 'required|numeric',
        'poster_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Validasi file gambar
    ]);

    // Cek apakah ada file yang diupload
    if ($request->hasFile('poster_path')) {
        // Simpan file ke folder storage/app/public/events
        $path = $request->file('poster_path')->store('events', 'public');
        // Masukkan path file ke array data untuk disimpan ke DB
        $data['poster_path'] = $path;
    }

    \App\Models\Event::create($data);

    return redirect()->route('admin.events.index')->with('success', 'Data Event berhasil ditambahkan.');
}
    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'date'        => 'required|date',
            'location'    => 'required|string|max:255',
            'price'       => 'required|numeric',
            'stock'       => 'required|numeric',
            'poster_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('poster_path')) {
            $path = $request->file('poster_path')->store('events', 'public');
            $data['poster_path'] = $path;
        }

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Rincian data event berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Data event berhasil dihapus.');
    }
}