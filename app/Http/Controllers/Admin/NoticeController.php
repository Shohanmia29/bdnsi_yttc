<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    use ChecksPermission;
    protected $permissionPrefix = 'notice';
    public function index(Request $request)
    {
          if ($request->ajax()){
              return  datatables(Notice::query())->addIndexColumn()->toJson();
          }
         return view('admin.notice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validated=$request->validate([
                   'details'=>'required',
                   'bn_details'=>'required',
                   'ar_details'=>'required',
                   'image'=>'required',
          ]);
          Notice::create($validated);
          return response()->success("Successfully Created");
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
        Notice::findOrFail($id)->delete();
        return response()->success("Successfully Deleted");
    }
}
