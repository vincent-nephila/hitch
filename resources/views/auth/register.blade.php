
<form method="POST" action="{{url('/register')}}">
    {!!csrf_field()!!}
    
    <label>First Name</label><input type="text" name="firstname" placeholder="First Name">
    <label>Middle Name</label><input type="text" name="middlename" placeholder="Middle Name">
    <label>Last Name</label><input type="text" name="lastname" placeholder="Last Name">
    <label>E-mail</label><input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password">
    <input type="password" name="password_confirmation" >
    <input type="submit">
    
</form>

/*shows error
including duplications
password confirmation
*/
@if(count($errors)>0) 
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach

@endif