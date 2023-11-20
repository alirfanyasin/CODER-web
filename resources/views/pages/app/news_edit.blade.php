@extends('layouts.app')

@section('title', 'CODER - News')

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
    <form method="POST" action="{{ route('admin.news.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
            <h1>Update News</h1>
        </div>
        <div class="row">
            <div class="col-md-8 mb-3">
                <div class="p-3 text-white" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);">
                    <div class="input-group mb-4">
                        <input type="text" name="title" class="form-control text-white fw-light" style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);" id="title" placeholder="Title" value="{{ $data->title }}">
                    </div>
                    <div class="input-group mb-4">
                        <select class="form-select text-white fw-light" style="height: 50px; background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none; border-bottom: 2px solid white;
                  backdrop-filter: blur(5px);" name="category" id="category">
                            <option selected disabled class="text-black">Choose category</option>
                            <option value="Web" class="text-black" {{ $data->category == 'Web' ? 'selected' : '' }}>Web</option>
                            <option value="Mobile" class="text-black" {{ $data->category == 'Mobile' ? 'selected' : '' }}>Mobile</option>
                            <option value="UI/UX" class="text-black" {{ $data->category == 'UI/UX' ? 'selected' : '' }}>UI/UX</option>
                            <option value="Competitive" class="text-black" {{ $data->category == 'Competitive' ? 'selected' : '' }}>Competitive</option>
                            <option value="Data" class="text-black" {{ $data->category == 'Data' ? 'selected' : '' }}>Data</option>
                            <option value="AI" class="text-black" {{ $data->category == 'AI' ? 'selected' : '' }}>AI</option>
                            <option value="Event" class="text-black" {{ $data->category == 'Event' ? 'selected' : '' }}>Event</option>
                        </select>
                    </div>
                    <div class="mb-4" class="text-white fw-light" style="background: rgba(255, 255, 255, 0.02); border: none; border-bottom: 2px solid white;
            backdrop-filter: blur(5px);">
                        <div id="editor" name="content" style="color: #ffffff">
                            {!! $data->content !!}
                        </div>
                        <input type="hidden" name="content" id="content" required>
                    </div>
                    <div>
                        <button type="submit" class="btn-main" style="background: rgba(255, 255, 255, 0.02);  border-radius: 10px; border: none;
              backdrop-filter: blur(5px);">Update</button>
                        <a href="{{ route('admin.news.show', $data->id) }}" class="btn-main">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="p-3 text-white" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px); border-bottom: 2px solid white">
                    <img src="{{ asset('storage/image/' . $data->thumbnail) }}" id="result" alt="" class="w-100" width="100%" style="border-radius: 10px;">
                    <p class="text-left mt-3">Thumbnail</p>
                </div>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control mt-3 text-white" style="background: rgba(255, 255, 255, 0.15); border-radius: 10px; backdrop-filter: blur(5px);" onchange="readFile(this)">

            </div>
        </div>
    </form>
</section>
@endsection
@push('js-libraries')
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
</script>
<script>
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Mengganti sumber gambar
                document.getElementById('result').src = e.target.result;
            };

            // Membaca data gambar sebagai URL
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush