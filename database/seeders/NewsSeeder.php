<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'id' => '1',
            'slug' => 'Medistra Hospital Bekerjasama dengan FP One Prudential, Edukasi Bahaya Jantung Sejak Usia Muda',
            'image' => 'img/news1.webp',
            'title' => 'Medistra Hospital Bekerjasama dengan FP One Prudential, Edukasi Bahaya Jantung Sejak Usia Muda',
            'information' => 'Pada tanggal 8 Mei 2025, Medistra Hospital bekerja sama dengan FP One Prudential sukses menggelar acara health talk bertema “Kenali Tanda Bahaya Jantung: Tidak Harus Tua untuk Sakit Jantung”. Acara ini dihadiri oleh para agen asuransi dari FP One Prudential dan bertujuan meningkatkan kesadaran akan pentingnya deteksi dini penyakit jantung. Sebagai narasumber utama, dr. Sri Shujuan, Sp.PD, KKV membagikan pengetahuan penting seputar gejala-gejala awal penyakit jantung yang kerap diabaikan oleh masyarakat, terutama pada usia produktif. dr. Sri menekankan bahwa serangan jantung tidak hanya menyerang lansia, tetapi juga dapat terjadi pada usia muda akibat gaya hidup tidak sehat, stres, dan kurangnya aktivitas fisik.Para peserta sangat antusias mengikuti sesi diskusi dan tanya jawab yang interaktif setelah pemaparan materi. Setelah itu, para tamu melanjutkan diskusi ringan dengan sesama peserta dan tenaga medis.'
        ]);

        News::create([
            'id' => '2',
            'slug' => 'Medistra Hospital dan Bayer Indonesia Bahas Gaya Hidup Sehat melalui Health Talk',
            'image' => 'img/news2.webp',
            'title' => 'Medistra Hospital dan Bayer Indonesia Bahas Gaya Hidup Sehat melalui Health Talk',
            'information' => 'Pada Kamis, 15 Mei 2025, Medistra Hospital bekerja sama dengan PT Bayer Indonesia menyelenggarakan health talk yang menghadirkan dr. Amelia Jessica, Sp.GK, AIFO-K, sebagai pembicara utama. Acara ini dirancang untuk memberikan pemahaman praktis tentang bagaimana mengatur gaya hidup agar terlindungi dari risiko penyakit metabolik dan masalah kesehatan lain yang sering muncul akibat pola hidup kurang sehat. Dalam sesi tersebut, dr. Amelia menyoroti pentingnya mencapai dan mempertahankan berat badan ideal. Menurut data penelitiannya, kelebihan berat badan dapat memicu gangguan metabolisme lemak, tekanan darah tinggi, dan berbagai masalah status gizi. Oleh sebab itu, dr. Amelia menekankan bahwa diet gizi seimbang merupakan pondasi utama kesehatan jangka panjang. Selanjutnya, dr. Amelia memaparkan manfaat olahraga rutin, yang juga menjadi tema dalam health talk ini. Ia merekomendasikan kombinasi aktivitas aerobik seperti jalan cepat, bersepeda, atau berenang selama minimal 30 menit setiap hari, serta latihan resistensi dua hingga tiga kali seminggu untuk mempertahankan massa otot dan kepadatan tulang.'
        ]);
        
        News::create([
            'id' => '3',
            'slug' => 'Medistra Hospital Resmikan Layanan Hemodiafiltrasi, Inovasi untuk Pasien Gagal Ginjal Kronik',
            'image' => 'img/news3.webp',
            'title' => 'Medistra Hospital Resmikan Layanan Hemodiafiltrasi, Inovasi untuk Pasien Gagal Ginjal Kronik',
            'information' => 'Dalam upaya terus menerus meningkatkan kualitas layanan kesehatan, Medistra Hospital resmi memperkenalkan layanan Hemodiafiltrasi (HDF), teknologi yang memberikan harapan baru bagi pasien gagal ginjal kronik di Indonesia. Peresmian layanan Hemodiafiltrasi ini diselenggarakan pada Selasa, 20 Mei 2025, di Medistra Hospital, Jakarta. Acara ini dihadiri oleh para pakar nefrologi, dokter spesialis, tenaga medis profesional, perusahaan, asuransi, serta pasien dan keluarga penyintas penyakit ginjal. Langkah ini menandai komitmen Medistra Hospital dalam menghadirkan layanan kesehatan inovatif dan berstandar tinggi. “Dengan kehadiran layanan HDF, kami ingin menghadirkan solusi terapi pengganti ginjal yang lebih menyeluruh, nyaman, dan efektif bagi pasien,” ujar dr. Adhitya Wardhana, MARS, Direktur RS Medistra.'
        ]);
        
        News::create([
            'id' => '4',
            'slug' => 'Meningkatkan Kesehatan dengan “Simple Fat Loss at Work” bersama XLSMART',
            'image' => 'img/news4.webp',
            'title' => 'Meningkatkan Kesehatan dengan “Simple Fat Loss at Work” bersama XLSMART',
            'information' => 'Pada tanggal 5 Juni 2025, Medistra Hospital mengadakan acara Health Talk XLSMART di XLSMART Tower, Jakarta. Acara ini mengangkat tema “Simple Fat Loss at Work” yang dibawakan oleh dr. Cindiawaty Pudjiadi, Sp.GK, MARS, MS, Dokter Spesialis Gizi Klinik dari Medistra Hospital. Acara ini berhasil menarik perhatian banyak peserta yang ingin mengetahui cara menjaga kesehatan tubuh meski dengan rutinitas kerja yang padat. Sebagian besar dari kita menghabiskan waktu seharian di tempat kerja, baik itu di kantor maupun bekerja dari rumah. Namun, sering kali kita merasa sulit untuk menjaga pola makan sehat dan rutin berolahraga di tengah kesibukan tersebut. Dalam Health Talk ini, dr. Cindiawaty memberikan penjelasan tentang pentingnya menjaga keseimbangan antara pekerjaan dan kesehatan tubuh, serta bagaimana cara melakukan fat loss secara sederhana namun efektif saat bekerja.' 
        ]);
        
        News::create([
            'id' => '5',
            'slug' => 'Medistra Hospital Gelar Edukasi Pola Hidup Sehat Bersama KPK',
            'image' => 'img/news5.webp',
            'title' => 'Medistra Hospital Gelar Edukasi Pola Hidup Sehat Bersama KPK',
            'information' => 'Medistra Hospital menggelar acara Health Talk bertema “Serba-Serbi Pola Hidup Sehat untuk Mencegah Sindrom Metabolik pada Pekerja Perkantoran” yang diselenggarakan di Gedung Komisi Pemberantasan Korupsi (KPK) pada hari Rabu, 25 Juni 2025. Acara ini menghadirkan dr. Meisa Putri M., Sp.PD sebagai pembicara utama dan dimoderatori oleh dr. Dinda Puan. Dalam paparannya, dr. Meisa menjelaskan bahwa sindrom metabolik adalah kumpulan faktor risiko yang meningkatkan kemungkinan seseorang mengalami penyakit jantung, diabetes tipe 2, dan stroke. Kondisi ini makin sering ditemukan pada kelompok usia produktif, khususnya pekerja kantoran. Beberapa faktor risiko utama yang disebutkan meliputi obesitas abdominal (perut buncit), resistensi insulin, tekanan darah tinggi (≥130/85 mmHg), dislipidemia (gangguan lemak darah), kadar gula darah puasa tinggi (≥100 mg/dL), pola makan buruk, kurang gerak, serta stres kronis dan kurang tidur.'
        ]);
        
        News::create([
            'id' => '6',
            'slug' => 'Medistra Hospital Meriahkan CFD dengan Senam Zumba dan Layanan Kesehatan',
            'image' => 'img/news6.webp',
            'title' => 'Medistra Hospital Meriahkan CFD dengan Senam Zumba dan Layanan Kesehatan',
            'information' => 'Pada tanggal 6 Juli 2025, Medistra Hospital turut meramaikan Car Free Day (CFD) yang diselenggarakan di Plaza Marein, Sudirman. Acara ini bertujuan untuk mengajak masyarakat menjaga kesehatan sembari menikmati kegiatan yang menyenangkan. Medistra Hospital menyediakan berbagai fasilitas yang dapat dimanfaatkan oleh siapa saja yang ingin lebih peduli terhadap kondisi tubuh mereka. Acara utama yang digelar adalah senam zumba yang diikuti oleh peserta. Senam ini menjadi salah satu pilihan kegiatan yang menarik. Para peserta CFD diajak untuk bergerak bersama, menggerakkan tubuh sambil menikmati irama musik yang enerjik. Namun, kegiatan tidak hanya terbatas pada senam. Medistra Hospital juga menyediakan mini medical check-up gratis bagi siapa saja yang ingin memantau kondisi kesehatan mereka. Sembari melakukan pemeriksaan kesehatan, para peserta mendapatkan informasi kesehatan dari para tenaga medis yang bertugas.'
        ]);
    }
}
