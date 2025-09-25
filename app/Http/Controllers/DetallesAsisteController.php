<?php

namespace App\Http\Controllers;

use App\Models\DetallesAsiste;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetallesAsisteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetallesAsisteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detallesAsistes = DetallesAsiste::paginate();

        return view('detalles-asiste.index', compact('detallesAsistes'))
            ->with('i', ($request->input('page', 1) - 1) * $detallesAsistes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detallesAsiste = new DetallesAsiste();

        return view('detalles-asiste.create', compact('detallesAsiste'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetallesAsisteRequest $request): RedirectResponse
    {
        DetallesAsiste::create($request->validated());

        return Redirect::route('detalles-asistes.index')
            ->with('success', 'DetallesAsiste created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detallesAsiste = DetallesAsiste::find($id);

        return view('detalles-asiste.show', compact('detallesAsiste'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detallesAsiste = DetallesAsiste::find($id);

        return view('detalles-asiste.edit', compact('detallesAsiste'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetallesAsisteRequest $request, DetallesAsiste $detallesAsiste): RedirectResponse
    {
        $detallesAsiste->update($request->validated());

        return Redirect::route('detalles-asistes.index')
            ->with('success', 'DetallesAsiste updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetallesAsiste::find($id)->delete();

        return Redirect::route('detalles-asistes.index')
            ->with('success', 'DetallesAsiste deleted successfully');
    }
}
