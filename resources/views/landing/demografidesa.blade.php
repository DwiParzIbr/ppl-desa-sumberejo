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
                        </svg></a> / Demografi Desa
                </div>
            </div>
            <h2 style="color:rgb(7, 102, 173);"><b>Demografi Desa Sumber Rejo</b></h2>
            <hr style="border: 1px solid rgb(87, 142, 206);
            border-radius: 5px;">
            <blockquote>
                <p style="font-style: italic;">Demografi desa adalah cabang dari ilmu demografi yang khusus mempelajari tentang populasi manusia di desa
                    atau pemukiman kecil. Ini berfokus pada analisis statistik dan karakteristik penduduk desa, termasuk
                    pertumbuhan populasi, distribusi usia, jenis kelamin, tingkat kelahiran dan kematian, migrasi, dan aspek
                    demografi lainnya yang mempengaruhi struktur populasi di desa.</p>
            </blockquote>

            <p style="text-align: justify">Penduduk Desa Sumber Rejo mayoritas berasal dari daerah <em>Jawa</em>, sehingga
                suku Jawa
                dominan ada sebagai warna kehidupan di Desa, mulai dari bahasa keseharian hingga tradisi yang ada bnayak
                dipengaruhi oleh suku Jawa. Sejak terbentuknya Desa Sumber Rejo masyarakat mempunyai tradisi-tradisi yang
                dilakukan sampai saat ini seperti musyawarah untuk mufakat, gotong royong dan kearifan lokal yang menjadi
                ciri khas Desa Sumber Rejo, hal ini menjadi nilai lebih bagi keberlangsungan tatanan masyarakat Desa, karena
                banyak hal dilakukan secara bersama dan nilai kerukunan antar menjadi lebih meningkat. Kebiasaan gotong
                royong kerap dilakukan dalam berbagai hal, mulai dari prosesi pernikahan, kematian, kelahiran maupun dalam
                usaha perkebunan (pembuatan jembatan, pembuatan jalan dan lain lain).&nbsp;</p>

            <p style="text-align: justify">Hingga Tahun 2022 jumlah penduduk Desa Sumber Rejo telah banyak berkembang, dari
                data administrasi Desa,
                jumlah penduduk Desa Sumber Rejo adalah <em>1.842</em>&nbsp; jiwa, dimana penduduk jenis kelamin<em>
                    laki-laki berjumlah 955 jiwa</em> dan penduduk jenis kelamin <em>perempuan 876 jiwa</em> dengan
                <em>jumlah kepala keluarga sebanyak 574 KK</em>, yang terbagi kedalam 3 wilayah Dusun dan terdiri dari 6
                Rukun Tetangga (RT). Jumlah jiwa yang cukup banyak untuk wilayah Desa menjadi bekal positif bagi
                keberlangsungan Desa Sumber Rejo, karena jumlah penduduk tersebut turut pula dibarengi dengan peningkatan
                Sumber Daya Manusia Nya sehingga serta merta diharapkan dapat memajukan Desa. &nbsp;Berikut adalah rincian
                tabel potensi kependudukan&nbsp; Desa Sumber Rejo Kecamatan Hulu Palik Kabupaten Bengkulu Utara:
            </p>


            <p><b>Kondisi Demografi</b></p>
            <p>Jumlah Kepala Keluarga: 574 KK. (2022)
            </p>
            <p>Jml. Penduduk : 1.842 (DKCS 2022)</p>
            <div class="container">
                <h3 style="color:rgb(7, 102, 173);"><b>Demografi Desa Sumber Rejo</b></h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>DUSUN</th>
                            <th>JUMLAH KK</th>
                            <th>LAKI-LAKI</th>
                            <th>PEREMPUAN</th>
                            <th>JUMLAH (L + P)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>SATU</td>
                            <td>183</td>
                            <td>302</td>
                            <td>284</td>
                            <td>586</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>DUa</td>
                            <td>179</td>
                            <td>283</td>
                            <td>299</td>
                            <td>582</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>TIGA</td>
                            <td>211</td>
                            <td>357</td>
                            <td>330</td>
                            <td>687</td>
                        </tr>
                        <tr>
                            <td colspan="2">JUMLAH</td>
                            <td>574</td>
                            <td>942</td>
                            <td>913</td>
                            <td>1,855</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <p><em>Sumber: Buku Induk Pemerintah Desa Sumber Rejo Tahun 2022</em></p>

            <p>&nbsp;</p>

        </div>
    </div>
@endsection
