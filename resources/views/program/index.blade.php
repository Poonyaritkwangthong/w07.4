@extends('layouts.app')

@section('title')
Program
@endsection

@section('content')
<b><h1 class="text-center text-4xl mt-10">Program Page</h1></b>
<div class="ml-[440px] mt-10">
    <a class="btn btn-success" href="{{ route('program.create') }}"> Add Program</a>
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
            <th>P.No</th>
            <th>Program TH</th>
            <th>Program EN</th>
            <th>Grad Year</th>
            <th>Prg fac id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="border-collapse border border-slate-500 text-center ">
        @foreach ($programs as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->program_th }}</td>
                <td>{{ $item->program_en }}</td>
                <td>{{ $item->grad_year }}</td>
                <td>{{ $item->prg_fac_id }}</td>
                <td>
                    <form action="{{ route('program.destroy',$item->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('program.edit',$item->id) }}">Edit</a>
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
