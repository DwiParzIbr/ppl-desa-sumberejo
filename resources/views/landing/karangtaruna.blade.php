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
            87%{
                content: "Website Desa Sumbe";
            }
            88%,
            90%{
                content: "Website Desa Sumber";
            }
            91%,
            93%{
                content: "Website Desa Sumber R";
            }
            94%,
            95%{
                content: "Website Desa Sumber Re";
            }
            96%,
            97%{
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

            @keyframes sequencePopup {


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
                        </svg></a> / Lembaga Desa
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="list-group">
                        <a href="/lembaga-desa" class="list-group-item list-group-item-action">Badan Pemusyawaratan Desa</a>
                        <a href="/karang-taruna" class="list-group-item list-group-item-action">Karang Taruna</a>
                    </div>
                    <br>
                </div>
                <div class="col-md-10 col-sm-12">
                    <h2 style="color:rgb(7, 102, 173);"><b>Karang Taruna</b></h2>
                    <hr style="border: 1px solid rgb(87, 142, 206);
                    border-radius: 5px;">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">NIP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><b>KETUA KARANG TARUNA</b></td>
                                <td>DWIFI PARIZZA IBRAHIM</td>
                                <td>G1A021092</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><b>WAKIL KETUA KARANG TARUNA</b></td>
                                <td>AFRIZA TRI RIZKI</td>
                                <td>G1A021020</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><b>SEKRETARIS</b></td>
                                <td>ELISA</td>
                                <td>G1A021008</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><b>WAKIL SEKRETARIS</b></td>
                                <td>ESTI ASMARETA AYU</td>
                                <td>G1A021042</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><b>BENDAHARA</b></td>
                                <td>SEPRINA DWI CAHYANI</td>
                                <td>G1A021012</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><b>WAKIL BENDAHARA</b></td>
                                <td>MARSHA HULWA INDRI MUTHI</td>
                                <td>G1A021056</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><b>ANGGOTA</b></td>
                                <td>FAJAR ADHITIA SUWANDHI</td>
                                <td>G1A021086</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><b>ANGGOTA</b></td>
                                <td>PARULIAN AGUSTINUS HUTAPEA</td>
                                <td>G1A021064</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><b>ANGGOTA</b></td>
                                <td>FAKHRI ALWAN</td>
                                <td>G1A021050</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><b>ANGGOTA</b></td>
                                <td>MUHAMMAD FACHRUROZI</td>
                                <td>G1A021018</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td><b>ANGGOTA</b></td>
                                <td>M IQBAL NASMI</td>
                                <td>G1A021094</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td><b>ANGGOTA</b></td>
                                <td>AFZAL ALFARAZ</td>
                                <td>G1A021098</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
