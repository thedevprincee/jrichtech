@extends('user.layout')
@section('title')
    <title>{{__('user.My Profile')}}</title>
@endsection
@section('user-content')
<div class="row">
    <div class="col-xl-12 col-xxl-12 col-lg-12 ms-auto">

      <form action="{{ route('user.update-profile') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        
        <div class="col-xl-9 col-sm-12 col-md-9">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_body">
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="inputEmail4">Name</label>
                    <input type="text" class="form-control" placeholder="{{__('user.Name')}}" name="name" value="{{ $user->name }}">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" readonly value="{{ $user->email }}" placeholder="{{__('user.email')}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text"  class="form-control" name="phone" value="{{ $user->phone }}" placeholder="{{__('user.phone')}}">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="username">Username</label>
                    <input type="text"  class="form-control" name="username" value="{{ $user->username }}" placeholder="{{__('user.phone')}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class=" col-md-4">
                    <label class="form-label" for="inputCity">Country</label>
                    <select class="form-select" name="country" id="country_id">
                      <option value="">{{__('user.Select Country')}}</option>
                      @foreach ($countries as $country)
                          <option {{ $country->id == $user->country_id ? 'selected' : '' }} value="{{ $country->id }}">{{ $country->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label" for="inputState">State</label>
                    <select class="form-select" name="state" id="state_id">
                        <option value="0">{{__('user.Select State')}}</option>
                        @foreach ($states as $state)
                            <option {{ $state->id == $user->state_id ? 'selected' : '' }} value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class=" col-md-4">
                    <label class="form-label" for="inputCity">City</label>
                    <select class="form-select" name="city" id="city_id">
                      <option value="0">{{__('user.Select City')}}</option>
                      @foreach ($cities as $city)
                          <option {{ $city->id == $user->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                      @endforeach
                  </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-9">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $user->address }}" placeholder="{{__('user.Address')}}">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label" for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip_code" value="{{ $user->zip_code }}" placeholder="{{__('user.Zip Code')}}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-xl-3 col-sm-12 col-md-9">
          <div class="white_card card_height_100 mb_30">
            <div class="">
                @if ($user->image)
                <img src="{{ asset($user->image) }}" alt="img" class="img-fluid w-100">
                @else
                <img src="{{ asset($defaultProfile->image) }}" alt="img" class="img-fluid w-100">
                @endif
                <input type="file" name="image">
            </div>
          </div> 
        </div> 
        

     
        <div class="col-md-12">
          <div class="white_card_body">
            <button class="btn btn-primary pull-right" type="submit">{{__('user.Update Profile')}}</button>
          </div>
        </div>

        </div>
      </div>
    </form>

    </div>
</div>


<script>
    (function($) {
        "use strict";
        $(document).ready(function () {

            $("#country_id").on("change",function(){
                var countryId = $("#country_id").val();
                if(countryId){
                    $.ajax({
                        type:"get",
                        url:"{{url('/user/state-by-country/')}}"+"/"+countryId,
                        success:function(response){
                            $("#state_id").html(response.states);
                            var response= "<option value=''>{{__('user.Select a City')}}</option>";
                            $("#city_id").html(response);
                        },
                        error:function(err){
                            console.log(err);
                        }
                    })
                }else{
                    var response= "<option value=''>{{__('user.Select a State')}}</option>";
                    $("#state_id").html(response);
                    var response= "<option value=''>{{__('user.Select a City')}}</option>";
                    $("#city_id").html(response);
                }

            })

            $("#state_id").on("change",function(){
                var countryId = $("#state_id").val();
                if(countryId){
                    $.ajax({
                        type:"get",
                        url:"{{url('/user/city-by-state/')}}"+"/"+countryId,
                        success:function(response){
                            console.log(response);
                            $("#city_id").html(response.cities);
                        },
                        error:function(err){
                            console.log(err);
                        }
                    })
                }else{
                    var response= "<option value=''>{{__('user.Select a City')}}</option>";
                    $("#city_id").html(response);
                }

            })


        });
    })(jQuery);
</script>
@endsection
