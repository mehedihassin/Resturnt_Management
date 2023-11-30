@extends('admin.master')

@section('content')

  {{-- ck editor cdn --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


<div class="content">
    <div class="card">

        <div class="card-title text-center fw-bold fs-2 text-primary">
            <h1><i class="fa-solid fa-cart-shopping fs-1 text-danger"></i></h1><br>

           FOOD CREATE PAGE
        </div>

        <div class="card-body">
            <form action="{{route('admin.food.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"> <span><i
                                class="fa-solid fa-cart-shopping text-danger"></i></span>Food Name:</label>
                    <input type="text" class="form-control" name="name" id="name"
                        aria-describedby="name">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}

                            @enderror
                        </span>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold"> <span><i
                                class="fa-solid fa-cart-shopping text-danger"></i></span>Food Price:</label>
                    <input type="text" class="form-control" name="price" id="price"
                        aria-describedby="price">
                        <span class="text-danger">
                            @error('price')
                            {{$message}}

                            @enderror
                        </span>
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label fw-bold"> Food Discount:</label>
                    <input type="text" class="form-control" name="discount" id="discount"
                        aria-describedby="discount">
                        <span>
                            @error('discount')
                            {{$message}}

                            @enderror
                        </span>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold"><span><i
                                class=" text-primary "></i></span>Image</label>
                    <input name="image" type="file" class="form-control">
                    <span class="text-danger">
                        @error('image')
                        {{$message}}

                        @enderror
                    </span>

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold"> Food Description:</label>
                    <textarea type="text" class="form-control" name="description" id="description"
                        aria-describedby="description"></textarea>
                        <span class="text-danger">
                            @error('description')
                            {{$message}}

                            @enderror
                        </span>

                        <script>
                            ClassicEditor
                                    .create( document.querySelector( '#description' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
