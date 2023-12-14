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
                        <a href="/persyaratan-surat" class="list-group-item list-group-item-action">Persyaratan Pembuatan Surat</a>
                    </div>
                    <br>
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 style="color:rgb(7, 102, 173);"><b>Layanan Surat Menyurat Desa Sumber Rejo</b></h2><br>
                    <h6>Unduh template surat yang ingin anda ajukan kepada perangkat desa, kemudian edit dan isikan bagian-bagian yang diperlukan.</h6>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            {{-- BAGIAN SURAT --}}
                            <hr
                                style="border: 1px solid rgb(87, 142, 206);
                            border-radius: 5px;">
                            <table class="table table-hover table-responsive">
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
                                    {{-- <tr>
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
                                    </tr> --}}
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><b>SURAT KETERANGAN PERNAH BEKERJA</b><br>Surat yang digunakan oleh masyarkat desa yang pernah bekerja sebagai perangkat desa.
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1BOed95L5-46aUEqwR7zy1miiKVJAlW6R/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
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
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><b>SURAT KETERANGAN DOMISILI</b><br>Surat yang digunakan untuk keperluan masyarakat desa.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/12mYqgiwGBxXzLVvqzYhSsM8nqhlBkRwW/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="__blank" class="btn btn-success" type="button"
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
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><b>SURAT KETERANGAN JUAL BELI TANAH</b><br>Surat yang digunakan untuk keperluan jual / beli tanah.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1v4lF7wLtJx8vAqPABk14Ff6Ajjie3-jD/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
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
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><b>SURAT KETERANGAN KEMATIAN</b><br>Surat yang digunakan untuk menyatakan bahwa seseorang telah meninggal dunia.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/12mYqgiwGBxXzLVvqzYhSsM8nqhlBkRwW/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><b>SURAT KETERANGAN BELUM MENIKAH</b><br>Surat yang digunakan untuk seseorang belum pernah menikah pada saat surat tersebut diterbitkan.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1FU54AqlHW-Aj7SWtHdaOBBnNrJmwA5oK/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><b>SURAT KETERANGAN KELAHIRAN</b><br>Surat resmi yang menyatakan informasi mengenai kelahiran seseorang.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1p7HlNgdx1Nn5-lKDUT9GaoA7-wKKokIB/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><b>SURAT KETERANGAN KEWARGANEGARAAN INDONESIA</b><br>Surat yang memberikan informasi mengenai status kewarganegaraan seseorang sebagai warga negara Indonesia</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/16hpXVcGUS84fsTbhVfjugo-vFmRUGTui/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><b>SURAT KETERANGAN BEDA NAMA</b><br>Surat yang digunakan menyatakan perubahan nama seseorang.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1xaPDYrN1l1HFe3l80X2akL3ctpDfH9lX/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td><b>SURAT KETERANGAN HAK KEPEMILIKAN KAPAL</b><br>memberikan bukti bahwa seseorang memiliki hak sah atas kepemilikan kapal.
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1pNzToMitWNDhar-iFhvmPUbrA5qQgv8P/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td><b>SURAT KETERANGAN DISABILITAS (CACAT)</b><br>Surat yang menyatakan bahwa seseorang tersebut disabilitas / cacat fisik.</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/15isNUEPNmTY36t1aRdxgv7X1HoG5MnMg/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td><b>SURAT KETERANGAN PENGHASILAN ORANGTUA</b><br>Surat informasi mengenai pendapatan yang diterima oleh salah satu atau kedua orang tua seseorang.
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1guugcYW-V_QPzRUyofPTvQEnJrwsuiB8/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td><b>SURAT KETERANGAN AHLI WARIS</b><br>Surat yang digunakan untuk ahli waris</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1p7HlNgdx1Nn5-lKDUT9GaoA7-wKKokIB/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td><b>SURAT KETERANGAN JALAN TERBARU</b><br>Surat yang digunakna untuk keperluan laporan pembuatan jalan</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="/dashboard/profile" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td><b>SURAT KETERANGAN CERAI HIDUP</b><br>Surat yang menyatakan seseorang telah cerai dalam pernikahannya</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1xNmsYpdNtRSlT5og4dgMFTOeIGBvhWrg/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td><b>SURAT KETERANGAN CERAI MATI</b><br>Surat yang menyatakan bahwa seseorang telah cerai mati dalam pernikahannya
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1xaPDYrN1l1HFe3l80X2akL3ctpDfH9lX/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td><b>SURAT KETERANGAN USAHA</b><br>Surat yang digunakan untuk mengajukan usaha bagi warga desa</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <a href="https://docs.google.com/document/d/1OawZwyhqJxYZ-qSCDFF_PNbsOtzcKvau/edit?usp=sharing&ouid=105170204787296885411&rtpof=true&sd=true" target="_blank" class="btn btn-success" type="button"
                                                data-bss-hover-animate="tada"><svg width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="Interface / Download">
                                                            <path id="Vector"
                                                                d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12"
                                                                stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                    </g>
                                                </svg>Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">17</th>
                                        <td><b>SURAT KETERANGAN KEPEMIILIKAN TANAH</b><br>Surat yang digunakan untuk kepemilikan tanah</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <button class="btn btn-success disabled" type="button" disabled>
                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                stroke="#000000">
                                                <path d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>Download
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18</th>
                                        <td><b>SURAT KETERANGAN KTP DALAM PROSES</b><br>Surat yang digunakan untuk pembuatan ktp dalam proses</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <button class="btn btn-success disabled" type="button" disabled>
                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                stroke="#000000">
                                                <path d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>Download
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td><b>SURAT KETERANGAN KELAHIRAN MATI</b><br>Surat yang digunakan untuk kematian pada saat kelahiran</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <button class="btn btn-success disabled" type="button" disabled>
                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                stroke="#000000">
                                                <path d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>Download
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td><b>SURAT KETERANGAN NIKAH</b><br>Surat yang digunakan bahwa seseorang tersebut telah menikah
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <button class="btn btn-success disabled" type="button" disabled>
                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                stroke="#000000">
                                                <path d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>Download
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td><b>SURAT KETERANGAN NIKAH NON MUSLIM</b><br>Surat yang digunakan oleh masyarakat sudah menikah non muslim</td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td> <button class="btn btn-success disabled" type="button" disabled>
                                            <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                stroke="#000000">
                                                <path d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>Download
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">22</th>
                                        <td>
                                            <b>SURAT KETERANGAN PENDUDUK</b><br>Surat keterangan kependudukan oleh kepala desa
                                        </td>
                                        <td>PDF</td>
                                        <td>34.78 KB</td>
                                        <td>
                                            <button class="btn btn-success disabled" type="button" disabled>
                                                <svg width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    stroke="#000000">
                                                    <path d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#ffffff" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>Download
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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
