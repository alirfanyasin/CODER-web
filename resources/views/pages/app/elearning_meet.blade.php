@extends('layouts.app')

@section('title', 'CODER - Meet ' . $division->name)

@section('content')
  <section>
    <div class="breadcrumb d-flex justify-content-between align-items-center text-white">
      <h1>E-Learning</h1>
      @if (Auth::user()->hasPermissionTo('admin-division') || Auth::user()->hasRole('admin'))
        <a href="{{ route('admin.elearning.meet.create') }}">
          <div class="btn-circle">
            <iconify-icon icon="ph:plus-bold" class="text-white" width="20px"></iconify-icon>
          </div>
        </a>
      @endif
    </div>
  </section>

  <div class="row">
    @role('admin')
      <div class="col-md-8 mb-3">
      @endrole
      @role('user')
        <div class="col-md-12 mb-3">
        @endrole
        <div class="text-white p-4 bg-custom">
          <header class="text-left">
            <h5>Meet {{ $division->name }}</h5>
          </header>

          <div class="table-responsive mt-4">
            <table class="table rounded-4 table-striped" style="background: none">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Meeting</th>
                  <th scope="col">Start Time</th>
                  <th scope="col">End Time</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($allData as $meet)
                  <tr>
                    <th class="align-middle" scope="row">{{ $no++ }}</th>
                    <td class="align-middle">Pertemuan {{ $meet->meeting }}</td>
                    <td class="align-middle">{{ $meet->start_time }}</td>
                    <td class="align-middle">{{ $meet->end_time ?? '-' }}</td>
                    <td class="align-middle"><span
                        class="badge {{ $meet->status == 'Active' ? 'bg-primary' : 'bg-success' }}">{{ $meet->status }}</span>
                    </td>
                    <td>
                      @if (Auth::user()->hasPermissionTo('admin-division') || Auth::user()->hasRole('admin'))
                        <div class="d-flex">
                          <form action="{{ route('admin.elearning.meet.destroy', $meet->id) }}" method="POST"
                            class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                              class="btn-action-custom d-flex justify-content-center align-items-center"><iconify-icon
                                icon="mynaui:trash"></iconify-icon></button>
                          </form>
                          <a href="{{ route('admin.elearning.meet.edit', $meet->id) }}"
                            class="btn-action-custom d-flex justify-content-center align-items-center mx-2"><iconify-icon
                              icon="basil:edit-outline"></iconify-icon></a>
                          <a href="#"
                            class="btn-action-custom d-flex justify-content-center align-items-center copyLinkButton"
                            data-meet-id="{{ $meet->id }}" data-division="{{ $meet->division->name }}"
                            data-topic="{{ $meet->topic }}" data-start-time="{{ $meet->start_time }}"
                            data-end-time="{{ $meet->end_time }}" data-meeting="{{ $meet->meeting }}"
                            data-link="{{ $meet->link }}">
                            <iconify-icon icon="uil:share"></iconify-icon>
                          </a>
                        </div>
                      @endif
                      @if (!Auth::user()->hasPermissionTo('admin-division') && !Auth::user()->hasRole('admin'))
                        <a href="{{ $meet->link }}" target="_blank"
                          class="btn-action-custom d-flex justify-content-center align-items-center mx-2"><iconify-icon
                            icon="fluent:arrow-right-16-filled"></iconify-icon></a>
                      @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      @role('admin')
        <div class="col-md-4 mb-5">
          <div class="text-white p-4 bg-custom">
            <header class="text-left">
              <h5>Division</h5>
            </header>
            <div>
              <ul class="mt-3">
                @foreach ($allDivision as $division)
                  <li class="mb-3 list-division">
                    <a href="{{ url('/admin/e-learning/meet/division-' . $division->id) }}"
                      class="text-white fw-light text-decoration-none">{{ $division->name }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      @endrole
    </div>

  @endsection

  @push('css-custom')
    <style>
      .list-division {
        transition: .7s;
      }

      .list-division:hover {
        background: rgba(255, 255, 255, 0.13);
        border-radius: 5px;
        padding: 2px 10px;
        backdrop-filter: blur(5px);
      }

      table.table {
        --bs-table-bg: none;
        --bs-table-color: white;
        --bs-table-striped-color: white;
      }

      .table td,
      .table th {
        white-space: nowrap;
      }
    </style>
  @endpush

  @push('js-libraries')
    <script>
      document.querySelectorAll('.copyLinkButton').forEach(function(button) {
        button.addEventListener('click', function() {
          var meetId = button.getAttribute('data-meet-id');
          var divisionName = button.getAttribute('data-division');
          var topicName = button.getAttribute('data-topic');
          var meeting = button.getAttribute('data-meeting');
          var linkMeet = button.getAttribute('data-link');
          var startTime = new Date(button.getAttribute('data-start-time'));
          var endTime = new Date(button.getAttribute('data-end-time'));

          // Memastikan bahwa endTime adalah objek Date yang valid
          var isValidEndTime = !isNaN(endTime.getTime());

          // Fungsi untuk mengubah bulan dalam format angka menjadi format nama bulan
          function getMonthName(monthNumber) {
            const months = [
              "Januari", "Februari", "Maret", "April", "Mei", "Juni",
              "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];
            return months[monthNumber];
          }

          // Format tanggal
          var formattedDate =
            `${startTime.getDate()} ${getMonthName(startTime.getMonth())} ${startTime.getFullYear()}`;

          // Format jam
          var formattedStartTime = startTime.toLocaleTimeString([], {
            hour: '2-digit',
            minute: '2-digit'
          });
          var formattedEndTime = isValidEndTime ? endTime.toLocaleTimeString([], {
            hour: '2-digit',
            minute: '2-digit'
          }) : 'Selesai';


          // Membuat elemen textarea untuk menyalin teks ke clipboard
          var textarea = document.createElement('textarea');

          textarea.value = `👋 Halo Coderian! 👋
Wih, Bagaimana nih kabar kalian?

Yuk, kita kenalan lebih dekat dengan ${divisionName}!  
Kita bakal bahas *${topicName}* dan materi yang akan kita pelajari kedepannya dan masih banyak lagi!

🚨SAVE THE DATE!🚨
📅: ${formattedDate}
⏰: ${formattedStartTime} - ${formattedEndTime}
📍: Online, (${linkMeet})

Jangan lupa hadir dan mengikuti pertemuan kita yang ke ${meeting} ya guys!
Goodluck and See You Soon!👋

Follow us: @coder.telkomsby`
          document.body.appendChild(textarea);

          textarea.select();

          try {
            document.execCommand('copy');
            alert('Link berhasil disalin ke clipboard!');
          } catch (err) {
            console.error('Gagal menyalin ke clipboard:', err);
            alert('Gagal menyalin ke clipboard. Silakan salin secara manual.');
          } finally {
            document.body.removeChild(textarea);
          }
        });
      });
    </script>
  @endpush
