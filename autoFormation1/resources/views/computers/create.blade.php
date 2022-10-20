@extends('layout')

@section('title','Create computer')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 ">
            <h1>Create a new computer </h1>
        </div>

        <div class="mt-8 ">
            <form action="{{route('computers.store')}}" method="post" class="form bg-whit p-6 border-1 ">
                @csrf
                <div>
                    <label for="computer-name" class="text-sm">Computer Name</label>
                    <input id="computer-name"  name="computer-name" type="text" value="{{old('computer-name')}}">
                </div>
                @error('computer-name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror

                <div>
                    <label for="computer-origin" class="text-sm">Computer Origin</label>
                    <input id="computer-origin"  name="computer-origin" type="text"  value="{{old('computer-origin')}}">
                </div>
                @error('computer-origin')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror

                <div>
                    <label for="computer-price" class="text-sm">Computer Price</label>
                    <input id="computer-price"  name="computer-price" type="text"  value="{{old('computer-price')}}">
                </div>
                @error('computer-price')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror

                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </div>

    </div>

@endsection


