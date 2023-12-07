<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Http\Requests\StoreWisataRequest;
use App\Http\Requests\UpdateWisataRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Session;
use Illuminate\Http\Request;
use File;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.wisatas.index', [
            'active' => 'wisatas',
            'wisatas' => Wisata::orderBy('judul', 'desc')
                ->filter(request(['search']))
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.wisatas.create', [
            'active' => 'wisatas',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWisataRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->move(public_path() . '/images/', 'img_' . Str::random(15) . '.jpg');
        }

        Wisata::create($validated);

        return redirect('/dashboard/wisatas')->with('success', 'Wisata telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        return view('dashboard.wisatas.preview', [
            'active' => 'wisatas',
            'wisata' => $wisata,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wisata $wisata)
    {
        return view('dashboard.wisatas.edit', [
            'wisata' => $wisata,
            'active' => 'wisatas',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWisataRequest $request, Wisata $wisata)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            // Delete the old thumbnail
            File::delete('images/' . $wisata->thumbnail);

            // Move the new thumbnail to the images directory
            $validated['thumbnail'] = $request->file('thumbnail')->move(public_path() . '/images/', 'img_' . Str::random(15) . '.jpg');
        } else {
            // If no new thumbnail provided, keep the existing one
            $validated['thumbnail'] = $wisata->thumbnail;
        }

        // Update the wisata with the validated data
        Wisata::where('id', $wisata->id)->update($validated);

        return redirect('/dashboard/wisatas')->with('success', 'Wisata telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wisata $wisata)
    {
        File::delete('images/' . $wisata->thumbnail);
        Wisata::destroy($wisata->id);
        return redirect('/dashboard/wisatas')->with('success', 'Wisata telah dihapus!');
    }
}
