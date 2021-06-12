<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('employees.index') }}"> {{ trans('common.employees') }}</a>
            </li>
          </ul>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>