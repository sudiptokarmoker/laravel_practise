{{-- @foreach ($address_list as $row)
<p>{{ $row->id }}</p>
<p>Address @if(isset($row->user->email))
    {{ $row->user->email }}
    @endif</p>
@endforeach --}}

{{-- @foreach ($users_list as $row)
<p>{{ $row->id }}</p>
    @if(isset($row->addresses))
        @foreach ($row->addresses as $address)
            <p>Address : {{ $address->country }}</p>
        @endforeach
    @endif
@endforeach --}}


@foreach ($users_list as $row)
<p>{{ $row->id }}</p>

        @foreach ($row->posts as $post)
            <p>Title : {{ $post->title }}</p>
        @endforeach

@endforeach