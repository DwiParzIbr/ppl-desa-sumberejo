@extends('landing.layouts.main1')

@section('container')
    <style>
        /* If the screen size is 1200px wide or more, set the font-size to 80px */
        @media (min-width: 1200px) {
            .responsive-header {
                font-size: 64px;
            }

            .responsive-header1 {
                font-size: 50px;
            }

            .responsive-p {
                font-size: 24px;
            }

            .responsive-p1 {
                font-size: 22px;
            }

            .responsive-mini {
                font-size: 20px
            }

            .responsive-small {
                font-size: 16px
            }
        }

        /* If the screen size is smaller than 1200px, set the font-size to 80px */
        @media (max-width: 1199.98px) {
            .responsive-header {
                font-size: 40px;
            }

            .responsive-header1 {
                font-size: 30px;
            }

            .responsive-p {
                font-size: 16px;
            }

            .responsive-p1 {
                font-size: 14px;
            }

            .responsive-mini {
                font-size: 14px
            }
        }
    </style>
    <style>
        /* Typewriter effect 1 */
        @keyframes typing {

            0%,
            1% {
                content: "";
            }

            1%,
            2% {
                content: "S";
            }

            2%,
            3% {
                content: "Se";
            }

            3%,
            4% {
                content: "Sel";
            }

            4%,
            5% {
                content: "Sela";
            }

            5%,
            6% {
                content: "Selam";
            }

            6%,
            7% {
                content: "Selamat";
            }

            7%,
            8% {
                content: "Selamat Da";
            }

            8%,
            9% {
                content: "Selamat Data";
            }

            10%,
            25% {
                content: "Selamat Datang";
            }

            52%,
            55% {
                content: "";
            }

            56%,
            57% {
                content: "W";
            }

            58%,
            59% {
                content: "We";
            }

            60%,
            61% {
                content: "Web";
            }

            62%,
            63% {
                content: "Webs";
            }

            64%,
            65% {
                content: "Webs";
            }

            66%,
            67% {
                content: "Websi";
            }

            68%,
            69% {
                content: "Website";
            }

            70%,
            71% {
                content: "Website D";
            }

            72%,
            73% {
                content: "Website De";
            }

            74%,
            75% {
                content: "Website Desa";
            }

            76%,
            77% {
                content: "Website Desa S";
            }

            78%,
            79% {
                content: "Website Desa Su";
            }

            80%,
            82% {
                content: "Website Desa Sum";
            }

            83%,
            85% {
                content: "Website Desa Sumb";
            }

            86%,
            87% {
                content: "Website Desa Sumbe";
            }

            88%,
            90% {
                content: "Website Desa Sumber";
            }

            91%,
            93% {
                content: "Website Desa Sumber R";
            }

            94%,
            95% {
                content: "Website Desa Sumber Re";
            }

            96%,
            97% {
                content: "Website Desa Sumber Rej";
            }

            98%,
            100% {
                content: "Website Desa Sumber Rejo";
            }
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .typewriter {
            --caret: currentcolor;
        }

        .typewriter::before {
            content: "";
            animation: typing 13.5s infinite;
        }

        .typewriter::after {
            content: "";
            border-right: 1px solid var(--caret);
            animation: blink 0.5s linear infinite;
        }

        .typewriter.thick::after {
            border-right: 1ch solid var(--caret);
        }

        .typewriter.nocaret::after {
            border-right: 0;
        }


        @media (prefers-reduced-motion) {
            .typewriter::after {
                animation: none;
            }

            @keyframes sequencePopup {}

            .typewriter::before {
                content: "Selamat Datang!";
                animation: sequencePopup 12s linear infinite;
            }
        }
    </style>
    <style>
        a:hover {
            color: rgb(47, 154, 213)3;
        }

        a {
            color: rgb(7, 102, 173);
            text-decoration: none;
        }
    </style>
    <br><br><br><br>
    <div class="py-1 py-xl-1 px-md-5 px-sm-0 mx-5">
        <div class="m-md-5 m-sm-4 px-md-2 px-sm-0">
            <div class="card text-bg-light mb-3">
                <div class="card-body">
                    <a href="/">
                        <svg fill="#000000" width="18px" height="18px" viewBox="-4.5 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>home</title>
                                <path
                                    d="M19.469 12.594l3.625 3.313c0.438 0.406 0.313 0.719-0.281 0.719h-2.719v8.656c0 0.594-0.5 1.125-1.094 1.125h-4.719v-6.063c0-0.594-0.531-1.125-1.125-1.125h-2.969c-0.594 0-1.125 0.531-1.125 1.125v6.063h-4.719c-0.594 0-1.125-0.531-1.125-1.125v-8.656h-2.688c-0.594 0-0.719-0.313-0.281-0.719l10.594-9.625c0.438-0.406 1.188-0.406 1.656 0l2.406 2.156v-1.719c0-0.594 0.531-1.125 1.125-1.125h2.344c0.594 0 1.094 0.531 1.094 1.125v5.875z">
                                </path>
                            </g>
                        </svg></a> / Pengaduan Masyarakat
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="list-group">
                        <a href="/pengaduan-masyarakat" class="list-group-item list-group-item-action">Pengaduan Publik</a>
                        <a href="/pengaduan-wewenang" class="list-group-item list-group-item-action">Penyalahgunaan
                            Wewenang</a>
                    </div>
                    <br>
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 style="color:rgb(7, 102, 173);"><b>Penyalahgunaan Wewenang Masyarakat Desa Sumber Rejo</b></h2>
                    <hr style="border: 1px solid rgb(87, 142, 206);
                    border-radius: 5px;">

                    <p>Berdasarkan Keputusan Menteri Pendayagunaan Aparatur Negara Nomor : KEP/118/M.PAN/8/2004 tentang
                        Pedoman Umum Penanganan Pengaduan Masyarakat bagi Instansi Pemerintah, pengaduan masyarakat adalah
                        bentuk penerapan dari pengawasan masyarakat yang disampaikan oleh masyarakat, baik secara lisan
                        maupun tertulis kepada Aparatur Pemerintah terkait, berupa sumbangan pikiran, saran, gagasan atau
                        keluhan/pengaduan yang bersifat membangun.</p>
                    <br>
                    <blockquote class="blockquote text-center">
                        <p class="mb-0">Lapor penyalahgunaan wewenang kekuasaan kepada kami </p> <br>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                        <a aria-label="Chat on WhatsApp"
                            href="https://wa.me/6282278765076?text=Selamat%20Datang%20di%20Layanan%20Pengaduan%20Masyarakat%20Desa%20Sumber%20Rejo.%20Mohon%20isi%20data%20diri%20anda%20sebelum%20mengirimkan%20aduan%20kepada%20kami.%0A%0A1.%20Nama%20lengkap%20(wajib):%0A%0A2.%20Alamat%20lengkap%20(wajib):%0A%0A3.%20Nomor%20identitas%20(KTP/SIM/Paspor)%20(wajib):%0A%0A4.%20Nomor%20telepon/handphone%20(wajib):%0A%0A5.%20Surat%20elektronik%20(email)%20(wajib):%0A%0A6.%20Nama%20pejabat%20yang%20melakukan%20penyalahgunaan%20wewenang:%0A%0A7.%20Jabatan%20pejabat%20yang%20melakukan%20penyalahgunaan%20wewenang:%0A%0A8.%20Penjelasan%20mengenai%20penyalahgunaan%20wewenang%20yang%20dilakukan:%0A%0A9.%20Unggah%20berkas%20bukti%20penyalahgunaan%20wewenang:%0A"
                            target="_blank">
                            <img style="width: 200px;" data-bss-hover-animate="tada" alt="Chat on WhatsApp"
                                src="{{ asset('storage/images/WhatsAppButtonGreenSmall.png') }}">
                        </a>
                    </blockquote> <hr>

                    <p>Masyarakat dapat mengirimkan laporan pada menu TATA CARA PENYALAHGUNAAN
                        WEWENANG dengan mengisi data diri dan ketentuan lain sesuai tata cara pemgaduan
                        penyalahgunaan wewenang. Laporan pengaduan akan diverifikasi terlebih dahulu oleh
                        administrator untuk kejelasan dan kelengkapan, dan selanjutnya diteruskan ke unit terkait
                        paling lambat 3 hari kerja setelah pelaporan dilakukan.</p><br>
                    <dl class="row">
                        <dt class="col-sm-3">Tindak Lanjut Pelaporan</dt>
                        <dd class="col-sm-9">PPID akan mempublikasikan setiap laporan yang sudah diteruskan sekaligus memberikan
                            notifikasi kepada pelapor. Unit diberikan waktu paling lambat 5 hari kerja untuk melakukan
                            koordinasi internal dan perumusan tindak lanjut dari pelaporan yang diberikan oleh
                            masyarakat umum. Apabila sudah ada rumusan tindak lanjut, maka unit memberikan
                            informasi kepada pelapor pada halaman tindak lanjut laporan.</dd>

                        <dt class="col-sm-3">Penutupan Laporan</dt>
                        <dd class="col-sm-9">
                            <p>Laporan dianggap selesai apabila sudah terdapat tindak lanjut dari instansi pada laporan,
                                dan telah berjalan 10 hari kerja setelah tindak lanjut dilakukan tanpa adanya balasan dari
                                pelapor maupun administrator di halaman tindak lanjut.</p>

                        </dd>

                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>




                    </dl>


                    {{-- image/namafile.ekstensi --}}
                    <img src="" class="img-fluid rounded-start">
                </div>
            </div>
        </div>
    </div>
@endsection
