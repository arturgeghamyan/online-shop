@extends("layouts.layout")
@section("content")
<div class="form-gap"></div>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="text-center">
            <h3><i class="fa fa-lock fa-4x"></i></h3>
            <h2 class="text-center">Forgot Password?</h2>
            <p>You can reset your password here.</p>
            <form class="panel-body" action="{{ (session()->get('msg') == "success") ? url('/recover') : url('/send/code') }}" method="post">
              @csrf
              <div id="register-form" role="form" autocomplete="off" class="form" method="post">
                <div class="form-group">
                  <label class="text-red">{{session()->get('wrong')}}</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                    <input id="email" name="email" placeholder="email address" class="form-control" type="email">
                    @if (session()->get('msg') == "success")
                    <input id="recovercode" name="recovercode" placeholder="email code" class="form-control" type='password'>
                    @endif
                  </div>
                </div>
                @if (session()->get('msg') == "success")
                <button id="recoverpassword" class="btn btn-lg btn-primary btn-block">Recover Password</button>
                @else
                <button id="sendcode" class="btn btn-lg btn-primary btn-block">Send Code</button>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection