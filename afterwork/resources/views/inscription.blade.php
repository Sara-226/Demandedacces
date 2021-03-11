<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/index.css') }}" rel="stylesheet">
    <title>Inscription</title>
</head>
<body>
   <header>
        <div class="container-fluid">
            <div class="row header">
            <div class="col-lg-5 col-md-6 col-sm-12">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                <h2 class="text-center mt-1 afterwork">AFTER-WORK</h2>
            </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 rectangle">
                <h1 class="text-center mt-1 afterwork">AFTER-WORK</h1>
                <form action="" method="post">
                    <div class="form-group">
                       <input type="text" placeholder="Nom" class="form-control mt-5">
                       <input type="text" placeholder="Prenom" class="form-control mt-5 ">
                       <input type="text" placeholder="email" class="form-control mt-5">
                       <input type="text" placeholder="role" class="form-control mt-5">
                       <input type="text" placeholder="password" class="form-control mt-5">
                      <p class="text-center"><input type="submit" placeholder="soumettre" class="rounded btn-light mt-2 "></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row footer mt-5">
                <p class="copyright">2021-Simplon BF/AUF</p>
            </div>
        </div>
    </footer>
</body>
</html>