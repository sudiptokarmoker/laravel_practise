@foreach ($address_list as $row)
<p>{{ $row->id }}</p>

{{-- <p>Address @if(isset($row->address->country))
    {{ $row->address->country }}
    @endif</p> --}}


<p>Address @if(isset($row->user->email))
    {{ $row->user->email }}
    @endif</p>

@endforeach
