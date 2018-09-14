@extends('dashboard.layout')
@section('content')
    <div class="row">
    <div class="col-lg-6 offset-3 mt-3">
        <div class="card mr-auto">
            <div class="card-header text-center">
                <strong>Add New Role</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="" class="form-horizontal" id="add-new-role">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="hf-email" class=" form-control-label">New role</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="type" name="type" placeholder="Enter New role..." class="form-control"></div>
                    </div>
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" id ="submit-new-role"  class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>

            </div>
        </div>

    </div>
    </div>
@endsection
