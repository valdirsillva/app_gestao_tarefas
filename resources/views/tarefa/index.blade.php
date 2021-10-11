@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefas</div>

                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Tarefa</th>
                               <th>Data limite conclusão</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($tarefas as $key => $t)
                            <tr>
                               <td>{{ $t['id']}}</td>
                               <td>{{ $t['tarefa'] }}</td>
                               <td>{{ date('d/m/y', strtotime($t['data_limite_conclusao'])) }}</td>
                               <td><a href="{{ route('tarefa.edit', $t['id'])}}" >Editar ></a></td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>

                   <nav>
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>
                            @for($i = 1; $i <= $tarefas->lastPage(); $i++ )
                               <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }} "><a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a></li>
                            @endfor
                        <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
