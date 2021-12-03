<?php

namespace App\Http\Controllers;

use App\Models\Pater;
use Illuminate\Http\Request;

/**
 * Class PaterController
 * @package App\Http\Controllers
 */
class PaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paters = Pater::paginate();

        return view('pater.index', compact('paters'))
            ->with('i', (request()->input('page', 1) - 1) * $paters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pater = new Pater();
        return view('pater.create', compact('pater'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pater::$rules);

        $pater = Pater::create($request->all());

        return redirect()->route('paters.index')
            ->with('success', 'Pater created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pater = Pater::find($id);

        return view('pater.show', compact('pater'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pater = Pater::find($id);

        return view('pater.edit', compact('pater'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pater $pater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pater $pater)
    {
        request()->validate(Pater::$rules);

        $pater->update($request->all());

        return redirect()->route('paters.index')
            ->with('success', 'Pater updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pater = Pater::find($id)->delete();

        return redirect()->route('paters.index')
            ->with('success', 'Pater deleted successfully');
    }
}
