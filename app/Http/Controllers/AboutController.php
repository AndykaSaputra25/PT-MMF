<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();

        return view('about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);

        $request->validate([
            'logo' => 'nullable|image',
            'icon' => 'nullable|image',
            'name_1' => 'required',
            'name_2' => 'required',
            'name_3' => '',
            'meet' => 'required',
            'service' => 'required',
            'desk_1' => 'required',
            'desk_2' => 'required',
            'desk_3' => '',
            'alamat_1' => 'required',
            'alamat_2' => 'required',
            'alamat_3' => '',
            'maps_1' => 'required',
            'maps_2' => 'required',
            'maps_3' => '',
        ]);

        $input = $request->all();

        if ($request->hasFile('logo') || $request->hasFile('icon')) {
            $destinationPath = 'image/';

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = $logo->getClientOriginalName();
                $logo->move($destinationPath, $logoName);
                $input['logo'] = $logoName;
            }

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = $icon->getClientOriginalName();
                $icon->move($destinationPath, $iconName);
                $input['icon'] = $iconName;
            }
        } else {
            unset($input['logo']);
            unset($input['icon']);
        }

        $about->update($input);

        return redirect('/admin/about')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
