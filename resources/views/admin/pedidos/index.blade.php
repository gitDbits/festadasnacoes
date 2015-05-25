@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel">
                    <div class="panel-heading bg-red">
                        <div class="row" style="padding: 10px">
                            <span style="font-size: 160%">{{ $nomeForm }}</span>
                            {!! Form::open(['url' => 'admin/vendas/busca', 'method' => 'get', 'class' => 'form col-md-4 pull-right']) !!}
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-flat">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>{{ $qntTotal }}</h3>
                                        <p>Número de vendas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6 pull-right">
                                <div class="small-box bg-green">
                                    <div class="inner" align="right">
                                        <h3>R$ {{ number_format($valorTotal,2) }}</h3>
                                        <p>Total recebido</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="tb_clientes" class="table table-bordered table-hover">
                            <thead class="bg-red">
                            <tr>
                                <th class="text-center no-padding">Código</th>
                                <th class="text-center no-padding">Cliente</th>
                                <th class="text-center no-padding">Valor</th>
                                <th class="text-center no-padding">Data</th>
                                <th class="text-center no-padding">Baixado</th>
                                <th class="text-center no-padding">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pedidos as $pedido)
                                <tr>
                                    <td width="100px" class="text-center">{{ $pedido->id }}</td>
                                    <td>{{ $cliente->find($pedido->id_cliente)->nome }}</td>
                                    <td width="150px" class="text-right">R$ {{ number_format($pedido->valor,2) }}</td>
                                    <td width="200px" class="text-center">{{ $pedido->created_at->format('d/m/Y à\s H:i:s') }}</td>
                                    @if($pedido->baixado == 1)
                                        <td class="text-center"><span data-toggle="tooltip" data-original-title="Baixado" class="badge bg-green">|</span></td>
                                    @else
                                        <td class="text-center"><span data-toggle="tooltip" data-original-title="Pendente" class="badge bg-red">|</span></td>
                                    @endif
                                    <td class="text-center no-padding">
                                        <a data-toggle="tooltip" data-original-title="Editar" class="btn btn-sm bg-gray" href="{{ URL::to('admin/vendas/' . $pedido->id) }}"><i class="glyphicon glyphicon-user"></i></a>
                                        <a data-toggle="tooltip" data-original-title="Baixar" class="btn btn-sm bg-gray" href="{{ URL::to('admin/vendas/baixar/' . $pedido->id) }}"><i class="glyphicon glyphicon-arrow-down"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading bg-red">
                        Faturamento por Nação
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            @foreach($nacoes as $nacao)
                            <div class="col-md-2">
                                <div class="small-box bg-red" align="center">
                                    <p class="bg-gray"><strong><em>{{ $nacao->nome }}</em></strong></p>
                                    <div class="inner" align="right">
                                        <h4>
                                            <span class="pull-left"> {{ $vlr = $pedidoPrato->where('id_prato', $prato->where('id_nacao', $nacao->id)->first()->id)->sum('qnt') }} </span>
                                            <span>R$ {{ number_format($vlr * $prato->where('id_nacao', $nacao->id)->first()->valor,2) }}</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop