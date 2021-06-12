@extends('layouts.site')

@section('content')
<div class="card">
    <div class="card-header">
        <span class="h4">{{ $entity->name ?? '' }}</span>
        телефон: ({{ $entity->phone ?? '' }})
        номер: #{{ $entity->number }}
    </div>
    <div class="card-body">
        @forelse($entity->visits as $visit)
        <div class="h5 my-3">
            Тип: <span class="{{ $visit->type_color }}">{{ $visit->translated_type }}</span>
            Дата: {{ $visit->date->format('d.m.Y H:i') }}
        </div>
        @empty
        <div>Нет данных</div>
        @endforelse
    </div>
</div>
@endsection