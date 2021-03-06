<!-- Pagado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pagado', 'Pagado:') !!}
    {!! Form::number('pagado', null, ['class' => 'form-control']) !!}
</div>

<!-- Desde Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desde', 'Desde:') !!}
    {!! Form::date('desde', null, ['class' => 'form-control']) !!}
</div>

<!-- Hasta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hasta', 'Hasta:') !!}
    {!! Form::date('hasta', null, ['class' => 'form-control']) !!}
</div>

<!-- Empleador Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleador_id', 'Empleador Id:') !!}
    {!! Form::number('empleador_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Membresia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('membresia_id', 'Membresia Id:') !!}
    {!! Form::number('membresia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('membresiaEmpleadors.index') !!}" class="btn btn-default"><i class="icon ion-android-arrow-back"></i></a>
</div>
