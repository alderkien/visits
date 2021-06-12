<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary navbar-expand mb-2 h4">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}"> {{ trans('common.home') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('employees.index') }}"> {{ trans('common.employees') }}</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      @yield('content')
    </div>
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>