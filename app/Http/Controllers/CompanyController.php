<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
{
    $companies = Company::oldest()->get();
    return view('companies.index', compact('companies'));
}

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    { $validated = $request->validate([
    'nama_perusahaan' => 'required|max:50',
    'kelas' => 'nullable|max:5',
    'alamat' => 'required|max:50',
]);
    Company::create($validated);

        return redirect()
            ->route('companies.index')
            ->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    public function edit(Company $company)
    {
    return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    { $validated = $request->validate([
    'nama_perusahaan' => 'required|max:50',
    'kelas' => 'nullable|max:5',
    'alamat' => 'required|max:50',
]);
    $company->update($validated);

        return redirect()
            ->route('companies.index')
            ->with('success', 'Perusahaan berhasil diperbaharui.');
    }

    public function destroy(Company $company)
    {
         $company->delete();

        return redirect()
            ->route('companies.index')
            ->with('success', 'Perusahaan berhasil dihapus.');
    }
}
