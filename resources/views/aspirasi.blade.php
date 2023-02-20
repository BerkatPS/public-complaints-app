<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] }}</title>
    <link rel="stylesheet" href="assets/extensions/choices.js/public/assets/styles/choices.css">

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/extensions/rater-js/lib/style.css">

    <link rel="stylesheet" href="assets/extensions/filepond/filepond.css">
    <link rel="stylesheet" href="assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="assets/extensions/toastify-js/src/toastify.css">
    <link rel="stylesheet" href="assets/css/pages/filepond.css">

</head>

<body>

    <section id="basic-vertical-layouts">
        <div class="row match-height ">
            <div class="col-md-6 col-12 d-flex justify-content-center align-items-center  mx-auto my-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Aspirasi</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="/storeaspirasi" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body ">
                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nama</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="nama" placeholder="Nama" max="16">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Nomor Induk Kependudukan</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-info-vertical">Kategori</label>
                                                <select class="choices form-select" name="id_kategori">
                                                    <option>Pilih Kategori</option>
                                                    @foreach ($data['getTotalCategory'] as $datas)
                                                    
                                                    <option value="{{ $datas['id_kategori'] }}">{{ $datas['kategori'] }}</option>
                                                    
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-vertical">Bukti</label>
                                                <!-- File uploader with image preview -->
                                                <input type="file" class="image-preview-filepond" name="bukti">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-info-vertical">Lokasi</label>
                                                <input type="text" id="contact-info-vertical" class="form-control" name="lokasi" placeholder="lokasi">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Keterangan</label>
                                                <textarea name="keterangan" class="form-control" id="" cols="77" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 d-grid">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="basic-vertical-layouts">
        <div class="col-12  d-flex justify-content-center align-items-center     mx-auto my-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Aspirasi</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="menunggu-tab" data-bs-toggle="tab" href="#menunggu" role="tab" aria-controls="menunggu" aria-selected="true">Menunggu</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="proses-tab" data-bs-toggle="tab" href="#proses" role="tab" aria-controls="proses" aria-selected="false">Proses</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="selesai-tab" data-bs-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">Feedback</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="menunggu" role="tabpanel" aria-labelledby="menunggu-tab">
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                            <th>Bukti</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['getAspiration'] as $show)
                                        @if ($show->status == 'Menunggu')

                                        <tr>
                                            <td>{{ $show->id_pelaporan }}</td>
                                            <td>{{ $show->nama  }}</td>
                                            <td>{{ $show->category->kategori  }}</td>
                                            <td>{{ $show->lokasi  }}</td>
                                            <td>{{ $show->keterangan  }}</td>
                                            <td><a href="{{ $show->bukti  }}">Lihat Bukti
                                                </a></td>
                                            <td>{{ $show->created_at  }}</td>
                                            <td>
                                                <span class="badge bg-primary">
                                                    @if ($show->status == 'Menunggu')
                                                    {{ $show->status  }}
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="proses" role="tabpanel" aria-labelledby="proses-tab">
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                            <th>Bukti</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['getAspiration'] as $show)
                                        @if ($show->status == "Proses")

                                        <tr>
                                            <td>{{ $show->id_pelaporan }}</td>
                                            <td>{{ $show->nama  }}</td>
                                            <td>{{ $show->category->kategori  }}</td>
                                            <td>{{ $show->lokasi  }}</td>
                                            <td>{{ $show->keterangan  }}</td>
                                            <td><a href="{{ $show->bukti  }}">Lihat Bukti
                                                </a></td>
                                            <td>{{ $show->created_at  }}</td>
                                            <td>
                                                <span class="badge bg-warning">
                                                    @if ($show->status == 'Proses')
                                                    {{ $show->status  }}
                                                    @endif
                                                </span>
                                            </td>
                                        </tr>

                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                            <th>Bukti</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                            <th>Feedback</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['getAspiration'] as $show)
                                        @if ($show->feedback == 0)
                                        @if ($show->status == 'Selesai' )
                                        <tr>
                                            <td>{{ $show->id_pelaporan }}</td>
                                            <td>{{ $show->nama  }}</td>
                                            <td>{{ $show->category->kategori  }}</td>
                                            <td>{{ $show->lokasi  }}</td>
                                            <td>{{ $show->keterangan  }}</td>
                                            <td><a href="{{ $show->bukti  }}">Lihat Bukti
                                                </a></td>
                                            <td>{{ $show->created_at  }}</td>
                                            <td>
                                                <span class="badge bg-success">
                                                    @if ($show->status == 'Selesai')
                                                    {{ $show->status  }}
                                                    @endif
                                                </span>
                                            </td>
                                            <td>

                                                <form action="#">
                                                    <div id="basic">

                                                    </div>

                                                </form>
                                                <button type="submit" class="btn btn-primary"><i class='bx bx-send'></i></button>
                                            </td>
                                        </tr>
                                        @endif
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Aspirasi Data -->
    <script src="assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="assets/js/pages/form-element-select.js"></script>
    <script src="assets/extensions/rater-js/index.js?v=2"></script>
    <script src="assets/js/pages/rater-js.js"></script>
    <script src="assets/extensions/filepond/filepond.js"></script>
    <script src="assets/extensions/toastify-js/src/toastify.js"></script>
    <script src="assets/js/pages/filepond.js"></script>
</body>

</html>