@foreach($clientes as $c)
<h1>{{$c->nome_fantasia}}</h1>
<p>{{$c->endereco->logradouro}}</p>
@endforeach