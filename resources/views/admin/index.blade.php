<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="../assets/css/main/app.css">
    <link rel="stylesheet" href="../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="../assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../assets/css/pages/datatables.css">
    <link rel="stylesheet" href="../assets/css/shared/iconly.css">
    <link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html" class="fs-4">Pengaduan</a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="/logout" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Penduduk</h6>
                                                <h6 class="font-extrabold mb-0">{{ count($data['getDataPenduduk']) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Aspirasi Hari Ini</h6>
                                                <h6 class="font-extrabold mb-0">183.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon green mb-2">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Aspirasi Bulan Ini</h6>
                                                <h6 class="font-extrabold mb-0">80.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon red mb-2">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="text-muted font-semibold">Total Kategori</h6>
                                                <h6 class="font-extrabold mb-0">{{ count($data['getTotalCategory']) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    Data Aspirasi Berdasarkan Id Yang Terbaru
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
                                            <a class="nav-link" id="selesai-tab" data-bs-toggle="tab" href="#selesai" role="tab" aria-controls="selesai" aria-selected="false">History</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="menunggu" role="tabpanel" aria-labelledby="menunggu-tab">
                                            <div class="card-body">
                                                <div class="col-12 d-flex justify-content-center align-items-center gap-3">
                                                    <form action=""></form>
                                                    <div class="form-group ">
                                                        <select class="choices form-select">
                                                            <option>Pilih Kategori</option>
                                                            @foreach ($data['getTotalCategory'] as $datas)

                                                            <option value="{{ $datas['kategori'] }}">{{ $datas['kategori'] }}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date">
                                                        <button type="submit" class="badge bg-primary"><i class='bx bx-search'></i></button>
                                                    </div>
                                                </div>
                                                <table class="table my-3" id="table1 ">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Kategori</th>
                                                            <th>Lokasi</th>
                                                            <th>Keterangan</th>
                                                            <th>Bukti</th>
                                                            <th>Waktu</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data['getDataAspiration'] as $show)
                                                        @if ($show->feedback == 0)
                                                        @if ($show->status == 'Menunggu' )
                                                        <tr>
                                                            <td>{{ $show->id_pelaporan }}</td>
                                                            <td>{{ $show->kategori  }}</td>
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
                                                            <td class="d-flex justify-content-center align-items-center"><a id="confirmPending" class="btn btn-info "><i class="bi bi-check-circle"></i></a></td>
                                                            <form action="/admin/delete" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id_pelaporan" value="{{ $show->id_pelaporan }}">
                                                                <td><button type="submit" id="confirmPending" class="btn btn-danger"><i class="bi bi-trash3"></i></a></button>
                                                            </form>
                                                        </tr>
                                                        @endif
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
                                                            <th>Kategori</th>
                                                            <th>Lokasi</th>
                                                            <th>Keterangan</th>
                                                            <th>Bukti</th>
                                                            <th>Waktu</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data['getDataAspiration'] as $show)
                                                        @if ($show->feedback == 0)
                                                        @if ($show->status == 'Proses' )
                                                        <tr>
                                                            <td>{{ $show->id_pelaporan }}</td>
                                                            <td>{{ $show->kategori  }}</td>
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
                                                            <td><a id="replyProccess" class="btn btn-info">Tanggapi</a></td>
                                                        </tr>
                                                        @endif
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
                                                        @foreach ($data['getDataAspiration'] as $show)
                                                        @if ($show->feedback == 0)
                                                        @if ($show->status == 'Selesai' )
                                                        <tr>
                                                            <td>{{ $show->id_pelaporan }}</td>
                                                            <td>{{ $show->kategori  }}</td>
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
                                                            <td><a class="btn btn-info">Konfirmasi</a></td>
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

                        </section>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Berkat</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        const pending = document.getElementById('confirmPending').addEventListener('click', function() {
            Swal.fire({
                title: 'Confirm?',
                text: "Anda Ingin Mengkonfirmasi Aspirasi Ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya.'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Confirmed!',
                        'Aspirasi Ini Sedang Diproses!',
                        'success'
                    )
                }
            })
        })
    </script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="../assets/js/pages/dashboard.js"></script>
    <script src="../assets/extensions/sweetalert2/sweetalert2.min.js"></script>
</body>

</html>