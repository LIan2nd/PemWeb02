#Tugas Nomor 2
print("""Hiiii...
Bagaimana nih ujiannya?
Pasti udah ga sabar ngeliat seberapa keren dan seburuk apa nilai Kamuu? Okelahh marii Kita lihat

Semoga beruntung^-^""")

print("____________________")
print("")
print("")

#Input
print("Silahkan Masukkan Data Diri Kamu")
namaDepan = (input("Nama Panggilan : "))
print("")
nama = (input("Nama Lengkap : "))
nim = (input("NIM : "))
kelas = (input("Kelas : "))
print("")
nilai = int(input("Mari masukkan Nilaimuu : "))
print("")

#Pengandaian If
if nilai < 60:
    print("Wahhhh")
elif nilai < 70:
    print("Nilaimu",nilai,"Itu sudah cukup ko untuk lulus pada ujian kali ini,",namaDepan)
    print("Tingkatkan lebih jauh lagii")
elif nilai < 90:
    print("Wowww")
    print(nilai,".","Nilaimu sangatt baguss",namaDepan)
    print("Tingkatkann!!")
    print(nama,"|",nim,"|",kelas)
elif nilai < 101:
    print("Wahhhh",namaDepan,"nilaimu",nilai,".","Kamu Sangatt Istimewa bagi Sayaa>\\<")
    print("Selamat atas pencapaianmuu!")
    print("")
    print(nama,"|",nim,"|",kelas)
#EasterEgg:V
else:
    print("Gilaaa!! Nilaimuu OverPower")
    print("Coolllll")
    print("----------")
    print(nama,"|",kelas)
    print("----------------")

print("")
print("")
print("____________________")
print("")
print("(KW)","Dosen(hhe): ")
print("ALFIAN NUR USYAID | 0110222132 | TI07")