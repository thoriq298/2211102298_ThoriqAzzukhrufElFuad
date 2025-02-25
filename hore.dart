void main() {
  // Inisialisasi array 2D dengan 4 baris
  List<List<int>> array2D = List.generate(4, (i) => []);

  // Mengisi baris 1 dengan 4 bilangan kelipatan 6 berurutan mulai dari 6
  for (int i = 0; i < 4; i++) {
    array2D[0].add(6 * (i + 1));
  }

  // Mengisi baris 2 dengan 5 bilangan ganjil berurutan mulai dari 3
  for (int i = 0; i < 5; i++) {
    array2D[1].add(3 + 2 * i);
  }

  // Mengisi baris 3 dengan 6 bilangan pangkat tiga dari bilangan asli mulai dari 4
  for (int i = 0; i < 6; i++) {
    array2D[2].add((4 + i) * (4 + i) * (4 + i));
  }

  // Mengisi baris 4 dengan 7 bilangan asli berurutan beda 7 mulai dari 3
  for (int i = 0; i < 7; i++) {
    array2D[3].add(3 + 7 * i);
  }

  // Menampilkan isi array 2D
  print("Isi List:");
  for (int i = 0; i < array2D.length; i++) {
    print(array2D[i].join(" "));
  }

  // Contoh penggunaan fungsi FPB
  int bilangan1 = 12;
  int bilangan2 = 8;
  int fpb = hitungFPB(bilangan1, bilangan2);
  print("\nBilangan 1: $bilangan1");
  print("Bilangan 2: $bilangan2");
  print("FPB $bilangan1 dan $bilangan2 = $fpb");
}

// Fungsi untuk menghitung FPB (Faktor Persekutuan terBesar)
int hitungFPB(int a, int b) {
  while (b != 0) {
    int temp = b;
    b = a % b;
    a = temp;
  }
  return a;
}