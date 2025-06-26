<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\SiteInfoRequest;
use App\Models\SiteInfo;
use Arr;
use Illuminate\Http\Request;
use Str;
use Validator;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function updateSiteInfo(SiteInfoRequest $request)
    {
        $info = SiteInfo::first();
        $data = $request->validated();

        $data = Arr::except($data, ['background', 'logo']);

        if ($request->hasFile('background')) {
            $background = $request->file('background');
            $filename = "wb-" . Str::uuid() . '.' . $background->getClientOriginalExtension();
            $path = $background->storeAs('images', $filename, "public");

            $info->background = $path;
            $info->save();
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $filename = "wb-" . Str::uuid() . '.' . $logo->getClientOriginalExtension();
            $path = $background->storeAs('images', $filename, "public");

            $info->logo = $path;
            $info->save();
        }

        $info->update($data);

        return redirect()
            ->route('admin.settings')
            ->with('success', 'Website Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
