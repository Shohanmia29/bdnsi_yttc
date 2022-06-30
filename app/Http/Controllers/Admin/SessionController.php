<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Session::query())->toJson();
        }

        return view('admin.session.index');
    }

    public function create()
    {
        return view('admin.session.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        return response()->report(Session::create($validated), 'Session Created successfully');
    }

    public function show(Session $session)
    {
        //
    }

    public function edit(Session $session)
    {
        //
    }

    public function update(Request $request, Session $session)
    {
        //
    }

    public function destroy(Session $session)
    {
        //
    }
}
