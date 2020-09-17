<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>page 404</title>
  </head>
  <body>
  <body>
  <div class="page-404">
    <p>404</p>
    <span>The page can not be found</span>
  </div>
  </div>
                  <div class="col-md-12 text-center">
                  <a  href="index.php" type="button" class="btn btn-light">Back to Home</a>
                  </div>
 
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<style>
body {
  background-color: black;
  margin: 110px;
}

.page-404 {
  width: 40%;
  margin: 0 auto;
  text-align: center;
  color: white;
  font-weight: 600;
  font-family: 'Gothic725BdBT', sans-serif;
  text-transform: uppercase;
  border: solid 15px white;
  padding-bottom: 50px;
  box-shadow: 0px 0px 70px 5px rgba(255,255,255,0.7);
}

.page-404 p {
  font-size: 300px;
  margin: 0;
}

.page-404 span {
  font-size: 32px;
}

@media screen and (max-width: 1500px) {
  .page-404 {
    padding-bottom: 30px;
  }
  
  .page-404 p {
    font-size: 200px;
  }
  
  .page-404 span {
  font-size: 22px;
  }
}

@media screen and (max-width: 1080px) {
  .page-404 {
    padding-bottom: 15px;
  }
  
  .page-404 p {
    font-size: 100px;
  }
  
  .page-404 span {
  font-size: 10px;
  }
}

@media screen and (max-width: 640px) {
  body {
    margin: 0;
  }
  
  .page-404 {
    border: none;
    box-shadow: none;
  }
}


@keyframes zoom {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.2,1.2);
    }
    100% {
        transform: scale(1,1);
    }
}

.page-404 {
    animation: zoom 5s infinite ;
}
</style>