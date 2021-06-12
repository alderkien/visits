@extends('layouts.site')

@section('content')
<a href="{{ route('employees.create') }}" class="btn btn-success mb-2">Добавить сотрудника</a>

<table class="table">
    <tr>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>Табельный номер</th>
        <th class="text-center">Действия</th>
    </tr>

    @forelse($employees as $employee)
    <tr>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->phone }}</td>
        <td>{{ $employee->number ?? '-' }}</td>
        <td class="text-center">
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm my-1">Редактировать</a>
            {{ Form::open(['method' => 'DELETE', 'url' => route('employees.destroy', $employee->id)]) }}
            <button type="submit" class="btn btn-danger btn-sm my-1">Удалить</button>
            {{ Form::close() }}
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="4">Нет данных</td>
    </tr>
    @endforelse
</table>

@endsection


@push('scripts')
<script>
    $(function () {
        
    });
</script>
@endpush