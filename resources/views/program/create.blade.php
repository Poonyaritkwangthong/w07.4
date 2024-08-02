@extends('layouts.form')
@section('title')
form
@endsection

@section('content')
<div class="">
    <div class="">
        <div class="text-center">
            <div class="">
                <h2>Add Program</h2>
            </div>
            <div class="">
                <a class="btn btn-primary" href="{{ route('program.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form class="" action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class= "w-[340px] h-[300px] border-4 p-4 ml-[500px] mt-[20px]">
                <div class="form-label block">
                    <strong>Program TH:</strong>
                    <input type="text" name="program_th" class="form-control" placeholder="program th">
                    @error('program_th')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                    <strong class="">Program EN:</strong>
                    <input type="text" name="program_en" class="form-control" placeholder="program en">
                    @error('program_th')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                    <strong class="">Grad Year:</strong>
                    <input type="text" name="grad_year" class="form-control" placeholder="grad year">
                    @error('grad_year')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label block"><strong>Faculty:</strong></label>
                        <div class="grid grid-cols-2">
                            @foreach($facultys as $item)
                            <div>
                                <input class="accent-black" type="radio" name="prg_fac_id" value="{{ $item->id }}">
                                {{ $item->faculty_th }}
                            </div>
                            @endforeach
                        </div>
                        @error('prg_fac_id')
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
