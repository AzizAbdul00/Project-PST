<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::find(1);
        $user2 = User::find(2);
        $user3 = User::find(3);
        $user4 = User::find(4);
        $user5 = User::find(5);
        $user6 = User::find(6);
        $user7 = User::find(7);
        
        // 1
        Post::create([
            'title' => 'Rupiah Dibuka Melemah ke Level Rp15.564 per Dolar AS',
            'author_id' => $user1->id,
            'body' => 'Berdasarkan data Bloomberg, rupiah dibuka melemah 0,25% atau 39 poin ke level Rp15.564. Sementara itu, indeks dolar AS terpantau naik 0,01% ke level 101,66. Bersamaan dengan rupiah, beberapa mata uang kawasan Asia pun dibuka melemah. Dolar Singapura misalnya melemah 0,06%, dolar Taiwan melemah 0,18%, dan won Korea melemah 0,13%. Adapun, sejumlah mata uang di Asia mengalami penguatan seperti Yen Jepang yang menguat 0,18%, serta dolar Hong Kong menguat 0,01%.'
        ]);
        // 2
        Post::create([
            'title' => 'The Fed Sepakat Mau Pangkas Suku Bunga Bulan September',
            'author_id' => $user2->id,
            'body' => 'Suku bunga acuan AS atau federal fund rate (FFR) saat ini ditetapkan pada kisaran antara 5,25% dan 5,5% menyusul serangkaian kenaikan agresif yang dilakukan oleh The Fed dalam beberapa tahun terakhir. Hal ini diyakini secara luas akan menghambat pertumbuhan ekonomi, namun hal ini dianggap perlu oleh para pengambil kebijakan untuk menurunkan inflasi dari level tertinggi dalam 40 tahun terakhir pada tahun 2022.
            Ketua The Fed Jerome Powell mengakui dalam konferensi pers setelah pertemuan bulan Juli bahwa beberapa rekannya mengkaji kasus penurunan suku bunga pada hari itu. Namun dia mengatakan mereka "sangat" memilih menunggu hingga September.
            Menurut risalah rapat yang dirilis pada hari Rabu, "hampir semua peserta menyatakan bahwa meskipun data yang masuk mengenai inflasi cukup menggembirakan, informasi tambahan diperlukan...sebelum keputusan" untuk menurunkan suku bunga diambil.
            Pertemuan The Fed berikutnya dijadwalkan pada 17-18 September. Mengingat angka lapangan kerja dan inflasi pada bulan Juli, para pejabat lebih cenderung memperdebatkan besarnya penurunan suku bunga dibandingkan apakah akan menurunkan suku bunga. Pelaku pasar melihat 67% peluang penurunan sebesar 0,25 poin dan 33% peluang penurunan sebesar 0,5 poin, menurut CME FedWat'
        ]);
        // 3
        Post::create([
            'title' => 'Kekhawatiran Soal Integritas Pemilu Amerika Serikat Tingkatkan Ketegangan Jelang Pilpres',
            'author_id' => $user3->id,
            'body' => 'Badan-badan federal telah melakukan latihan simulasi dengan mengingat 6 Januari 2021, ketika para pendukung Trump, yang tidak puas atas kekalahannya, menyerbu gedung Kongres Amerika, US Capitol.
            Apakah persiapan tersebut memperkuat integritas pemilu?
            Itu adalah harapan para pemangku kepentingan seperti organisasi berusia 104 tahun, Liga Pemilih Perempuan. Kata CEO-nya, Celina Stewart,“Saya kira, tunggu dan lihat hasilnya. Kita harus melihat apa yang terjadi, apa hasil pemilu, bagaimana perasaan orang-orang mengenai ini, ada protes apa, dan apakah protes itu melewati batas menjadi kekerasan, dan harapan saya adalah tidak demikian.”
            Sejauh ini, sistem telah berjalan baik, menurut ketua badan federal Komisi Bantuan Pemilu, Ben Hovland. Katanya,“Kita telah mengadakan banyak pemilihan pendahuluan, baik pemilihan pendahuluan untuk pilpres tahun ini dan pemilihan pendahuluan negara bagian. Karena itu, para petugas pemilu telah banyak berlatih pada musim pemilu ini. Saya pikir kita dalam kondisi yang baik menuju November.”'
        ]);
        // 4
        Post::create([
            'title' => 'Perkiraan Inflasi di Tahun 2024',
            'author_id' => $user4->id,
            'body' => 'Perkiraan inflasi terbaru Federal Reserve yang diterbitkan pada bulan September mengatakan PCE inti pembacaan inflasi pilihan bank sentral kemungkinan akan berakhir tahun depan pada 2,6%, turun dari 3,7% pada akhir tahun ini. Pada bulan Agustus, inflasi PCE inti mencapai 3,9% per tahun.
            Dan minggu lalu, laporan CPI bulan September menunjukkan inflasi umum mencapai 3,7% per tahun , tidak berubah dari bulan Agustus, karena harga “inti”, tidak termasuk makanan dan energi, naik 4,1% dibandingkan tahun sebelumnya. The Fed menargetkan inflasi 2%.
            Setidaknya satu komentator menyebut laporan ini sebagai laporan yang "sangat lancar" dan merupakan perpanjangan dari narasi disinflasi yang terjadi di pasar.
            Dalam sebuah catatan kepada kliennya pada hari Senin, ahli strategi RBC Lori Calvasina menaikkan ekspektasinya terhadap keuntungan perusahaan pada neraca tahun ini dan tahun depan. Dan salah satu faktor yang mendorong pandangan ini adalah terus meredanya tekanan inflasi.'
        ]);
        // 5
        Post::create([
            'title' => 'The Fed Siap Turunkan Suku Bunga AS? Powell: Waktunya Telah Tiba',
            'author_id' => $user5->id,
            'body' => 'Powell menekankan bahwa meskipun inflasi telah menurun secara signifikan, Fed sekarang dapat lebih fokus pada mandat ganda mereka untuk menjaga perekonomian tetap dekat dengan kondisi lapangan kerja penuh.
            "Inflasi telah menurun secara signifikan. Pasar tenaga kerja tidak lagi terlalu panas, dan kondisi saat ini tidak seketat sebelum pandemi," ujar Powell.
            Meski demikian, Powell tidak memberikan petunjuk jelas mengenai kapan pemangkasan suku bunga akan dimulai. Pasar memperkirakan bahwa Fed akan mulai memangkas suku bunga pada bulan September, tetapi Powell tidak menyebutkan kapan ia memperkirakan pelonggaran kebijakan akan dimulai.
            Powell juga mencatat bahwa kenaikan inflasi yang terjadi adalah "fenomena global," yang disebabkan oleh "peningkatan cepat dalam permintaan barang, rantai pasokan yang terganggu, pasar tenaga kerja yang ketat, dan kenaikan tajam harga komoditas."
            Saat inflasi pertama kali mulai meningkat pada awal 2021, Powell dan rekan-rekannya serta banyak ekonom Wall Street menganggapnya sebagai hal yang "sementara." Namun, ketika jelas bahwa inflasi meluas dari barang ke jasa, Fed berbalik arah dan mulai menaikkan suku bunga, menambah 5,25 poin persentase pada suku bunga acuan yang sebelumnya mendekati nol.
            Powell menambahkan bahwa ada banyak pelajaran yang dapat diambil dari pengalaman ini, dan ia menegaskan bahwa "banyak yang masih harus dipelajari" dari situasi tersebut.',
        ]);
        // 6
        Post::create([
            'title' => 'Konstroversi PolyMarket ada akun misterius dan danai US$43 juta',
            'author_id' => $user1->id,
            'body' => 'Polymarket, platform proyeksi pasar keuangan dan politik dunia, dalam laman resmi menunjukkan proyeksi kemenangan bagi Calon Presiden dari Partai Republik Donald Trump hingga 64%. Angka ini naik 3% dalam 24 jam terakhir.
            Akibatnya, posisi pesaing terberatnya, Kamala Harris terjerembab hingga ke 36%. Ditambah lagi, dengan kemungkinan bahwa Donald Trump memenangkan 6 swing states yakni Arizona, Georgia, Pennsylvania, Michigan, Wisconsin, dan Nevada.
            Namun, sejumlah analis melakukan investigasi terhadap poling tersebut. Pasalnya, ada empat akun misterius yang diketahui mendanai poling hingga US$46 juta atau Rp715 miliar agar posisi Trump melesat di atas Harris seperti saat ini.
            Keempat akun misterius tersebut diketahui bukan dimiliki oleh orang Amerika Serikat. Bahkan, akun tersebut tidak diketahui dimiliki oleh satu orang atau sekelompok entitas tertentu. #AkademiCryptoNews',
        ]);
        // 7
        Post::create([
            'title' => 'Pendiri Ripple Kembali Donasi US$10 juta Untuk Harris',
            'author_id' => $user2->id,
            'body' => 'Pendiri Ripple Chris Larsen mengumumkan donasi sebesar US$10 juta dalam bentuk XRP untuk kampanye Calon Presiden Amerika Serikat dari Partai Demokrat Kamala Harris, Senin (21/10). 
            "Sudah waktunya Partai Demokrat mengambil pendekatan baru terhadap inovasi teknologi, termasuk crypto. Saya percaya Harris akan memastikan teknologi AS mendominasi dunia, karena itu saya mendonasikan US$10 juta dalam bentuk XRP sebagai dukungan," ujar Larsen dalam akun X-nya.
            Tak hanya itu, pendiri Ripple tersebut juga dilaporkan telah menggalang donasi tambahan sebesar US$1 juta XRP ke Future Forward, organisasi politik AS yang pro terhadap Harris.
            Menanggapi donasi Larsen, CEO Ripple Brad Garlinghouse mengatakan bahwa exchange crypto tersebut akan terus mendukung, baik Partai Demokrat dan Republik. Adapun hal tersebut bertujuan untuk mengawal kebijakan pro-crypto di pemerintahan berikutnya. #AkademiCryptoNews',
        ]);
        // 8
        Post::create([
            'title' => 'Investor Eropa Investasikan US$105 Milliar Ke ETF Bitcoin',
            'author_id' => $user3->id,
            'body' => 'Investor Eropa telah menginvestasikan dana senilai US$105 miliar atau Rp1,6 kuadriliun ke exchange-traded funds (ETF) Bitcoin di Amerika Serikat. Tercatat, dana tersebut menjadi investasi ETF Spot Bitcoin tertinggi sejak perilisannya.
            “Inflow ETF di AS oleh investor Eropa kini mencapai rekor US$105 miliar secara tahunan. Dan mengapa tidak? Tampaknya Asia juga menyalurkan aliran dana yang mencapai rekor tertingginya,” ujar Analis Senior ETF Bloomberg Eric Balchunas.
            Terlepas dari rekor inflow tertinggi tersebut, data Bitstamp, exchange crypto, menunjukkan bahwa Bitcoin tidak dapat mencapai di atas US$70 ribu, seperti yang terakhir dicapai pada 29 Juli. #AkademiCryptoNews',
        ]);
        // 9
        Post::create([
            'title' => 'Penambangan bitcoin Kian sulit, Capai Rekor Kesulitan Baru',
            'author_id' => $user4->id,
            'body' => 'Menurut Mempool, platform eksplorasi blockchain, tingkat kesulitan menambang Bitcoin baru-baru ini mengalami peningkatan. Tingkat kesulitan terjadi pada blok 866.880 mencapai rekor 95,7 triliun.
            Penambangan Bitcoin sejatinya tidak dinyatakan dalam satuan tertentu. Namun, tingkat kesulitannya diukur berdasarkan penambangan blok baru dengan blok yang paling mudah yang pernah ada.
            Secara otomatis, tingkat kesulitannya akan disesuaikan setiap blok kira-kira setiap dua minggu untuk memastikan bahwa blok baru bisa ditambang setiap 10 menit.
            Perlu diingat, bahwa tingkat kesulitan penambangan juga bergantung pada jumlah penambang yang ada. Semakin banyak jumlah penambangnya, maka protokol akan meningkatkan tingkat kesulitannya dan otomatis membutuhkan energi yang jauh lebih besar lagi.',
        ]);
        // 10
        Post::create([
            'title' => 'Jamie Dimon Dirumorkan Menjadi Menteri Keungan, Jika kamala Harris Terpilih',
            'author_id' => $user5->id,
            'body' => 'CEO JPMorgan Jamie Dimon akan mempertimbangkan jabatannya, yang kemungkinan sebagai menteri keuangan, dalam kabinet Calon Presiden Amerika Serikat Kamala Harris, jika ia terpilih pada November mendatang. Ini dikarenakan Dimon telah lama menjadi senior kebijakan ekonomi AS.
            Diketahui, CEO lembaga perbankan dan investasi tersebut memberi dukungannya terhadap Harris secara privat. Sebab, Dimon khawatir Donald Trump akan mengecam perusahaannya jika Calon Presiden dari Partai Republik tersebut menang pemilu.
            Tak hanya itu, dinyatakannya dukungan ini secara privat juga dikarenakan Trump secara keliru pernah mengaku bahwa ia mendapat dukungan dari banker AS tersebut.',
        ]);
        // 11
        Post::create([
            'title' => 'Donald Trump akan menghapus pajak Penghasilan Bagi 93Juta Warga As',
            'author_id' => $user6->id,
            'body' => 'Calon Presiden Amerika Serikat Donald Trump mengumumkan akan menghapus pajak penghasilan bagi 93 juta warga Negara Paman Sam, yang merupakan sebagian besar pemilih di AS.
            Sebagai gantinya, Calon Presiden dari Partai Republik tersebut menaikkan pajak impor untuk mengamankan pendapatan negara. Dilaporkan, Trump akan mengenakan pajak sebesar 20% untuk impor dari semua negara, dan 60% untuk impor dari China.
            “Di masa lalu, ketika kita masih menjadi negara masih pintar di tahun 1890-an dan seterusnya, kita berhasil menjadi negara yang relatif kaya dari tarif (pajak impor). Kekayaan tersebut bukan berasal dari pajak penghasilan," ujar Trump. 
            Tak hanya pajak penghasilan, Trump juga mengusulkan penghapusan pajak tip, mengadakan tunjangan jaminan sosial, serta upah lembur. Tak hanya itu, ia juga akan mempertimbangkan pengecualian pajak bagi petugas pemadam kebakaran, polisi, personel militer, dan veteran',
        ]);
        // 12
        Post::create([
            'title' => 'Badan kesehatan Inggris usulkan AI untuk deteksi patah tulang',
            'author_id' => $user7->id,
            'body' => 'National Institute for Health and Care Excellence (NICE) mengusulkan penggunaan artificial intelligence (AI) untuk mendeteksi patah tulang. Nantinya, AI akan meningkatkan kemampuan X-ray dalam mendeteksi retakannya.
            Badan kesehatan di Inggris tersebut menyatakan penggunaan teknologi tersebut bertujuan untuk mengurangi salah diagnosa, serta mempercepat tindakan medis. Sebab, teknologi kecerdasan buatan dinilai lebih canggih dan akurat dibandingkan pemeriksaan secara manual.
            “Teknologi AI ini aman untuk digunakan dan dapat mendeteksi kerusakan tulang yang mungkin terlewatkan oleh manusia, mengingat tekanan dan tuntutan yang dihadapi oleh kelompok profesional,” ujar Direktur HealthTech NICE Mark Chapman.',
        ]);
    }
}