#Tugas Nomor 1
print("""Halloo..
Selamat datang di Roller Coaster Terpanjang, Terseram, Terekstrem, Terterter dan juga Terberbahaya di Dunia.
Untuk itu. Sebelum memasuki Roller Coaster ini, Anda perlu memenuhi Kriteria, Syarat untuk memainkan Roller Coaster ini

Gratiss Lhoo^-^
""")
#Input
print("Silahkan Masukkan Data Diri Kamu")
namaDepan = (input("Nama Panggilan : "))
print("")
nama = (input("Nama Lengkap : "))
umur = int(input("Umur : "))
tinggiBadan = int(input("Tinggi Badan : "))

#Variabel
a = "(Nama)"
b = "(Umur)"
c = "(Tinggi Badan)"

print("")

#Output Pengandaian
    #If
if tinggiBadan > 90:
    print("SELAMAT!")
    print(namaDepan,".","Kamu memenuhi Kriteria untuk memainkan Roller Coaster Ini")
    print("")
    print("")
    print("Kemudian, silahkan simpan dan berikan bukti terpenuhnya persyaratan kepada Loket yang berada di sekitar Area Roller Coaster untuk mendapatkan Tiket")
    print("")
    print("_____________")
    print("SYARAT TERPENUHI!")
    print("|",a,nama,b,umur,"Tahun",c,tinggiBadan,"cm","|")
    print("_____________________")
    print("")
    print("~~~Terimakasih. Selamat Menikmati Roller Coaster")
    #Elif
elif tinggiBadan < 90:
    print("Sayang Sekali:(")
    print(namaDepan,".","Kamu tidak bisa memainkan Roller Coaster ini, Karena..")
    print(a,nama,b,umur,"Tahun",c,tinggiBadan,"cm")
    print("Tidak memenuhi Kriteria untuk memainkannya")
    print("")
    print("Silahkan tunggu beberapa tahun lagi sampai Tinggi Badanmu memenuhi kriteria.")
    print("")
    print("Terimakasih Banyakk")
else:
    print("Wahhh, Pas sekalii...")
    print("SELAMAT!")
    print(namaDepan,".","Kamu memenuhi Kriteria untuk memainkan Roller Coaster Ini")
    print("")
    print("Kemudian, silahkan simpan dan berikan bukti terpenuhnya persyaratan kepada Loket yang berada di sekitar Area Roller Coaster untuk mendapatkan Tiket")
    print("")
    print("")
    print("SYARAT TERPENUHI!")
    print("|",a,nama,b,umur,"Tahun",c,tinggiBadan,"cm","|")
    print("")
    print("~~~Terimakasih. Selamat Menikmati Roller Coaster")
    
#End
print("")
print("")
print("Admin : Alfian Nur Usyaid | TI07 | 0110222132")