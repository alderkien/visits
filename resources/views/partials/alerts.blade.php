@foreach (['success', 'info', 'warning', 'danger'] as $type)
@if (session()->has('alert-' . $type))
<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    {{ session('alert-' . $type) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endforeach