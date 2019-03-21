<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends CommonController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(Company $company)
    {
        //dd($company->id);
        return view('companies.edit', compact('company'));
    }

    public function update(Company $company, Request $request)
    {
        $company->update($request->only([
            'province',
            'city',
            'district',
            'address',
            'mobile',
        ]));

        return redirect()->route('store.index');
    }
}
