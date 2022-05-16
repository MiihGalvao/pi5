<!DOCTYPE html>
<html lang="pt-br">

<x-head />

<body>
    <x-header />

    <main class="container">
        
        <h1 class="my-5">Editar Tipo de Documento</h1>

        <form method="POST" action="{{route ('tipodocumento.update', $tipodocumento->id) }}">
            @csrf
            <div class="row">
                <span class="form-label">Id</span>
                <input type="text" name="id" class="form-control" value=" {{$tipodocumento->id}} ">
            </div>
            <div class="row">
                <span class="form-label">Nome</span>
                <textarea class="form-control" name="nome"> {{$tipodocumento->nome}} </textarea>
            </div>
            <div class="row">
                <span class="form-label">Descrição</span>
                <textarea class="form-control" name="descricao"> {{$tipodocumento->descricao}} </textarea>
            </div>

            <div class="d-flex justify-content-end">
                <button class="br-button secondary mr-4" type="button">Cancelar</button>
                <button type="submit" class="br-button primary">Editar</button>
            </div>
        </form>
    </main>

</body>

</html>
