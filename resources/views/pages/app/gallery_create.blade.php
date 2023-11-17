@extends('layouts.app')

@section('title', 'CODER - Division')

@section('content')
  <style>
    #drop-area {
      border: 2px dashed #ccc;
      border-radius: 8px;
      padding: 50px 0;
      text-align: center;
      cursor: pointer;
    }

    #file-input {
      display: none;
    }

    #file-list {
      margin-top: 20px;
    }

    .img-result {
      border-radius: 10px;
    }
  </style>
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>Create Gallery</h1>
    </div>
  </section>

  <div class="row">
    <div class="col">
      <div id="drop-area" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)">
        <label for="file-input" style="cursor: pointer;">
          <iconify-icon icon="gridicons:image-multiple" width="100px" class="text-white"></iconify-icon>
        </label>
        <p class="text-white"><label for="file-input" style="cursor: pointer;">Drag and drop files here or click to
            select</label> </p>
        <input type="file" id="file-input" multiple onchange="handleFileSelect(event)">
      </div>

      <div class="row">
        <div class="col-4">
          <!-- Use class for multiple images -->
          <img src="" alt="" class="w-100 img-result" width="100%">
        </div>
        <div class="col-md-8">

        </div>
      </div>

      <div id="file-list"></div>
    </div>
  </div>
  <script>
    function dragOverHandler(event) {
      event.preventDefault();
      document.getElementById('drop-area').style.border = '2px dashed #007BFF';
    }

    function dropHandler(event) {
      event.preventDefault();
      document.getElementById('drop-area').style.border = '2px dashed #ccc';

      const files = event.dataTransfer.files;
      handleFiles(files);
    }

    function handleFileSelect(event) {
      const files = event.target.files;
      handleFiles(files);
    }

    function handleFiles(files) {
      const fileList = document.getElementById('file-list');
      fileList.innerHTML = ''; // Clear previous file list

      for (const file of files) {
        const fileSizeKB = (file.size / 1024).toFixed(2);
        const fileItem = document.createElement('div');

        // Create a new row element for each file
        const divRow = document.createElement('div');
        divRow.classList.add('row');

        // Create a new column element for the image
        const divCol1 = document.createElement('div');
        divCol1.classList.add('col-md-3', 'mb-3');

        // Create a new column element for file information
        const divCol2 = document.createElement('div');
        divCol2.classList.add('col-md-9', 'mb-3');

        // Populate divCol2 with file information
        divCol2.innerHTML = `<p class="text-white">File Name: ${file.name}</p>
                        <p class="text-white">File Size: ${fileSizeKB} KB</p>
                        <p class="text-white">File Type: ${file.type}</p>`;

        // Create a new image element for each file
        const image = document.createElement('img');
        image.src = URL.createObjectURL(file);
        image.alt = 'File Preview';
        image.classList.add('w-100', 'img-result');

        // Append image to divCol1
        divCol1.appendChild(image);

        // Append divCol1 and divCol2 to the row
        divRow.appendChild(divCol1);
        divRow.appendChild(divCol2);

        // Append the row to the file item, and file item to the file list
        fileItem.appendChild(divRow);
        fileList.appendChild(fileItem);
      }
    }
  </script>
@endsection
