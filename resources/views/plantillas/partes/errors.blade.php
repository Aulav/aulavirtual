@if ($errors->has())
	 @foreach ($errors->all() as $error)
	   <p class="content card-panel  cyan z-depth-5 center">{{ $error }}</p>
	  @endforeach
@endif