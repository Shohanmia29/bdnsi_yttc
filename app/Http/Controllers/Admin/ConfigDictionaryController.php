<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConfigDictionary;
use Illuminate\Http\Request;

class ConfigDictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
       return view('admin.configDictionary.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'notice' => 'required',
            'about_us' => 'required',
            'terms_and_condition' => 'required',
            'privacy_policy' => 'required',
            'twitter_link'=>'required',
            'facebook_link'=>'required',
            'youtube_link'=>'required',
            'linkedin_link'=>'required',
        ]);
        $validated['created_at'] = now()->toDateTimeString();
        $config=ConfigDictionary::setMany($validated);
        $newHistory = array_merge(
            [$validated],
            ConfigDictionary::get('setting-history', [])
        );
        ConfigDictionary::set('setting-history', $newHistory);
        return response()->report($config,'Successfully Created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
