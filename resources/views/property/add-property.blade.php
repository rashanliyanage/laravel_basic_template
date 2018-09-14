@extends('layouts.commonLayout')

@section('middle')
    <div class="container pb-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-5  ">
                <div class="card register-card shadow">
                    <h2 class="text-center pt-3">Sell your Property</h2>

                    <div class="card-body p-md-4">
                        <hr style="background-color: black">
                        <form method="" action="" aria-label="" id="sell-property-form"  enctype="multipart/form-data">
                            @csrf
                                <input type="hidden" value="{{csrf_token()}}" id="_token" name="_token">
                            <div class="form-group row">
                                    <div class="col-md-3 ">
                                        <label for="property_type" class=" col-form-label ">{{ __('Property') }}</label>
                                    </div>

                                <div class="col-md-6 ">
                                        <select class="form-control" id="property_type" name ="property_type" id ="txt_property_type">
                                            <option>choose your property type</option>
                                           @foreach($properties as $property )
                                                <option value="{{$property->type}}">{{$property->type}}</option>
                                            @endforeach
                                        </select>

                                    @if ($errors->has('property_type'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('property_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3 ">
                                    <label for="txtlocation" class=" col-form-label ">{{ __('Location') }}</label>
                                </div>

                                <div class="col-md-6">
                                    <select class="form-control" name ="txtlocation"  id="txtlocation">
                                        <option value="colombo">colombo</option>
                                        <option value="gall">gall</option>
                                        <option value="matara">matara</option>

                                    </select>

                                    @if ($errors->has('txtlocation'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('txtlocation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="col-md-4 col-sm-12 col-xm-12 pl-0">
                                    <label  class=" col-form-label  ">Add Photos</label>
                                </div>
                                        <div class="row">
                                            <div class="col-md-5 ">
                                                <img src="{{ asset('images/sellProperty/empty-image.png') }}" alt="..." class="img-thumbnail">

                                            </div>

                                            <div class="col-md-5 pt-3 mt-md-3  upload text-white text-center" >
                                                <input type="file" class="btn btn-primary " id="upload-multiple-images" name="images" multiple > Add photos / 360&deg; photo</input>
                                            </div>
                                        </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xm-12 pt-2 pl-2 gallery">

                                </div>
                            </div>
                            <hr style="background-color: black">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label  class=" col-form-label  ">Rooms</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" class="form-control" name ="txtrooms" id="txtrooms">
                                    </div>

                                </div>
                                </div>
                                {{--{{ asset('storage/app/upload/land/20621759_1499113436818583_1134768625940431366_n.jpg') }}--}}
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label  class=" col-form-label  ">Land Size</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name ="txtlandsize" id="txtlandsize">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label  class=" col-form-label  ">Bath</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name ="txtbathsize" id="txtbathsize">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label  class=" col-form-label  ">House size</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name ="txthousesize" id="txthousesize">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-3">
                                    <label  class=" col-form-label ">Address</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea class="form-control" id="txtaddress" name="txtaddress" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row pt-2">
                                <div class="col-md-3">
                                    <label  class=" col-form-label ">Descriptions </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <textarea class="form-control" id="txtdescription" name="txtdescription" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <label  class=" col-form-label ">Cost </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="txtcost" name="txtcost" >
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" value="1" name="is_negotiable" id="is_negotiable" >
                                        <label class="form-check-label" for="accept">
                                            Negotiable
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 row ">
                                <label class="col-form-label pb-0" >
                                    contact detail
                                </label>
                            </div>
                            <hr style="background-color: black">

                            <div class="row pt-2">
                                <div class="col-md-3">
                                    <label  class=" col-form-label ">Name</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input  type="text" class="form-control" id="txtname" name="txtname" >
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-3">
                                    <label  class=" col-form-label ">Phone</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text"  class="form-control" id="txtphone" name="txtphone" >
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-md-3">
                                    <label  class=" col-form-label ">email</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="txtemail" name="txtemail" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-0 pt-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" id="add-property-button" name="add-property-button" class="btn btn-primary btn-lg register-button">Post</button>
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="register-wrapper" style="height: 200px!important;">

    </div>

@endsection
