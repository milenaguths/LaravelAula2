@extends('layouts.app')
@section('content')
<h1>Formulário de Cadastro de Atividade</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/atividades" method="post">
	{{ csrf_field() }}
	Nome: 		<input type="text" name="title"> 	     <br>
	Endereço:		<input type="text" name="description">   <br>
	Telefone: 		<input type="text" name="title"> 	     <br>
	<input type="submit" value="Salvar">
</form>
@endsection