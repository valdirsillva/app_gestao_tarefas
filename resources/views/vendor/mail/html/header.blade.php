<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas')
<img src="http://localhost:8000/img/logo-header.svg" class="logo" alt="Laravel Logo" width="250px">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
