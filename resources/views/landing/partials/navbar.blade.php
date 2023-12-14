<style>
    /* Add the below transitions to allow a smooth color change similar to lyft */
    .navbar {
        -webkit-transition: all 0.6s ease-out;
        -moz-transition: all 0.6s ease-out;
        -o-transition: all 0.6s ease-out;
        -ms-transition: all 0.6s ease-out;
        transition: all 0.6s ease-out;
    }

    /* Warna Biru Pekat 1:


        38, 84, 124

        Warna: #26547C
        RGB: 38, 84, 124
        Warna Biru Pekat 2:

        Warna: #1F456E
        RGB: 31, 69, 110
        Warna Biru Pekat 3:

        Warna: #1A3A5C
        RGB: 26, 58, 92 */
    .navbar.scrolled {
        background: rgb(68, 68, 68);
        /* IE */
        /* background: rgb(6, 71, 8); */
        background: rgb(7, 102, 173);
        /* NON-IE */
    }
</style>
<nav class="navbar fixed-top navbar-dark navbar-expand-md py-3"
    style="font-family: 'Epilogue', sans-serif;padding-left: 35px;padding-right: 35px;" onscroll="checkScroll()">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('storage/images/logo4.png') }}" alt="Logo" width="230" height="44"
                class=""></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse p-4" style="font-size: 14px;" id="navcol-2">
            <ul class="navbar-nav fw-bold ms-auto">
                {{-- <li class="nav-item fw-bold"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/">BERANDA</a></li> --}}
                <li class="nav-item fw-bold dropdown ms-2" data-bss-hover-animate="pulse">
                    <a class="nav-link text-white dropdown-toggle fw-bold " data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="   background-color: transparent;
                    background-repeat: no-repeat;
                    border: none;
                    cursor: pointer;
                    overflow: hidden;
                    outline: none;font-size: 14px;">
                        PROFIL DESA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                        style="font-size: 14px; background-color: white; color: #000;">
                        <li><a class="dropdown-item" href="/tentang-kami">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="/visi-misi">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="/sejarah-desa">Sejarah Desa</a></li>
                        <li><a class="dropdown-item" href="/geografi-desa">Geografi Desa</a></li>
                        <li><a class="dropdown-item" href="/demografi-desa">Demografi Desa</a></li>
                    </ul>
                </li>

                <li class="nav-item fw-bold dropdown ms-2" data-bss-hover-animate="pulse">
                    <a class="nav-link text-white  dropdown-toggle  fw-bold " data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="   background-color: transparent;
                    background-repeat: no-repeat;
                    border: none;
                    cursor: pointer;
                    overflow: hidden;
                    outline: none;">
                        PEMERINTAHAN DESA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                        style="font-size: 14px; background-color: white; color: #000;">
                        <li><a class="dropdown-item" href="/struktur-desa">Struktur Perangkat Desa</a></li>
                        <li><a class="dropdown-item" href="/lembaga-desa">Lembaga Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item fw-bold dropdown ms-2" data-bss-hover-animate="pulse">
                    <a class="nav-link text-white  dropdown-toggle  fw-bold " data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="   background-color: transparent;
                    background-repeat: no-repeat;
                    border: none;
                    cursor: pointer;
                    overflow: hidden;
                    outline: none;">
                        LAYANAN DESA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                        style="font-size: 14px; background-color: white; color: #000;">
                        <li><a class="dropdown-item" href="/layanan-surat">Surat Menyurat</a></li>
                        <li><a class="dropdown-item" href="/pengaduan-masyarakat">Pengaduan Masyarakat</a></li>
                    </ul>
                </li>
                <li class="nav-item fw-bold dropdown ms-2" data-bss-hover-animate="pulse">
                    <a class="nav-link text-white  dropdown-toggle  fw-bold " data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="   background-color: transparent;
                    background-repeat: no-repeat;
                    border: none;
                    cursor: pointer;
                    overflow: hidden;
                    outline: none;">
                        INFORMASI PUBLIK
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                        style="font-size: 14px; background-color: white; color: #000;">
                        <li><a class="dropdown-item" href="/berita-desa">Berita Desa</a></li>
                        <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="/unduhan">Unduhan</a></li>
                        <li><a class="dropdown-item" href="/produk-hukum">Produk Hukum</a></li>
                    </ul>
                </li>
                <li class="nav-item fw-bold dropdown ms-2" data-bss-hover-animate="pulse">
                    <a class="nav-link text-white  dropdown-toggle  fw-bold " data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="   background-color: transparent;
                    background-repeat: no-repeat;
                    border: none;
                    cursor: pointer;
                    overflow: hidden;
                    outline: none;">
                        TRANSPARANSI
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight"
                        style="font-size: 14px; background-color: white; color: #000;">
                        <li><a class="dropdown-item" href="/apbdes">APBD Desa</a></li>
                        <li><a class="dropdown-item" href="/pembangunan-desa">Pembangunan Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item fw-bold"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/wisata-desa">DESTINASI WISATA</a></li>
                {{-- <a href="/login"
                        class="btn btn-success btn-lg fs-5 fw-semibold rounded-pill shadow-sm me-2 py-2 px-4"
                        type="button" style="width: 100.475px;height: 35.375px;" data-bss-hover-animate="tada">|| Mulai
                </a> --}}
                {{-- <li class="nav-item fw-bold"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        data-bss-hover-animate="pulse" href="/login"> || MASUK</a>
                </li> --}}

                <a href="/login" class="btn btn-success btn-sm fs-8 fw-semibold rounded-pill shadow-sm me-2 py-2 px-3"
                    type="button"
                    style="font-size: 14px; width: 80px; height: 33.5px; background-color: rgb(7, 102, 173); color: rgb(255, 255, 255); text-shadow: 1px 1px 2px rgba(240, 0, 0, 0.5); border: 1.8px solid white;"
                    data-bss-hover-animate="pulse">
                    MASUK
                </a>




            </ul>
        </div>
    </div>
</nav>
<script>
    <!-- Pastikan Anda menyertakan library jQuery sebelum menggunakan script ini
    -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Ambil warna latar belakang dari tombol
        var backgroundColor = $('#myButton').css('background-color');

        // Fungsi untuk mengecek apakah warna sama dengan rgb(7, 102, 173) dan mengubah warna teks jika iya
        function checkAndChangeTextColor() {
            if (backgroundColor === 'rgb(7, 102, 173)') {
                $('#myButton').addClass('white-text');
            } else {
                $('#myButton').removeClass('white-text');
            }
        }

        // Panggil fungsi saat dokumen dimuat dan saat ukuran layar berubah (jika perlu)
        checkAndChangeTextColor();
        $(window).resize(function() {
            checkAndChangeTextColor();
        });
    });
</script>

</script>
<script>
    /**
     * Listen to scroll to change header opacity class
     */
    function checkScroll() {
        var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

        if ($(window).scrollTop() > startY) {
            $('.navbar').addClass("scrolled");
        } else {
            $('.navbar').removeClass("scrolled");
        }
    }

    if ($('.navbar').length > 0) {
        $(window).on("scroll load resize", function() {
            checkScroll();
        });
    }
</script>
