@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$listing->name }}<span class="float-end"><a href="{{route('listings')}}" class="btn btn-dark btn-xs">Go Back</a></span></div>

            <div class="card-body">

                @if($listing)
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Email: </strong>  {{$listing->email}}</li>
                        <li class="list-group-item"><strong>Phone: </strong>{{$listing->phone}}</li>
                        <li class="list-group-item"><strong>Website: </strong><a href="{{$listing->website}}" targer="_blank"></a>{{$listing->website}}</li>
                        <li class="list-group-item"><strong>Bio: </strong>{{$listing->bio}}</li>
                    </ul>
                @endif
                

            </div>
        </div>
    </div>
</div>
@endsection
