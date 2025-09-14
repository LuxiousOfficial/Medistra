<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'id' => '1',
            'image' => 'img/dr_agustian Sp.B.webp',
            'nama' => 'dr agustian Sp B',
            'keahlian' => 'Cardio Thoracic',
            'slug' => 'dr agustian Sp B',
            'poli' => 'Poli Klinik Spesialis Bedah',
            'lulusansatu' => 'Cardiothoracic and Vascular Surgeon University of Indonesia, 2008',
            'lulusankedua' => 'Mitral Valve Repair, Bangkok (2011)',
            'lulusanketiga' => 'Endovascular Aortic Repair, Thailand (2011)',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Saturday',
            'link' => 'dr_agustian/create'
        ]);

        Doctor::create([
            'id' => '2',
            'image' => 'img/dr_dermawan Sp.B.webp',
            'nama' => 'dr dermawan Sp B',
            'keahlian' => 'Digestive Surgery',
            'slug' => 'dr dermawan Sp B',
            'poli' => 'Poli Klinik Spesialis Bedah',
            'lulusansatu' => 'General Surgeon University of Indonesia, 2009',
            'lulusankedua' => 'Digestive Surgeon University of Indonesia, 2013',
            'lulusanketiga' => 'Digestive Surgeon University of Indonesia, 2013',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_dermawan/create'
        ]);
        
        Doctor::create([
            'id' => '3',
            'image' => 'img/dr_emerson Sp.B.webp',
            'nama' => 'dr emerson Sp B',
            'keahlian' => 'Digestive Surgery',
            'slug' => 'dr emerson Sp B',
            'poli' => 'Poli Klinik Spesialis Bedah',
            'lulusansatu' => 'General Surgeon Diponegoro University',
            'lulusankedua' => 'Digestive Surgeon Diponegoro University',
            'lulusanketiga' => 'Digestive Surgeon Diponegoro University',
            'jadwalsatu' => 'Tuesday',
            'jadwalkedua' => 'Thursday',
            'jadwalketiga' => 'Saturday',
            'link' => 'dr_emerson/create'
        ]);

        Doctor::create([
            'id' => '4',
            'image' => 'img/dr_Ihza Sp.B.webp',
            'nama' => 'dr Ihza Sp B',
            'keahlian' => 'Endovasular Surgery',
            'slug' => 'dr Ihza Sp B',
            'poli' => 'Poli Klinik Spesialis Bedah',
            'lulusansatu' => 'General Surgeon Diponegoro University',
            'lulusankedua' => 'Digestive Surgeon Diponegoro University',
            'lulusanketiga' => 'Digestive Surgeon Diponegoro University',
            'jadwalsatu' => 'Tuesday',
            'jadwalkedua' => 'Thursday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_ihza/create'
        ]);

        Doctor::create([
            'id' => '5',
            'image' => 'img/dr_denisa Sp.M.webp',
            'nama' => 'dr denisa Sp M',
            'keahlian' => 'Opthalmology',
            'slug' => 'dr denisa Sp M',
            'poli' => 'Poli Klinik Spesialis Mata',
            'lulusansatu' => 'Opthalmologist University of Indonesia, 2021',
            'lulusankedua' => 'Dry Eye Education Program',
            'lulusanketiga' => 'Secondary Intraocular Lens Implantation Workshop',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_denisa/create'
        ]);

        Doctor::create([
            'id' => '6',
            'image' => 'img/dr_marsha Sp.M.webp',
            'nama' => 'dr marsha Sp M',
            'keahlian' => 'Opthalmology',
            'slug' => 'dr marsha Sp M',
            'poli' => 'Poli Klinik Spesialis Mata',
            'lulusansatu' => 'Opthalmologist University of Indonesia, 2021',
            'lulusankedua' => 'Workshop Continuing Medical Education',
            'lulusanketiga' => 'Workshop Phacoemulsification Basic Training Program',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Thursday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_marsha/create'
        ]);

        Doctor::create([
            'id' => '7',
            'image' => 'img/dr_andreas Sp.M.webp',
            'nama' => 'dr andreas Sp M',
            'keahlian' => 'Opthalmology',
            'slug' => 'dr andreas Sp M',
            'poli' => 'Poli Klinik Spesialis Mata',
            'lulusansatu' => 'Opthalmologist University of Indonesia, 2021',
            'lulusankedua' => 'Workshop Continuing Medical Education',
            'lulusanketiga' => 'Workshop Phacoemulsification Basic Training Program',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Thursday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_andreas/create'
        ]);

        Doctor::create([
            'id' => '8',
            'image' => 'img/dr_gartati Sp.M.webp',
            'nama' => 'dr gartati Sp M',
            'keahlian' => 'Opthalmology',
            'slug' => 'dr gartati Sp M',
            'poli' => 'Poli Klinik Spesialis Mata',
            'lulusansatu' => 'Opthalmologist University of Indonesia, 2021',
            'lulusankedua' => 'Workshop Continuing Medical Education',
            'lulusanketiga' => 'Workshop Phacoemulsification Basic Training Program',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_gartati/create'
        ]);

        Doctor::create([
            'id' => '9',
            'image' => 'img/dr_adrianus drg.webp',
            'nama' => 'dr adrianus drg',
            'keahlian' => 'Maxilofacial Suergery',
            'slug' => 'dr adrianus drg',
            'poli' => 'Poli Klinik Spesialis Gigi',
            'lulusansatu' => 'Dentist Airlangga University, 2005',
            'lulusankedua' => 'Oral and Maxillofacial Surgeon Padjajaran University, 2012',
            'lulusanketiga' => 'Master of Health Science Padjajaran University, 2012',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_adrianus/create'
        ]);

        Doctor::create([
            'id' => '10',
            'image' => 'img/dr_ahmed drg.webp',
            'nama' => 'dr ahmed drg',
            'keahlian' => 'Maxilofacial Suergery',
            'slug' => 'dr ahmed drg',
            'poli' => 'Poli Klinik Spesialis Gigi',
            'lulusansatu' => 'Dentist University of Indonesia, 2007',
            'lulusankedua' => 'Oral and Maxillofacial Surgeon Padjajaran University, 2016',
            'lulusanketiga' => 'Fellowship Orthognatic Surgery Universitair Medisch Centrum, 2017',
            'jadwalsatu' => 'Thursday',
            'jadwalkedua' => 'Friday',
            'jadwalketiga' => 'Saturday', 
            'link' => 'dr_ahmed/create'
        ]);

        Doctor::create([
            'id' => '11',
            'image' => 'img/dr_maria drg.webp',
            'nama' => 'dr maria drg',
            'keahlian' => 'Dentistry',
            'slug' => 'dr maria drg',
            'poli' => 'Poli Klinik Spesialis Gigi',
            'lulusansatu' => 'Dentist University of Indonesia, 2007',
            'lulusankedua' => 'Oral and Maxillofacial Surgeon Padjajaran University, 2016',
            'lulusanketiga' => 'Fellowship Orthognatic Surgery Universitair Medisch Centrum, 2017',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_maria/create'
        ]);

        Doctor::create([
            'id' => '12',
            'image' => 'img/dr_aliyah drg.webp',
            'nama' => 'dr aliyah drg',
            'keahlian' => 'Dentistry',
            'slug' => 'dr aliyah drg',
            'poli' => 'Poli Klinik Spesialis Gigi',
            'lulusansatu' => 'Dentist University of Indonesia, 2011',
            'lulusankedua' => 'Pediatric Dentist (Pedodontist) University of Indonesia, 2017',
            'lulusanketiga' => 'Pediatric Dentist (Pedodontist) University of Indonesia, 2017',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_aliyah/create'
        ]);

        Doctor::create([
            'id' => '13',
            'image' => 'img/dr_hendy Sp.OT.webp',
            'nama' => 'dr hendy Sp OT',
            'keahlian' => 'Orthopedic',
            'slug' => 'dr hendy Sp OT',
            'poli' => 'Poli Klinik Spesialis Orthopedic',
            'lulusansatu' => 'Orthopedic Surgeon University of Indonesia, 2016',
            'lulusankedua' => 'AO Trauma Course Basic Principles of Fracture',
            'lulusanketiga' => 'AO Recon Course Principles of Total Hip',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Wednesday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_hendy/create'
        ]);

        Doctor::create([
            'id' => '14',
            'image' => 'img/dr_irfan Sp.OT.webp',
            'nama' => 'dr irfan Sp OT',
            'keahlian' => 'Orthopedic',
            'slug' => 'dr irfan Sp OT',
            'poli' => 'Poli Klinik Spesialis Orthopedic',
            'lulusansatu' => 'Orthopedic Surgeon University of Indonesia, 1991',
            'lulusankedua' => 'Fellowship Orthopedic Surgery, Singapore, 1990',
            'lulusanketiga' => 'Fellowship Spine University of Indonesia, 1999',
            'jadwalsatu' => 'Tuesday',
            'jadwalkedua' => 'Thursday',
            'jadwalketiga' => 'Saturday',
            'link' => 'dr_irfan/create'
        ]);

        Doctor::create([
            'id' => '15',
            'image' => 'img/dr_kiki Sp.OT.webp',
            'nama' => 'dr kiki Sp OT',
            'keahlian' => 'Orthopedic',
            'slug' => 'dr kiki Sp OT',
            'poli' => 'Poli Klinik Spesialis Orthopedic',
            'lulusansatu' => 'Orthopedic Surgeon Padjadjaran University Bandung Indonesia 2005',
            'lulusankedua' => 'Consultant Hip & Knee Kolegium Orthopedi Indonesia',
            'lulusanketiga' => 'Fellow of Knee Sport Surgery Madrid Spain 2004',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Tuesday',
            'jadwalketiga' => 'Saturday',
            'link' => 'dr_kiki/create'
        ]);

        Doctor::create([
            'id' => '16',
            'image' => 'img/dr_nadia Sp.OT.webp',
            'nama' => 'dr nadia Sp OT',
            'keahlian' => 'Orthopedic',
            'slug' => 'dr nadia Sp OT',
            'poli' => 'Poli Klinik Spesialis Orthopedic',
            'lulusansatu' => 'Orthopedic Surgeon University of Indonesia, 2013',
            'lulusankedua' => 'Shoulder Surgery and Section of Arthroscopy',
            'lulusanketiga' => 'Fellowship Sports and Hip and Knee Singapore, 2018',
            'jadwalsatu' => 'Monday',
            'jadwalkedua' => 'Thursday',
            'jadwalketiga' => 'Friday',
            'link' => 'dr_nadia/create'
        ]);
    }
}
