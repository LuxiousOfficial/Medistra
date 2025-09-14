<?php

namespace Database\Seeders;

use App\Models\article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        article::create([
            'id' => '1',
            'slug' => 'Manfaat Vitamin B untuk Kesehatan Saraf, Otak, dan Tubuh',
            'image' => 'img/articles1.webp',
            'title' => 'Manfaat Vitamin B untuk Kesehatan Saraf, Otak, dan Tubuh',
            'information' => 'Sering merasa cepat lelah, sulit konsentrasi, atau kesemutan di tangan dan kaki? Bisa jadi itu tanda tubuh kekurangan vitamin B. Vitamin ini bukan hanya penting untuk energi, tetapi juga untuk menjaga kesehatan otak dan sistem saraf. Beragam manfaat vitamin B bisa dirasakan dalam jangka panjang untuk kualitas hidup yang lebih baik. Setiap vitamin B memiliki peran khusus, namun secara umum, manfaat vitamin B.'
        ]);

        article::create([
            'id' => '2',
            'slug' => 'Duduk Lama Bikin Nyeri Leher Ketahui Cara Mengatasinya',
            'image' => 'img/articles2.webp',
            'title' => 'Duduk Lama Bikin Nyeri Leher Ketahui Cara Mengatasinya',
            'information' => 'Nyeri leher ada keluhan yang sering terjadi di masyarakat terutama pada pekerja kantoran. Hal ini menyebabkan penurunan produktivitas kerja dan menurunkan fokus saat bekerja karena nyeri berulang. Duduk lama menggunakan komputer dengan posisi yang tidak ergonomis merupakan salah satu faktor yang penting dalam terjadinya nyeri leher. Nyeri leher adalah keluhan kesehatan yang sering terjadi di masyarakat, terutama pada orang-orang yang bekerja dalam posisi duduk dalam waktu lama. Kondisi ini menjadi salah satu penyebab utama morbiditas dan penurunan produktivitas kerja. Dalam beberapa kasus, kondisi ini bisa menjadi tanda kondisi medis yang lebih serius.'
        ]);
        
        article::create([
            'id' => '3',
            'slug' => 'Video-Assisted Thoracoscopic Surgery (VATS), Bedah Minim Invasif untuk Pemulihan yang Cepat',
            'image' => 'img/articles3.webp',
            'title' => 'Video-Assisted Thoracoscopic Surgery (VATS), Bedah Minim Invasif untuk Pemulihan yang Cepat',
            'information' => 'Video-Assisted Thoracoscopic Surgery (VATS) adalah teknik bedah minimal invasif yang semakin banyak digunakan untuk diagnosis dan pengobatan masalah pada area dada, seperti kanker paru, masalah pada esofagus, dan banyak kondisi lainnya. Dibandingkan dengan bedah biasa, tindakan ini menawarkan berbagai keuntungan seperti rasa sakit yang berkurang setelah operasi, masa pemulihan yang lebih cepat, serta komplikasi yang lebih rendah. VATS umumnya ditujukan untuk pasien yang mengalami masalah pada paru-paru atau organ dada lainnya seperti kanker paru stadium awal atau gangguan pada esofagus. Pasien dengan kondisi kesehatan yang baik dan belum menjalani operasi dada sebelumnya cenderung lebih cocok untuk menjalani prosedur ini.'
        ]);
        
        article::create([
            'id' => '4',
            'slug' => 'Pentingnya Nutrisi dan Peran Orang Tua dalam Tumbuh Kembang Anak',
            'image' => 'img/articles4.webp',
            'title' => 'Pentingnya Nutrisi dan Peran Orang Tua dalam Tumbuh Kembang Anak',
            'information' => 'Anak-anak belajar, tumbuh, dan berkembang sesuai dengann potensinya. Proses tumbuh kembang anak tidak hanya soal pertumbuhan fisik, tetapi juga mencakup perkembangan kemampuan berpikir, berbicara, bergerak, dan berinteraksi. Orang tua memiliki peran sangat penting untuk mengamati, mengenali, dan menanggapi setiap perubahan yang terjadi dengan bijak dan penuh perhatian. Pertumbuhan merujuk pada perubahan ukuran fisik seperti tinggi, berat badan, dan lingkar kepala. Sementara itu, perkembangan lebih berkaitan dengan kemampuan anak dalam hal motorik, bicara, emosi, dan sosial. Sebelum memahami lebih jauh tentang gangguan dan faktor yang memengaruhi, berikut adalah tahapan tumbuh kembang anak yang penting untuk diketahui.' 
        ]);
        
        article::create([
            'id' => '5',
            'slug' => 'Kenali Gejala, Faktor, dan Cara Mencegah Infeksi Saluran Kemih',
            'image' => 'img/articles5.webp',
            'title' => 'Kenali Gejala, Faktor, dan Cara Mencegah Infeksi Saluran Kemih',
            'information' => 'Apakah Anda sering mengalami nyeri atau rasa tidak nyaman saat buang air kecil? Keluhan tersebut bisa menjadi tanda dari Infeksi Saluran Kemih (ISK) yaitu infeksi yang terjadi pada salah satu bagian saluran kemih seperti ginjal, ureter, kandung kemih, urethra, atau bahkan prostat pada pria. ISK terjadi ketika bakteri, terutama Escherichia coli (E. coli), masuk ke saluran kemih melalui urethra, lalu berkembang biak di dalam kandung kemih atau organ lainnya. Kondisi ini bisa terjadi terutama saat sistem imun tubuh sedang menurun, dan bahkan bisa tanpa gejala sama sekali, yang sering kali baru terdeteksi saat melakukan medical check-up.'
        ]);
        
        article::create([
            'id' => '6',
            'slug' => 'SiKecil Sulit Fokus Mengenal Lebih Dekat Tanda-Tanda ADHD',
            'image' => 'img/articles6.webp',
            'title' => 'SiKecil Sulit Fokus Mengenal Lebih Dekat Tanda-Tanda ADHD',
            'information' => 'Attention-Deficit/Hyperactivity Disorder (ADHD) adalah gangguan perkembangan neurologis yang umumnya mendapat diagnosis pada masa kanak-kanak dan dapat berlanjut hingga dewasa. Gangguan ini ditandai dengan kombinasi gejala perilaku berupa kesulitan mempertahankan perhatian (inatensi), hiperaktivitas, dan impulsivitas yang menetap dan mempengaruhi fungsi maupun perkembangan anak. Beberapa gejala ADHD dapat muncul sebelum anak menginjak usia 12 tahun dan biasanya terjadi di dua atau lebih situasi, misalnya di sekolah, rumah, atau saat bermain. Gejala-gejala tersebut juga mengganggu fungsi sosial, akademik, dan cara anak bekerja. Penting untuk diketahui bahwa tingkat keparahan gejala ini bisa berbeda pada setiap anak, dan cara anak laki-laki serta perempuan menunjukkannya pun seringkali tidak sama.'
        ]);
    }
}
