<?php

namespace Database\Seeders;

use App\Models\berita;
use App\Models\galeri;
use App\Models\kontak;
use App\Models\kontakKami;
use App\Models\maps;
use App\Models\tentang;
use App\Models\tentangKami;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'profil' => 'img/rimuwu.jpg',
            'nama' => 'Rimuru',
            'email' => 'slime@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'SuperAdmin',
        ]);

        User::create([
            'profil' => 'img/nastsu.jpg',
            'nama' => 'veldora',
            'email' => 'dragon@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'Admin',
        ]);
        galeri::create([
            'gambar' => 'img/galeri 5.jpg', 
        ]);
        galeri::create([
            'gambar' => 'img/galeri2.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri3.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri4.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri5.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri6.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri 1.jpg', 
        ]);
        galeri::create([
            'gambar' => 'img/galeri 2.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri 3.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri 4.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri 5.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri3.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/img-5.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri 7.jpg'
        ]);
        
        galeri::create([
            'gambar' => 'img/beria4.jpg'
        ]);
        
        galeri::create([
            'gambar' => 'img/berita5.jpg'
        ]);
        
        galeri::create([
            'gambar' => 'img/berita2.jpg'
        ]);
        galeri::create([
            'gambar' => 'img/galeri6.jpg'
        ]);
        
        berita::create([
            'gambar' => 'img/berita1.jpg',
            'judul' => 'lorem',
            'berita' => 'lorem ipsums dahidjaso'
        ]);
        berita::create([
            'gambar' => 'img/berita2.jpg',
            'judul' => 'lorem',
            'berita' => 'lorem ipsums dahidjaso'
        ]);
        berita::create([
            'gambar' => 'img/berita5.jpg',
            'judul' => 'lorem',
            'berita' => 'lorem ipsums dahidjaso'
        ]);
        berita::create([
            'gambar' => 'img/berita3.jpg',
            'judul' => 'lorem',
            'berita' => 'lorem ipsums dahidjaso'
        ]);
        berita::create([
            'gambar' => 'img/beria4.jpg',
            'judul' => 'lorem',
            'berita' => 'lorem ipsums dahidjaso'
        ]);
        berita::create([
            'gambar' => 'img/galeri3.jpg',
            'judul' => 'APA SAJA MAKANAN KHAS NUSANTARA?',
            'berita' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                        commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                        neque, vel lectus ex.'
        ]);
        maps::create([
            'latitude' => '-6.934852289457995',
            'longitude' => '106.92592493778676'
        ]);
        tentangKami::create([
            'tentang' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ferari',
            'visi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'misi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);

        kontakKami::create([
            'gambar' => 'img/email.png',
            'judul' => 'EMAIL',
            'isi' => 'tastyfood.@gmail.com',
        ]);
        kontakKami::create([
            'gambar' => 'img/phone.png',
            'judul' => 'PHONE',
            'isi' => '+62 812 3456 7890',
        ]);
        kontakKami::create([
            'gambar' => 'img/location.png',
            'judul' => 'LOCATION',
            'isi' => 'Kota Bandung, Jawa Barat',
        ]);
    }
}
