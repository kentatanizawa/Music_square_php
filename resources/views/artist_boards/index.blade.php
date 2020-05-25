@foreach ($artistboards as $artistboard)
    @if($artistboard->icon)
        <img src="/storage/{{$artistboard->icon}}">
    @else
        <img src="/images/default.jpg">
    @endif

    <a href="{{ action('ArtistBoardController@show', $artistboard->id) }}">リンク</a>

    <h4 class="card-title">{{$artistboard->artist_name}}</h4>

    <a href="{{ action('ArtistBoardController@edit', $artistboard->id) }}">編集</a>

    <form action="{{ action('ArtistBoardController@destroy', $artistboard->id) }}" id="form_{{ $artistboard->id }}" method="post">
     {{ csrf_field() }}
     {{ method_field('delete') }}
     <a href="#" data-id="{{ $artistboard->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">削除</a>
    </form>
        <div>aa</div>

@endforeach
