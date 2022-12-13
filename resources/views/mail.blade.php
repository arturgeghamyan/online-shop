<b> Welcome<br>
	Thank you for joining us dear {{$name}} {{$surname}}<br>
	Please link this address to verificate your account in our shop <br>
	<a href="{{url('/user/activate/'.$id.'/'.$hash)}}"> Verification Link</a>
</b>