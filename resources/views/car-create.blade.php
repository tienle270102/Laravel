<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Add new cars</h2>
    <a href="{{route('cars.index')}}">Go back to car list</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('cars.store')}}" class="was-validated" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="model">Model:</label>
        <input type="text" class="form-control" id="" placeholder="Enter model" name="model" required>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
        <label for="image">Image:</label>
        <img src="" id="preview-img"alt="" style="height:300px">
        <input type="file" class="form-control" id="pwd" name="image" onchange="changeImage(event)" required>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
        </div>
        <script>
            const changeImage = (e) => {
                const preImg = document.getElementById("preview-img")
                const file = e.target.files[0]
                preImg.src = URL.createObjectURL(file)
                preImg.onload = () => {
                    URL.revokeObjectURL(preImg.src)
                }
            }
        </script>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="" placeholder="Enter description" name="description" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <label for="description">Manufacturer:</label>
            <select name="manufacturer_id" id="">
                @foreach($mfs as $mf)
                    <option value="{{$mf->id}}">{{$mf->mf_name}}</option>
                @endforeach
            </select>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <label for="produced_on">Produced_on:</label>
            <input type="date" class="form-control" id="" placeholder="Enter date" name="produced_on" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
