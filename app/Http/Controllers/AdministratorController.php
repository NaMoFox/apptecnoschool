<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;

/**
 * Class AdministratorController
 * @package App\Http\Controllers
 */
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrators = Administrator::paginate();

        return view('administrator.index', compact('administrators'))
            ->with('i', (request()->input('page', 1) - 1) * $administrators->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $administrator = new Administrator();
        return view('administrator.create', compact('administrator'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Administrator::$rules);

        $administrator = Administrator::create($request->all());

        return redirect()->route('administrator.index')
            ->with('success', 'Administrator created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrator = Administrator::find($id);

        return view('administrator.show', compact('administrator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrator = Administrator::find($id);

        return view('administrator.edit', compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Administrator $administrator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrator $administrator)
    {
        request()->validate(Administrator::$rules);

        $administrator->update($request->all());

        return redirect()->route('administrator.index')
            ->with('success', 'Administrator updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $administrator = Administrator::find($id)->delete();

        return redirect()->route('administrator.index')
            ->with('success', 'Administrator deleted successfully');
    }
}
