<div class="container-fluid">
  <h6 class="text-center text-muted pt-5">ユーザー一覧</h6>
  <h2 class="text-center font-weight-bold pb-4">気になったユーザーをフォローしよう</h2>
  <div class="row d-flex justify-content-center my-4">
    <div class="list-group-flush col-11 col-xl-9">
      @foreach ($users as $user)
      <div class="list-group-item">
        <div class="row">
          <div class="col-3 text-center mt-4">
            @if ($user->profile_image)
            <a href="{{ action('UserController@show', $user->id) }}"><img src="/images/default.jpg" width="100px" height="100px"></a>
            @else
            <a href="{{ action('UserController@show', $user->id) }}"><img src="/images/default.jpg" width="100px" height="100px"></a>
            @endif
            <h5>{{$user->name}}</h5>
            <div>
              <a href="{{ action('UserController@edit', $user->id) }}">編集する</a>
              <form action="{{ action('UserController@destroy', $user->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">削除</a>
              </form>
            </div>
          </div>
          <div class="col-6 border-bottom">
            <h6 class="text-center text-muted">プロフィール</h6>
            <p>{{$user->profile}}</p>
          </div>
          <div class="col-3 text-center">
            <a href="{{ action('UserController@show', $user->id) }}">友達を確認する</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="d-flex justify-content-center mb-4">
  </div>
</div>
