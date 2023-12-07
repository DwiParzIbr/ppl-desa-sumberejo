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
                        </svg></a> / Sejarah Desa
                </div>
            </div>
            <h2 style="color:rgb(7, 102, 173);"><b>Sejarah Desa Sumber Rejo</b></h2>
            <hr style="border: 1px solid rgb(87, 142, 206);
                    border-radius: 5px;">
            <div class="rata" style="text-align: justify">
                <hr />
                <p><strong>Desa Sumber Rejo</strong> mulai terbentuk pada tanggal <em>20 Februari 1969</em> melalui program
                    Pemerintah Transmigrasi Sosial yang berasal dari daerah Jawa yang pada waktu itu berjumlah 145 KK dengan
                    jumlah penduduk lebih kurang 700 jiwa dan disebut sebagai Transmigrasi Umum, karena penduduknya berasal
                    dari seluruh pulau Jawa yaitu, Jawa Barat, Jawa Tengah, Jawa Timur yang dipimpin oleh seorang Kepala
                    Unit Penempatan Transmigrasi (KUPT) dari Departemen Sosial yang bernama Muhibah Hani.</p>

                <p>Menurut beberapa tokoh masyarakat dan sesepuh Desa setempat diberi nama Sumber Rejo karena pada waktu itu
                    Desa Sumber Rejo dikenal sebagai daerah dengan musim penghujan dan jumlah penduduk yang banyak sehingga
                    berdasarkan hasil rembug desa yang dilakukan oleh masyarakat Desa, maka diberi nama Sumber Rejo. Sumber
                    diartikan <strong><em>&ldquo;Mata Air&rdquo;</em></strong> karena banyak hujan dan Rejo adalah merupakan
                    bahasa Jawa yang artinya <strong><em>&ldquo;Keramaian&rdquo;</em></strong> karena penduduknya yang
                    banyak, arti tersebut menurut Bapak Umar Lasman salah satu sesepuh Desa yang ikut dalam musyawarah Desa
                    pada waktu itu, dengan nama <em>Sumber Rejo masyarakat mempunyai harapan bahwa dengan adanya air yang
                        banyak serta ramainya penduduk akan menjadi sebuah Desa yang aman, tentram, damai dan menjadi sumber
                        kekayaan atau sumber kesejahteraan bagi masyarakat yang akan datang.</em></p>

                <p>Pada tahun <strong>1974</strong> melalui program Pemerintah Transmigrasi Bantuan Presiden (Banpres) yaitu
                    pada masa pemerintahan Presiden Soeharto, datang penduduk Transmigrasi yang kedua berjumlah 100 KK
                    dengan jumlah penduduk lebih kurang 200 jiwa, berasal dari pulau Jawa yaitu dari daerah Banyumas
                    sebanyak 50 KK dan dari daerah Kediri sebanyak 50 KK yang disebut Transmigrasi Khusus. Tanah yang
                    digunakan untuk lokasi Desa Sumber Rejo berasal dari penyerahan tanah Marga Desa Talang Rendah kepada
                    Dinas Transmigrasi propinsi Bengkulu, pada waktu itu ada penduduk Desa Talang Rendah yang berada
                    dilokasi Desa Sumber Rejo sebanyak kurang lebih 10 KK.</p>

                <p>Setiap Kepala Keluarga penduduk transmigrasi mendapat bantuan dari Pemerintah yaitu <em>&frac14; Ha tanah
                        pekarangan, &frac34; Ha tanah peladangan/kebun, 1 Ha tanah sawah dan bahan makanan selama 8 bulan,
                        dengan sertifikat tanah</em> (bukti hak milik) diterbitkan pada tahun <strong>1977</strong>.</p>

                <p>Kepala Desa yang pertama adalah bernama <strong>Solihin</strong>, menjabat Kepala Desa karena pada masa
                    Transmigrasi beliau sebagai Rukun Kampung (RK) sebutan pada waktu itu pada tahun 1969 sehingga oleh
                    masyarakat dipilih sebagai Kepala Desa. Tahun 1976 pengelolaan Desa diserahkan kepada Pemerintah
                    Propinsi Bengkulu, maka sesuai dengan petunjuk teknis dari Pemerintah dilakukan Pemilihan Kepala Desa
                    (Pilkades) dengan empat calon dan terpilih kembali Solihin sebagai Kepala Desa, dengan Sekretaris Desa
                    bernama Mitro Winarno. Pada masa Pemerintahan Kepala Desa yang pertama kegiatan Desa Sumber Rejo mengacu
                    pada penataan kelembagaan kelompok masyarakat walaupun masih bersifat sangat sederhana, yang akhirnya
                    berkembang menjadi dusun, serta penataan kelompok pertanian lainnya. Waktu itu kegiatan kelompok
                    masyarakat banyak dilakukan pada bidang pertanian dan kelompok kecil pada sektor perkebunan.</p>

                <hr />
                <p>Tahun <strong>1982</strong> diadakan pemilihan Kepala Desa yang kedua dengan empat orang calon, dan
                    terpilih Kepala Desa bernama <strong>Widayat</strong>, menjabat selama dua periode tahun 1982-1998,
                    sebagai Sekretaris Desa bernama Salam dan dibantu oleh tiga orang Kepala Urusan (Kaur) yaitu, Kaur
                    Pemerintahan (Kartono), Kaur Pembangunan (Sukiman) dan Kaur Umum (Sudirman), Pada masa Pemerintahan ini
                    dibagi menjadi dua Dusun, Dusun yang pertama bernama <em><strong>Giri Mulyo</strong></em>, Giri artinya
                    <em>&quot;gunung&quot;</em> dan Mulyo artinya <em>&quot;makmur&quot;</em> jadi giri mulya artinya
                    <em>daerah pegunungan yang makmur karena Desa Sumber Rejo terletak pada daerah perbukitan</em>. Dusun
                    yang kedua diberi nama <em><strong>Tirto Kencono</strong></em> yang artinya <em>Banyu Mas (air
                        mas)</em>, menurut bahasa jawa. Masing-masing Dusun dipimpin oleh seorang Kepala Dusun (Kadun),
                    Kadun Satu bernama Pujono dan Kadun Dua bernama Abdul Rohim, dan dibagi menjadi tiga blok yaitu blok A.
                    blok B, dan blok C, tiga RW dan delapan RT serta adanya organisasi yang disebut LKMD (Lembaga Keamanan
                    Masyarakat Desa) dan LMD (Lembaga Masyarakat Desa) dan terbentuk sebuah organisasi bernama PKK
                    (Pemberdayaan Kesejahteraan Keluarga) dengan Ketua bernama Sunarti sebagai isteri Kepala Desa. Widayat
                    lahir pada tanggal 17 Nopember 1932 di Jawa Timur dan meninggal dunia pada tanggal 19 September 2000 di
                    Desa Sumber Rejo. Masa kepemimpinan Widayat berhasil mendapat beberapa penghargaan dari Pemerintah
                    Kabupaten yaitu juara dua lomba lingkungan bersih, juara dua lomba Desa dan sebagai Kepala Desa teladan
                    sekabupaten Bengkulu Utara. Sebelum masa jabatannya habis Widayat mengundurkan diri karena sakit, maka
                    dipilih atau ditunjuk penjabat sementara (PJS) Kepala Desa dari salah satu Kadun yaitu Abdul Rohim,
                    lahir di Jawa Tengah tahun 1926 dan meninggal dunia pada tahun 2013, dengan masa jabatan selama satu
                    tahun yaitu 1999-2000.</p>

                <p>Tahun 2000 dilakukan pemilihan Kepala Desa yang ketiga dengan tiga orang calon, dan terpilih satu calon
                    bernama Agus Buang de Frites, putra kelahiran tahun 1956 di Bangka Belitung. Struktur organisasi
                    Pemerintah Desanya adalah sebagai Sekerataris Desa Salam, karena mengundurkan diri maka diganti oleh Ibu
                    Sumariati pada tahun 2001, dibantu tiga orang Kepal Urusan (KAUR) yaitu Kaur Pemerintahan, Kaur Umum,
                    dan Kaur Pembangunan. Banyak hal yang juga dilakukan pada Pemerintahan ini dalam membangun Desa,
                    beberapa bantuan yang diterima oleh desa dari mulai bantuan fisik maupun bantuan Dana berupa penambahan
                    modal usaha guna meningkatkan ekonomi masyarakat. Agus Buang de Frites menjabat selama empat tahun,
                    sebelum masa jabatannya berakhir, beliau tutup usia pada tanggal 20 Agustus 2005 di Rumah Sakit M. Yunus
                    Bengkulu karena sakit. Dan diteruskan oleh Pjs. Kepala Desa bernama Sumariati yang dilantik pada tanggal
                    22 oktober 2005 selama dua tahun, 2005-2009.</p>

                <p>Diakhir tahun 2009 diadakan pemilihan Kepala Desa yang keempat dengan tiga orang calon yaitu, Sukardi,
                    Anton dan Karno, SH,i. Bapak Karno, SH,i terpilih sebagai Kepala Desa putra kelahiran Desa Sumber Rejo
                    tahun 1979 yang dilantik pada tanggal 12 Februari 2008 untuk periode 2008-2014, setelah diadakan serah
                    terima jabatan Kepala Desa, Sumariati kembali menjabat sebagai Sekretaris Desa sampai saat ini. Sebelum
                    masa jabatannya habis Karno, SH,i mengundurkan diri pada bulan Juli 2013 karena sebagai peserta
                    Pemilihan Umum Calon Anggota Legislatif DPRD Kabupaten Bengkulu Utara, dan sebagai Penjabat sementara
                    Kepala Desa Saat ini adalah Mulyono yaitu dari Kaur Pemerintahan. Mulyono menjabat Kepala Desa sampai
                    pada bulan September 2015, dilanjutkan oleh Penjabat Sementara (PJS) Kepala Desa Sutan Takdir sampai
                    dengan 2016 berasal dari Kasi Pemerintahan Desa Kecamatan Hulu Palik yang bertempat tinggal di Desa
                    Magelang Kecamatan Kerkap Kabupaten Bengkulu Utara dengan istri bernama Yanti.</p>

                <p>Pada tahun 2016 dilakukan Pemilihan kepala Desa serentak se Kabupaten Bengkulu Utara, Desa Sumber Rejo
                    turut serta dalam kegiatan Pemilihan Kepala Desa tersebut yang diikuti oleh 3 kontestan yaitu Sudarno,
                    Sukardi dan Mulyono. Pada kontestasi tersebut Kepala Desa terpilih dimenangkan oleh Mulyono yang lahir
                    di Sragen 26 Oktober 1968 untuk Periode 2016 sampai dengan 2022. Pada masa kepemimpinan bapak Mulyono,
                    reformasi Desa mulai nyata terlihat mulai dari struktur organisasinya dan pengelolaan administrasi
                    kegiatan hingga keuangannya yang merujuk pada Undang &ndash; undang Desa Nomor 6 Tahun 2014, dan pasca
                    terpilihnya beliau dilakukan Pemilihan Perangkat Desa yang pelaksanaanya Kepala Desa dibantu oleh Tim
                    Seleksi Perangkat Desa tahun 2016. Pada tahapan tersebut di peroleh jajaran Perangkat Desa yang mana
                    Pendi, SKM sebagai Sekretaris Desa, Renggo Jenar Prsetyo, ST sebagai Kepala Seksi Pemerintahan, Yulianto
                    sebagai Kepala Seksi Kesejahteraan, Siti Fatimah sebagai Kepala Seksi Pelayanan, Dewi Endayani sebagai
                    Kepala Urusan Tata Usaha dan Umum, Novia Istiqomah, S.IKom sebagai Kepala Urusan Keuangan, Fitriah
                    sebagai Kepala Urusan Perencanaan, Dwi Witarto, SP.d sebagai Kepala Dusun 1, Nandar Saputra, S.IP
                    sebagai Kepala Dusun 2 dan Sri Rejeki sebagai Kepala Dusun 3. Pada periode kepemimpinan Kepala Desa
                    Mulyono, Desa Sumber Rejo telah banyak berkembang baik dari infrastruktur dan aspek lainnya, melalui
                    pengelolaan Dana Desa berbagai infrastruktur dan pembedayaan dicanangkan guna kemajuan Desa dengan
                    berbagai program yang dijalankan. Beberapa kegiatan pembangunan infrastruktur yang masuk ke Desa melalui
                    dana APBD Provinsi dan Kabupaten telah teralisasi, beberapa bantuan ternak dan bedah rumah pun turun
                    serta berperan dalam kemajuan Desa dalam periode Kepala Desa Mulyono.</p>

                <p>Masuk pada tahaun 2019 periode keanggaotaan BPD (2013-2019) telah habis, yang mana pada periode
                    sebelumnya anggota BPD yang ada adalah sejumlah 7 Orang dan pada periode berikutnya merujuk kepada
                    peraturan bahwasanya Desa dengan jumlah Penduduk dibawah 2.000 jiwa maka jumlah anggota BPD yang
                    ditetapkan adlah sebanyak 5 Orang dangan didalamnya terdapat 1 keterwakilan perempuan. Pada masa
                    pemilihan Anggota BPD tersebut dilakukan secara perwakilan dan terpilihlah 5 Orang anggota BPD yang baru
                    antara lain Tofik, SH.i sebagai Ketua, Anton sebagai Wakil Ketua, Siti Romlah sebagai Sekretaris BPD,
                    Darno dan Listari, SP.d AUD sebagai anggota untuk masa jabatan 2019 sampai denga 2024.</p>

                <p>Masa jabatan <strong><em>Kepala Desa Mulyono</em></strong> berakhir pada tahun <strong>2021</strong> dan
                    dilakukan Pemilihan Kepala Desa dengan ada lima orang masyarakat yang mencalonkan diri sebagai Kepala
                    Desa yaitu <em><strong>Yulianto, Bambang Kurniawan, Wahyudin, Mujianto dan Sugeng Rianto.</strong></em>
                    Dalam kontestasi tersebut <strong>Sugeng Rianto</strong> memperoleh suara terbanyak dan berhak menduduki
                    jabatan Kepala Desa. Sugeng Rianto putra ke empat dari Bapak Sangadi dan Ibu Saginem yang lahir di
                    Sumber Rejo tanggal 06 Juni 1982 akan memimpin Desa Sumber Rejo untuk <strong>periode 2022-2028</strong>
                    mendatang.</p>

            </div>
        </div>
    </div>
@endsection
