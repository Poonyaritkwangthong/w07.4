@extends('layouts.app')

@section('title')
Faculty
@endsection

@section('content')
<b><h1 class="text-center text-4xl mt-10">Faculty Page</h1></b>
<div class="ml-[440px] mt-10">
    <a class="btn btn-success" href="{{ route('faculty.create') }}"> Add Faculty</a>
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
            <th>F.No</th>
            <th>Faculty TH</th>
            <th>Faculty EN</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="border-collapse border border-slate-500 text-center ">
        @foreach ($facultys as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->faculty_th }}</td>
                <td>{{ $item->faculty_en }}</td>
                <td>
                    <form action="{{ route('faculty.destroy',$item->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('faculty.edit',$item->id) }}">Edit</a>
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


