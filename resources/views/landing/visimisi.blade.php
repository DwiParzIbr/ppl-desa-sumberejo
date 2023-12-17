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
                        </svg></a> / Visi dan Misi
                </div>
            </div>
            <h2 style="color:rgb(7, 102, 173);"><b>Visi dan Misi Desa Sumber Rejo</b></h2>
            <hr style="border: 1px solid rgb(7, 102, 173);
            border-radius: 5px;">
            <p><b>Visi dan Misi adalah impian, tuntunan dan arah bergeraknya masyarakat.</b></p>
            <p>Visi dan misi adalah dua komponen penting dalam perencanaan strategis sebuah organisasi, perusahaan, atau
                institusi. Kedua elemen ini membantu dalam merumuskan tujuan jangka panjang dan arah yang diinginkan untuk
                mencapai kesuksesan organisasi.
            </p>
            <br>
            <h2 style="color:rgb(7, 102, 173);"><b>Visi</b></h2>
            <hr style="border: 1px solid rgb(7, 102, 173);
                    border-radius: 5px;">
            <p style="text-align: justify">Visi merupakan pandangan jangka panjang atau cita-cita dari suatu organisasi. Ini adalah gambaran ideal
                tentang masa depan yang diinginkan atau tujuan akhir yang ingin dicapai. Visi menggambarkan bagaimana
                organisasi ingin dilihat atau diakui oleh dunia di masa yang akan datang. Ini biasanya berisi pernyataan
                singkat, inspirasional, dan ambisius yang memberikan arah dan semangat bagi seluruh anggota organisasi. Visi
                menjadi panduan utama untuk membimbing kebijakan dan tindakan pembangunan desa. Visi yang jelas membantu
                memotivasi masyarakat dan pemerintah desa untuk bekerja menuju tujuan bersama.</p>

            <p><b>Visi Desa Sumber Rejo 2023</b></p>
            <blockquote>
                <p style="font-style: italic;">Terwujudnya&nbsp;Masyarakat Desa Sumber Rejo Yang Agamis, Maju Cerdas Dan Bermartabat (Bersih, Makmur, Tertata, Hebat)</p>
                </blockquote>

            </p>
            <h2 style="color:rgb(7, 102, 173);"><b>Misi</b></h2>
            <hr style="border: 1px solid rgb(7, 102, 173);
            border-radius: 5px;">
            <p style="text-align: justify">Misi adalah pernyataan tentang tujuan inti organisasi, fokus operasional, dan alasan eksistensinya. Ini
                menjelaskan apa yang ingin dicapai organisasi dalam jangka pendek atau menengah, dan bagaimana organisasi
                tersebut berfungsi untuk mencapainya. Misi membantu dalam mengidentifikasi peran organisasi, target pasar,
                dan nilai yang ingin dihadirkan.&nbsp;Misi memberikan kerangka kerja operasional yang lebih spesifik untuk
                mencapai visi. Misi desa mencakup berbagai aspek, seperti pengembangan ekonomi, pendidikan, kesehatan,
                infrastruktur, dan perlindungan lingkungan.</p>
            <p><b>Misi Desa Sumber Rejo 2023</b></p>
            <blockquote>
                <p style="font-style: italic;">Meningkatkan 4 aspek utama yakni dalam Pemerintahan desa, pembangunan desa, pembinaan desa dan pemberdayaan desa.</p>
                </blockquote>

            </p>
            <h5 style="color:rgb(7, 102, 173);"><b>Pemerintahan Desa</b></h5>

            <ol style="text-align: justify">
                <li>Mewujudkan masyarakat yang agamis dengan memakmurkan&nbsp; masjid di awali dengan mengajak aparatur desa
                    dan bpd sebagai penggerak untuk memakmurkan&nbsp; mushola dan masjid yang ada di lingkungannya desa
                    sumber rejo</li>
                <li>Menyelengarakan pemerintahan yang bersih, transparan dan mengutamakan musyawarah mufakat.</li>
                <li>Penyelenggaraan pemerintah desa yang transparan, adil, cepat, tepat waktu, tepat guna, tepat mutu dan
                    tepat sasaran (4t) sesuai dengan payung hukum dan petunjuk pelaksanaan serta petunjuk teknis.</li>
                <li>Mengedepankan azaz musyawarah dan mufakat dalam segala kegiatan perencanaan pembangunan desa.</li>
                <li>Memberikan pelayanan terbaik terhadap masyarakat dengan mutu pelayanan &nbsp;6 s :</li>
                <ul>
                    <li>Senyum</li>
                    <li>Salam</li>
                    <li>Sapa</li>
                    <li>Sopan</li>
                    <li>Santun</li>
                    <li>Selesai dengan sempurna (maksimal)</li>
                </ul>
                <li>Membentuk desa yang berkarakter melalui program pembagunan desa sebagai ikon desa seperti pembangunan
                    gapura desa pada setiap gang-gang yang ada di desa, pemerintah dan remaja sebagai tanda jati diri desa,
                    menggalakan serta meningkatkan program pembinaan kegiatan siskamling dalam menciptakan karakter desa
                    yang aman dan nyaman dengan kerja sama antar lembaga maupun lintas sektor yang membidangi</li>
            </ol>

            <h5 style="color:rgb(7, 102, 173);"><b>Pembangunan Desa</b></h5>


            <ol style="text-align: justify">
                <li>Melanjutkan program pembangunan kepala desa sebelumnya, seperti kegiatan pembangunan pam desa, jut,
                    jalan pemukiman, desa wisata, pembangunan fasilitas publik dll. Yang tercantum dalam rpjmdes tahun
                    2022-2028</li>
            </ol>

            <h5 style="color:rgb(7, 102, 173);"><b>Pembinaan Desa</b></h5>


            <ol style="text-align: justify">
                <li>Menata dan membina serta kaderisasi program kelompok rukun kematian (rukem) yang ada di desa</li>
                <li>Mengadakan pelatihan atau kursus yang bekerjasama dengan dinas keternagakerjaan (disnaker)</li>
                <li>Mengelola potensi-potensi wisata air terjun yang belum dikelola dengan baik</li>
            </ol>


            <h5 style="color:rgb(7, 102, 173);"><b>Pemberdayaan Desa</b></h5>


            <ol style="text-align: justify">
                <li>Mengisi dengan kegiatan keagamaan dalam wujud budaya cinta sunah nabi muhamad saw sebagai mana lazimnya
                    risalah ahlussunnah waljamaah adalah komunitas muslim yang selalu berpedoman pada sunah nabi muhammad
                    saw seperti memberdayakan kelompok pengajian yang sudah ada dengan kegiatan-kegiatan islami dan
                    kegiatan-kegiatan ibadah lainnya seperti peringatan hari besar islam, seni budaya, albarjanji, manakib,
                    seni sholawat maupun maulid diba&rsquo; dan budaya kesunahan ahlussunnah waljamaah lainnya.</li>
                <li>Pemberdayaan pemuda dan pemudi dibawahi oleh karang taruna desa sebahai ujung tombak kepemudaan dalam
                    menggali sumber pendapatan asli desa (pad) melalui potensi wisata yang ada di desa, serta kepedulian
                    jiwa sosial (program donor darah untuk masyarakat yang membutuhkan dan lain-lain).</li>
                <li>Pengeembangan ekonomi masyarakat melauli usaha berbasis keluarga bekerja sama dengan badan usaha milik
                    desa (bumdes)</li>
            </ol>
        </div>
    </div>
@endsection
