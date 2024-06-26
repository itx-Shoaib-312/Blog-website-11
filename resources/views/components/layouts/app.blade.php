<!doctype html>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>
    {{-- Required meta tags --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    {{-- Bootstrap CSS v5.2.1 --}}
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
</head>

<body>
    {{-- include header --}}
    <x-layouts.header />

    {{-- main content --}}
    <div class="justify-content-center contianer-fluid m-5 px-5">
        {{$slot}}
    </div>

    {{-- include footer --}}
    <x-layouts.footer />
    {{-- Bootstrap JavaScript Libraries --}}
    <script src="{{asset('assets/js/bootstrap-popper.js')}}"></script>

    <script src="{{asset('assets/js/boostrap.js')}}"></script>
</body>

</html>