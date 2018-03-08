<div class="form-group">
    {!! Form::number('total_passenger', null, ['placeholder' => 'Total de passageiros: ', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::select('class', $classes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::select('brand_id', $brands, null, ['placeholder' => 'Escolha uma marca: ', 'class' => 'form-control']) !!}    
</div>
<div class="form-group">
    <button class="btn btn-search">Enviar</button>
</div>