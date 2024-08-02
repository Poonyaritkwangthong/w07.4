@extends('layouts.form')

@section('title')
edit program
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('program.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('program.update',$program->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Program Th:</strong>
                        <input type="text" name="program_th" value="{{ $program->program_th }}" class="form-control" placeholder=" program_th">
                        <strong>Program En:</strong>
                        <input type="text" name="program_en" value="{{ $program->program_en }}" class="form-control" placeholder=" program_en">
                        <strong>Grad Year:</strong>
                        <input type="text" name="grad_year" value="{{ $program->grad_year }}" class="form-control" placeholder=" grad_year">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label block"><strong>Faculty:</strong></label>
                    <div class="grid grid-cols-2">
                        @foreach($facultys as $item)
                        <div>
                        <input class="accent-black" type="radio" name="prg_fac_id" value="{{ $item->id }}" {{ ($item->id == $program->prg_fac_id)  ? 'checked' : ''}}>
                        {{ $item->faculty_th }}
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
