@extends('admin.master')

@section('content')

  {{-- ck editor cdn --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>


<div class="content">
    <div class="card">

        <div class="card-title text-center fw-bold fs-2 text-primary">
            <h1><i class="fa-solid fa-cart-shopping fs-1 text-danger"></i></h1><br>

        TEAM CREATE PAGE
        </div>

        <div class="card-body">
            <form action="{{route('ourteam.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold"> <span><i
                                class="fa-solid fa-cart-shopping text-danger"></i></span>Team Name:</label>
                    <input type="text" class="form-control" name="name" id="name"
                        aria-describedby="name">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}

                            @enderror
                        </span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold"> <span><i
                                class="fa-solid fa-cart-shopping text-danger"></i></span>Email:</label>
                    <input type="text" class="form-control" name="email" id="email"
                        aria-describedby="email">
                        <span class="text-danger">
                            @error('email')
                            {{$message}}

                            @enderror
                        </span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold"> Phone:</label>
                    <input type="text" class="form-control" name="phone" id="phone"
                        aria-describedby="phone">
                        <span>
                            @error('phone')
                            {{$message}}

                            @enderror
                        </span>
                </div>

                <div class="mb-3">
                    <label for="designation" class="form-label fw-bold">Designation:</label>
                    <input type="text" class="form-control" name="designation" id="designation"
                        aria-describedby="designation">
                        <span>
                            @error('designation')
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


                        {{-- <script>
                            ClassicEditor
                                    .create( document.querySelector( '#description' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script> --}}



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection

