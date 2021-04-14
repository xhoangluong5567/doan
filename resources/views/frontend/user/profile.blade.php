<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')
  <base href="{{asset('public')}}" />
  <link href="{{ asset('adminlte/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminlte/css/datepicker3.css') }}" rel="stylesheet">
  <link href="{{ asset('adminlte/css/styles.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('adminlte/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('adminlte/js/lumino.glyphs.js') }}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Latest compiled and minified CSS -->

  <!-- Optional theme -->
</head>

<body>




  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
      </div>
      <h2>Thoong tin ho so cua ban</h2>
    </div>
    <h3>Quản lý thông tin hồ sơ để bảo mật tài khoản</h3>
    <form>
      <div class="form-group">
        <label>Avatar</label><br>
        <img id="avatar" multiple class="form-control-file" width="200px" src="https://www.harnex.com.au/wp-content/uploads/2019/11/placeholder-250x250.png">
        <input type="file" name="images" multiple class="form-control-file">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Họ và tên:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="{{get_data_user('web','name')}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
        <input type="email" class="form-control" value="{{get_data_user('web','email')}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Giới tính:</label>
        <p>Nam<input type="radio" name="gender" value="male" id="male"></p>
        <p>Nữ<input type="radio" name="gender" value="female" id="female"></p>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Số điện thoại</label>
        <input type="phone" class="form-control" id="exampleInputPassword1" placeholder="SDT" value="(+84){{get_data_user('web','phone')}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Địa chỉ:</label>
        <input type="phone" class="form-control" id="exampleInputPassword1" placeholder="" value="{{get_data_user('web','address')}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Ngày tháng năm sinh:</label>
        <input type="date" name="bday">
      </div>

      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>