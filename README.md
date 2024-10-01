Tujuan Praktikum:
1. Memahami konsep dasar API dan metode HTTP seperti GET, POST, dan DELETE.
2. Mengonsumsi dan menampilkan data dari API menggunakan PHP.
3. Mengirim dan menerima data dari API menggunakan metode GET, POST, dan DELETE dengan penekanan pada konsumsi API.

<img width="814" alt="image" src="https://github.com/user-attachments/assets/7a5ab494-1c12-42a9-8a69-ae092e65568d">

Kode ini adalah skrip PHP yang mengambil data postingan dari API https://jsonplaceholder.typicode.com/posts menggunakan cURL dan menampilkannya dalam bentuk tabel di halaman web.
Inisialisasi cURL: Mengatur URL dan opsi untuk mendapatkan respons.
Eksekusi: Menjalankan permintaan dan menutup sesi cURL.
Parsing JSON: Mengubah respons JSON menjadi array PHP.
Menampilkan Data: Menggunakan loop foreach untuk menampilkan ID, judul, dan isi setiap postingan dalam tabel HTML.
Hasilnya adalah halaman yang menunjukkan daftar postingan secara dinamis.

<img width="838" alt="image" src="https://github.com/user-attachments/assets/7d807ab3-7f08-4bc1-b06f-d2c3f7cfef72">

Kode ini adalah skrip PHP yang mengambil dan menampilkan lima postingan teratas dari API https://jsonplaceholder.typicode.com/posts di halaman web. Berikut adalah penjelasan singkat:
Mengambil Data: Menggunakan file_get_contents() untuk melakukan GET request ke API dan menyimpan respons dalam variabel $response.
Parsing JSON: Mengonversi data JSON menjadi array PHP dengan json_decode().
Mengambil 5 Postingan Pertama: Menggunakan array_slice() untuk mendapatkan lima postingan pertama dari array.
Struktur HTML: Membangun halaman web dengan elemen HTML untuk menampilkan daftar postingan:
Header dengan judul "Daftar 5 Post Teratas".
Menggunakan loop foreach untuk menampilkan setiap postingan dalam div dengan kelas post, menampilkan judul dan isi postingan.
Styling: Menyertakan CSS sederhana untuk mengatur tampilan halaman, termasuk gaya untuk teks dan latar belakang.
Hasilnya adalah tampilan daftar lima postingan teratas yang rapi di browser.

<img width="781" alt="image" src="https://github.com/user-attachments/assets/49c89678-619b-4ad1-9f37-5557573863ad">

Kode di atas adalah sebuah skrip PHP yang melakukan permintaan HTTP DELETE ke API menggunakan cURL. Berikut adalah penjelasan singkat tentang bagian-bagian dari kode tersebut:
HTML Struktur:
Memuat elemen dasar HTML dengan judul "DELETE Request API".
Menerapkan beberapa gaya CSS untuk mempercantik tampilan halaman.
cURL untuk Permintaan DELETE:
Menggunakan URL API https://jsonplaceholder.typicode.com/posts/1, yang merupakan URL tujuan untuk menghapus data dengan ID 1.
Menginisialisasi cURL dengan curl_init().
Mengatur opsi untuk melakukan permintaan DELETE dengan curl_setopt().
Menonaktifkan verifikasi SSL untuk tujuan pengembangan (tidak disarankan di lingkungan produksi).
Mengatur cURL untuk mengembalikan hasil sebagai string.
Eksekusi dan Penanganan Respon:
Eksekusi permintaan dengan curl_exec(), dan mendapatkan kode HTTP serta pesan kesalahan jika ada.
Menutup sesi cURL dengan curl_close().
Menampilkan hasil respon dalam elemen HTML dengan pesan sukses jika permintaan berhasil (kode 200), atau pesan kesalahan jika terjadi masalah.
Pesan Respon:
Menggunakan kelas CSS untuk membedakan pesan sukses (hijau) dan pesan kesalahan (merah) yang ditampilkan kepada pengguna.

6. Tugas Praktikum:
1. Konsumsi Data dengan GET Request
- Gunakan kode di atas untuk mengambil daftar post dari https://jsonplaceholder.typicode.com/posts.
- Tampilkan 5 data pertama dalam bentuk array PHP.

2. Mengirim Data dengan POST Request
- Gunakan kode POST di atas untuk mengirim data baru ke API yang sama.
- Ganti isi body dengan data lain yang relevan (misalnya judul dan konten berbeda).

3. Menghapus Data dengan DELETE Request
- Gunakan kode DELETE untuk menghapus salah satu post dari API.
- Tampilkan respon yang dikembalikan dari API setelah permintaan DELETE berhasil.

4. Analisis Metode HTTP
- Jelaskan perbedaan antara metode GET, POST, dan DELETE.
- Diskusikan skenario kapan harus menggunakan masing-masing metode dalam aplikasi nyata.

hasilnya :
<img width="505" alt="image" src="https://github.com/user-attachments/assets/33d76712-bf9b-47ea-9ad0-a119abba6d91">

gambar diatas menampilkan index.html yang mana isinya file gabungan dari POST,GET dan DELETE

<img width="960" alt="image" src="https://github.com/user-attachments/assets/4a7dc788-956a-4f7f-a0ae-f0852314a7a8">

gambar diatas menampilkan hasil dari GET

<img width="533" alt="image" src="https://github.com/user-attachments/assets/748ab9bd-91d6-4d16-bc71-bf7a41d48394">

gambar diatas ini hasil dari POST

![Screenshot 2024-10-01 232100](https://github.com/user-attachments/assets/c28d2680-91e3-4eaa-a30e-79b24665262d)

gambar ini menghasilkan hasik dari POST namun dengan data yg berbeda

<img width="388" alt="image" src="https://github.com/user-attachments/assets/6f620f6d-9a94-410e-8799-ce2ec88ee759">

gambar diatas menampilkan hasil dari DELETE

PERBEDAAN DARI POST GET DAN DELETE?
1. GET
Deskripsi: Meminta data dari server tanpa mengubahnya.
Contoh Penggunaan: Mengambil daftar produk dari API.
Skenario: Menampilkan artikel, hasil pencarian.
2. POST
Deskripsi: Mengirimkan data ke server untuk membuat atau memperbarui sumber daya.
Contoh Penggunaan: Mengirim data formulir pendaftaran pengguna.
Skenario: Menambahkan produk baru, mengupload gambar.
3. DELETE
Deskripsi: Menghapus sumber daya dari server.
Contoh Penggunaan: Menghapus produk dari database.
Skenario: Menghapus postingan di media sosial, menghapus item dari keranjang.

Contoh Aplikasi
E-commerce:
GET: Daftar produk.
POST: Tambah produk baru.
DELETE: Hapus produk.

Media Sosial:
GET: Daftar postingan.
POST: Buat postingan baru.
DELETE: Hapus komentar.

Manajemen Proyek:
GET: Daftar tugas.
POST: Tambah tugas baru.
DELETE: Hapus tugas yang selesai.
Ini memberikan gambaran singkat mengenai perbedaan dan penggunaan masing-masing metode dalam aplikasi nyata.
