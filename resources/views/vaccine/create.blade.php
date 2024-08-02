@extends('layouts.form')
@section('title')
form
@endsection

@section('content')
<div class="">
    <div class="">
        <div class="text-center">
            <div class="">
                <h2>Add Vaccine</h2>
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('vaccine.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form class="" action="{{ route('vaccine.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="">
            <div class= "">
                <div class="w-1/6 h-1/3 border-4 p-4 ml-[600px] mt-[20px]">
                    <strong>Vaccine name:</strong>
                    <input type="text" name="vaccine_name" class="form-control" placeholder="vaccine_name">
                    @error('vaccine_name')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="ml-[620px]">Submit</button>
        </div>
    </form>
</div>
@endsection
