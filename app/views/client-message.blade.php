@extends('layout.message')
@section('content')
    <div class="row" style="height: 300px; padding-left:35px; overflow-x: auto;">
        <h1>Aguarde enqunato estamos buscando um atendente{{$chamado}}</h1>
        <!--div class="col-xs-10 ">
            <div class="mail_list">
                <div class="left"><small>3.00 PM</small>
                </div>
                <div class="right">
                    <h3>Cliente</h3>
                    <p>mensagem</p>
                </div>
            </div>
            <div class="mail_list">
                <div class="left"><small>3.01 PM</small>
                </div>
                <div align="right" class="right">
                    <h3 >Atendente</h3>
                    <p>mensagem</p>
                </div>
            </div>
            <div class="mail_list">
                <div class="left"><small>3.00 PM</small>
                </div>
                <div class="right">
                    <h3>Cliente</h3>
                    <p>mensagem</p>
                </div>
            </div>
            <div class="mail_list">
                <div class="left"><small>3.01 PM</small>
                </div>
                <div align="right" class="right">
                    <h3 >Atendente</h3>
                    <p>mensagem</p>
                </div>
            </div><div class="mail_list">
                <div class="left"><small>3.00 PM</small>
                </div>
                <div class="right">
                    <h3>Cliente</h3>
                    <p>mensagem</p>
                </div>
            </div>
            <div class="mail_list">
                <div class="left"><small>3.01 PM</small>
                </div>
                <div align="right" class="right">
                    <h3 >Atendente</h3>
                    <p>mensagem</p>
                </div>
            </div><div class="mail_list">
                <div class="left"><small>3.00 PM</small>
                </div>
                <div class="right">
                    <h3>Cliente</h3>
                    <p>mensagem</p>
                </div>
            </div>
            <div class="mail_list">
                <div class="left"><small>3.01 PM</small>
                </div>
                <div align="right" class="right">
                    <h3 >Atendente</h3>
                    <p>mensagem</p>
                </div>
            </div>
        </div-->
    </div>
    <div class="row" >
        <div class="col-xs-10 ">
            <div class="form-group col-lg-12">
                <input style="height:80px; font-size:30px; padding-left:35px; background:none; " type="text"  placeholder="Escreva sua mensagem..." name="nome" class="form-control" required >
            </div>
        </div>
        <div class="col-xs-1">
            <div class="fa-hover " style="height:80px;  padding-left:0px; background:none; " >
                <button style="height:80px; border:none; font-size:30px;" type="submit" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-play" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
@stop