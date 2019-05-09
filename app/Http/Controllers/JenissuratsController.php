<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\JenissuratService;
use App\Http\Requests\JenissuratCreateRequest;
use App\Http\Requests\JenissuratUpdateRequest;

class JenissuratsController extends Controller
{
    public function __construct(JenissuratService $jenissurat_service)
    {
        $this->service = $jenissurat_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jenissurats = $this->service->paginated();
        return view('jenissurats.index')->with('jenissurats', $jenissurats);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $jenissurats = $this->service->search($request->search);
        return view('jenissurats.index')->with('jenissurats', $jenissurats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenissurats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\JenissuratCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JenissuratCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('jenissurats.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('jenissurats.index'))->withErrors('Failed to create');
    }

    /**
     * Display the jenissurat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenissurat = $this->service->find($id);
        return view('jenissurats.show')->with('jenissurat', $jenissurat);
    }

    /**
     * Show the form for editing the jenissurat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenissurat = $this->service->find($id);
        return view('jenissurats.edit')->with('jenissurat', $jenissurat);
    }

    /**
     * Update the jenissurats in storage.
     *
     * @param  App\Http\Requests\JenissuratUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JenissuratUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->withErrors('Failed to update');
    }

    /**
     * Remove the jenissurats from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('jenissurats.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('jenissurats.index'))->withErrors('Failed to delete');
    }
}
