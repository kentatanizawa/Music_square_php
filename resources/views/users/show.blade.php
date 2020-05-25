<div class="container-fluid">
  <div class="row d-flex justify-content-center pt-4">
    <div class="col-10 col-lg-8 col-xl-6 mb-3 mb-md-0">
      <div class="card">
        <div class="card-body">
          <div class="row pl-3">
            <div class="col-5 text-center">
              @if($user->profile_image)
              <a href="{{ action('UserController@show', $user->id) }}"><img src="/storage/{{$user->profile_image}}"></a>
              @else
              <a href="{{ action('UserController@show', $user->id) }}"><img src="/images/default.jpg"></a>
              @endif
              <h3 class="font-weight-bold">{{ $user->name }}</h3>

              {{-- <%= render 'follow_form', user: @user %> --}}

              {{-- <% if current_user.id != 24 && (current_user.admin? || current_user.id == @user.id) %> --}}
              <a href="{{ action('UserController@edit', $user->id) }}">編集する</a>
              <form action="{{ action('UserController@destroy', $user->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <a href="/users" data-id="{{ $user->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">退会する</a>
              </form>
              {{-- <% end %> --}}
            </div>

            <div class="col-7 border-bottom">
              <h6 class="text-center text-muted">プロフィール</h6>
              <p>{{ $user->profile }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
