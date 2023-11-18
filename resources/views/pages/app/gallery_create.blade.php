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
      <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="drop-area" ondrop="dropHandler(event)" ondragover="dragOverHandler(event)">
          <label for="file-input" style="cursor: pointer;">
            <iconify-icon icon="gridicons:image-multiple" width="100px" class="text-white"></iconify-icon>
          </label>
          <p class="text-white"><label for="file-input" style="cursor: pointer;">Drag and drop files here or click to
              select</label> </p>
          {{-- <input type="file" id="file-input" name="img[]" multiple> --}}
          <input type="file" id="file-input" name="img[]" multiple onchange="handleFileSelect(event)">
        </div>
        <button type="submit" class="btn-main mt-3" style="border: none;">Submit</button>
      </form>
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

        // Create a new file item div
        const fileItem = document.createElement('div');
        fileItem.classList.add('file-item', 'mb-3');

        // Create a new progress bar for each file


        // Create a new row element for each file
        const divRow = document.createElement('div');
        divRow.classList.add('row');
        divRow.setAttribute('style', 'background: rgba(255, 255, 255, 0.13)');
        divRow.classList.add('py-3', 'rounded-3');


        // Create a new column element for the image
        const divCol1 = document.createElement('div');
        divCol1.classList.add('col-md-3');

        // Create a new column element for file information
        const divCol2 = document.createElement('div');
        divCol2.classList.add('col-md-9');

        // Populate divCol2 with file information
        divCol2.innerHTML = `<p class="text-white">File Name: ${file.name}</p>
                              <p class="text-white">File Size: ${fileSizeKB} KB</p>
                              <p class="text-white">File Type: ${file.type}</p>`;

        const progressBar = document.createElement('div');
        progressBar.classList.add('progress', 'mb-2');
        progressBar.innerHTML =
          '<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>';
        fileItem.appendChild(progressBar);

        divCol2.appendChild(progressBar);

        // Create a new image element for each file
        const image = document.createElement('img');
        image.src = URL.createObjectURL(file);
        image.alt = 'File Preview';
        image.classList.add('w-100', 'img-result');
        image.style.height = '250px';

        // Append image to divCol1
        divCol1.appendChild(image);

        // Append divCol1 and divCol2 to the row
        divRow.appendChild(divCol1);
        divRow.appendChild(divCol2);

        // Append the row to the file item
        fileItem.appendChild(divRow);

        // Append the file item to the file list
        fileList.appendChild(fileItem);

        // Upload file and update progress bar
        uploadFile(file, progressBar);
      }
    }

    function uploadFile(file, progressBar) {
      const xhr = new XMLHttpRequest();
      const formData = new FormData();
      formData.append('img[]', file);

      xhr.open('POST', '/admin/gallery/store', true);

      xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
          const percentage = (e.loaded / e.total) * 100;
          progressBar.querySelector('.progress-bar').style.width = percentage + '%';
          progressBar.querySelector('.progress-bar').innerHTML = percentage.toFixed(0) + '%';
        }
      };

      xhr.onload = function() {
        if (xhr.status === 200) {
          // Handle successful upload
          const response = JSON.parse(xhr.responseText);
          console.log(response.message); // Log the success message
        } else {
          // Handle upload failure
          console.error('File upload failed');
        }
      };

      xhr.send(formData);
    }
  </script>
@endsection
