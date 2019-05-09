<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\JurusanService;
use App\Http\Requests\JurusanCreateRequest;
use App\Http\Requests\JurusanUpdateRequest;

class JurusansController extends Controller
{
    public function __construct(JurusanService $jurusan_service)
    {
        $this->service = $jurusan_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jurusans = $this->service->paginated();
        return view('jurusans.index')->with('jurusans', $jurusans);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $jurusans = $this->service->search($request->search);
        return view('jurusans.index')->with('jurusans', $jurusans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\JurusanCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JurusanCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('jurusans.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('jurusans.index'))->withErrors('Failed to create');
    }

    /**
     * Display the jurusan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = $this->service->find($id);
        return view('jurusans.show')->with('jurusan', $jurusan);
    }

    /**
     * Show the form for editing the jurusan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = $this->service->find($id);
        return view('jurusans.edit')->with('jurusan', $jurusan);
    }

    /**
     * Update the jurusans in storage.
     *
     * @param  App\Http\Requests\JurusanUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JurusanUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->withErrors('Failed to update');
    }

    /**
     * Remove the jurusans from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('jurusans.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('jurusans.index'))->withErrors('Failed to delete');
    }
}
