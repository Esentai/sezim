@extends('layouts.app')

@section('content')
    <div class="container  rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{Auth::user()->name }}</span><span class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{route('profile.store')}}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" name="firstname" placeholder="first name" value="{{$profile[0]->firstname ?? ''}}" required></div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="lastname" value="{{$profile[0]->lastname ?? ''}}" placeholder="surname" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="number" placeholder="enter phone number" value="{{$profile[0]->number ?? ''}}" required></div>
                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" name="postcode" placeholder="enter address line" value="{{$profile[0]->postcode ?? ''}}" required></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" name="state" placeholder="enter address line" value="{{$profile[0]->state ?? ''}}" required></div>
                            <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" name="area" placeholder="enter address" value="{{$profile[0]->area ?? ''}}" required></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" name="email" placeholder="enter email id" value="{{Auth::user()->email}}" readonly></div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" name="education" placeholder="education" value="{{$profile[0]->education ?? ''}}" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" name="country" placeholder="country" value="{{$profile[0]->country ?? ''}}" required></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" name="region" value="{{$profile[0]->region ?? ''}}" placeholder="state" required></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
