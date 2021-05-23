<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stilim.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Login</title>
</head>


<body>
<main style="background-color: rgb(167, 164, 164);" >
    <nav class="navbar navbar-expand-lg bg-light  ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="index.html"><span class="link1 "> Ana Sayfa </span></a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav "
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ss" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="özgecmis.html"><span class="link1">Özgeçmiş</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="sehrim.html"><span class="link1">Şehrim</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="mirasimiz.html"><span class="link1">Mirasımız</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ilgialanlarim.html"><span class="link1">İlgi Alanlarım</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php"><span class="link1">Login</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="iletisim.html"><span class="link1">İletişim Sayfası</span> </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
     
    
    <main>
        <div class="container">
            <div class="row">
				<div id="login" class="container">
					<div id="divlogin" >
						<form action="git-Login.php" method="POST">
							<div id="divemailpas" class="form-group">
								<label for="email">E-mail</label>
								<input type="text" name="email" class="form-control" placeholder="Email 'omer.sunar@ogr.sakarya.edu.tr'" required="required">
							</div>
							<div id="divemailpas" class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Şifre 'g201210075'" required="required">
							</div>
							<button class="btn btn btn-info" type="submit">Oturum Aç</button><br> <br>
		
							
						</form>
					</div>	
				</div>
        </div>
		
    </main>
    <footer İd="footer1" class="bg-dark " style="height: 40px; color: white; text-align: center; ">2021 Bahar dönemi @Ömer Faruk Sunar g201210075</footer>
</main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
    crossorigin="anonymous"></script>


</body>

</html>