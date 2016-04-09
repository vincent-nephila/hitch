<head>
<meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
        <script src="{{ asset('/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/jquery/dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/jquery/dist/jquery.slim.min.js') }}"></script>
         <link rel="stylesheet" href= "{{asset('/css/register.css')}}">
</head>
<body>
    
    <div id='cssmenu'>
            <ul>
                <li class='active'><a href='#'><span>Home</span></a></li>
                <!--<li><a href='#'><span>Products</span></a></li> -->
                <li><a href='#'><span>Company</span></a></li>
                <li class='last'><a href='#'><span>Contact</span></a></li>
            </ul>
    </div>    
    
    
    
@if (Session::has('error'))
    <div class="alert alert-success">
        <p>{{ Session::get('error') }}</p>
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('succes s') }}</p>
    </div>
@endif
<div class="content1" style="padding-left: 740px; padding-top:150px; padding-right:100px;"  >
<div class="panel panel-default register" style="background-color: rgba(0,0,0,0.5); border: none; ">
    <div class="panel-body" style="background-color:none;">
        <h1>Sign-Up</h1>
        <form method="POST" action="{{url('registerOwner')}}">
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
          <li>{{$error}}</li>
    </div>
</div>
</div>

@if(count($errors)>0) 
@foreach($errors->all() as $error)
<!--<li>{{$error}}</li> -->
@endforeach

@endif  
</body>
