<div class="row d-flex justify-content-center">
  <div class="col-md-9 col-lg-7 col-xl-5">
    <div class="card mt-4">
      <div class="card-body mx-4">
        @include('common.errors')
        <form action="{{ route('users.store') }}" method="POST" class="form-horizontal">
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

          <div class="input-group">
            <label for="profile_image">プロフィール写真</label>
            <input type="file_field" name="profile_image" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label for="password_confirmation">パスワード</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
