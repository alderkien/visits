@extends('layouts.site')

@section('content')
<div class="card">
    <div class="card-header">
        <span class="h4">{{ $entity->name ?? '' }}</span>
        телефон: ({{ $entity->phone ?? '' }})
        номер: #{{ $entity->number }}
    </div>
    <div class="card-body">
        <a href="{{ route('employees.visits.create', $entity->id) }}" class="btn btn-success btn-sm mb-3">Добавить событие</a>
        @forelse($entity->visits as $visit)
        <div class="h5 my-3 d-flex justify-content-between">
            <div>
                Тип: <span class="{{ $visit->type_color }}">{{ $visit->translated_type }}</span>
                Дата: {{ $visit->date->format('d.m.Y H:i') }}
            </div>
            <div>
                {{ Form::open(['method' => 'DELETE', 'url' => route('employees.visits.destroy', [$entity->id, $visit->id])]) }}
                <button type="submit" class="btn btn-danger btn-sm my-1">Удалить</button>
                {{ Form::close() }}
            </div>
        </div>
        @empty
        <div>Нет данных</div>
        @endforelse
    </div>
</div>
@endsection