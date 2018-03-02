<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Http\Requests\BrandStoreUpdateFormRequest;

class BrandController extends Controller
{
    
    private $brand;
    protected $totalPage = 2;

    public function __construct(Brand $brand) {

        $this->brand = $brand;     
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Marcas de Aviões';

        $brands = $this->brand->paginate($this->totalPage);
        
        return view('panel.brands.index', compact('title', 'brands'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Avião';
        
        return view('panel.brands.create-edit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandStoreUpdateFormRequest $request)
    {
        $data = $request->all(); 
        //$insert = Brand::create($data); * não precisa fazer a injeção no método.

        if($this->brand->create($data))
            return redirect()
                ->route('brands.index')
                ->with('success', 'Cadastro realizado com sucesso!');
        else
            return redirect()
                ->back()
                ->with('error', 'Falha ao cadastrar!');
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
    public function edit($id)
    {

        $brand = $this->brand->find($id);

        if(!$brand)
            return redirect()->back();

        $title = "Editar Marca: {$brand->name}";
        return view('panel.brands.create-edit', compact('title', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandStoreUpdateFormRequest $request, $id)
    {
        $brand = $this->brand->find($id);

        if(!$brand)
            return redirect()->back();

        $update = $brand->update($request->all());

        if($update)
            return redirect()
                ->route('brands.index')
                ->with('success', 'Cadastro atualizado com sucesso!');
        else
            return redirect()
                ->back()
                ->with('error', 'Falha ao atualizar!');

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

    public function search(Request $request)
    {
        $brands = $this->brand->search($request);

        $title = "Brands, filtros para: {$request->key_search}";

        return view('panel.brands.index', compact('title', 'brands'));
    }

}
