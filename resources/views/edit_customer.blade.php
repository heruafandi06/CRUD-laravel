<h1>Edit Customer</h1>
<form class="form" method="post" action="" role="form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <p><input type="text" name="full_name" value="{{ $customer->name }}"></p>
    <p><input type="email" name="email" value="{{ $customer->email }}"></p>
    <p><input type="text" name="occupation" value="{{ $customer->occupation }}"></p>
  </div>
  <div class="form-group">
    <button type="submit" name="save" class="btn btn-sm btn-primary">Update</button>
  </div>
</form>
