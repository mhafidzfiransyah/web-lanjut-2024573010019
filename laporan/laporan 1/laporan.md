# Laporan Modul 1 : Perkenalan Laravel
**Mata Kuliah :** Workshop Web Lanjut  
**Nama : M.Hafidz Firansyah**  
**NIM : 2024573010019**  
**Kelas : TI.2C**

---

## Abstrak  
Laporan ini membahas pengenalan dasar mengenai framework Laravel, salah satu framework PHP yang saat ini banyak digunakan dalam pengembangan aplikasi web. Pembahasan meliputi penjelasan tentang apa itu Laravel, komponen utamanya, struktur proyek, serta konsep arsitektur MVC yang menjadi dasar kerjanya. Selain itu, laporan ini juga menyinggung kelebihan dan kekurangan Laravel dari sudut pandang pemula. Tujuan dari laporan ini adalah untuk memberikan pemahaman awal bagi mahasiswa dalam mempelajari Laravel.

---

## 1. Pendahuluan
Laravel adalah sebuah kerangka kerja (framework) aplikasi web berbasis bahasa pemrograman PHP yang bersifat sumber terbuka (open-source). Diciptakan oleh Taylor Otwell, Laravel dirancang untuk membuat proses pengembangan aplikasi web menjadi lebih mudah, cepat, dan menyenangkan dengan menyediakan sintaks yang ekspresif dan elegan. Framework ini mengikuti pola arsitektur Model-View-Controller (MVC) yang membantu pengembang memisahkan antara logika aplikasi dan tampilan antarmuka.

**Karakteristik Utama:**
- **Arsitektur MVC (Model-View-Controller):** Laravel secara fundamental dibangun di atas pola MVC. Ini memisahkan data (Model), antarmuka pengguna (View), dan logika kontrol aplikasi (Controller). Pemisahan ini membuat kode lebih terstruktur, mudah dikelola, dan skalabel.
- **Opinionated Framework:** Laravel disebut sebagai opinionated framework, yang berarti ia memiliki "opini" atau cara yang direkomendasikan untuk menyelesaikan suatu tugas. Ia menyediakan konvensi dan struktur bawaan yang kuat, mengarahkan pengembang untuk mengikuti praktik terbaik dalam pengembangan web, yang pada akhirnya mempercepat proses development.
- **Ekosistem yang Luas:** Laravel bukan hanya sekadar framework, tetapi sebuah ekosistem lengkap yang mencakup berbagai alat dan paket resmi seperti Laravel Sail (lingkungan development), Laravel Breeze/Jetstream (autentikasi), Laravel Telescope (debugging), dan banyak lagi.

Laravel cocok digunakan untuk berbagai jenis aplikasi, mulai dari aplikasi sederhana seperti blog atau sistem informasi, hingga aplikasi skala besar seperti e-commerce, sistem perusahaan, dan layanan berbasis API.

---

## 2. Komponen Utama Laravel
- **Blade (Templating):** Sistem templating bawaan Laravel yang memungkinkan kita menyusun tampilan dengan sintaks sederhana, mendukung layout, komponen, dan integrasi data dari controller.  
- **Eloquent (ORM):** Object Relational Mapping bawaan Laravel yang memudahkan interaksi dengan database tanpa perlu menulis query SQL mentah.  
- **Routing:** Sistem yang mengatur arah request dari pengguna menuju controller atau fungsi tertentu. Mendukung middleware, grouping, dan resource route.  
- **Controllers:** Tempat untuk menulis logika aplikasi yang menghubungkan antara model (data) dan view (tampilan).  
- **Migrations & Seeders:** Fitur untuk mengatur dan melacak perubahan struktur database, serta menambahkan data awal atau data uji secara otomatis.  
- **Artisan CLI:** Command-line interface bawaan Laravel untuk mempercepat pembuatan file, menjalankan server, melakukan migrasi, dan banyak lagi.  
- **Testing (PHPUnit):** Mendukung pengujian otomatis dengan PHPUnit agar aplikasi lebih stabil dan bebas bug.  

---

## 3. Struktur Folder Project Laravel
Secara umum, struktur project Laravel terdiri dari beberapa folder dan file utama:  
- **app/** → Berisi logika utama aplikasi, termasuk model, controller, middleware, dan service.  
- **bootstrap/** → File inisialisasi awal Laravel, termasuk autoloading.  
- **config/** → Menyimpan file konfigurasi aplikasi (database, mail, cache, dll.).  
- **database/** → Berisi file migrasi, seeder, dan factory.  
- **public/** → Root folder yang diakses browser. Berisi `index.php`, aset publik (CSS, JS, gambar).  
- **resources/** → Berisi file view (Blade templates), file bahasa (localization), dan resource frontend.  
- **routes/** → Tempat mendefinisikan routing aplikasi (`web.php`, `api.php`, dll.).  
- **storage/** → Menyimpan file sementara, cache, log, dan upload.  
- **tests/** → Berisi file untuk unit testing dan feature testing.  
- **vendor/** → Folder yang dihasilkan Composer, berisi semua dependency Laravel.  
- **.env** → File konfigurasi environment (database, app key, dsb.).  
- **artisan** → File CLI untuk menjalankan perintah Laravel.  

---

## 4. Diagram MVC dan Cara Kerjanya
Arsitektur MVC (Model-View-Controller) membagi aplikasi menjadi tiga bagian:  
- **Model** → Bertugas mengelola data dan logika bisnis.  
- **View** → Bertugas menampilkan data ke pengguna.  
- **Controller** → Penghubung antara Model dan View.  

**Alur kerja sederhananya:**  
1. User mengirim request ke server.  
2. Request diarahkan melalui **Routing** ke **Controller**.  
3. Controller mengambil/mengolah data dari **Model**.  
4. Data tersebut diteruskan ke **View**.  
5. View menampilkan hasil ke pengguna.  

Contoh ilustrasi gambar (letakkan di `laporan1/gambar/mvc.png`):  

![Diagram MVC](laporan1/gambar/mvc.png)

---

## 5. Kelebihan & Kekurangan  

**Kelebihan:**
- Fitur bawaan yang lengkap (templating, ORM, migrasi, autentikasi, dsb.).  
- Komunitas besar dengan dokumentasi yang sangat baik.  
- Arsitektur MVC memudahkan kolaborasi tim dan pemeliharaan kode.  

**Kekurangan / Tantangan bagi Pemula:**
- Relatif berat dibanding framework minimalis.  
- Banyak fitur membuat pemula bisa kebingungan.  
- Butuh pemahaman dasar PHP dan OOP sebelum benar-benar efektif.  

---

## 7. Referensi
- https://www.gramedia.com/literasi/laravel/
- https://www.codepolitan.com/blog/pengertian-laravel-kenapa-framework-ini-jadi-favorit-developer-murazs/
- https://www.gamelab.id/news/2706-12-fitur-laravel-framework-php-untuk-membangun-website
- https://bit.telkomuniversity.ac.id/laravel-definisi-fitur-manfaat-cara-kerja-keunggulan-dan-kekurangan/
- https://abdulrahmann.com/2025/03/06/struktur-folder-laravel-12-panduan-lengkap-4/
- https://www.himsiubsitegal.my.id/artikel/memahami-struktur-dasar-proyek-laravel-penjelasan-setiap-folder-dan-file
- https://course-net.com/blog/mvc-pada-framework-laravel/
- https://medium.com/@yogameleniawan/mengenal-konsep-mvc-di-laravel-panduan-lengkap-untuk-pemula-2bc33ed7b66e
- https://kelas.work/blogs/pelajari-berbagai-kelebihan-dan-kekurangan-framework-laravel
- https://baraka.uma.ac.id/kelebihan-dan-kekurangan-framework-php-laravel/



---