@extends('layouts.app')

@section('title', 'CODER - Create News')

@push('css-libraries')
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <style>
    span .ql-header .ql-picker {
      color: white;
    }

    #editor {
      height: 10px;
      width: 10px;
      color: #ffffff;
    }
  </style>
@endpush

@section('content')
  <section>
    <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
        <h1>Create News</h1>
      </div>
      <div class="row">
        <div class="col-md-8 mb-3">
          <div class="p-3 text-white"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
            <div class="input-group-custom mb-4">
              <input type="text" name="title" class="form-control text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                id="title" placeholder="Title" required>
            </div>
            <div class="input-group mb-4">
              <select class="form-select text-white fw-light"
                style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);"
                name="category" id="category">
                <option selected disabled class="text-white">Choose category</option>
                <option value="Web" name="category" id="category" class="text-black">Web</option>
                <option value="Mobile" name="category" id="category" class="text-black">Mobile</option>
                <option value="UI/UX" name="category" id="category" class="text-black">UI/UX</option>
                <option value="Competitive" name="category" id="category" class="text-black">Competitive</option>
                <option value="Data" name="category" id="category" class="text-black">Data</option>
                <option value="AI" name="category" id="category" class="text-black">AI</option>
                <option value="Event" name="category" id="category" class="text-black">Event</option>
              </select>
            </div>
            <div class="mb-4" class="text-white fw-light"
              style="background: rgba(255, 255, 255, 0.02); border: none; border-bottom: 2px solid white;
            backdrop-filter: blur(5px);">
              <div id="editor" name="content" style="color: #ffffff">
              </div>
              <input type="hidden" name="content" id="content" required>
            </div>
            <div>
              <button type="submit" class="btn-main"
                style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Submit</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="p-3 text-white"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px); border-bottom: 2px solid white">
            <img src="{{ asset('assets/img/no-image.svg') }}" id="result" alt="" class="w-100" width="100%"
              style="border-radius: 10px;">
            <p class="text-left mt-3">Thumbnail</p>
          </div>
          <input type="file" name="thumbnail" id="thumbnail" class="form-control mt-3 text-white"
            style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);"
            onchange="readFile(this)" required>

        </div>
      </div>
    </form>
  </section>
@endsection

@push('js-libraries')
  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

  <!-- Initialize Quill editor -->
  <script>
    var toolbarOptions = [
      [{
        'header': [1, 2, 3, 4, 5, 6, false]
      }],
      [{
        'font': []
      }],
      ['bold', 'italic', 'underline', 'strike'], // toggled buttons
      [{
        'align': []
      }],
      ['blockquote', 'code-block'],
      ['link', 'image'],
      [{
        'list': 'ordered'
      }, {
        'list': 'bullet'
      }],
      [{
        'script': 'sub'
      }, {
        'script': 'super'
      }], // superscript/subscript
      [{
        'indent': '-1'
      }, {
        'indent': '+1'
      }], // outdent/indent
      [{
        'direction': 'rtl'
      }], // text direction

      [{
        'color': []
      }, {
        'background': []
      }], // dropdown with defaults from theme



      ['clean'] // remove formatting button
    ];
    var quill = new Quill('#editor', {
      modules: {
        toolbar: toolbarOptions
      },
      theme: 'snow'
    });

    // Get quill as conten for DB
    const updateContentInput = () => {
      var content = quill.root.innerHTML;
      document.getElementById("content").value = content;
    }

    quill.on('text-change', function() {
      updateContentInput();
    });

    // File Reader
    function readFile(input) {
      let file = input.files[0];
      let fileReader = new FileReader();
      fileReader.readAsText(file);
      fileReader.onload = function() {
        document.getElementById("result").src = URL.createObjectURL(file);
      };
      fileReader.onerror = function() {
        alert(fileReader.error);
      };
    }
  </script>
@endpush
