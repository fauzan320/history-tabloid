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
        	'pertanyaan' => '1.	Brigade III/Damarwulan terbentuk dari penyempuranaan organisasi militer di Jawa Timur sebagai pelaksanaan program Rera. Alasan dilaksanakannya Rera adalah….',
        	'a' => 'a.	Pasukan Belanda melakukan Agresi Militer II ke wilayah Besuki',
        	'b' => 'b.	Ditetapkannya garis demarkasi dari Bungah hingga Sungai Glidik',
        	'c' => 'c.	Wilayah Republik semakin menyempit dan menghemat belanja negara',
            'd' => 'd.	Gagalnya Kabinet Amir Sjariffudin dalam Perundingan Renville',
            'e' => 'e.	Korupsi, kolusi, dan nepotisme dalam Angkatan Perang',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '2.	Rencana dalam Perintah Kilat Nomor 1 memiliki keterkaitan dengan Perintah Siasat Nomor 1. Adapun rencana yang dimaksud adalah…',
        	'a' => 'a.	Melakukan aksi penyerangan terhadap markas Belanda di garis demarkasi',
        	'b' => 'b.	Menyusup ke daerah federal dan mendirikan kantong gerilya',
        	'c' => 'c.	Penyempurnaan organisasi militer di seluruh wilayah Republik',
            'd' => 'd.	Menumpas gerakan propaganda anti gerakan Republik',
            'e' => 'e.	Melanjutkan langkah diplomasi dengan Belanda pasca Perundingan Renville',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '3.	Pasca dikeluarkannya Perintah Kilat Perintah Nomor 1, langkah yang dilakukan Pasukan Brigade III/Damarwulan sebagai bagian dari Divisi 1 Jawa Timur adalah…',
        	'a' => 'a.	Melakukan penyusupan ke wilayah Besuki yang telah dikuasai Belanda',
        	'b' => 'b.	Ikut serta dalam menumpas serangan Belanda di Lapangan Maguwo ',
        	'c' => 'c.	Mengamankan Letkol. Mochammad Sroedji dari serangan Belanda',
            'd' => 'd.	Menghancurkan Besuki agar tidak dijadikan sebagai markas Belanda ',
            'e' => 'e.	Melakukan gencatan senjata dan demiliterisasi di Besuki',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '4.	Lokasi markas Brigade III/Damarwulan dan masing-masing batalyonnya berjauhan. Maka untuk melaksanakan wingate dilakukan dengan cara…',
        	'a' => 'a.	Menerapkan taktik gerilya dan mengepung',
        	'b' => 'b.	Mendirikan daerah pertahanan di Semeru',
        	'c' => 'c.	Terpisah terlebih lokasi setiap markas berjauhan',
            'd' => 'd.	Bertahap dan dislokasi pasukan di garis demarkasi',
            'e' => 'e.	Meninggalkan keluarga anggota pasukan di Blitar',
            'kunci' => 'd',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '5.	Dalam melakukan wingate yang ditempuh dengan jalan kaki, pasukan Brigade III/Damarwulan menghadapi beberapa kendala. Berikut pernyataan yang benar mengenai hal tersebut adalah…',
        	'a' => 'a.	Kurangnya keterampilan setiap anggota pasukan dalam bertempur',
        	'b' => 'b.	Sikap anggota pasukan Brigade III mengutamakan kepentingannya sendiri',
        	'c' => 'c.	Ikut sertanya anggota keluarga hingga menimbulkan kekurangan logistik',
            'd' => 'd.	Minimnya jumlah pasukan dalam formasi Brigade III/Damarwulan.',
            'e' => 'e.	Kondisi cuaca yang tidak menentukan, sehingga menghambat pergerakan',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '6.	Pengambilan rute Brigade III/Damarwulan dalam melakukan wingate action adalah Kediri-Besuki hingga melintasi wilayah Semeru. Alasan mereka mengambil jalur tersebut karena…',
        	'a' => 'a.	Akses jalan mudah sehingga pasukan tiba di Besuki lebih cepat',
        	'b' => 'b.	Desa yang dilalui Brigade III selalu menyediakan kebutuhan logistik',
        	'c' => 'c.	Banyak laskar perjuangan secara sukarela bersedia membantu Brigade III',
            'd' => 'd.	Brigade III ingin mendirikan markas pertahanan di Semeru',
            'e' => 'e.	Menghindari kontak langsung dengan tantara KNIL',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '7.	Saat mendekati garis demarkasi Brigade III dan segenap batalyonnya melakukan pemindahan lokasi pasukan. Berikut adalah susunan pasukan yang sesuai dengan pernyataan tersebut adalah…',
        	'a' => 'a.	Batalyon 26-Batalyon 28-staf Brigade III-Batalion 27-Batalyon Alang-Alang',
        	'b' => 'b.	Batalyon 27-Batalyon 26-staf Brigade III-Batalyon 25-Batalyon Alang-Alang',
        	'c' => 'c.	Batalyon 25-Batalyon 26-staf Brigade III- Batalyon 27-Batalyon Depot',
            'd' => 'd.	Batalyon 26-Batalyon 25-staf Brigade III-Batalyon 27-Batalyon Depot',
            'e' => 'e.	Batalyon 27-Batalyon 25-staf Brigade III-Batalyon 306-Batalyon Depot',
            'kunci' => 'd',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '8.	Ketika Batalyon 26 menuju ke Sumbertangkil melewati daerah minus mereka mengalami permasalahan logistik karena…',
        	'a' => 'a.	Adanya penyerangan dari tantara KNIL',
        	'b' => 'b.	Kekurangan biaya, peralatan, dan perlengkapan',
        	'c' => 'c.	Perampasan senjata oleh musuh',
            'd' => 'd.	Persediaan logistik semakin bertambah',
            'e' => 'e.	Penjarahan bahan makanan dan keuangan',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '9.	Permasalahan yang dihadapi setiap batalyon pasukan Brigade III/Damarwulan ketika sampai di wilayah Semeru Selatan adalah…',
        	'a' => 'a.	Wabah penyakit menular di desa sekitar Semeru Selatan',
        	'b' => 'b.	Terbatasnya pergerakan karena wilayah perhutanan dan paceklik ',
        	'c' => 'c.	Kekurangan pasukan pertahanan pada masing-masing batalyon',
            'd' => 'd.	Adanya serangan secara mendadak dari pasukan Belanda',
            'e' => 'e.	Sikap masyarakat lokal di Lumajang yang kontra terhadap republik',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '10.	Sesampainya di Desa Tempursari, Batalyon 26 melakukan penyerangan terhadap pasukan Belanda. Adapun tujuannya adalah… ',
        	'a' => 'a.	Merampas senjata pasukan Belanda untuk menambah persiadaan logistik',
        	'b' => 'b.	Melakukan penangkapan dan penjarahanan senjata pasukan Belanda',
        	'c' => 'c.	Membuka jalan pasukan Brigade III/Damarwulan menuju Besuki',
            'd' => 'd.	Merekrut pasukan Belanda untuk menjadi mata-mata di Tempursari',
            'e' => 'e.	Menghancurkan Desa Tempursari dan melucuti senjata musuh',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '11.	Ketika tiba di Desa Penanggal, pasukan Brigade III menjadikan desa tersebut sebagai rendezvous point dengan alasan…',
        	'a' => 'a.	Agar mampu membuka jalan batalion lainnya menuju Besuki',
        	'b' => 'b.	Kondisi masyarakat makmur dan mendukung republik',
        	'c' => 'c.	Masyarakat setempat anti terhadap kedaulatan republik',
            'd' => 'd.	Merekrut masyarakat setempat sebagai bagian dari pasukan Brigade III',
            'e' => 'e.	Menghancurkan desa agar tidak dijadikan sebagai markas pasukan Belanda',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '12.	Sebagai lanjutan dari Surat Perintah Siasat Nomor 1, Letkol. Sroedji melakukan alokasi penugasan. Berikut penugasan yang diberikan oleh Letkol. Sroedji terhadap Mayor Imam Soekarto adalah…',
        	'a' => 'a.	Menjadi komandan sub–teritorium Besuki wilayah Jember–Banyuwangi',
        	'b' => 'b.	Menjadi Residen Militer wilayah Jember–Situbondo – Banyuwangi ',
        	'c' => 'c.	Memperkuat basis pertahanan setiap batalyon Brigade III/Damarwulan',
            'd' => 'd.	Menggantikan Sroedji sebagai pemimpin Brigade III/Damarwulan',
            'e' => 'e.	Menjadi komandan sub–teritorium Besuki wilayah Situbondo–Bondowoso',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '13.	Selain melakukan wingate action, setiap komandan pasukan diperintahkan untuk melakukan wehrkreise. Adapun pelaksanaan wehrkreise pada bidang ekonomi yang dilakukan pasukan Brigade III/Damarwulan adalah…',
        	'a' => 'a.	Menghancurkan perusuhaan kopi dan tembakau milik pihak asing ',
        	'b' => 'b.	Menguasai struktur organisasi pemerintahan sipil',
        	'c' => 'c.	Memberlakukan beban pajak untuk rakyat di Besuki',
            'd' => 'd.	Memberantas setiap orang yang bekerja sama dengan Belanda',
            'e' => 'e.	Mendirikan markas besar komando militer di Besuki',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '14.	Setibanya di Desa Karang Kedawung, Sroedji selaku pemimpin pasukan Brigade III/Damar Wulan menyusun strategi, yaitu…',
        	'a' => 'a.	Menyusun rute perjalanan alternatif menuju wilayah Besuki',
        	'b' => 'b.	Melakukan pengamanan dan penempatan pasukan pada ketinggian strategis',
        	'c' => 'c.	Mempersiapkan logistik dan persediaan senjata untuk menyerang Belanda ',
            'd' => 'd.	Mengepung dan melakukan serangan mendadak ke pertahanan Belanda',
            'e' => 'e.	Menerapkan strategi politik adu domba terhadap warga desa',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '15.	Pada tanggal 8 Februari 1949 Batalion Infanteri XIII KNIL (Belanda) berhasil menyerang pasukan Brigade III di Karang Kedawung. Strategi yang digunakan Belanda saat itu adalah…',
        	'a' => 'a.	Menghancurkan persediaan logistik Pasukan Brigade III',
        	'b' => 'b.	Membumihanguskan Desa Karang Kedawung',
        	'c' => 'c.	Melakukan pengepungan dan serangan mendadak',
            'd' => 'd.	Belanda menggunakan strategi devide et impera ',
            'e' => 'e.	Belanda melakukan diplomasi dengan penduduk desa',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '16.	Penyebab mudahnya pasukan Belanda melakukan penyerangan pasukan Brigade III/Damarwulan adalah…',
        	'a' => 'a.	Lemahnya pengawasan dan pertahanan pasukan Brigade III',
        	'b' => 'b.	Persediaan Senjata dan logistik Belanda sangat banyak',
        	'c' => 'c.	Desa Karang Kedawung tidak memiliki lokasi yang strategis',
            'd' => 'd.	Penduduk Desa Karang Kedawung dengan KNIL bekerja sama',
            'e' => 'e.	Pasukan Belanda menugaskan mata-mata dalam pasukan Brigade III',
            'kunci' => 'e',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '17.	Setelah komandan Brigade III gugur di Pertempuran Karang Kedawung, Belanda melakukan penyiksaan dan menarik jenazah Sroedji menggunakan truk dengan alasan…',
        	'a' => 'a.	Memudahkan evakuasi jenazah Sroedji untuk dibawa ke Jember',
        	'b' => 'b.	Belanda melakukan perang psikologis terhadap rakyat sipil',
        	'c' => 'c.	Sisa pasukan Brigade III yang tersisa dapat menyerah tanpa syarat',
            'd' => 'd.	Kekosongan kursi komandan Brigade III dapat beralih ke Belanda',
            'e' => 'e.	Mengobarkan jiwa semangat bertempur tentara Belanda',
            'kunci' => 'b',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '18.	Pasca gugurnya Sroedji Brigade III/Damarwulan dipimpin oleh Mayor Imam Soekarto untuk melanjutkan perjuangan. Berdasarkan pernyataan tersebut, dapat dinilai bahwa…',
        	'a' => 'a.	Mayor Imam Soekarto mampu memimpin perlawanan',
        	'b' => 'b.	Adanya anggapan Belanda takut dengan Mayor Imam Soekarto',
        	'c' => 'c.	Perjuangan harus tetap dilanjutkan sampai pengakuan kedaulatan',
            'd' => 'd.	Tidak ada lagi penerus kepemimpinan selain Mayor Imam Soekarto',
            'e' => 'e.	Banyaknya anggota pasukan yang berkhianat ke Republik',
            'kunci' => 'c',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '19.	Terdapat beberapa anggota Brigade III melakukan pengkhianatan dan bekerja sama dengan Belanda setelah gugurnya Sroedji. Berdasarkan pernyataan tersebut, dapat dinilai bahwa…',
        	'a' => 'a.	Adanya rasa pesimis untuk melanjutkan perjuangan',
        	'b' => 'b.	Bekerja sama dengan Belanda lebih menguntungkan', 
        	'c' => 'c.	Rakyat sipil secara bertahap mendukung Belanda',
            'd' => 'd.	Kurangnya paham nasionalisme terhadap Republik',
            'e' => 'e.	Kekuatan dan pertahanan TNI semakin melemah',
            'kunci' => 'a',
        ]);
        DB::table('soal')->insert([
        	'pertanyaan' => '20.	Perhatikan pernyataan berikut!
            “Selama rakyat selalu bersama melakukan pergerakan dengan brigade, maka disaat itu pula brigade dapat melakukan tugasnya.” A. H. Nasution.
            Berdasarkan peryataan tersebut disimpulkan bahwa…',
        	'a' => 'a.	Rakyat hanya berperan dalam membantu pasukan brigade dalam berjuang',
        	'b' => 'b.	Kunci suksesnya perjuangan jika pasukan brigade dan rakyat berkerja sama',
        	'c' => 'c.	Hanya rakyat yang mendukung republik dapat membantu brigade TNI',
            'd' => 'd.	Angkatan perang Republik tidak mampu melindungi rakyat',
            'e' => 'e.	Selama wingate hanya rakyat pro-republik membantu brigade TNI ',
            'kunci' => 'b',
        ]);
    }
}
