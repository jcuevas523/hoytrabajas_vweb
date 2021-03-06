@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estudio
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estudios.show_fields')
                    <a href="{!! route('estudios.index') !!}" class="btn btn-default"><i class="icon ion-android-arrow-back"></i> </a>
                </div>
            </div>
        </div>
    </div>
@endsection
