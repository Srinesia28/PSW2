<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Halaman Register</title>
  </head>
<body>
  
  <br><br><br><br><br>
    <div class="container card" style="width: 23rem;">
    <center>
        <h2><img src="" width="80px" alt="">&nbsp;&nbsp;<b class="title" style="color: navy;">Register</b></b></h2>
        <p  style=" margin-right: -83px; margin-top: -28px; font-size: 10px; font-style: italic;"></p>
        </center><br>
    <form class="form container" action="/login" method="post">
    @csrf
        <div class="loginbody">
        <label for=""><i class="fas fa-user-circle"></i>Nama</label>
        <input class="form-control border-top-0" type="text" name="Nama"><br>
        <label for=""><i class="fas fa-user-circle" ></i>username</label>
        <input class="form-control border-top-0" type="text" name="Username"><br>
        <label for=""><i class="fas fa-key"></i> Password</label>
        <input class="form-control" type="password" name="password"><br><br>
        <button class="btn btn-primary" type="submit">Register</button><br><br>
        <center><p>Back to |</p><p href ="/login">login</p>
          
        </center>     
    </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>