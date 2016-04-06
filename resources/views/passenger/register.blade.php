@if (Session::has('error'))
    <div class="alert alert-success">
        <p>{{ Session::get('error') }}</p>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
<div class="content1">
<div class="panel panel-default register">
    <div class="panel-body">
        <p>This is a text line</p>
        <form method="POST" action="{{url('registerPassenger')}}">
            {!!csrf_field()!!}
            <fieldset class="form-group">
              <input type="text" class="form-control" style="width: 49%;display: inline-block;" name="firstname" placeholder="First Name">              
              <input type="text" class="form-control" style="width: 49%;display: inline-block;" name="middlename" placeholder="Middle Name">              
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name">              
            </fieldset>
            <fieldset class="form-group">
              <input type="email" class="form-control" name="email" placeholder="E-mail">              
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" name="mobile" placeholder="Contact No.">              
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

@if(count($errors)>0) 
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach

@endif