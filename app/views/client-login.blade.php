@extends('layout.chat')
@section('content')
	<div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="box" style="color:#000;   margin-top: 50px; background: #fff; background: rgba(255,255,255,0.9);padding: 30px 15px;  border-radius: 25px;">
                    <hr>
                     <form role="form" name="motorista" id="motorista" action="message" method="post">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nome</label>
                                <input type="text"  name="nome" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Telefone</label>
                                <input type="text" name="telefone"  class="form-control">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block">Iniciar um chat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop