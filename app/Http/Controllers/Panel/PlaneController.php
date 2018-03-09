<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plane;
use App\Models\Brand;

class PlaneController extends Controller
{
    
    private $plane;
    protected $totalPage = 20;

    public function __construct(Plane $plane)
    {
        $this->plane = $plane;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Gestão de Aviões';

        $planes = $this->plane->paginate($this->totalPage);

        return view('panel.planes.index', compact('title', 'planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Avião';

        $brands = Brand::pluck('name', 'id');

        $classes = $this->plane->classes();

        return view('panel.planes.create', compact('title', 'brands', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $insert = $this->plane->create($data);

        if($insert)
            return redirect()
                ->route('planes.index')
                ->with('success', 'Cadastro realizado com sucesso!');
        else
            return redirect()
                ->back()
                ->with('error', 'Falha ao cadastrar!')
                ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $plane = $this->plane->find($id);

        $brands = Brand::pluck('name', 'id');

        $classes = $this->plane->classes();

        if(!$plane)
            return  redirect()->back();

        $title = 'Editar Avião: { $plane->id }';

        return view('panel.planes.edit', compact('plane', 'title', 'brands', 'classes'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plane = $this->plane->find($id);

        if(!$plane)
            return redirect()->back();

        $update = $plane->update($request->all());

        if($update)
            return redirect()
                ->route('planes.index')
                ->with('success', 'Cadastro atualizado com sucesso!');
        else
            return redirect()
                ->back()
                ->with('error', 'Falha ao atualizar!')
                ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
