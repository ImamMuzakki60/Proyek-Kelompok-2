<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('user')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('kata')->insert([
            'kata' => 'menyala abangku',
            'definisi' => 'Bisa diartikan sebagai ungkapan kekaguman atau pujian terhadap seseorang yang dianggap berprestasi, keren, atau menonjol dalam suatu hal. Misalnya saat seseorang menuliskan kalimat atau opini atau melakukan hal yang yang berani dan menohok. Kata "menyala abangku" bisa digunakan sebagai bentuk pujian.',
            'definisi_contoh' => 'orang 1: Bro tadi gw presentasi di kantor, bos langsung kasih pujian di depan semua orang
orang 2: Wuih, menyala abangku!!',
            'kategori' => 'budaya_internet',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'red flag',
            'definisi' => 'Bisa diartikan sebagai "tanda bahaya" atau "peringatan". Ini biasanya digunakan untuk menunjukkan ada sesuatu yang nggak beres atau bisa jadi masalah nantinya.',
            'definisi_contoh' => '',
            'kategori' => 'budaya_internet',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'spill',
            'definisi' => 'Secara harfiah, spill artinya "menumpahkan", namun dalam dunia maya spill berarti menumpahkan berita atau menceritakan sebuah gosip terhangat. Selain itu, spill juga biasanya digunakan untuk bertanya sesuatu.',
            'definisi_contoh' => '"spill ceritanya dong”
“spill sepatunya dong”',
            'kategori' => 'budaya_internet',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'YGY',
            'definisi' => 'YGY adalah singkatan dari "ya guys ya", atau "ya ges ya", "ya gaes ya". Artinya sama, yakni seruan yang ditujukan untuk teman-teman atau banyak orang.
Penggunaan istilah ygy sangat fleksibel, bisa gunakan ketika ingin meyakinkan seseorang, atau untuk kalimat sederhana biasa.',
            'definisi_contoh' => '“Cinta enggak selamanya indah ygy”
"Namanya juga nasib buruk ygy"
"Aku mau makan dulu ygy"',
            'kategori' => 'akronim',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'Turu',
            'definisi' => 'Istilah “turu” dalam bahasa gaul memiliki makna sama dengan “turu” dalam bahasa Jawa. Arti turu adalah tidur.',
            'definisi_contoh' => '',
            'kategori' => 'istilah_regional',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'Ghosting',
            'definisi' => 'Ketika seseorang menghentikan semua komunikasi dengan teman-temannya atau orang yang sedang dikencani, tanpa peringatan atau pemberitahuan sebelumnya. Biasanya, Anda akan melihat mereka menghindari panggilan telepon dari teman, media sosial, dan menghindari pertemuan di tempat umum.',
            'definisi_contoh' => '“Gue belom pernah liat Dilan lagi sejak dua bulan lalu. Kayaknya gue dighosting-in deh”',
            'kategori' => 'budaya_internet',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'IoT',
            'definisi' => 'Istilah IoT yang berarti ‘Internet of Things’ atau Internet untuk Segala, mengacu pada jaringan kolektif perangkat yang terhubung dan teknologi yang memfasilitasi komunikasi antara perangkat dan cloud, serta antarperangkat itu sendiri. Internet untuk Segala (IoT) mengintegrasikan “segala hal” setiap hari dengan internet.',
            'definisi_contoh' => '',
            'kategori' => 'teknologi_gadget',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('kata')->insert([
            'kata' => 'LOL',
            'definisi' => 'Artinya: ketawa ngakak banget. Ini biasanya sih kalau nemu lawakan receh tapi kocak banget. Bisa juga dipake sebagai ketawa yang nyindir kesalahan orang lain. ',
            'definisi_contoh' => '"Udah ada dua hero mage, tapi masih pick hero support. LoL"',
            'kategori' => 'akronim',
            'like' => 0,
            'dislike' => 0,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
