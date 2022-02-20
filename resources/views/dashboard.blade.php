@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
            
                <div class="float-end">
                    <a href="{{route('listings.create')}}" class="btn btn-success mb-2">Create Listing</a>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td>
                                    <a href="{{route('listings.edit', $listing->id)}}" class="btn btn-primary float-end">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('listings.destroy', $listing->id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete this ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger float-start">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                            
                        @endforeach
                        
                    </table>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
