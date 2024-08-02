@extends('layouts.form')
@section('title')
form
@endsection

@section('content')
<div class="">
    <div class="">
        <div class="text-center">
            <div class="">
                <h2>Add Student</h2>
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form class="" action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class= "w-[340px] h-[300px] border-4 p-4 ml-[500px] mt-[20px]">
                <div class="form-label block">
                    <strong>SID:</strong>
                    <input type="text" name="sid" class="form-control" placeholder="sid">
                    @error('sid')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                    <strong>First Name:</strong>
                    <input type="text" name="fname" class="form-control" placeholder="fname">
                    @error('fname')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                    <strong class="">Last Name:</strong>
                    <input type="text" name="lname" class="form-control" placeholder="lname">
                    @error('lname')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label block"><strong>Program:</strong></label>
                        <div class="grid grid-cols-2">
                            @foreach($programs as $item)
                            <div>
                                <input class="accent-black" type="radio" name="std_prg_id" value="{{ $item->id }}">
                                {{ $item->program_th }}
                            </div>
                            @endforeach
                        </div>
                        @error('std_prg__id')
                            <div class="form-text text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
