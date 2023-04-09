<label class="control-label" for="inputEmail">Device Name</label>
<select name="dev_id" class="chzn-select" >
				                                @foreach( $data as $row )
			                                    
				                                    <option value="{{ $row->id }}">{{ $row->hardware_name }}</option>
                                                @endforeach        
				                                </select>