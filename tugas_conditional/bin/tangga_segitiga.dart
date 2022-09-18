import 'dart:io';

void main() {
  for (var i = 0; i <= 7; i++) {
    for (var j = 0; j < i; j++) {
      stdout.write(' #');
    }
    print('');
  }
}
