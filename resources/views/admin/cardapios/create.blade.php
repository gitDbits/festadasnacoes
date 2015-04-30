@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-heading bg-red">
                    Adicionar {{ $nomeForm }}
                </div>
                <div class="panel-body">
                    {!! Form::open(['id' => 'frmCardapios', 'url' => 'admin/cardapios']) !!}
                        @include ('admin.cardapios.form', ['botao' => 'Salvar'])
                    {!! Form::close() !!}
                </div>
                @include ('errors.list')
            </div>
        </div>
    </div>
</div>
@stop
