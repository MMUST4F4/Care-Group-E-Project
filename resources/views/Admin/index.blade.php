<style>
    .container {

        margin-top: 50px;


        background: #030202;
        background: linear-gradient(90deg, rgba(3, 2, 2, 1) 0%, rgba(173, 13, 13, 0.55) 35%, rgba(26, 2, 4, 1) 100%);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 6px 30px rgb(247, 3, 3);

        width: 100%;



    }

    input {
        background-color: white;
        color: black;
        border: 1px solid #ccc;
        padding: 8px;
        outline: none;


    }

    input:focus {
        background-color: white !important;
        /* prevent it from turning black
      */
        border-color: #007bff;
        /* or any color you like for focus */
    }

    /*i want attractive css for my form */
    .form-control {
        border-radius: 0.5rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .inputcolor {
        /* Light blue background */
        color: #333;
        /* Dark text color */
        border: 1px solid #ccc;
        /* Light gray border */
    }
</style>

@extends('Admin.HeaderFooter')
@section('content')



<div class="container" style="max-width:50%;  ">
    <center>
        <h1>Add News</h1>
    </center>

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control  inputcolor" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
            @error('author') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="form-group mb-3">
            <label>Image (optional)</label>
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="btn btn-danger">Add News</button>
    </form>
</div>



@endsection