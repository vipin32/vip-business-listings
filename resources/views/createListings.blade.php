@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create Listing') }}<span class="float-end"><a href="{{route('dashboard')}}" class="btn btn-dark btn-xs">Go Back</a></span></div>

            <div class="card-body col-sm-8 offset-sm-2">
                
                <form action="{{route('listings.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your listing name">
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <small>{{ $errors->first('name') }}</small>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
                    </div>

                    <div class="form-group mt-2">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" class="form-control" placeholder="Enter your website name">
                    </div>

                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <small>{{ $errors->first('email') }}</small>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mt-2">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number">
                    </div>

                    <div class="form-group mt-2">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" placeholder="Enter your bio"></textarea>
                    </div>

                    <div class="form-group text-center mt-2">
                        
                        <input type="submit" id="submit" class="btn btn-success " value="Create">

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection