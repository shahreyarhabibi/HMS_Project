<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome To Aryana Hospital</title>
    <link rel="stylesheet" href="http://localhost/HMS/public/Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<div class="container">
    </br></br></br></br></br></br></br></br>
    <div id="users">

        <form  action="{{route('login')}}" method="POST">
            @csrf
            <h2>Welcome To Aryana Hospital Login Page</h2>
            <h3>Kindly Enter Your Username And Password</h3>
            <label class="form-label" for="email"><br>Email Address</br></label>
            <input type="email" name="email" class="input" placeholder="Enter Your Email Address" required  oninvalid="this.setCustomValidity('Please Enter Your Email Address')"
                   oninput="this.setCustomValidity('')"/>
            </br>
            <label class="form-label" for="password"><br>Password</br></label>
            <input type="password" name="password" class="input" id="password" placeholder="Enter Your Password " required oninvalid="this.setCustomValidity('Please Enter Your Password')"
                   oninput="this.setCustomValidity('')"/><br></br>
            @if(Session::has ('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
            <input type="submit" class="button" name="do_register"  value="Submit" >
            </br> </br>
            <p>© Copyrights all rights reserved by Ali Reza Habibi</p>
        </form>
    </div>
</div>
</body>
</html>
