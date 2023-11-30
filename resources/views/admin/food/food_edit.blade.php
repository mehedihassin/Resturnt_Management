@extends('admin.master')

@section('content')

  {{-- ck editor cdn --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


<div class="content">
    <div class="card">

        <div class="card-title text-center fw-bold fs-2 text-danger">


           FOOD EDIT PAGE
        </div>

        <div class="card-body">
            <form action="{{route('admin.food.update',$editData->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"> <span><i
                                class="fa-solid fa-cart-shopping text-danger"></i></span>Food Name:</label>
                    <input type="text" class="form-control" name="name" id="name"
                        aria-describedby="name" value="{{$editData->name}}">
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
                        aria-describedby="price" value="{{$editData->price}}">
                        <span class="text-danger">
                            @error('price')
                            {{$message}}

                            @enderror
                        </span>
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label fw-bold"> Food Discount:</label>
                    <input type="text" class="form-control" name="discount" id="discount"
                        aria-describedby="discount" value="{{$editData->discount}}">
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
                  <p class="mt-3"> <img width="50" src="{{asset('images/'. $editData->image)}}"
                    alt=""></p>

                    <span class="text-danger">
                        @error('image')
                        {{$message}}

                        @enderror
                    </span>

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold"> Food Description:</label>
                    <textarea type="text" class="form-control" name="description" id="description"
                        aria-describedby="description">
                        {{$editData->description}}"

                    </textarea>
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


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>


@endsection
