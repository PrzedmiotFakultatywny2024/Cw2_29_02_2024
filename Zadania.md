### Zadanie 1: Lista zakupów z formularzem

**Cel:** Stworzenie strony internetowej z formularzem, w którym użytkownik może wpisać nazwę produktu do kupienia. Po wysłaniu formularza, strona powinna wyświetlić aktualną listę zakupów z dodanym nowym produktem.

**Wymagania:**
1. Użyj HTML do stworzenia prostego formularza z jednym polem tekstowym (dla nazwy produktu) i przyciskiem do wysyłania formularza.
2. Metoda przesyłania danych formularza powinna być ustawiona na `GET`.
3. W pliku PHP, odbierz dane z formularza i użyj ich do dodania produktu do listy zakupów przechowywanej lub tablicy.
~~ 4. Wyświetl aktualną listę zakupów jako listę punktowaną (lub numerowaną, jeśli preferujesz) pod formularzem.~~ 
~~ 5. Każde nowe wysłanie formularza powinno aktualizować listę zakupów o nowy produkt.~~ 

**Kroki:**
- Stwórz formularz HTML, który przekierowuje do tego samego skryptu PHP.
~~ - W skrypcie PHP, sprawdź, czy formularz został wysłany, a następnie odbierz i przetwarzaj dane.~~ 
~~ - Użyj sesji PHP lub innej metody, aby przechowywać listę produktów między żądaniami.~~ 
- Wygeneruj listę produktów jako HTML.

### Zadanie 2: Personalizowana lista zadań do wykonania

**Cel:** Umożliwienie użytkownikowi tworzenia własnej listy zadań do wykonania, z możliwością dodawania i wyświetlania zadań na stronie.

**Wymagania:**
1. Strona powinna zawierać formularz z polem tekstowym do wpisywania nazwy zadania i przyciskiem do dodawania zadania do listy.
2. Metoda przesyłania formularza powinna być `POST`, aby zapewnić bezpieczeństwo danych użytkownika.
3. W pliku PHP, odbierz dane z formularza i użyj ich do dodania nowego zadania do listy zadań przechowywanej w sesji lub tablicy.
4. Pod formularzem wyświetl listę zadań do wykonania jako listę numerowaną, pokazując kolejność dodawania zadań.
5. Opcjonalnie, dodaj możliwość usuwania zadań z listy.

**Kroki:**
- Utwórz formularz HTML, który przesyła dane do tego samego skryptu PHP za pomocą metody `POST`.
- W PHP, sprawdź czy formularz został przesłany, a następnie odbierz i przetwarzaj dane z formularza.
- Zaimplementuj logikę przechowywania listy zadań w sesji lub innej strukturze danych, aby utrzymać ją między żądaniami.
- Wygeneruj listę zadań jako HTML, dodając każde nowe zadanie do listy.

### Zadanie 3: Wyświetlanie tabeli produktów

**Cel:** Stworzenie strony internetowej, która wykorzystuje PHP do wygenerowania tabeli wyświetlającej listę produktów. Każdy produkt powinien mieć przypisane ID, nazwę i cenę.

**Wymagania:**
1. Utwórz tablicę w PHP zawierającą co najmniej 5 różnych produktów, gdzie każdy produkt jest reprezentowany przez asocjacyjną tablicę z kluczami `id`, `nazwa`, i `cena`.
2. Wykorzystaj PHP do dynamicznego generowania tabeli HTML, która wyświetli informacje o każdym produkcie z tablicy.
3. Tabela powinna zawierać nagłówki kolumn dla ID, nazwy i ceny.
4. Upewnij się, że tabela jest poprawnie sformatowana za pomocą HTML i CSS, aby była czytelna dla użytkownika.

**Kroki:**
- Zdefiniuj tablicę produktów w PHP.
- Iteruj przez tablicę produktów, generując dla każdego produktu wiersz w tabeli.
- Użyj HTML do stworzenia struktury tabeli oraz CSS do jej stylizacji, aby wynik był estetycznie prezentowany.

### Zadanie 4: Tabela z wynikami gry

**Cel:** Stworzenie strony internetowej, która prezentuje tabelę z wynikami gry, zawierającą imię gracza i osiągnięty wynik.

**Wymagania:**
1. Przygotuj tablicę w PHP składającą się z wyników gry, gdzie każdy wynik jest reprezentowany przez asocjacyjną tablicę zawierającą `imieGracza` i `wynik`.
2. Użyj PHP do wygenerowania tabeli HTML, w której każdy wiersz przedstawia imię gracza i jego wynik.
3. Tabela powinna zawierać nagłówki dla kolumn: "Imię Gracza" i "Wynik".
4. Zapewnij, aby tabela była estetycznie zaprezentowana, stosując odpowiednie formatowanie i style CSS.

**Kroki:**
- Zdefiniuj tablicę wyników gry w PHP zawierającą co najmniej 5 wpisów.
- Iteruj przez tablicę wyników, tworząc wiersz tabeli dla każdego wpisu.
- Zbuduj strukturę tabeli w HTML i zastosuj CSS do stylizacji, aby wyniki były łatwe do odczytania i atrakcyjne wizualnie.
