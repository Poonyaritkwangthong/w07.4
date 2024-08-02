@extends('layouts.form')

@section('title')
edit student
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ ('student.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>SID:</strong>
                        <input type="text" name="sid" value="{{ $student->sid }}" class="form-control" placeholder=" sid">
                        <strong>First Name:</strong>
                        <input type="text" name="fname" value="{{ $student->fname }}" class="form-control" placeholder=" fname">
                        <strong>Last Name:</strong>
                        <input type="text" name="lname" value="{{ $student->lname }}" class="form-control" placeholder=" lname">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label block"><strong>Faculty:</strong></label>
                    <div class="grid grid-cols-2">
                        @foreach($programs as $item)
                        <div>
                        <input class="accent-black" type="radio" name="std_prg_id" value="{{ $item->id }}" {{ ($item->id == $student->std_prg_id)  ? 'checked' : ''}}>
                        {{ $item->program_th }}
                    </div>
                        @endforeach
                    </div>
                    @error('prg_fac_id')
                        <div class="form-text text-red-700">{{ $message }}</div>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
@endsection
