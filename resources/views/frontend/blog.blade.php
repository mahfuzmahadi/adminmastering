<!DOCTYPE html>
<html>
<head>
  <title>Blogs</title>
  <!-- include Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-5Nfz1cNclxR5z5b5/GtdlYgOIptlSD7V9jKLZG1dVfxJiGXuOF7KgeI4w84+ynD75PjnQ+c/zkJ/I9ECZj3Hgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <style>
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .blog-post-meta {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .card-text {
        font-size: 1rem;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        padding: 1rem;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 1rem;
        font-weight: bold;
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
        transform: translateY(-2px);
    }
</style>
    <!-- include the menubar -->
    @include('layouts.menubar')

    <!-- list of blogs -->
    <div class="container mt-4">
      <div class="row">
          @foreach ($blogs as $blog)
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <div class="card-body">
                      <h5 class="card-title">{{ $blog->title }}</h5>
                      <p class="blog-post-meta">{{ $blog->created_at }} by {{ $blog->author_name }}</p>
                      <p class="card-text">{!! substr(htmlspecialchars_decode($blog->content), 0, 150) . '...' !!}</p>
                   <a href="" class="btn btn-primary">Read More</a> 

                      {{-- <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-primary">Read More</a> --}}
                  </div>
              </div>
          </div>
          @endforeach
      </div>
  </div>
  

  

    <!-- create blog button -->
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#createBlogModal" style="position: fixed; top: 20px; right: 20px; background-color: green;">
      Create New Blog
  </button>
  

    <!-- create blog modal -->
    <div class="modal fade" id="createBlogModal" tabindex="-1" aria-labelledby="createBlogModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('blog.store') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createBlogModalLabel">Create a new blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" placeholder="Please write your blog within 250 words..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- include Bootstrap 5 JS -->
    <!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <script src="{{ asset('js/tinymce.min.js') }}" ></script>   
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
</body>
</html>