@component('mail::message')
Hello{{$user->name}},
<p>We Understand it happens.</p>
@component('mail::button', ['url' => url('reset/' . $user->remember_token)])
Reset Youre Password
@endcomponent
<p>In case you have any issues recovering ,please contact us</p>
{{config('app.name')}}
@endcomponent