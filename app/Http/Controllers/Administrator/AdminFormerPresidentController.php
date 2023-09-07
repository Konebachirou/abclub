<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Models\FormerPresident;
use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\FormerPresidentRequest;

class AdminFormerPresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lastPresidents = FormerPresident::all();
        return view('administrator.former_president.index', ['lastPresidents' => $lastPresidents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('administrator.former_president.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormerPresidentRequest $request)
    {
        FormerPresident::create($request->all());
        return redirect()->route('administrator.former_president.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormerPresident $formerPresident)
    {
        return View('administrator.former_president.show', ['formerPresident' => $formerPresident]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return View('administrator.former_president.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormerPresidentRequest $request, FormerPresident $formerPresident)
    {
        $formerPresident->update($request->all());
        return redirect()->route('administrator.former_president.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormerPresident $formerPresident)
    {
        $formerPresident->delete();
        return redirect()->route('administrator.former_president.index');
    }
}
