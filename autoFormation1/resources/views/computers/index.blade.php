@extends('layout')

@section('title','Computers')

@section('content')
    <div>
        <div >
            <h1>Computers </h1>
        </div>


        <div >
            @if(count($computers)>0)
                <ul>
                    @foreach($computers as $computer)
                    <a href="{{ route('computers.show',['computer' =>$computer['id']]) }}">
                        <li>{{$computer['name']}} is from <b>{{$computer['origin']}}</b></li>
                    </a>

                    @endforeach
                </ul>
            @else
                <p>there are no computers to display</p>
            @endif

        </div>

    </div>

@endsection


