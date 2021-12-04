<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CerdikaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        $data = [
            [
                'author_id' => 1,
                'title' => 'C (cek kesehatan secara berkala)',     
                'body' => 'Adapun cek kesehatan pada aplikasi paket CERDIKA ini yaitu:
                <ol>
                    <li>
                        <h3>Cek tekanan darah</h3>
                        <p>Cek tekanan darah merupakan salah satu cara untuk mendeteksi dini resiko kejadian hipertensi, penyakit jantung, maupun stroke. Tekanan darah normal yaitu di bawah 140/90 mmHg. Pengecekan tekanan darah dilakukan 2x/minggu.</p>
                    </li>
                    <li>
                        <h3>Cek kadar gula darah</h3>
                        <p>Cek kadar gula darah merupakan salah satu cara untuk mendeteksi dini diabetes mellitus. Hasil tes normal jika kadar gula dalam darah <100. Pengecekan kadar gula darah dilakukan 2x/minggu.</p>
                    </li>
                </ol>',
            ],
            [
                'author_id' => 1,
                'title' => 'E (Enyahkan asap rokok)',     
                'body' => 'Klien hipertensi dianjurkan untuk menghindari merokok aktif dan merokok pasif. Merokok dapat memperburuk penyakit; karena nikrotin yang terkandung dalam rokok dapat menyebabkan vasokontriksi pembuluh darah coroner dan pembuluh darah perifer sehingga mengakibatkan menurunnya suplai darah dalam jaringan. ',
            ],
            [
                'author_id' => 1,
                'title' => 'R (Rajin aktivitas fisik)',     
                'body' => 'Pada aplikasi paket cerdika ini, klien hipertensi dianjurkan untuk olahraga olahraga isotonic, seperti jalan kaki, jogging, maupun berenang. Olahraga ataupun aktivitas fisik ini dilakukan minimal selama 30 menit/hari sebanyak 3-5 kali/minggu. selain itu, klien hipertensi tidak dianjurkan untuk olahraga isometric seperti angkat besi, angkat beban. ',
            ],
            [
                'author_id' => 1,
                'title' => 'D (Diet Seimbang)',     
                'body' => '
                Salah satu diet yang direkomendasikan untuk pasien hipertensi yaitu DASH. <i>DASH (Dietary Approaches to Stop Hypertension)</i> merupakan diet yang berfokus pada pengurangan konsumsi garam dan lemak jenuh, serta meningkatkan konsumsi makanan dengan kadar kalium, kalsium, magnesium, protein, serta serat yang tinggi. Adapun Langkah-langkah yang harus dilakukan untuk melakukan diet DASH yaitu sebagai berikut
                <ol type="a">
                <li>Perbanyak porsi sayur pada menu makan siang, dan juga pada malam di hari berikutnya</li>
                <li>Perbanyak konsumsi buah untuk satu menu atau sebagai makanan ringan</li>
                <li>Perbanyak konsumsi produk susu rendah lemak pada ketiga menu makan</li>
                <li>Batasi konsumsi daging sapi sampai 6 ons/hari atau 3 ons untuk sekali waktu makan</li>
                <li>Kurangi jumlahnya sebanyak sepertitiga atau setengah untuk setiap waktu makan</li>
                <li>Buatlah menu makan vegetarian atau tanpa daging dua kali atau lebih saat makan dalam seminggu</li>
                <li>Perbanyak porsi beras dan sayur</li>
                <li>Gunakan buah dan makanan lain yang rendah lemak jenuh, lemak trans, kolesterol, natrium, gula, yoghurt tanpa lemak, rendah lemak, popcorn tanpa garam atau makanan ringan dan pencuci mulut tanpa tambahan mentega</li>
                <li>Pilih makanan kaleng yang rendah sodium</li>
                </ol>
                Selain diet DASH, klien hipertensi dianjurkan mengonsumsi pangan fungsional. Pangan fungsional mempunyai fungsi dalam peningkatan kesehatan dan pencegahan penyakit. Salah satu jenis pangan fungsional adalah kedelai (glycine max); kedelai mengandung zat-zat gizi seperti isoflavon, saponin, lesitin dan fitosterol yang dapat menurunkan risiko penyakit kardiovaskular. Asupan kedelai yang efektif untuk klien hipertensi sebanyak 25 g/hari dalam bentuk bubuk susu kacang kedelai yang berguna untuk memperbaiki profil lemak tubuh. Selain itu, untuk susu susu kacang kedelai dalam bentuk cair diberikan sebanyak 2x250 cc/hari yaitu diberikan pada saat sarapan pagi dan malam; karena pada pagi dan malam hari merupakan waktu perubahan tekanan darah menurut ritme sirkadian. 
                ',
            ],
            [
                'author_id' => 1,
                'title' => 'I (istirahat yang cukup)',     
                'body' => 'Istirahat yang cukup dapat mengefektifkan bekerjanya hormone-hormon tertentu. Orang dewasa membutuhkan waktu tidur ideal antara 7-8 jam/hari yang bertujuan untuk memberikan waktu bagi otot dan pikiran beristirahat',
            ],
            [
                'author_id' => 1,
                'title' => 'K (Kelola stress)',     
                'body' => 'Salah satu cara untuk mengelola stress yaitu dengan istirahat dan tidur yang cukup.  Selain itu, klien hipertensi dianjurkan untuk relaksasi seperti relaksasi otot, dan aromaterapi.',
            ],
            [
                'author_id' => 1,
                'title' => 'A (alarm minum obat)',     
                'body' => 'Alarm minum obat merupakan kegiatan yang bertujuan untuk memotivasi pasien hipertensi untuk rutin meminum obat antihipertensi. Alarm minum obat pada aplikasi paket cerdika ini memuat tentang nama obat, tipe obat, interval pemberian, jam/waktu pemberian.',
            ],
        ];
        $data = collect($data)->map(function($item){
            $item = collect($item)->merge([
                'slug' => Str::slug($item['title']),
                'status' => 'ACTIVE'
            ]);
            return $item->toArray();
        })->toArray();
        DB::table('pages')->insert($data);
    }
}
