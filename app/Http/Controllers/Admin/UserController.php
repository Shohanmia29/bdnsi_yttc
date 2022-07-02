<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Http\Controllers\Controller;
use App\Models\Center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(User::query())->toJson();
        }

        return view('admin.user.index');
    }


    public function create()
    {
        return view('admin.user.create', [
            'centers' => Center::select(['id','name'])->whereStatus(CenterStatus::Approved)->get()
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|confirmed',
            'center_id' => 'required|exists:centers,id',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        return response()->report(User::create($validated), 'User created successfully');
    }


    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user,
            'centers' => Center::select(['id','name'])->whereStatus(CenterStatus::Approved)->get()
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => ['required', Rule::unique('users')->ignore($user->id)],
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users')->ignore($user->id)],
            'phone' => ['required', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|confirmed',
            'center_id' => 'required|exists:centers,id',
        ]);

        if (isset($validated['password']) && $validated['password']) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        return response()->report(
            $user->update($validated),
            'User updated successfully'
        );
    }

    public function destroy(User $user)
    {
        return response()->report($user->delete(), 'User deleted successfully');
    }

    public function portal(User $user)
    {
        abort_if(!Auth::user()->isA('admin'), 403);
        $cid = uniqid();
        Cache::put($cid, [
            'user_id' => $user->id,
            'ip' => \request()->ip()
        ], 60);
        $url = URL::temporarySignedRoute(
            'portal', now()->addMinute(), ['user' => $user->id, 'cid' => $cid]
        );
        return <<<HTML
<body style="padding: 2rem;">
Open <a href="$url" target="_blank">$url</a> in incognito window.
<script type="text/javascript">
window.onblur = function() {
  window.close();
}
</script>
</body>
HTML;
    }
}
