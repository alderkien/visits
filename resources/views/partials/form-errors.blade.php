@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible mb-2 alerts-block">
    <ul class="mb-0 mt-2 pl-3">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@push('scripts')
<script type="text/javascript">
$(function () {
    $('html,body').animate({scrollTop: $('.alerts-block').offset().top - 80});
});
</script>
@endpush
@endif

@if (!empty($warning))
<div class="alert alert-warning border-warning py-1 px-2 mb-2" role="alert">
    <i class="fas fa-exclamation-circle"></i>
    <b>{{ trans('backend.warning')}}:</b>
    {{ $warning }}
</div>
@endif
