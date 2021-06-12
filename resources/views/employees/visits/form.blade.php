@extends('layouts.site')

@section('content')
<div class="row justify-content-md-center my-3">
    <div class="col-xl-6 col-md-7 col-12">
        {{ Form::open([
            'method' => (!empty($entity->id) ? 'put' : 'post'),
            'url'    => (!empty($entity->id) ? route('employees.visits.update', [$employee->id, $entity->id]) : route('employees.visits.store', [$employee->id])),
        ]) }}
            @include('partials.form-errors')
            <div class="card">
                <div class="card-body pb-1">
                    <h4 class="mb-3">{{ ($entity->id ? 'Редактировать событие' : 'Добавить событие') }}</h4>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold" for="date">Дата</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $entity->date ?? now()->format('Y-m-d')) }}" placeholder="">
                        </div>
                        <div class="form-group col">
                            <label class="font-weight-bold" for="time">Время</label>
                            <input type="time" class="form-control" id="time" name="time" value="{{ old("time", $entity->time ?? now()->format('H:i')) }}" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="type">Тип</label>
                        {{ Form::select('type', $types, old('type', $entity->type ?? ''), ['class' => 'form-control custom-select']) }}
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 text-right">
                    @section('actions')
                    <button type="submit" class="btn btn-success">{{ trans('common.save') }}</button>
                    @show
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection