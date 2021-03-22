<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/inscripconect.css') }}" rel="stylesheet">
    <title>Reservations</title>
</head>

<body style="background-image:url({{asset('font/hero-bg.png')}})">
    <header>
        <div class="container-fluid" style="background-image:linear-gradient(180deg,#E90505, #680000)">
            <div class="row header">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="logo" style="background-image:url({{asset('font/simplon.png')}}); background-repeat:no-repeat ; border-radius: 100px 100px 100px 100px;">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                    <h2 class="text-center mt-1 afterwork">AFTER-WORK</h2>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="centrer col-5">
                    <img src="font/logo.png" alt="" style="width: 300%; margin-top:150px;">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 carre" style="background-image:linear-gradient(180deg,#E90505, #680000)">
                <h1 class="text-center mt-1 afterwork">AFTER-WORK</h1>
                <form action="{{ url('') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="email" name="email" value="{{old('email')}}" class="form-control mt-5">
                        <select name="jour" multiple="yes" id="" size="4" class=" form-control mt-5">
                            <option value="lundi">lundi</option>
                            <option value="mardi">mardi</option>
                            <option value="mercredi">mercredi</option>
                            <option value="jeudi">jeudi</option>
                            <option value="vendredi">vendredi</option>
                            <option value="samedi">samedi</option>
                            <option value="dimanche">dimanche</option>
                        </select>
                        <select name="heure" multiple id="" size="2" class="form-control mt-5">
                            <option value="17h/19h">17h/19h du lundi au vendredi</option>
                            <option value="19h/21h">19h/21h du lundi au vendri</option>
                            <option value="09h/12h">09h/12h samedi et dimanche</option>
                            <option value="12h/17h">12h/17h samedi et dimanche</option>
                        </select>
                        <!-- <input type="text" placeholder="role" name="role" class="form-control mt-5"> -->
                        <input type="password" placeholder="password" name="password" class="form-control mt-5">
                        <p class="text-center"><input type="submit" placeholder="se connecter" class="rounded btn-light mt-2 "></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid" style="background-image:linear-gradient(180deg,#E90505, #680000)">
            <div class="row footer mt-5">
                <p class="copyright">2021-Simplon BF/AUF</p>
            </div>
        </div>
    </footer>
</body>

</html>