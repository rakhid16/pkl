import sqlite3


conn = sqlite3.connect('D:/4.PKL/Data PKL/Repository Github PKL/database_poli_gigi/db_poli_tes.sqlite')
c = conn.cursor()

c.execute("CREATE TABLE IF NOT EXISTS data_baru(tanggal date,id number,nama text,tanggal_lahir,usia number,golongan text,diagnosa text,perawatan text,pengobatan text)")

# c.execute("INSERT INTO data_baru VALUES ('13-13-2019','27081010011','Kachman NM','01-02-1998','22','Mahasiswa','Mengalami gejala kambuh','harus diobati dengan sikat gigi 3x sehari','harus punya obat gigi ...aaaaaaaaaaaaaaaaaaaaaaaaaaa')")
# c.execute("DELETE FROM data_baru WHERE id = 27081010011")    
c.execute("INSERT INTO data_baru VALUES ('','','Radical Rakhamn Wahid','15-14-2998','','Mahasiswa','','','')")

for row in c.execute("SELECT tanggal,id,nama,tanggal_lahir,usia,golongan,diagnosa,perawatan,pengobatan from data_baru"):
    print("id = ", row[0])
    print("nama = ", row[1])
    print("tanggal_lahir = ", row[2])
    print("tanggal_lahir = ", row[3])
    print("tanggal_lahir = ", row[4])
    print("tanggal_lahir = ", row[5])
    print("tanggal_lahir = ", row[6])
    print("tanggal_lahir = ", row[7])
    print("tanggal_lahir = ", row[8])
    
conn.commit()
conn.close()