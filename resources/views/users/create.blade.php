<h6 class="text-center text-muted pt-5">ユーザー作成画面</h6>
<h2 class="text-center font-weight-bold pb-4">ユーザーを作成しよう</h2>

<div class="row d-flex justify-content-center">
  <div class="col-md-9 col-lg-7 col-xl-5">
    <div class="card mt-4">
      <div class="card-body mx-4">

        @include('common.errors')

        <form action="{{ route('users.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">名前</label>
            <input type="name" name="name" class="form-control">
          </div>

          <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label for="profile">プロフィール</label>
            <input type="textarea" name="profile" class="form-control">
          </div>

          {{-- <div class="input-group">
            <label for="profile_image">プロフィール写真</label>
            <input type="file_field" name="profile_image" class="form-control"> --}}
          {{-- </div> --}}
          <div class="form-group">
            <label for="profile_image">プロフィール写真</label>
            <input type="file" name="profile_image" class="form-control">
          </div>

          <div class="form-group">
            <label for="admin_flag">管理者権限</label>
            <input type="admin_flag" name="admin_flag" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label for="password_confirmation">パスワード</label>
            <input type="password" name="password" class="form-control">
          </div>

          {{ csrf_field() }}
          <input id="created_remote_ip" type="hidden" class="form-control" name="created_remote_ip" value="{{ $_SERVER['REMOTE_ADDR'] }}">

          <div class="form-group">
            <div class="text-center my-4">
              <button type="submit" class="btn btn-primary">登録する</button>
            </div>
          </div>
        </form>

        <div class="row d-flex justify-content-center my-4">
          <a href="{{ action('UserController@index') }}">ユーザー一覧へ</a>
        </div>
      </div>
    </div>
  </div>
</div>
