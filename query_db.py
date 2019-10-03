import sqlite3


conn = sqlite3.connect('D:/4.PKL/Data PKL/Repository Github PKL/coba.sqlite')
c = conn.cursor()

# c.execute("CREATE TABLE IF NOT EXISTS data_poli_kosong(tanggal date,id number,nama text,tanggal_lahir,usia number,golongan text,diagnosa text,perawatan text,pengobatan text)")
# c.execute("INSERT INTO data_poli_kosong VALUES ('','17081010068','Radical Rakhman Wahid','16-05-1999','20','Mahasiswa','','','')")
# c.execute("DELETE FROM data_poli_kosong WHERE id='17081010068'")

for row in c.execute("SELECT tanggal,id,nama,tanggal_lahir,usia,golongan,diagnosa,perawatan,pengobatan from data_poli_kosong"):
    print("tanggal = ", row[0])
    print("id = ", row[1])
    print("nama = ", row[2])
    print("tanggal lahir = ", row[3])
    print("usia = ", row[4])
    print("golongan = ", row[5])
    print("diagnosa = ", row[6])
    print("perawatan = ", row[7])
    print("pengobatan = ", row[8])
    print('')
conn.commit()
conn.close()