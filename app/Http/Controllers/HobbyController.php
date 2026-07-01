<?php

namespace App\Http\Controllers;
use App\Models\Hobby;
use App\Models\Profile;
use Illuminate\Http\Request;

class HobbyController extends Controller
{

    public function index(){
    $hobbies = Hobby::with('profile')->oldest()->get();
    return view('hobbies.index', compact('hobbies'));
    }
    
    public function create(){
        $profiles = Profile::oldest() -> get(); 
        return view('hobbies.create', compact ('profiles'));
    }

    public function store(Request $request){
    $validated = $request->validate([
    'profile_id' => 'required|exists:profiles,id',
    'hobi' => 'required|max:50',
]);
    Hobby::create($validated);

        return redirect()
            ->route('hobbies.index')
            ->with('success', 'Hobi berhasil ditambahkan.');
    }
    
    public function destroy(Hobby $hobby){
    $hobby->delete();

        return redirect()
            ->route('hobbies.index')
            ->with('success', 'Hobi berhasil dihapus.');
    }
}
