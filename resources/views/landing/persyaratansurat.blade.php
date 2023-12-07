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
                        </svg></a> / Layanan Surat
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="list-group">
                        <a href="/layanan-surat" class="list-group-item list-group-item-action">Layanan Surat</a>
                        <a href="/persyaratan-surat" class="list-group-item list-group-item-action">Persyaratan Surat</a>
                    </div>
                    <br>
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 style="color:rgb(7, 102, 173);"><b>Persyaratan Pembuatan Surat Menyurat Desa Sumber Rejo</b></h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            {{-- BAGIAN SURAT --}}
                            <hr
                                style="border: 1px solid rgb(87, 142, 206);
                            border-radius: 5px;">
                            <dl class="row">
                                <dt class="col-sm-3">Persyaratan Penerbitan KK</dt>
                                <dd class="col-sm-9">
                                    <p>Kartu Keluarga asli/ Surat Kehilangan KK dari Kepolisian Apabila KK Hilang;.</p>
                                    <p>KTP asli (KTP ada perubahan)/ Fotokopi (KTP tidak ada perubahan)</p>
                                    <p>Surat pernyataan belum punya akta Kelahiran yang sudah berusia lebih dari 1 tahun
                                        (apabila belum punya akta);</p>
                                    <p>Fotokopi surat nikah/ akta cerai (Legalisir/ menunjukkan yang asli);</p>
                                    <p>Fotokopi akta kelahiran bagi yang mempunyai akta kelahiran;</p>
                                    <p>Fotokopi surat keterangan kelahiran dari desa bagi yang belum punya akta kelahiran
                                        (Tambah Anggota);</p>
                                    <p>Fotokopi surat kelahiran dari Bidan/ Rumah Sakit (Tambah Keluarga);</p>
                                    <p>Surat Pindah (Pendatang dari Luar Kabupaten Magetan);</p>
                                    <p>Fotokopi Ijazah Terakhir (legalisir/ menunjukkan asli), apabila ada perubahan
                                        pendidikan.</p>
                                </dd>
                                <dt class="col-sm-3">Persyaratan Penerbitan KTP Elektronik</dt>
                                <dd class="col-sm-9">
                                    <dl class="row">
                                        <dt class="col-sm-4">Fotokopi Krtu Keluarga (KK) dan menunjukkan yang asli;</dt>
                                        <dd class="col-sm-8">KTP asli (bagi KTP rusak/ perubahan elemen data);</dd>
                                        <dd class="col-sm-8">Surat keterangan kehilangan KTP dari Kepolisian apabila KTP asli hilang.</dd>
                                    </dl>
                                </dd>
                            </dl>

                            {{-- <table class="table table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Berkas</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Ukuran</th>
                                        <th scope="col">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><b>Laporan Asset BUMDes 2018</b><br>Laporan Asset selama 2018 awal hingga akhir.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="/dashboard/profile" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><b>SURAT BIODATA PENDUDUK</b><br>Laporan Asset selama 2018 awal hingga akhir.
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="/dashboard/profile" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                    <hr style="border: 1px solid rgb(87, 142, 206);
                    border-radius: 5px;">
                    {{-- image/namafile.ekstensi --}}
                    <img src="" class="img-fluid rounded-start">
                </div>
            </div>
        </div>
    </div>
@endsection
