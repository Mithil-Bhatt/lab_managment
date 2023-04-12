

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<form action="/pc/{{$pc->id}}" method="POST">
    @csrf
    @method('PUT')
	<h1>{{ $pc->Computer_no}}</h1>
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

												</x-app-layout>