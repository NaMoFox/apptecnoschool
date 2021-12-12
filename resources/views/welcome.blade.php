<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TECNOSCHOOL</title>
    <link href="{{ asset('/css/tecno.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg  bg-primary bg-gradient">
    <div class="container-fluid">
      <a class="navbar-brand link-light" aria-current="page"href="/">Tecnoschool</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active link-light" aria-current="page" href="acercade">Acerca de </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              other
            </a>
            <ul class="dropdown-menu bg-primary bg-gradient" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item link-light" href="#">contacto</a></li>
              <li><a class="dropdown-item link-light" href="#">trabaja con nosotros</a></li>
              <li><a class="dropdown-item link-light" href="#">mas +</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div>@if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/admin') }}" class="nav-link active link-light">Plataforma</a>
            @else
                <a href="{{ route('login') }}" class="link-light">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="link-light">Register</a>
                @endif
            @endauth
        </div>
    @endif</div>
    </div>
  </nav>
<!--end-navbar-->
<br><br>
<div class="container-fluid"><!--container-->
        <div class="row"><!--row001-->
            <div class="col-md-4">
                <img src="{{asset('images/megafono.png')}}" class="img1" alt="...">
            </div>



            <div class="col-md-8 ">
                <div class="card1">
                    <img src="{{asset('images/news.png')}}" class="cardimg1" alt="...">
                    <div class="card-body">
                      <a href="#" class="btn btn-success">¡Enterate!</a>
                    </div>
                  </div>
            </div>
        </div><!--end-row001-->
<br><br><br>
        <div class="container"><!--row002-->
            <div class="card-group">
                <div class="card">
                  <img src="{{asset('images/lista.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="#" class="btn btn-success ">Inscribete ahora</a>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/logros.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <a href="#" class="btn btn-success ">Logros</a>
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/cronograma.png')}}" class="card-img-top" alt="...">
                  
                  <div class="card-body">
                    <a href="#" class="btn btn-success">Cronograma</a>
                    </div>
                </div>
              </div>
        </div><!--end-row002-->
        




 


</div><!--end-container-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
