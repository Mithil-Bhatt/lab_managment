
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PC selection') }}
        </h2>
    </x-slot>

@foreach( $pc as $row )
			                                    
         {{ $row->id }} {{ $row->Computer_no }}

         
   
         <a href="/pc/{{$row->id}}/display">Select</a>
@endforeach   

  </x-app-layout>