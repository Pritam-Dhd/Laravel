<h1>Users</h1>
{{-- <h2>Hello, {{$users}}</h2> --}}

{{-- ❗If else statement --}}
{{-- @if($users=="Pritam")
<h1>Welcome to this page</h1>
@else <h1>You are not welcome here</h1>
@endif --}}

{{-- ❗For Loop --}}
{{-- @for($i=0;$i<10;$i++)
<h4>{{$i}}</h4>
@endfor --}}

{{-- ❗For each --}}
@foreach($users as $user)
 <h6>{{$user}}</h6>   
@endforeach

@csrf

{{-- ❗To use javascript in php --}}
<script>
    var data=@json($users);
    console.log(data);
</script>