@foreach ($posts as $post)
<h4> Post tilte : {{ $post->title }}</h4>
<p> User Name : {{ $post->user->name }}</p>
    {{-- @if(isset($row->addresses))
        @foreach ($row->addresses as $address)
            <p>Address : {{ $address->country }}</p>
        @endforeach
    @endif --}}
@endforeach
