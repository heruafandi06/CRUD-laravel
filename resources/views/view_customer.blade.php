<h1>Data Customer</h1>
<p>Name: {{ $customer->name }}</p>
<p>Email: {{ $customer->email }}</p>
<p>Occupation: {{ $customer->occupation }}</p>

<a href="{{ route('create-customer') }}">Back</a>
