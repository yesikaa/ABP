import 'package:flutter_test/flutter_test.dart';
import 'package:modul7_flutter_yesika/main.dart';

void main() {
  testWidgets('Aplikasi berhasil dirender', (WidgetTester tester) async {
    await tester.pumpWidget(const MyApp());
    expect(find.text('Gabungan Menu & Tombol'), findsOneWidget);
    expect(find.text('Yesika Widiyani'), findsOneWidget);
  });
}
