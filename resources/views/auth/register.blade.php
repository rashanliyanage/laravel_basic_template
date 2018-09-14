@extends('layouts.app')


@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item pl-1">
                    <a class="nav-link text-white" href="#">LOGO</a>
                </li>
                <li class="nav-item dropdown pl-1">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Buy
                    </a>
                    <div class="dropdown-menu by-items" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item custome-item text-white" href="#">Apartment<br>Houses</a>
                        <a class="dropdown-item custome-item text-white" href="#">Commercial <br> Bungalow<br> Villas</a>
                    </div>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link text-white" href="#">Rent</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link text-white" href="#">Land</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Property Insider</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Finde agent</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Property Wanted</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Service</a>
                </li>
                <li class="nav-item pl-1">
                    <a class="nav-link disabled text-white" href="#">Blog</a>
                </li>
                <li class="nav-item pl-1">
                    <button type="button" class="btn btn-primary bg-transparent apartment-btn-shape ">List your apartments</button>
                </li>
                <li class="nav-item pl-1 btn-set-margin">
                    <a href="{{url('/login')}}" class="btn btn-primary bg-transparent btn-shape text-white">Login</a>
                </li>

            </ul>
        </div>
    </nav>
@endsection

@section('middle')
    <div class="container pb-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-5  ">
                <div class="card register-card shadow">
                    <h2 class="text-center pt-3">Register</h2>

                    <div class="card-body pl-md-5">
                        <hr style="background-color: black">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="fname" class="col-md-4 col-form-label ">{{ __('Full name') }}</label>

                                <div class="col-md-6">
                                    <input id="txtfullname" type="text" class="form-control{{ $errors->has('txtfullname') ? ' is-invalid' : '' }}" name="txtfullname" value="{{ old('txtfullname') }}" required autofocus>

                                    @if ($errors->has('txtfullname'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('txtfullname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="contact" class="col-md-4 col-form-label ">{{ __('Contact') }}</label>

                                <div class="col-md-6">
                                    <input id="txtcontact" type="text" class="form-control{{ $errors->has('txtcontact') ? ' is-invalid' : '' }}" name="txtcontact" value="{{ old('txtcontact') }}" required>

                                    @if ($errors->has('txtcontact'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('txtcontact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <hr style="background-color: black">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="form-check-label pr-3" for="inlineRadio1">I am a</label>
                                </div>
                                <div class="col-md-8">
                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="txtrole" id="{{$role->type}}" value="{{$role->type}}" checked>
                                            <label class="{{$role->type}}" for="exampleRadios1">
                                                {{$role->display_name}}
                                            </label>

                                            @if ($errors->has('txtrole'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('txtrole') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    @endforeach

                                </div>




                                </div>

                            <hr style="background-color: black">
                            <div class="col-md-12">
                                <div class="form-check pl-0">
                                    <input class="form-check-input" type="checkbox" name="txtsubscribe" id="txtsubscribe" value="1" checked >
                                    <label class="form-check-label" for="txtsubscribe">
                                        Subscribe to our news letter and email alert

                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check pl-0">
                                    <input class="form-check-input" type="checkbox" name="accept" id="accept" >
                                    <label class="form-check-label" for="accept">
                                        I have read, understood and accepts the term and condition of Thepropertyinside.com
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-3 text-md-center ">
                                <button type="submit" class="btn btn-primary register-button"> Register </button>
                            </div>
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
