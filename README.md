

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

pada tampilan News menampilan seluruh isi berita dari rss tempo yang telah diurutkan sesaui dengan update terbaru yang dapat untuk tampilan dari halam news seperti ini
![Screenshot (14)](https://user-images.githubusercontent.com/71678175/178018563-2614a2d2-1faf-48fa-af35-8ae150b7e358.png)
Lalu untuk tampilan dari halaman climate dan health sama dengan tampilan dari halaman news bedanya hanya dari konten yang ditampilakn berikut untuk tampilan halaman climate 
![Screenshot (15)](https://user-images.githubusercontent.com/71678175/178018578-d7339420-b4c7-47d8-addc-21d840b4bda8.png)
dan berikut tampilan halaman health 
![Screenshot (16)](https://user-images.githubusercontent.com/71678175/178018583-32b71d9e-81d5-4c08-8230-dd713d710eaf.png)
---
> IT Telkom Solution For The Nation
       
 sekian dan terima kasih
       

