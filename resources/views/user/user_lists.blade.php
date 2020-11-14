@foreach ($user_list as $row)
<p>{{ $row->email }}</p>

<p>Address @if(isset($row->address->country))
    {{ $row->address->country }}
    @endif</p>
    
{{-- @foreach ($row->address as $row_address) 
    <p> Address : {{ $row_address->id }}</p>
@endforeach --}}

@endforeach
