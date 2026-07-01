<?php
namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index()
{
    $profiles = Profile::oldest()->get();
    return view('profiles.index', compact('profiles'));
}

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    { $validated = $request->validate([
    'nama_lengkap' => 'required|max:50',
    'tempat_lahir' => 'required|max:50',
    'alamat' => 'required|max:50',
]);
    Profile::create($validated);

        return redirect()
            ->route('profiles.index')
            ->with('success', 'Profile berhasil ditambahkan.');
    }

    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
    return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
      $validated = $request->validate([
    'nama_lengkap' => 'required|max:50',
    'tempat_lahir' => 'required|max:50',
    'alamat'       => 'required|max:50',
]);

    $profile->update($validated);

    return redirect()
        ->route('profiles.index')
        ->with('success', 'Profile berhasil diperbarui.');
    }

    public function destroy(Profile $profile)
    {
         $profile->delete();

        return redirect()
            ->route('profiles.index')
            ->with('success', 'Profile berhasil dihapus.');
    }
}