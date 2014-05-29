<ul>
@foreach( $data['posts'] as $post )
  <li>{{ $post->title }} </li>
@endforeach
</ul>
