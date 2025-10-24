# 📦 Tutorial Clone Repository GitHub

Panduan singkat untuk meng-clone repository GitHub ke komputer lokal menggunakan Git dan mengelola branch di Visual Studio Code.

## 🛠️ Prasyarat

Sebelum memulai, pastikan kamu sudah menginstal:

- [Git](https://git-scm.com/downloads)
- [Visual Studio Code](https://code.visualstudio.com/)
- Akun GitHub (opsional, jika ingin mengakses repo privat)

---

## 📥 Langkah-langkah Clone Repo

1. **Buka halaman repository GitHub**
   - [Kelompok3_Tugas_StrukturData](https://github.com/fiksdevploper/Kelompok3_Tugas_StrukturData)

2. **Klik tombol `Code`**
   - Pilih opsi `HTTPS`
   - Pilih Opsi HTTPS lalu salin url ini:
     ```
     https://github.com/fiksdevploper/Kelompok3_Tugas_StrukturData.git
     ```
   - Buka terminal dengan tekan tombol windows + r lalu ketik cmd dan jalankan perintah berikut:
     ```
     git clone https://github.com/fiksdevploper/Kelompok3_Tugas_StrukturData.git
     ```
## ⚠️ Jika ingin cepat bisa langsung salin url ini di terminal kalian:
       ```
        git clone https://github.com/fiksdevploper/Kelompok3_Tugas_StrukturData.git
        ```
# 🌿 Cara Menggunakan Branch GitHub di VS Code

Panduan ini menjelaskan langkah-langkah menggunakan dan berpindah antar branch di GitHub langsung dari Visual Studio Code.

## 📌 Apa Itu Branch?

Branch adalah cabang dari project utama yang bisa digunakan untuk mengembangkan fitur baru, melakukan eksperimen, atau revisi kode. Dengan branch, kamu bisa bekerja tanpa mengganggu kode utama di branch `main`.

---

## 📂 Branch yang Tersedia di Proyek Ini

Berikut beberapa branch yang sudah dibuat:

- `Main` → *Branch Finall*
- `Branch-PHP` → *Digunakan khusus untuk coding dengan bahasa PHP*
- `Branch-C++` → *Digunakan khusus untuk coding dengan bahasa C++*
- `Branch-Python` → *Digunakan khusus untuk coding dengan bahasa Python*

---

## 🧭 Langkah Menggunakan Branch di VS Code

### 1. Melihat dan Memilih Branch

- Buka VS Code dan buka folder project.
- Lihat pojok kiri bawah, klik nama branch yang sedang aktif (misalnya `main`).
- Akan muncul daftar branch. Pilih branch yang sesuai dengan bahasa pemrograman yang kamu pakai.
  - Contoh: Jika kamu coding dengan Python, pilih `Branch-Python`.

> ⚠️ Setiap anggota wajib menggunakan branch sesuai bahasa yang digunakan agar tidak terjadi konflik atau bentrok kode.

### 2. Push Branch ke GitHub
   ```bash
   git add .
   git commit -m "tulis pesan apa aja yang udah kamu kerjain di sini ya"
   git push origin fitur-validasi
