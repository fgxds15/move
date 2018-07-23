@extends('layout.message')


    
@section('content')
    <div class="row" >
        <center><img width="33%" src="/images/logo.png"></center>
    </div>
    <form role="form" name="cliente" id="cliente" action="/messagem_login" method="post">
        <div class="welcome">   
                <div class="row" style="padding: 20px;">
                    <div class="col-xs-offset-1 col-xs-10 ">
                        <label>USUÁRIO</label>
                        <div class="form-group">
                            <input class="padrao" type="text"  name="login" placeholder=""  required >
                        </div>
                    </div>
                    <div class="col-xs-offset-1 col-xs-10 ">
                        <label>SENHA</label>
                        <div class="form-group">
                            <input  type="password" name="senha" placeholder="" class="padrao" required >
                        </div>
                    </div>
                </div>
                <div  style="height:80px; background-color: #d9534f ; border-radius: 0px 0px 25px 25px;" >
                    <div class=" col-xs-12" style="padding-left: 0px; padding-right: 0px; " >
                        <div class="fa-hover " style="height:80px;  padding-left:10px; background:none; " >
                            <button style=" border:none; font-size:30px;     background-color: #d9534f ; color:#fff;" type="submit" class="btn  btn-lg btn-block">
                                    ENTRA
                            </button>
                        </div>
                    </div>

                </div>
        </div>
    </form>
    <script type="text/javascript" src="/js/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#telefone" ).keyup(function() {
                if($("#telefone").val().replace(/[^0-9]/g,'').replace(' ','').length < 10 ){
                    $('#telefone').mask("(00) 0000-0000");
                }else{
                    $('#telefone').mask("(00) 0 0000-0000");
                }
               
            });
           $( "#telefone" ).keyup(function(e) {
                console.log($("#telefone").val());
                if ((e.keyCode == 8)&&($("#telefone").val().replace(/[^0-9]/g,'').replace(' ','').length > 8 )) {
                    valor = $("#telefone").val().replace(/[^0-9]/g,'').replace(' ','') ;
                    $('#telefone').val('');
                    $('#telefone').mask("(00) 0000-0000");
                    valor = "("+valor.substring(0 , 2)+") "+valor.substring(2 , 6)+"-"+valor.substring(6 , 10) ;
                   setTimeout(function(){ $('#telefone').mask("(00) 0000-0000"); $('#telefone').val(valor) ; }, 50);
                   // $('#telefone').val(valor);
                }
            });
        });
    </script>
@stop