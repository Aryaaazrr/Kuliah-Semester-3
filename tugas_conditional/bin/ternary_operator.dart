import 'dart:io';

void main() {
  stdout.write('Apakah anda ingin menginstall aplikasi? [y/T] ');
  var jawab = stdin.readLineSync();
  // ternary operator
  jawab == 'y' || jawab == 'Y'
      ? print('Anda akan mengistall aplikasi dart')
      : print('Aborted');
}
