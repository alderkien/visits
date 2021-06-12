@extends('layouts.site')

@section('content')
<div class="row justify-content-md-center my-3">
    <div class="col-xl-6 col-md-7 col-12">
        {{ Form::open([
            'method' => (!empty($entity->id) ? 'put' : 'post'),
            'url'    => (!empty($entity->id) ? route('employees.update', $entity->id) : route('employees.store')),
        ]) }}
            @include('partials.form-errors')
            <div class="card">
                <div class="card-body pb-1">
                    <h4 class="mb-3">{{ ($entity->id ? 'Редактировать сотрудника' : 'Добавить сотрудника') }}</h4>
                    <div class="form-group">
                        <label class="font-weight-bold" for="name">{{ trans('common.fio') }}</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $entity->name) }}" placeholder="">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="phone">{{ trans('common.phone') }}</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $entity->phone) }}" placeholder="">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="number">{{ trans('common.personnel_number') }}</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{ old('number', $entity->number) }}" placeholder="">
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