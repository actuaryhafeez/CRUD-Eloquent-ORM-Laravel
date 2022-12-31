<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
{{-- nav start --}}

<nav class="navbar navbar-expand-lg bg-success-subtle fw-bold fs-4 mb-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">AH Products</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>

          </li>
          <li>
            <a class="nav-link active" aria-current="page" href="#">Products</a>

          </li>
          <li>
            <a class="nav-link active" aria-current="page" href="#">Services</a>
          </li>
            <a class="nav-link active" aria-current="page" href="#">Contact</a>
            <li></li>

        </ul>

      </div>
    </div>
  </nav>

{{-- nav-end --}}
    <div>
        <h2 class="container alert alert-danger mb-5 text-center">CRUD using Eloquent ORM Laravel</h2>
    </div>
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Update Product
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Product </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            {{-- model-bod-start  --}}
            <form action="" method="post" enctype= multipart/form-data>
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" value="{{ $product->name }}">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price" value="{{ $product->price }}">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control" id="image" name="image" >
                </div> 
                <button type="submit" class="btn btn-danger">Update Product Specification</button>                  
            </form>
            {{-- model-body-end  --}}
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</center>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>