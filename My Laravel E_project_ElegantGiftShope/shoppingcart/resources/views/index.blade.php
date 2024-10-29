<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
       .img-wrapper{
    max-width: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}
img{
    max-width: 100%;
    max-height: 100%;
}
@media screen and (min-width:576px){
    .carousel-inner{
        display: flex;
    }
    .carousel-item{
        display: block;
        margin-right: 0;
        flex: 0 0 calc(100%/4);
    }
    .img-wrapper{
    }
}
.carousel-inner{
    padding: 1em;
}
.card{
    margin: 0 .5em;
} 
    </style>
</head>
<body>
 
        <div id="carouselExampleControls bg-white" class="carousel " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="card p-3 shadow-lg" >
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title 1</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title 2</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title3</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title4</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title5</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div> 
               <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title6</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title7</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div> 
               <div class="carousel-item">
                <div class="card p-3 shadow-lg">
                    <div class="img-wrapper">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title8</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>
           
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-dark rounded-pill" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-dark rounded-pill" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
 
  
 
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src="main.js"></script>
   
</body>
</html>