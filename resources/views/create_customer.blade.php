<h1>Add New Customer</h1>
<form class="form" method="post" action="" role="form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <p><input type="text" name="full_name" placeholder="Full Name"></p>
    <p><input type="email" name="email" placeholder="Email"></p>
    <p><input type="text" name="occupation" placeholder="Occupation"></p>
  </div>
  <div class="form-group">
    <button type="submit" name="save" class="btn btn-sm btn-primary">Save</button>
  </div>
</form><hr>
<h1>Data Customer</h1>
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div><br>
@endif
<table border=1>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Occupation</th>
    <th colspan="3">Option</th>
  </tr>
  @foreach ($customer as $customer)
  <tr>
    <td>{{ $customer->name }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->occupation }}</td>
    <td><a href="{{ route('show-customer', $customer->id) }}">Show</a></td>
    <td><a href="{{ route('edit-customer', $customer->id) }}">Edit</a></td>
    <td><a onclick="return confirm('Delete data {{$customer->name}}?')" href="{{ route('delete-customer', $customer->id) }}">Delete</a></td>
  </tr>
  @endforeach
</table>
