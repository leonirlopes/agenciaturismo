<div class="form-group">
    <label for="total_passengers">Quantidade de Passageiros: </label>
    {!! Form::number('total_passengers', null, ['placeholder' => 'Total de passageiros...', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
        <label for="class">Classe: </label>    
    {!! Form::select('class', $classes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
        <label for="brand_id">Marca: </label>    
    {!! Form::select('brand_id', $brands, null, ['placeholder' => 'Escolha uma marca... ', 'class' => 'form-control']) !!}    
</div>
<div class="form-group">
    <button class="btn btn-search">Enviar</button>
</div>