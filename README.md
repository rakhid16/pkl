# Menampilkan Mahasiswa
select * from data_karyawan_mhs WHERE Golongan="Mahasiswa"

# Menampilkan Karyawan & Dosen
select * from data_karyawan_mhs WHERE Golongan="Dosen" OR Golongan="Admin" OR Golongan="Laboran"

# Menampilkan Kebersian
select * from data_karyawan_mhs WHERE Golongan="Kebersihan"

# Menampilkan Keamanan
select * from data_karyawan_mhs WHERE Golongan="PAM"
