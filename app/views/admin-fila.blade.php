

@extends('layout.index')

@section('stylesheet')
  <link href="/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
@stop

@section('javascript')
    
@stop

@section('content')
	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Fila</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Preferencial</th>
                            <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($chamados as $chamado)
                        <tr>
                            <td>{{$chamado->id}}</td>
                            <td>{{$chamado->nome}}</td>
                            <td>{{$chamado->email}}</td>
                            <td>{{$chamado->telefone}}</td>
                            <td>{{($chamado->preferencial == 1)?"Sim":"Não"}}</td>
                            <td>
                             <button class="btn {{($chamado->preferencial == 1)?'btn-danger':'btn-success'}}" data-toggle="modal" data-target="#contatoexcluir{{$chamado->id}}" >{{($chamado->preferencial == 1)?'Retirar Preferencia':'Adicionar Preferencia'}}</button></td>
                            <div class="modal fade" id="contatoexcluir{{$chamado->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Excluir</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form role="form" name="chamado_excluir"  action="/admin/fila/preferencial" method="post">
                                    <input type="hidden" name="id" value="{{$chamado->id}}" >
                                    <input type="hidden" name="preferencial" value="{{($chamado->preferencial == 1)?0:1}}" >
                                        {{($chamado->preferencial == 1)?'Tem certeza que deseja retirar a preferencia deste chamado ?':'Tem certeza que deseja adiconar preferencia a este chamado ?'}}
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                    </form>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </tr>
                        @endforeach           
                      </tbody>
                    </table>
                  </div>
                </div>
    <script src="/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/jszip/dist/jszip.min.js"></script>
    <script src="/pdfmake/build/pdfmake.min.js"></script>
    <script src="/pdfmake/build/vfs_fonts.js"></script>
@stop