<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="text-xl text-center flex justify-center gap-4 p-2 border-2 border-black">
        <a href="{{url('/faculty')}}"class=" hover:text-red-500">Faculty Page</a></br>
        <a href="{{url('/program')}}"class=" hover:text-red-500">Program Page</a></br>
        <a href="{{url('/student')}}"class=" hover:text-red-500">Student Page</a></br>
        <a href="{{url('/vaccine')}}"class=" hover:text-red-500">Vaccine Page</a></br>
        <a href="{{url('/vaccine_record')}}"class=" hover:text-red-500">VaccineRecord Page</a></br>
        <a href="{{url('/vaccine_year_chart')}}"class=" hover:text-red-500">VaccineYearChart</a></br>
    </div>
    @yield('content')
</body>
</html>
