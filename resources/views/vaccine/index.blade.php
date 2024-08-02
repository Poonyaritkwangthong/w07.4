@extends('layouts.app')

@section('title')
Vaccine
@endsection

@section('content')
<b><h1 class="text-center text-4xl mt-10">Vaccine Page</h1></b>
<div class="ml-[440px] mt-10">
    <a class="btn btn-success" href="{{ route('vaccine.create') }}"> Add Vaccine</a>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="flex justify-center">
<table class="">
    <thead class="border-collapse border border-slate-500 text-center text-2xl  ">
        <tr>
            <th>V.No</th>
            <th>Vaccine Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="border-collapse border border-slate-500 text-center ">
        @foreach ($vaccines as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->vaccine_name }}</td>
                <td>
                    <form action="{{ route('vaccine.destroy',$item->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('vaccine.edit',$item->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-red-500">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
</table>
</div>
@endsection


