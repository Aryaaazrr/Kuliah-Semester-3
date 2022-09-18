import 'dart:io';

void main() {
  // deklarasi variable
  dynamic nama;
  dynamic peran;
  dynamic pernyataanMasuk;
  var peranPenyihir = 'Penyihir';
  var peranGuard = 'Guard';
  var peranWarewolf = 'Warewolf';
  // check awal [y/T] untuk memasuki game
  stdout.write('Kita akan memasuki dunia game warewolf [y/T] ');
  pernyataanMasuk = stdin.readLineSync();
  if (pernyataanMasuk == 'y' || pernyataanMasuk == 'Y') {
    print('Silahkan isi Nama dan Peran!');
    print('Berikut pilihan peran :');
    print('-  $peranPenyihir');
    print('-  $peranGuard');
    print('-  $peranWarewolf');
    // pengisian nama dan peran dengan I/O
    stdout.write('Nama = ');
    nama = stdin.readLineSync();
    stdout.write('Peran = ');
    peran = stdin.readLineSync();
    // konversi data yang masuk menjadi String
    var cekNama = nama.toString();
    var cekPeran = peran.toString();
    // check nama dan peran mengunakan if-else
    if (cekNama == '' && cekPeran == '') {
      print('Nama dan Peran harus diisi!');
    } else if (cekNama == '' && cekPeran != '') {
      print('Nama harus diisi');
    } else {
      if (peran == peranPenyihir) {
        print('Selamat datang di Dunia Warewolf, $nama');
        print(
            'Halo Penyihir $nama, kamu dapat melihat siapa yang menjadi warewolf');
      } else if (peran == peranGuard) {
        print('Selamat datang di Dunia Warewolf, $nama');
        print(
            'Halo Guard $nama, Kamu akan membantu melindungi temanmu dari serangan warewolf');
      } else if (peran == peranWarewolf) {
        print('Selamat datang di Dunia Warewolf, $nama');
        print('Halo Warewolf $nama, Kamu akan memakan mangsa setiap malam!');
      } else {
        print('Halo $nama, Pilih peranmu untuk memulai game!');
      }
    }
  } else {
    print('Gagal masuk!');
  }
}
