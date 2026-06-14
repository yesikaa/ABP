import 'package:flutter_test/flutter_test.dart';
import 'package:modul_4dan5_yesika/main.dart';

void main() {
  testWidgets('Menampilkan judul praktikum modul 4-5', (WidgetTester tester) async {
    await tester.pumpWidget(const PraktikumModulApp());

    expect(find.text('Modul 4-5: Implementasi Widget UI'), findsOneWidget);
    expect(find.text('1. Container (Kotak Berwarna)'), findsOneWidget);
  });
}
