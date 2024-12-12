<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demo : Dashboard - Analytics | sneat - Bootstrap Dashboard PRO</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@develoka/angka-terbilang-js/index.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->


            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path
                                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                        id="path-1"></path>
                                    <path
                                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                        id="path-3"></path>
                                    <path
                                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                        id="path-4"></path>
                                    <path
                                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                        id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle"
                                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2"> PDAM Pay</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="index.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="../inquiry/index.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">Pengecekan Tagihan</div>
                                </a>
                            </li>
                            <li class="menu-item active">
                                <a href="views/payment/index.php" class="menu-link">
                                    <div class="text-truncate" data-i18n="CRM">Pembayaran Tagihan</div>
                                </a>
                            </li>




                            <!-- Misc -->
                            <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span>
                            </li>
                            <li class="menu-item">
                                <a href="../report/index.php"
                                     class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-support"></i>
                                    <div class="text-truncate" data-i18n="Support">Laporan Pembayaran</div>
                                </a>
                            </li>
                        </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="bx bx-menu bx-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search bx-md"></i>
                                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-4">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../../../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../../../assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Admin</h6>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> <i
                                                class="bx bx-cog bx-md me-3"></i><span>Settings</span> </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i><span
                                                    class="flex-grow-1 align-middle">Billing Plan</span>
                                                <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Main Content -->
                            <div class="container card">
                                <h2 class="mb-4">Bayar Tagihan</h2>
                                <form id="payment-form">
                                    <div class="mb-3">
                                        <label for="nama-pdam" class="form-label">Nama PDAM</label>
                                        <select class="form-select" id="nama-pdam" name="kode_produk" required>
                                            <option value="">-- Pilih PDAM --</option>
                                            <option value="WASDA">PDAM Sidoarjo</option>
                                            <option value="WABONDO">PDAM Bondowoso</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="idpel" class="form-label">ID Pelanggan</label>
                                        <input type="text" class="form-control" id="idpel" name="idpel"
                                            placeholder="Masukkan ID Pelanggan" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Bayar Tagihan</button>
                                </form>

                                <!-- <div id="response" class="mt-4" style="display: none;">
                                    <h4>Struk Pembayaran Tagihan</h4>
                                    <pre class="p-3 bg-light border rounded" id="response-data"></pre>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <?php include 'footer.php'; ?>

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../../../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <!-- Axios Library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Custom Script -->
    <script>
        document.getElementById('payment-form').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Ambil data dari form
            const kodeProduk = document.getElementById('nama-pdam').value;
            const idpel = document.getElementById('idpel').value;

            // Validasi input
            if (!kodeProduk || !idpel) {
                alert('Harap lengkapi semua data!');
                return;
            }

            try {
                // Tampilkan loader (opsional)
                const responseContainer = document.getElementById('response');
                const responseData = document.getElementById('response-data');

                // Kirim request menggunakan Axios
                const response = await axios.post('../../api/payment.php', {
                    kode_produk: kodeProduk,
                    idpel: idpel
                });
                // Swal.fire({
                //     title: "Pembayaran Berhasil Dilakukan!",
                //     text: "You clicked the button!",
                //     icon: "success"
                // });

                let timerInterval;
                Swal.fire({
                    title: "Data berhasil disimpan!",
                    html: "Pembayaran Berhasil Dilakukan",
                    icon: "success",
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const timer = Swal.getPopup().querySelector("b");
                        timerInterval = setInterval(() => {
                            timer.textContent = `${Swal.getTimerLeft()}`;
                        }, 100);

                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                        generatePDF(response.data);

                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log("I was closed by the timer");
                    }
                });

                // Panggil generatePDF dengan response.data yang diterima
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat melakukan inquiry.');
            }
        });

        function getNamaBulan(angka) {
            const bulan = [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
            ];

            // Memeriksa apakah angka valid (1-12)
            if (angka < 1 || angka > 12) {
                return "Angka harus antara 1 dan 12";
            }

            return bulan[angka - 1]; // Mengembalikan nama bulan
        }

        // Fungsi untuk generate PDF
        function generatePDF(data) {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Menambahkan judul
            doc.setFontSize(18);

            let dynamicheaderstruk = data.idpelanggan1 == '01002676' ? 'PDAM SIDOARJO' : 'PDAM BONDOWOSO';
            let grandTotalPenalty = parseInt(data.penalty1) + parseInt(data.penalty2) + parseInt(data.penalty3) + parseInt(data.penalty4) + parseInt(data.penalty5) + parseInt(data.penalty6);
            doc.text(`STRUK PEMBAYARAN ${dynamicheaderstruk}`, 20, 20);

            // Menambahkan informasi struk
            doc.setFontSize(12);
            doc.text(`TANGGAL: ${data.waktu}`, 20, 30);
            doc.text(`NO. RESI: ${data.ref2}`, 20, 40);
            doc.text(`NAMA PDAM: ${data.pdamname}`, 20, 50);
            doc.text(`NO. PELANGGAN: ${data.idpelanggan1}`, 20, 60);
            doc.text(`NAMA: ${data.customername}`, 20, 70);
            doc.text(`ALAMAT: ${data.customeraddress}`, 20, 80);

            // Menambahkan rincian tagihan
            // let y = 90;
            // Fungsi untuk memformat angka menjadi rupiah
            function formatRupiah(angka) {
                var number_string = angka.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                // tambahkan titik setiap 3 angka
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return 'Rp. ' + rupiah;
            }

            function terbilang(angka) {
                return angkaTerbilang(angka); 
            }

            doc.text("RINCIAN TAGIHAN", 20, 90);

            // Menambahkan rincian tagihan dalam bentuk tabel
            // Table header
            doc.setFontSize(12);
            doc.text('Bulan', 20, 100);
            doc.text('Tagihan', 100, 100);

            // Table data
            let y = 110;
            doc.setFontSize(10);
            // Asumsikan data.monthperiod dan data.billamount memiliki panjang yang sama
            const months = ['monthperiod1', 'monthperiod2', 'monthperiod3', 'monthperiod4', 'monthperiod5', 'monthperiod6'];
            months.forEach((month, index) => {
                doc.text(getNamaBulan(data[month]), 20, y);
                doc.text(formatRupiah(data[`billamount${index + 1}`]), 100, y);

                y += 10;
            });
            doc.text(`DENDA ${formatRupiah(grandTotalPenalty)}`, 20, 180);
            doc.text(`BEBAN  ${formatRupiah(data.fee)}`, 20, 190);
            doc.text(`ADMIN  ${formatRupiah(data.biayaadmin)}`, 20, 200);
            doc.text(`-----------------------------------`, 20, 210);
            const totalTagihan = parseInt(data.nominal) + parseInt(data.fee) + parseInt(data.biayaadmin);
            const totalTagihanTerbilang = terbilang(totalTagihan);
            doc.text(`TOTAL TAGIHAN  ${formatRupiah(totalTagihan)}`, 20, 220);
            doc.text(`TERBILANG : ${totalTagihanTerbilang} rupiah`, 20, 230);
            doc.text(`${dynamicheaderstruk} MENYATAKAN STRUK INI`, 20, 240);
            doc.text(`SEBAGAI BUKTI PEMBAYARAN YANG SAH`, 20, 250);
            // Menyimpan PDF dan menampilkan dialog download
            doc.save('struk_pembayaran.pdf');
        }
    </script>

</body>

</html>