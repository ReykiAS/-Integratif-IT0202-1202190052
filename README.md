

   <h1>Progress Tubes 1</h1>
Tutorial Install Laravel 
  - install composer, jika kalian belum punya composer dapat mendownload di : https://getcomposer.org/download/?msclkid=a968a515c6f311ecaae4d31c1da8f0edhttps://getcomposer.org/download/?msclkid=a968a515c6f311ecaae4d31c1da8f0ed
  
  - pada saat menginstall composer, hal yang dibutuhkan ialah php, akan tetapi biasanya sudah tersedia di xampp masing - masing
  
  - setelah menginstall composer kita akan mendownload git, yang dimana dapat didownload di https://git-scm.com/downloads
  
  - setelah mendowload kita akan menginstall git
  
  - setelah menginstall, kita akan membuat folder untuk menampung laravel kita
  
  - setelah membuat folder klik kanan pada folder dan jalankan menggunakan git
  
  - setelah itu kita akan mengetikan composer create-project laravel/laravel nama_projek pada folder yang telah ditentukan
  
  - setelah berhasil terinstall buka folder project laravel dengan mengetikan cd nama_project
  
  - setelah itu ketik composer install
  
  - dan ketikan php artisan key:generate, untuk menggenerate artisan key
  
  - untuk menjalankan laravel kita tinggal mengetikan php artisan serve
  
  - lalu ip yang didapatkan itu yang kita buka di browser 
  
  ---
 <h1>Progress Tubes 2</h1>

di database terdapat 2 tabel, yaitu 
| Tabel|
| ----- | 
| rss |
|news  | 

di dalam tabel rss terdapat terdapat kolom id, nama , url  yang terdiri dari 
| id | nama | url |
| ----- |--- |--- | 
| 1 | tempo | http://rss.tempo.co/nasional |
| 2 | climate | https://news.un.org/feed/subscribe/en/news/topic/climate-change/feed/rss.xml |
| 3 | Health | https://news.un.org/feed/subscribe/en/news/topic/health/feed/rss.xml |

di dalam tabel news terdapat kolom id, Title, img_url, description, source_url,rss_id


   ---

   <h1>Progress Tubes 3</h1>

   <h2>Tampilan yang Terdapat Pada Halaman Website</h2>

| Tampilan|
| ----- | 
| Home  |
| News  | 
| Climate  | 
| Health  | 
---

Pada tampilan awal yaitu menu home terdapat isi berita dari 3 rss yang telah disimpan di database ketiga rss itu ialah rss yang menampilakn berita tempo, rss yang menampilkan berita climate dan rss yang menampilkan berita health tampilan dari website tersebut seperti ini 

![Screenshot (12)](https://user-images.githubusercontent.com/71678175/178018034-e0ddf222-d72e-4cb5-95d9-fe490273723e.png)

untuk tampilan di bawah nya menampilakn isi berita dari climate dan health

![Screenshot (13)](https://user-images.githubusercontent.com/71678175/178018328-444f6f15-507d-4513-ac3b-fe8f7d9facfe.png)

pada tampilan News menampilan seluruh isi berita dari rss tempo yang telah diurutkan sesuai dengan update terbaru yang dapat untuk tampilan dari halaman news seperti ini

![Screenshot (14)](https://user-images.githubusercontent.com/71678175/178018563-2614a2d2-1faf-48fa-af35-8ae150b7e358.png)

Lalu untuk tampilan dari halaman climate dan health sama dengan tampilan dari halaman news bedanya hanya dari konten yang ditampilakn berikut untuk tampilan halaman climate 

![Screenshot (15)](https://user-images.githubusercontent.com/71678175/178018578-d7339420-b4c7-47d8-addc-21d840b4bda8.png)

dan berikut tampilan halaman health 

![Screenshot (16)](https://user-images.githubusercontent.com/71678175/178018583-32b71d9e-81d5-4c08-8230-dd713d710eaf.png)

---
 <h1>How To Create It</h1>
 
 Pada tahapan pembuatan website ini terdiri dari beberapa tahapan, di weebsite ini terdiri dari html, css dan JS.
 untuk pembuatan tamppilan di laravel sangatlah mudah yang pertama 
 
  - pertama kita membuat file yang berada pada resources -> views, lalu membuat nama file dengan bertuliskan nama_file.blade.php 
  ![blade](https://user-images.githubusercontent.com/71678175/178091920-67ebf213-7c9a-4e5b-baf0-9d745f14ef18.png)
  
  - setelah itu jika ingin menampilkan hasil html dan css yang telah kita buat kita tinggal mendaftarkan nama file kita di route -> web.php agar file yang kita buat        dapat terpanggil dengan route yang telah kita buat 
  ![route](https://user-images.githubusercontent.com/71678175/178091926-2bea53df-3807-4641-a5b0-22fd9c967899.png)
  
  - untuk menampilkan isi dari database kita, kita tinggal membuat controller dengan view dari nama file yang ingin dituju, dalam tubes ini saya memanggil file dari       table news dengan kolom yang ingin ditampilkan seperti gambar di bawah ini, dengan kondisi ketika rss_id = 1 maka yang akan muncul hanya berita dengan rss_id 1         dan dengan pengurutan data secara descending 
  ![controller](https://user-images.githubusercontent.com/71678175/178091923-b7fd491d-9d3b-41e4-aeb1-bbc16a4b48a2.png)
  ---
  
> IT Telkom Solution For The Nation
       
 <h2>sekian dan terima kasih</h2>
       

