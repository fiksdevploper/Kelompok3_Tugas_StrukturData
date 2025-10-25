def nilai_mahasiswa(nilai1, nilai2, nilai3, nilai4, nilai5, nilai6, nilai7):
    return (nilai1 + nilai2 + nilai3 + nilai4 + nilai5 + nilai6 + nilai7) / 7

def huruf_mutu(nilai_akhir):
    if nilai_akhir >= 85:
        return "A"
    elif nilai_akhir >= 70:
        return "B"
    elif nilai_akhir >= 55:
        return "C"
    elif nilai_akhir >= 40:
        return "D"
    else:
        return "E"

def hitung_dan_cetak():
    print("=" * 20)
    print("MENGHITUNG NILAI AKHIR")
    print("=" * 20)
    
    nim_mahasiswa = input("NIM: ")
    nama_mahasiswa = input("NAMA: ")
    
    print("\nNILAI KEHADIRAN     : ", end="")
    n1 = int(input())
    print("NILAI FORUM         : ", end="")
    n2 = int(input())
    print("NILAI TUGAS INDIVIDU: ", end="")
    n3 = int(input())
    print("NILAI TUGAS KELOMPOK: ", end="")
    n4 = int(input())
    print("NILAI UTS           : ", end="")
    n5 = int(input())
    print("NILAI UAS           : ", end="")
    n6 = int(input())
    print("NILAI PROJECT       : ", end="")
    n7 = int(input())
    
    nilai_akhir = nilai_mahasiswa(n1, n2, n3, n4, n5, n6, n7)
    huruf = huruf_mutu(nilai_akhir)

    print("\n[", nim_mahasiswa, nama_mahasiswa, "]")
    print(f"NILAI AKHIR : {nilai_akhir:.0f}")
    print("HURUF MUTU  :", huruf)
    print("=" * 35)
hitung_dan_cetak()