<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class soal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table soal
        DB::table('soal')->insert([
        	'pertanyaan' => '1.	Pasca ditandatanganinya perjanjian Renville pada tanggal 17 
        Januari 1948 memberikan dampak negatif bagi bangsa Indonesia, yaitu munculnya peristiwa….',
        	'a' => 'a.	Agresi Militer Belanda I',
        	'b' => 'b.	Agresi Militer Belanda II',
        	'c' => 'c.	Long March',
            'd' => 'd.	Di selenggarakannya Perunding Roem-Royen',
            'e' => 'e.	Belanda menyerahkan kedaulatan Indonesia',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '2.	Berikut bukti bahwa bangsa Indonesia menyusun strategi sebagai respon
        terhadap penyerangan Belanda di Pangkalan Udara Maguwo pada tanggal 19 Desember 1948 adalah….',
        	'a' => 'a.	Melakukan strategi penyerangan menggunakan pagar betis dan taktik mengepung',
        	'b' => 'b.	Merespon serangan Belanda dengan taktik Puputan',
        	'c' => 'c.	Mengeluarkan Surat Perintah Kilat 1 dan melakukan gerilya',
            'd' => 'd.	Menyusun rencana serangan dengan strategi mengepung musuh',
            'e' => 'e.	Menghancurkan pangkalan udara Maguwo',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '3.	Perhatikan pernyataan berikut ;
                1)	Pada tanggal 19 Desember 1948 Angkatan Perang Belanda menyerang kota
                        Yogyakarta dan lapangan terbang Maguwo
                2)	Semua Angkatan Perang menjalankan rencana yang telah ditetapkan untuk 
                        menghadapi Belanda
                3)	Kita telah diserang
                4)	Pemerintah Belanda telah membatalkan gencatan senjata
        Berikut menunjukkan urutan yang benar pada pernyataan Surat Perintah Kilat 1 diatas adalah….',
        	'a' => 'a.	1 – 2 – 4 – 3',
        	'b' => 'b.	3 – 4 – 1 – 2 ',
        	'c' => 'c.	4 – 3 – 1 – 2',
            'd' => 'd.	4 – 1 – 3 – 2',
            'e' => 'e.	3 – 1 – 4 – 2',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '4.	Pasca dikeluarkannya Perintah Kilat Perintah Nomor 1, langkah yang
        dilakukan Pasukan Brigade III/Damarwulan sebagai bagian dari Divisi 1 Jawa Timur adalah….',
        	'a' => 'a.	Wingate Action',
        	'b' => 'b.	Ikut serta dalam menumpas serangan Belanda di Lapangan Maguwo',
        	'c' => 'c.	Mengamankan Letkol. Mochammad Sroedji dari serangan Belanda',
            'd' => 'd.	Menghancurkan Besuki agar tidak dijadikan sebagai markas Belanda',
            'e' => 'e.	Melakukan gencatan senjata',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '5.	Perhatikan pernyataan berikut ;
            1)	Lodoyo 
            2)	Bantur
            3)	Lumajang Selatan
            4)	Tempursari
            5)	Binangun
            6)	Sumber Manjing
            7)	Gondoruso
        Berikut menunjukkan urutan yang benar pada rute yang dilalui pasukan Brigade III/Damarwulan
        dalam melakukan wingate action adalah...',
        	'a' => 'a.	1 – 5 – 2 – 6 – 4 – 7 – 3',
        	'b' => 'b.	1 – 4 – 2 – 5 – 6 – 7 – 3',
        	'c' => 'c.	1 – 2 – 6 – 4 – 5 – 7 – 3',
            'd' => 'd.	1 – 6 – 4 – 2 – 5 – 7 – 3',
            'e' => 'e.	1 – 7 – 2 – 5 – 6 – 4 – 3',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '6.	Dalam melakukan wingate action yang ditempuh dengan jalan kaki, 
        pasukan Brigade III/Damarwulan menghadapi beberapa kendala. Berikut pernyataan yang benar 
        mengenai hal tersebut adalah….',
        	'a' => 'a.	Kurangnya keterampilan anggota pasukan Brigade III/Damarwulan dalam bertempur',
        	'b' => 'b.	Sikap pasukan yang terlalu mengutamakan kepentingannya sendiri',
        	'c' => 'c.	Ikut sertanya anggota keluarga pasukan sehingga menimbulkan kekurangan logistik',
            'd' => 'd.	Minimnya jumlah pasukan dalam melakukan wingate action.',
            'e' => 'e.	Kondisi cuaca yang tidak menentukan, sehingga menghambat pergerakan 
                        Brigade III/Damarwulan',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '7.	Perhatikan pernyataan berikut.
            1)	Batalion 25
            2)	Batalion 26
            3)	Batalion 27
            4)	Batalion 28
            5)	Batalion Depot
            6)	Batalion 306
            7)	Batalion Brimob Alang-Alang
        Berikut batalion satuan Brigade III/Damarwulan dalam melakukan wingate action yang benar
        berdasarkan pernyataan diatas adalah…',
        	'a' => 'a.	1 – 3 – 6 – 7',
        	'b' => 'b.	1 – 2 – 4 – 5',
        	'c' => 'c.	2 – 5 – 6 – 7',
            'd' => 'd.	2 – 3 – 4 – 5',
            'e' => 'e.  1 – 2 – 3 – 5',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '8.	Demi keberhasilan dalam melaksanakan wingate action, satuan tiap 
        batalion menyusun struktur perjalanan mereka. Berikut adalah penempatan setiap batalion 
        Brigade III/Damarwulan dalam melakukan wingate action pada rute perjalaanan mereka adalah…',
        	'a' => 'a.	Garda depan oleh Batalion 26, diikuti Batalion 28 dan staf Brigade III, posisi 
            terakhir ditugaskan pada Batalion 27 serta Batalion Alang-Alang',
        	'b' => 'b.	Garda depan oleh Batalion 27, diikuti Batalion 26 dan staf Brigade III, posisi 
            terakhir ditigaskan pada Batalion 25 serta Batalion Alang-Alang',
        	'c' => 'c.	Garda depan oleh Batalion 25, diikuti Batalion 26 dan staf Brigade III, posisi 
            terakhir ditugaskan pada Batalion 27 serta Batalion Depot',
            'd' => 'd.	Garda depan oleh Batalion 26, diikuti Batalion 25 dan staf Brigade III, posisi
             terakhir ditugaskan pada Batalion 27 serta Batalion Depot',
            'e' => 'e.	Garda depan oleh Batalion 27, diikuti Batalion 25 dan staf Brigade III, posisi
             terakhir ditugaskan pada Batalion 306 serta Batalion Depot',
            'kunci' => 'd',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '9.	Setiap batalion memiliki pemimpin dalam menyukseskan terlaksananya 
        wingate action. Berikut adalah nama tokoh pemimpin dan batalion yang menaunginya adalah….',
        	'a' => 'a.	Batalion 26 dipimpin oleh Mayor E.J. Magenda',
        	'b' => 'b.	Batalion 25 dipimpin oleh Mayor Soedarmin',
        	'c' => 'c.	Batalion 306 dipimpin oleh Mayor Alwin Nurdin',
            'd' => 'd.	Batalion Alang-Alang dipimpin oleh Mayor Soedirman',
            'e' => 'e.	Batalion Depot dipimpin oleh Mayor Sroedji',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '10.	Sesampainya di Desa Tempursari, Batalion 26 melakukan penyerangan
        terhadap pasukan Belanda. Adapun tujuannya adalah…. ',
        	'a' => 'a.	Merampas senjata pasukan Belanda untuk menambah persiadaan senjata pasukan 
            Brigade III/Damarwulan',
        	'b' => 'b.	Melakukan penangkapan kepada setiap anggota dari KNIL yang berjaga di Tempusari',
        	'c' => 'c.	Membuka jalan pasukan Brigade III/Damarwulan dalam mlakukan wingate action',
            'd' => 'd.	Merekrut pasukan Belanda untuk menjadi mata-mata untuk pasukan Brigade 
            III/Damarwulan',
            'e' => 'e.	Mengurangi intensitas pertempuran dengan pasukan Belanda',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '11.	Ketika tiba di Desa Penanggal, pasukan Brigade III menjadikan desa 
        tersebut sebagai rendezvous point dengan alasan….',
        	'a' => 'a.	Agar mampu membuka jalan batalion lainnya menuju Besuki',
        	'b' => 'b.	Kondisi masyarakat makmur dan mendukung Republik',
        	'c' => 'c.	Masyarakat setempat anti-republik',
            'd' => 'd.	Merekrut masyarakat setempat sebagai bagian dari pasukan Brigade III',
            'e' => 'e.	Menghancurkan desa tersebut agar tidak dijadikan sebagai markas pasukan Belanda',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '12.	Sebagai lanjutan dari Surat Perintah Siasat Nomor 1, Letkol. Sroedji 
        melakukan alokasi penugasan. Berikut adalah penugasan yang diberikan oleh Letkol. Sroedji 
        terhadap Mayor Imam Soekarto adalah….',
        	'a' => 'a.	Menjadi komandan sub-teritorium Besuki yang meliputi wilayah Jember – Banyuwangi',
        	'b' => 'b.	Menjadi Residen Militer',
        	'c' => 'c.	Memperkuat setiap batalion dalam Brigade III/Damarwulan',
            'd' => 'd.	Menggantikan Sroedji sebagai pemimpin Brigade III/Damarwulan',
            'e' => 'e.	Menjadi komandan sub-teritorium Besuki yang meliputi wilayah Situbondo – Bondowoso.',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '13.	Selain melakukan wingate action, setiap komandan pasukan diperintahkan 
        untuk melakukan wehrkreise. Adapun pelaksanaan wehrkreise pada bidang politik dan ekonomi yang 
        dilakukan pasukan Brigade III/Damarwulan adalah… ',
        	'a' => 'a.	Pada bidang politik pelaksanaan wehrkreise ditujukan terhadap seluruh bawahan Belanda, 
                    sedangkan ekonomi dengan menghancurkan perusuhaan kopi sekaligus tembakau miliki pihak asing ',
        	'b' => 'b.	Pada bidang politik pelaksanaan wehrkreise ditujukan untuk menguasai struktur organisasi 
                    pemerintahan sipil, sedangkan ekonomi melakukan penguasaan terhadap hak kepemilikan asing.',
        	'c' => 'c.	Bidang politik menjadikan Brigade III/Damarwulan sebagai pejabat pemerintahan di wilayah 
                    Karesidenan Besuki, sedangan ekonomi memberlakukan pajak untuk penduduk sipil',
            'd' => 'd.	Bidang ekonomi ditujukan untuk mensejahterakan rakyat, sedangkan politik ditujukan untuk 
                    memberantas KKN oleh Belanda',
            'e' => 'e.	Pada bidang politik  pelaksanaan wehrkreise ditujukan kepada sebagian pasukan Brigade 
                    III/Damarwulan untuk menjadi pejabat di Besuki, sedangkan ekonomi memberikan kemakmuran kepada rakyat',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '14.	Setibanya di Desa Karang Kedawung, Sroedji selaku pemimpin pasukan Brigade III/Damar 
        Wulan menyusun strategi, yaitu…  ',
        	'a' => 'a.	Menyusun rute perjalanan selanjutnya menuju Besuki',
        	'b' => 'b.	Melakukan pengamanan dan penempatan pasukan pada lokasi dengan ketinggian yang dianggap strategis',
        	'c' => 'c.	Mempersiapkan logistik dan persediaan senjata untuk menghadapi Belanda di Desa Karang Kedawung',
            'd' => 'd.	Menghancurkan Desa Karang Kedawung agar tidak dijadikan sebagai markas Belanda',
            'e' => 'e.	Merekrut penduduk Desa Karang Kedawung untuk ikut andil dalam perjalanan wingate action 
                    Brigade III/Damarwulan',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '15.	Pada tanggal 8 Februari 1949, pasukan dibawah pimpinan Sroedji melaksanankan 
        startegi lanjutan di Desa Karang Kedawung. Namun mereka diserang oleh Batalion Infanteri XIII KNIL 
        (Belanda) dengan strategi…',
        	'a' => 'a.	Menghancurkan persediaan logistik Pasukan Brigade III/Damarwulan',
        	'b' => 'b.	Membumihanguskan Desa Karang Kedawung',
        	'c' => 'c.	Mengepung Desa Karang Kedawung, kemudian melakukan penyerangan secara mendadak',
            'd' => 'd.	Belanda melancarkan strategi devide et impera dalam tubuh pasukan Brigade 
                    III/Damarwulan',
            'e' => 'e.	Belanda melakukan langkah diplomasi sebagaimana yang dilakukan dalam Perundingan Renville',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '16.	Penyebab mudahnya pasukan Belanda melakukan pengepungan dan menyerang secara 
        mendadak terhadap pasukan Brigade III/Damarwulan adalah….',
        	'a' => 'a.	Lemahnya pengawasan dan pertahanan pasukan Brigade III/Damarwulan',
        	'b' => 'b.	Keterbatasan senjata pasukan Brigade III/Damarwulan akibat seringnya 
                    berhadapan dengan Belanda selama melakukan wingate action',
        	'c' => 'c.	Desa Karang Kedawung tidak memiliki lokasi yang strategis',
            'd' => 'd.	Adanya kerjasama antara penduduk Desa Karang Kedawung dengan KNIL',
            'e' => 'e.	Pasukan Belanda telah menempatkan mata-mata untuk mengawasi pergerakan Brigade III/Damarwulan',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '17.    Perhatikan nama-nama tokoh berikut
            1)	Letkol. Mochammad Sroedji
            2)	Lekkol. dr. Soebandi
            3)	Jenderal Soedirman
            4)	Sahri
            5)	A.H. Nasution
        Berdasarkan pernyataan diatas, berikut jawaban yang menunjukkan nama-nama tokoh yang gugur 
        dalam Pertempuran Karang Kedawung adalah… ',
        	'a' => 'a.	1 – 3 – 5',
        	'b' => 'b.	1 – 2 – 3',
        	'c' => 'c.	1 – 2 – 4',
            'd' => 'd.	1 – 4 – 5',
            'e' => 'e.	1 – 3 – 4',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '18.	Atas jasanya, Presiden Joko Widodo menobatkan Letkol. Mochammad Sroedji 
        sebagai Bintang Mahaputera yang tertera dalam…',
        	'a' => 'a.	Keppres RI No. 91/TK/Tahun 2016',
        	'b' => 'b.	Keppres RI No. 91/TK/Tahun 2017',
        	'c' => 'c.	Keppres RI No. 92/TK/Tahun 2016',
            'd' => 'd.	Keppres RI No. 92/TK/Tahun 2016',
            'e' => 'e.	Keppres RI No. 93/TK/Tahun 2016',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '19.	Dari pertiwa Pertempuran Karang Kedawung dapat disimpulkan bahwa 
        hubungannya dengan Agresi Militer Belanda II adalah…. ',
        	'a' => 'a.	Pelaksanaan Agresi Militer Belanda II yang gagal, sehingga mendorong Belanda melakukan balas dendam 
                    dan berujung pada Pertempuran dibeberapa daerah, salah satunya di Desa Karang Kedawung antara tentara KNIL 
                    dengan Brigade III/Damarwulan',
        	'b' => 'b.	Dilaksanakannya wingate action sebagai bagian strategi untuk menampung kekuatan gerilya akibat 
                    Agresi Militer Belanda II, sehingga peluang berhadapan dengan pasukan Belanda cukup besar. Maka dari itu,  
                    wingate action Brigade III/Damarwulan mencapai puncaknya ketika berhadapan dengan Belanda di Karang Kedawung', 
        	'c' => 'c.	Kolonel Soengkono sebagai pemimpin dari Divisi I Jawa Timur memerintahkan Brigade III/Damarwulan untuk 
                    menghancurkan Desa Karang Kedawung agar tidak dijadikan sebagai basis kekuatan saat Agresi Militer Belanda II, 
                    sehingga terjadi pertempuran di lokasi tersebut. ',
            'd' => 'd.	Pendirian wehrkreise oleh pasukan Brigade III/Damarwulan menjadi latar belakang munculnya Pertempuran 
                    di Karang Kedawung, karena Belanda tidak menginginkan lokasi tersebut dijadikan sebagai basis pertahanan RI',
            'e' => 'e.	Diserangnya Lapangan Udara Maguwo mengakibatkan setiap daerah mengangkat senjata, termasuk TNI dan 
                    penduduk sipil di Karang Kedawung, sehingga memicu timbulnya pertempuran antara pasukan Belanda dengan penduduk 
                    sipil yang dibantu oleh Brigade III/Damarwulan. ',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '20.	Pasca gugurnya Letkol. Mochammad Sroedji sebagai pemimpin pasukan Brigade III/Damaruwulan, 
        perjuangan pasukan tersebut tetap berlanjut ke wilayah Besuki hingga pengakuan kedaulatan Indonesia. 
        Berdasarkan pernyataan tersebut, dapat disimpulkan bahwa…',
        	'a' => 'a.	Gugurnya seorang pemimpin dalam menjalankan sebuah misi mendorong setiap pasukannya untuk 
                    melakukan gerakan pembelotan, sehingga pengakuan kedaulatan gagal dilaksanakan.',
        	'b' => 'b.	Walaupun pemimpin pasukan gugur dalam pertempuran, mendorong setiap anggota staf pasukan yang tersisa 
                    tetap berjuang dengan tujuan untuk membuktikan seberapa besar kekuatan pertahanan mereka terhadap Belanda',
        	'c' => 'c.	Pasca kemerdekaan pengakuan kedaulatan sangatlah penting agar RI mendapatkan de facto sebagai negara, 
                    sehingga walaupun pemimpin pasukan gugur sebelum mencapai Besuki perjuangan tetap dilanjutkan agar daerah 
                    tersebut tidak jatuh ke tangan Belanda',
            'd' => 'd.	Pasca kemerdekaan pengakuan kedaulatan sangatlah penting agar RI mendapatkan de jure sebagai negara, 
                    sehingga walaupun pemimpin pasukan gugur sebelum mencapai Besuki perjuangan tetap dilanjutkan agar daerah 
                    tersebut tidak jatuh ke tangan Belanda',
            'e' => 'e.	Walaupun pemimpin pasukan gugur dalam pertempuran, mendorong setiap anggota staf Brigade bersama 
                    penduduk sipil di Karang Kedauwung yang tersisa tetap berjuang dengan tujuan untuk menguji seberapa besar 
                    kekuatan pertahanan mereka terhadap Belanda',
            'kunci' => 'c',
        ]);
    }
}
