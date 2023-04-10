

<form action="/pc/{{$pcno->id}}" method="POST">
    @csrf
    @method('PUT')
	<h1>{{ $pcno->Computer_no}}</h1>
</form>

    


<label class="control-label" for="inputEmail">Hardware Name</label>
<select name="dev_id" class="chzn-select" >
				                                @foreach( $data as $row )
			                                    
				                                    <option value="{{ $row->id }}">{{ $row->hardware_name }}</option>
                                                @endforeach        
				                                </select>


<label class="control-label" for="inputEmail">Software Name</label>
<select name="dev_id" class="chzn-select" >
				                                @foreach( $data1 as $row )
			                                    
				                                    <option value="{{ $row->id }}">{{ $row->software_name }}</option>
                                                @endforeach        
				                                </select>												
