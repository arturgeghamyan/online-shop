@extends("layouts.layout")
@section("content")
<div class="form-gap"></div>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <form class="panel-body" action="{{url('/change/password')}}" method="post">
        @csrf
          <div class="text-center">
            <h3><i class="fa fa-lock fa-4x"></i></h3>
            <h2 class="text-center">Change Password?</h2>
            <p>You can change your password here.</p>
            <div class="panel-body">
              <div id="register-form" role="form" autocomplete="off" class="form" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <label>{{$errors->first('password')}}</label>
                    <input name="password" placeholder="Enter New Password" class="form-control">
                    <label>{{$errors->first('confirm-password')}}</label>
                    <input name="confirm-password" placeholder="Enter Confirm Password" class="form-control">
                    <button id="changepassword" type="submit" class="btn btn-lg btn-primary btn-block">Change Password</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection