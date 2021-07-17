
 @extends("front.master")

@section("title" ,'Courses | PN-Education')

@section("content")

<center>
<form method="post" action="{{url('front/signup_save')}}" >
	@csrf
	full name:
	<input type="name" name="name" placeholder="Enter Name"><br><br>
	Email:
	<input type="email" name="email" placeholder="Enter email"><br><br>
	Password:
	<input type="password" name="password" placeholder="Enter Password">
	<br><br>
	<input type="submit" name="submit" value="submit"  class="btn btn-primary" >

</form>
</center>
@endsection