@extends('layout.message')
@section('content')
    <div class="row" style="padding-left:35px; padding-right:35px; position: absolute;
            top: 10%;  ">
        <div class="col-xs-4 " style="height: 1000px; background: #ddd; border-radius: 25px 0px 0px 0px;">
        <br><br>
           <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><h1 style=" color:#49ACD5;">HISTÓRICO</h1></a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><h1 style=" color:#49ACD5;">FILA</h1></a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <div  style="height: 300px; overflow-x: auto;">
                                <ul class="list-unstyled top_profiles scroll-view">
                                    @foreach ($chamados as $chamado_array)
                                    <li class="media event">
                                        <div class="media-body" style="padding-top: 10px;">
                                            <a class="title" href="#">#{{$chamado_array->id}}</a>
                                            <p style="font-size:15px;" >{{strtoupper($chamado_array->nome)}}</p>
                                            <p>{{date('d/m/Y',strtotime(substr ( $chamado_array->created_at , 0 , 10 )))}} <span style="float: right;">{{substr ( $chamado_array->created_at , 10 , 6  )}}</span></p>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="media event">
                                        <div class="media-body">
                                            <a class="title" href="#"></a>
                                            <p></p>
                                            <p><strong></strong></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <div  style="height: 300px; overflow-x: auto;">
                                <ul class="list-unstyled top_profiles scroll-view">
                                    @foreach ($fila as $fila_array)
                                    <li class="media event">
                                        <div class="media-body" style="padding-top: 10px;">
                                            <a class="title" href="#">#{{$fila_array->id}}</a>
                                            <p style="font-size:15px;" >{{strtoupper($fila_array->nome)}}</p>
                                            <p>{{date('d/m/Y',strtotime(substr ( $fila_array->created_at , 0 , 10 )))}} <span style="float: right;">{{substr ( $fila_array->created_at , 10 , 6  )}}</span></p>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="media event">
                                        <div class="media-body">
                                            <a class="title" href="#"></a>
                                            <p></p>
                                            <p><strong></strong></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                      </div>
                    </div>
        </div>
        <div class="col-xs-8 " style="background: #fff; height: 1000px; border-radius: 0px 25px 0px 0px; padding: 25px;" >
            <div style="height: 200px;">
                @if( isset($chamado->id) )
                <span style="font-size:30px; "  >
                    <p>#{{$chamado->id}}</p>
                    <p  >{{strtoupper($chamado->nome)}}</p>
                        <p>{{date('d/m/Y',strtotime(substr ( $chamado->created_at , 0 , 10 )))}} <span style="float: right;">{{substr ( $chamado->created_at , 10 , 6  )}}</span></p>
                </span>
                @else
                   <center> <a href="/novo" ><button type="button" class="btn  " style="background-color: #49ACD5; color:#fff; margin-top: 25%; font-size:40px; padding: 30px;">PRÓXIMO DA FILA</button></a></center>
                @endif
            </div>
            <div class="row" >
             @if( isset($chamado->id) )
                <form role="form" name="contato_edicao"  action="/messagem_atendent" method="post">
                <div class="row" >
                    <div class="col-xs-6">
                        <select name="categoria" class="form-control" style="margin-bottom:10px;">
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria['id']}}">
                                    {{$categoria['nome']}}
                                </option>
                            @endforeach  
                        </select>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-xs-6">
                        <select name="motivo" class="form-control" style="margin-bottom:10px; ">
                            @foreach ($motivos as $motivo)
                                <option value="{{$motivo['id']}}">
                                    {{$motivo['nome']}}
                                </option>
                            @endforeach  
                        </select>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-xs-12">
                        <textarea name="observacao" style="width: 100%; margin-bottom:10px; " class="form-control"  placeholder="Anotações" rows="5" >{{$chamado->observacao}}</textarea>
                    </div>
                    <div class="col-xs-6 " >
                        <input type="submit" name="atendido" class="btn btn-lg  btn-block" style="background-color: #49ACD5; color:#fff;" value="ATENDIDO" >
                    </div>
                    <div class="col-xs-6 " >
                        <a href="/messagem_atendent/2/{{$chamado->id}}" class="btn btn-lg btn-danger btn-block">NÃO ATENDIDO</a>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$chamado->id}}">
                </form>
             @endif
            </div>
        </div>
    </div>
@stop