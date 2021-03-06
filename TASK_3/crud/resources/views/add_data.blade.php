
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>crud</title>
  </head>
  <body>
      <div class="container">
   <!--<button type="button" class="btn btn-success">Add Product</button>-->
   <a href = "{{url('/show')}}" class="btn btn-success my-3">Show Product</a>
    
</div>


<form action="{{url('/store')}}" method="post">

        
        <!--Cross Site Request Forgery    {{csrf_field()}} -->

       
        @csrf
        <div class="col-md-2 form-group">
            <span>Product Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                    <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>


        <div class="col-md-2 form-group">
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{old('p_id')}}" class="form-control">
            @error('p_id')
                    <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>

        <div class="col-md-2 form-group">
            <span>Product Price</span>
            <input type="text" name="price" value="{{old('price')}}" class="form-control">
            @error('price')
                    <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>

        <div class="col-md-2 form-group">
            <span>Product Quantity</span>
            <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control">
            @error('quantity')
                    <span class="text-danger">{{$message}}</span>
            @enderror            
        </div>
        <div class="col-md-2 form-group">
            <span>Product Description</span>
            <input type="text" name="description" value="{{old('description')}}" class="form-control">
            @error('description')
                    <span class="text-danger">{{$message}}</span>
            @enderror            
        </div>       
        
        <input type="submit" class="btn btn-success" value="Add">

    </form>
</body>
</html>