<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SuratService;
use App\Http\Requests\SuratCreateRequest;
use App\Http\Requests\SuratUpdateRequest;
use App\Models\Surat;
use App\Models\Mahasiswa;
use Auth;

class SuratsController extends Controller
{
    public function __construct(SuratService $surat_service)
    {
        $this->service = $surat_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // $surats = $this->service->paginated();
        $surats = Surat::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(25);
        
        return view('surats.index')->with('surats', $surats);          
        
        // return $surats;
    }

    public function suratmasuk()
    {
        $surats = Surat::where('status','masuk')->orderBy('id','DESC')->paginate(25);
        
        return view('admin.suratmasuk')->with('surats', $surats);          
    }

    public function suratproses()
    {
        $surats = Surat::where('status','proses')->orderBy('id','DESC')->paginate(25);
        
        return view('admin.suratproses')->with('surats', $surats);          
    }    

    public function suratkeluar()
    {
        $surats = Surat::where('status','selesai')->orderBy('id','DESC')->paginate(25);
        
        return view('admin.suratkeluar')->with('surats', $surats);          
    }

    public function print($id)
    {
        $surat = $this->service->find($id);
        return view('admin.suratprint')->with('surat',$surat);
    }

    /**
     * Display a listing of the resource searched.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $surats = $this->service->search($request->search);
        return view('surats.index')->with('surats', $surats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SuratCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratCreateRequest $request)
    {
        $request->merge([
            'user_id'=>Auth::user()->id,
            'hasread'=>'0',
            'status'=>'masuk',
        ]);

        $result = $this->service->create($request->except('_token'));

        if ($result) {
            return redirect(route('surats.index', ['id' => $result->id]))->with('message', 'Successfully created');
        }

        return redirect(route('surats.index'))->withErrors('Failed to create');
        // return $request;
    }

    /**
     * Display the surat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat = $this->service->find($id);
        return view('surats.show')->with('surat', $surat);
    }

    /**
     * Show the form for editing the surat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat = $this->service->find($id);
        return view('surats.edit')->with('surat', $surat);
    }

    /**
     * Update the surats in storage.
     *
     * @param  App\Http\Requests\SuratUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuratUpdateRequest $request, $id)
    {
        $result = $this->service->update($id, $request->except('_token'));

        if ($result) {
            return back()->with('message', 'Successfully updated');
        }

        return back()->withErrors('Failed to update');
    }

    /**
     * Remove the surats from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->service->destroy($id);

        if ($result) {
            return redirect(route('surats.index'))->with('message', 'Successfully deleted');
        }

        return redirect(route('surats.index'))->withErrors('Failed to delete');
    }
}
