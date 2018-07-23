
@extends('layout.message')
@section('content')
    <div class="row" style="padding-left:35px; padding-right:35px;  position: absolute;
            top: 10%;  ">
        <div class="col-xs-4 " style="height: 1000px; background: #ddd; border-radius: 25px 0px 0px 0px;">
            <center><h1 style="padding:20px; color:#49ACD5;">Selecione o Guiche</h1></center>
            <div  style="height: 300px; overflow-x: auto;">
            <ul class="list-unstyled top_profiles scroll-view">
                @foreach ($guiche_array as $guiche)
                <li class="media event">
                    <div class="media-body" style="padding-top: 10px;">
                        <a class="title" href="/atendente/seleciona/{{$guiche->id}}"><center><h1>{{$guiche->nome}}</h1></center></a>
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
        <div class="col-xs-8 " style="background: #fff; height: 1000px; border-radius: 0px 25px 0px 0px; padding: 25px;" >
            <div style="height: 200px;">
                   
               
            </div>
            <div class="row" >
            </div>
        </div>
    </div>
@stop