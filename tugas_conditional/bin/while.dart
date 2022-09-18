void main() {
  print('LOOPING PERTAMA');
  var tambah = 2;
  while (tambah <= 20) {
    // looping akan berjalan sampai nilai tambah lebih kecil sama dengan dari 20
    if (tambah % 2 == 0) {
      // jika tambah sisa bagi 2 sama dengan dari nol
      print('$tambah - I Love Coding'); // print i love coding
    }
    tambah++; // tambah value dari variable tambah
  }
  tambah--;
  print('LOOPING KEDUA');
  while (tambah >= 2) {
    // looping akan berjalan sampai nilai kurang lebih besar sama dengan dari 2
    if (tambah % 2 == 0) {
      print('$tambah - I Will become a mobile developer');
    }
    tambah--; // value tambah dikurangi 1
  }
}
