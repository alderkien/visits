@extends('layouts.site')

@section('content')
<h4>Учёт посещений сотрудников</h4>
<table class="table">
    <tr>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>Табельный номер</th>
        <th>Посещение</th>
    </tr>

    @forelse($employees as $employee)
    <tr>
        <td>
            <a href="{{ route('employees.show', $employee->id) }}" class="font-weight-bold">
                {{ $employee->name }}
            </a>
        </td>
        <td>{{ $employee->phone }}</td>
        <td>{{ $employee->number ?? '-' }}</td>
        <td>
            @if(!empty($employee->lastVisit ))
            {{ $employee->lastVisit->date->format('d.m.Y H:i') }}
            <span class="{{ $employee->lastVisit->type_color }}">{{ $employee->lastVisit->translated_type }}</span>
            @else
            нет данных
            @endif
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="4">Нет данных</td>
    </tr>
    @endforelse
</table>
@endsection
