<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Contact Techno news</title>
</head>
<body> 
  <body class="container-fluid">
    <div class="row">
      <nav class="col-12 navbar navbar-expand-lg glass text-light">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="index.html">Techno News</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="contact.php">Contact</a>
              </li>
          </div>
        </div>
      </nav>
  
      <main class="d-flex align-items-center mt-5">
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col-12 text-light">
              <h1>Contact</h1>
            </div>
            <div class="col-lg-5 col-12 row glass mt-4 text-light pb-5">
              <form class="row pt-3 pb-3 justify-content-center">
                <div class="col-md-6 mt-4">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-md-6 mt-4">
                  <label for="inputCivility" class="form-label">Civility</label>
                  <select id="inputCivility" class="form-select">
                    <option selected>Choose...</option>
                    <option>Mrs</option>
                    <option>Mr</option>
                  </select>
                </div>
                <div class="col-md-6 mt-4">
                  <label for="inputFirstname" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="inputFirstname">
                </div>
                <div class="col-md-6 mt-4">
                  <label for="inputName" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName">
                </div>
                <div class="form-group mt-4">
                  <label for="inputMessage">Message</label>
                  <textarea class="form-control" id="inputMessage" rows="3"></textarea>
                </div>
                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-danger">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>