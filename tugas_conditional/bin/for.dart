void main() {
  var outSet = <String>['Santai', 'Berkualitas', 'I Love Coding'];
  for (var i = 1; i <= 20; i++) {
    if (i % 3 == 0 && i % 2 == 1) {
      print('$i - ${outSet[2]}');
    } else if (i % 2 == 1) {
      print('$i - ${outSet[0]}');
    } else {
      print('$i - ${outSet[1]}');
    }
  }
}
