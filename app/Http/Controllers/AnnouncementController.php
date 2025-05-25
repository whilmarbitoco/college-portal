<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site = SiteInfo::find(1);
        return view('announcement', [
            'name' => $site->name,
            'acronym' => $site->acronym,
            'story' => $site->story,
            'background' => $site->background,
            'description' => $site->description,
            'mission' => $site->mission,
            'vision' => $site->vision,
            'values' => $site->values
        ]);
    }

    public function specific($id)
    {
        $site = SiteInfo::find(1);
        return view('announcement-specific', [
            'background' => $site->background,
            'name' => $site->name, 'acronym' => $site->acronym
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
