
@foreach( $pcno as $row )
			                                    
         {{ $row->id }} {{ $row->Computer_no }}
         <form action="pc" method="POst">
         
   
<a href="/pc/{{$pcno->id}}/display">Update</a>
@csrf
@method('PUT')
<input type="submit" value="Delete">
</form>
  @endforeach   