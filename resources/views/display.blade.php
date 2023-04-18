<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/display" method="POST">
        @csrf

        <input type="hidden" name="computer_id" value="{{ $pc->first()->computer_id }}">


        <h1>
            @foreach($pc as $row)
            Computer:id {{ $row->computer_id}}
            Computer:no {{$row->Computer_no}} <br>
            lab:id {{$row->lab_id}}<br><br>
            @endforeach
        </h1>

        <label class="control-label" for="inputEmail">Hardware Name</label>
        <select name="hardware_name" class="chzn-select">
            @foreach( $data as $row )
            <option value="{{ $row->id }}">{{ $row->hardware_name }}</option>
            @endforeach
        </select>

        <label class="control-label" for="inputEmail">Software Name</label>
        <select name="software_name" class="chzn-select">
            @foreach( $data1 as $row )
            <option value="{{ $row->id }}">{{ $row->software_name }}</option>
            @endforeach
        </select> <br><br> <br>

        <h1>Feedback <textarea name="feedback"></textarea> <br> <br><br>

            <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
    </form>
</x-app-layout>