@extends('layout.message')
@section('content')
    
    <div class="row" style="padding-left:35px; padding-right:35px;  position: absolute;
            top: 10%;  ">
         <div class="col-xs-4 " style="height: 1000px; background: #ddd; border-radius: 25px 0px 0px 0px;">
            <center><h1 style="padding:20px; color:#49ACD5;">ULTIMOS CHAMADOS</h1></center>
            <div  style="height: 300px; overflow: hidden;">
            <ul class="list-unstyled top_profiles scroll-view">
                @foreach ($chamado as $chamado_array)
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
        <div class="col-xs-8 " style="background: #fff; height: 1000px; border-radius: 0px 25px 0px 0px; padding: 30px;">
            <center><img width="33%" src="/images/logo.png"></center>
            
            <div class="animated flipInY col-xs-12">
                <div class="tile-stats" style="border:none;">
                  <div class="count" style="color:#49ACD5;" ><center><BR>{{strtoupper($chamado[0]->nome)}}</center></div>
                </div>
              </div>
            <div class="animated flipInY col-xs-12">
                <div class="tile-stats"  style="border:none;">
                    <div class="count" style="color:#49ACD5;" ><center>#{{$chamado[0]->id}}</center></div>
                  <h1></h1>
                </div>
              </div>
              <div class="animated flipInY col-xs-12">
                <div class="tile-stats"  style="border:none;">
                  <div class="count"  ><center> <div  style="width:33%; padding: 20px; background-color:#49ACD5; color: #fff; border-radius: 20px; ">GUICHE {{$guiche[$chamado[0]->id_guiche]['nome']}}</div></center></h1>
                </div>
              </div>
        </div>
    </div>
    <script type="text/javascript">
        
        setInterval(function(){ window.location.assign("/telao-inicial"); }, {{$tempo}});
    </script>
@stop