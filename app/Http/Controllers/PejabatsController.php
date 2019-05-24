<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PejabatService;
use App\Http\Requests\PejabatCreateRequest;
use App\Http\Requests\PejabatUpdateRequest;

class PejabatsController extends Controller
{
    public function __construct(PejabatService $pejabat_service)
    {
        $this->service = $pejabat_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pejabats = $this->service->paginated();
        return view('pejabats.index')->with('pejabats', $pejabats);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $pejabats = $this->service->search($request->search);
        return view('pejabats.index')->with('pejabats', $pejabats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pejabats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\PejabatCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PejabatCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('pejabats.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('pejabats.index'))->withErrors('Failed to create');
    }

    /**
     * Display the pejabat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pejabat = $this->service->find($id);
        return view('pejabats.show')->with('pejabat', $pejabat);
    }

    /**
     * Show the form for editing the pejabat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pejabat = $this->service->find($id);
        return view('pejabats.edit')->with('pejabat', $pejabat);
    }

    /**
     * Update the pejabats in storage.
     *
     * @param  App\Http\Requests\PejabatUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PejabatUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->withErrors('Failed to update');
    }

    /**
     * Remove the pejabats from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('pejabats.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('pejabats.index'))->withErrors('Failed to delete');
    }
}
