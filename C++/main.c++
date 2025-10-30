#include <iostream>
#include <iomanip>
#include <string>
#include <conio.h>
using namespace std;

float hitungNilaiAkhir(float kehadiran, float forum, float tugasIndividu,
                       float tugasKelompok, float uts, float uas, float project) {
    float nilaiAkhir = (kehadiran + forum + tugasIndividu + tugasKelompok + uts + uas + project) / 7;
    return nilaiAkhir;
}

char tentukanHurufMutu(float nilai) {
    if (nilai >= 85)
        return 'A';
    else if (nilai >= 75)
        return 'B';
    else if (nilai >= 65)
        return 'C';
    else if (nilai >= 55)
        return 'D';
    else
        return 'E';
}

int main() {
        system("color 1f");

    string nim, nama;
    float kehadiran, forum, tugasIndividu, tugasKelompok, uts, uas, project;

    cout << "===============================" << endl;
    cout << "     MENGHITUNG NILAI AKHIR" << endl;
    cout << "===============================" << endl;

    cout << "NIM   : ";
    cin >> nim;
    cin.ignore();
    cout << "NAMA  : ";
    getline(cin, nama);

    cout << "\nNILAI KEHADIRAN     : ";
    cin >> kehadiran;
    cout << "NILAI FORUM         : ";
    cin >> forum;
    cout << "NILAI TUGAS INDIVIDU: ";
    cin >> tugasIndividu;
    cout << "NILAI TUGAS KELOMPOK: ";
    cin >> tugasKelompok;
    cout << "NILAI UTS           : ";
    cin >> uts;
    cout << "NILAI UAS           : ";
    cin >> uas;
    cout << "NILAI PROJECT       : ";
    cin >> project;

    float nilaiAkhir = hitungNilaiAkhir(kehadiran, forum, tugasIndividu, tugasKelompok, uts, uas, project);
    char hurufMutu = tentukanHurufMutu(nilaiAkhir);

    cout << "\n[ " << nim << " " << nama << " ]" << endl;
    cout << fixed << setprecision(0);
    cout << "NILAI AKHIR : " << nilaiAkhir << endl;
    cout << "HURUF MUTU  : " << hurufMutu << endl;
    cout << "===============================" << endl;

    return 0;
}
