@extends('layout.message')
@section('content')
    <div class="row" >
        <center><img width="33%" src="/images/logo.png"></center>
        <div class="welcome">
        <div class="col-xs-12" >
                <center><H3 style="color:  #82C3EE;" >OLÁ SEJA BEM VINDO</H3></center><br>
                <center style="padding: 0px  50px  50px 50px ;">
                <H4>AGUARDE SEU NOME SER CHAMADO NO TELÃO E VÁ AO GUICHE INDICADO.<br>
                EM BREVE UM DOS NOSSOS REPRESENTANTES IRÁ ATENDÊ-LO  <br><br></H4>
                </center>
                <center style="padding: 10px ;">
                <br><H3 style="color: #82C3EE;" >ID DE CHAMADA #{{$chamado}}</H3></center>
        </div>
        </div>
    </div>

    <script type="text/javascript">
        setInterval(function(){ window.location.assign("/token-inicial"); }, {{$tempo}});
    </script>
@stop