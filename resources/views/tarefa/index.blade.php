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
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($tarefas as $tarefa)
                            <tr>
                               <td>{{ $tarefa->id }}</td>
                               <td>{{ $tarefa->tarefa }}</td>
                               <td>{{ date('d/m/y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
