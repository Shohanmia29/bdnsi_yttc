<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    use ChecksPermission;

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
            'duration' => 'required|numeric',
        ]);

        return response()->report(Session::create($validated), 'Session Created successfully');
    }

    public function edit(Session $session)
    {
        return view('admin.session.edit', compact('session'));
    }

    public function update(Request $request, Session $session)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'duration' => 'required|numeric',
        ]);

        return response()->report($session->update($validated), 'Session Updated successfully');
    }

    public function destroy(Session $session)
    {
        return response()->report($session->delete(), 'Session deleted successfully');
    }
}
