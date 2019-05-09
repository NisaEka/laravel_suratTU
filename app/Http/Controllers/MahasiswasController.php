<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MahasiswaService;
use App\Http\Requests\MahasiswaCreateRequest;
use App\Http\Requests\MahasiswaUpdateRequest;

class MahasiswasController extends Controller
{
    public function __construct(MahasiswaService $mahasiswa_service)
    {
        $this->service = $mahasiswa_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mahasiswas = $this->service->paginated();
        return view('mahasiswas.index')->with('mahasiswas', $mahasiswas);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $mahasiswas = $this->service->search($request->search);
        return view('mahasiswas.index')->with('mahasiswas', $mahasiswas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\MahasiswaCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaCreateRequest $request)
    {
        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('mahasiswas.edit', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('mahasiswas.index'))->withErrors('Failed to create');
    }

    /**
     * Display the mahasiswa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = $this->service->find($id);
        return view('mahasiswas.show')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for editing the mahasiswa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = $this->service->find($id);
        return view('mahasiswas.edit')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Update the mahasiswas in storage.
     *
     * @param  App\Http\Requests\MahasiswaUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->withErrors('Failed to update');
    }

    /**
     * Remove the mahasiswas from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('mahasiswas.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('mahasiswas.index'))->withErrors('Failed to delete');
    }
}
