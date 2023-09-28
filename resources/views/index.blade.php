<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/login/style.css') }}"> 
    <title>Login</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-around align-items-center">
        <div class="quote text-white">
           <p>KEEP <span>SPREAD</span> </p>
           <P><span>YOUR</span>  ENERGY</P>
        </div>
        <div class="login-container d-flex flex-column align-items-center justify-content-center">
            <h3 class="text-center text-white">LOGIN</h3>
            <form action="/login" method="post" class="d-flex flex-column justify-content-center">
                @csrf
                <input class="input" type="text" name="username" id="" placeholder="Username"><br>
                <input class="input" type="password" name="password" id="" placeholder="Password"><br>
                <div class="form-group mb-3 text-whites">
                    <input type="checkbox" name="remember" value="1">
                    <label for="remember">Remember me</label>
              </div>
                <button class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>