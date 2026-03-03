<h1>User Profile</h1>

<p>Name: {{ $name }}</p>
<p>Age: {{ $age }}</p>

@if($age >= 18)
    <p>Status: This user is an adult.</p>
@else
    <p>Status: This user is a minor.</p>
@endif