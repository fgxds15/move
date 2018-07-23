

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
                    <h1 class="page-header">Filiais</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="x_panel">
                  <button class="btn btn-info" data-toggle="modal" data-target="#contato" >Novo</button>
                            <!-- Modal -->
                            <div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Novo</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form role="form" name="contato_observacao"  action="/admin/filial/novo" method="post">
                                    <label>Nome :</label>
                                    <input type="text" name="nome" value="" class="form-control" ><br>
                                    <label>usuario :</label>
                                    <input type="text" name="usuario" value="" class="form-control" ><br>
                                    <label>senha :</label>
                                    <input type="text" name="senha" value="" class="form-control" ><br>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Novo</button>
                                    </form>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                  <div class="x_title">
                    
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <tr>
                            <th>Nome</th>
                            <th>Usuario</th>
                            <th>Senha</th>
                            <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($filiais as $filial)
                        <tr>
                            <td>{{$filial->nome}}</td>
                            <td>{{$filial->usuario}}</td>
                            <td>{{$filial->senha}}</td>
                            <td>
                            <button class="btn btn-info" data-toggle="modal" data-target="#contato{{$filial->id}}" >Editar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="contato{{$filial->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Editar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div >
                                    <form role="form" name="contato_edicao"  action="/admin/filial/editar" method="post">
                                    <label>Nome :</label><br>
                                    <input type="text" name="nome"  value="{{$filial->nome}}" class="form-control" style="width: 100%;" ><br>
                                    <label>Usuario :</label><br>
                                    <input type="text" name="usuario"  value="{{$filial->usuario}}" class="form-control" style="width: 100%;" ><br>
                                    <label>Senha :</label><br>
                                    <input type="text" name="senha"  value="{{$filial->senha}}" class="form-control" style="width: 100%;" ><br>
                                    <input type="hidden" name="id" value="{{$filial->id}}" > 
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                    </form>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            &nbsp <button class="btn btn-danger" data-toggle="modal" data-target="#contatoexcluir{{$filial->id}}" >Excluir</button></td>
                            <div class="modal fade" id="contatoexcluir{{$filial->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Excluir</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form role="form" name="filial_excluir"  action="/admin/filial/excluir" method="post">
                                    <input type="hidden" name="id" value="{{$filial->id}}" >
                                    <input type="hidden" name="deleta" value="1" >
                                      Tem certeza que deseja excluir a filial {{$filial->nome}} ?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Excluir</button>
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