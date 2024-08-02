@extends('layouts.app')

@section('title')
Student
@endsection

@section('content')
<b><h1 class="text-center text-4xl mt-10">Student Page</h1></b>
<div class="ml-[440px] mt-10">
    <a class="btn btn-success" href="{{ route('student.create') }}"> Add Student</a>
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
            <th>S.No</th>
            <th>SID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Std prg id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="border-collapse border border-slate-500 text-center ">
        @foreach ($students as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->sid }}</td>
                <td>{{ $item->fname }}</td>
                <td>{{ $item->lname }}</td>
                <td>{{ $item->std_prg_id }}</td>
                <td>
                    <form action="{{ route('student.destroy',$item->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('student.edit',$item->id) }}">Edit</a>
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
