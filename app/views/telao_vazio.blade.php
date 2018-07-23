@extends('layout.message')
@section('content')
    
    <div class="row" style="padding-left:35px; padding-right:35px;  position: absolute;
            top: 10%;  ">
        <div class="col-xs-4 " style="background: #ddd; border-radius: 25px 0px 0px 0px;">
            <center><h3>Ultimos Chamados</h3></center>
            <div  style="height: 1000px; overflow-x: auto;">
            <ul class="list-unstyled top_profiles scroll-view">
                <li class="media event">
                    <div class="media-body">
                        <a class="title" href="#">#</a>
                        <p></p>
                        <p><strong></strong></p>
                    </div>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-xs-8 " style="background: #fff; height: 1000px; border-radius: 0px 25px 0px 0px;">
            <center><img width="33%" src="/images/logo.png"></center>
            
        </div>
    </div>
    <script type="text/javascript">
        
        setInterval(function(){ window.location.assign("/telao-inicial"); }, {{$tempo}});
    </script>
@stop