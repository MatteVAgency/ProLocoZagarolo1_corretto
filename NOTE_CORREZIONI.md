# Correzioni applicate — Pro Loco Zagarolo

Bug reali trovati clonando ed eseguendo il progetto (PHP 8.3 + MariaDB), non solo
letti dal codice. Tutti verificati con richieste HTTP end-to-end.

## 1. Login admin completamente rotto (bug più grave)
- `app/models/User.php` interrogava una colonna `password_hash` inesistente
  (la tabella `users` ha la colonna `password`, come da `database/schema.sql`
  e da `AuthController.php`). L'eccezione veniva catturata e mascherata da
  "Credenziali non valide": **nessun login funzionava mai**, nemmeno con
  admin/admin. Corretto il nome colonna nella query.
- Il sistema anti brute-force (`app/models/LoginAttempt.php`) usa una tabella
  `login_attempts` mai creata in `database/schema.sql`: prima ancora di
  controllare la password, ogni tentativo di login generava un errore fatale
  500. Aggiunta la tabella mancante allo schema.

## 2. Ogni pagina del sito rischiava un errore 500 su hosting reale (Linux)
- `routes/web.php` includeva `TurismoController.php` (T maiuscola) ma il file
  su disco è `turismoController.php` (t minuscola).
- `app/controllers/turismoController.php` includeva `../data/tourism_data.php`
  ma la cartella reale è `app/Data` (D maiuscola).
- Su Windows/XAMPP questi errori non si notano (filesystem case-insensitive),
  ma su qualunque hosting Linux il require falliva fatalmente — e siccome
  l'include di TurismoController stava fuori dallo switch delle rotte, l'errore
  bloccava **anche la homepage**, non solo le pagine turismo.
- Percorsi corretti in entrambi i file.

## 3. "Devo aprire per forza /public/", menu che punta a pagine inesistenti
- `app/views/layouts/header.php` aveva tutti i link del menu scritti come
  percorso assoluto fisso `/ProLocoZagarolo1/...` invece di usare la funzione
  `url()` già presente nel progetto (usata correttamente nel footer). Se il
  sito non è servito esattamente da una cartella con quel nome esatto, ogni
  link del menu (logo, News, Turismo, Area admin...) punta a un URL 404.
  Sostituiti tutti con `url(...)`, così funzionano indipendentemente dalla
  cartella/porta con cui apri il sito.
- Nello stesso file i tag `<link>` dei CSS erano scritti annidati/duplicati
  in modo non valido (`<link ... <link ...> >`), corretto.
- Le pagine dedicate "Chi siamo" e "Orari" esistevano già come file completi
  (`app/views/chi-siamo.php`, `orari.php`) ma non erano mai state collegate
  a nessuna rotta: erano irraggiungibili. Aggiunte le rotte `/chi-siamo` e
  `/orari` e aggiornato il menu (anche aggiunto il link mancante
  "Dove mangiare" nel dropdown Turismo, presente come rotta ma assente dal menu).

## 4. Monumenti / B&B / Ristoranti
La sezione "Turismo" esisteva già (monumenti, B&B, ristoranti con carosello
immagini), era solo bloccata dal bug del punto 2. I monumenti avevano già
testi reali; B&B e ristoranti erano segnaposto ("Da Compilare", numeri
finti). Sostituiti con 4 B&B/affittacamere e 5 ristoranti realmente esistenti
a Zagarolo (nome, indirizzo e telefono verificati su Google Maps a
settembre 2026).

**Importante:** orari, prezzi e disponibilità di attività commerciali reali
cambiano nel tempo. Prima di pubblicare il sito in produzione la Pro Loco
dovrebbe ricontattare ogni locale/struttura per confermare i dati e, se
possibile, sostituire i placeholder colorati con foto vere (chiedendo il
permesso ai gestori). Le foto NON sono state inventate: i box colorati sono
lo stesso sistema di placeholder già usato nel progetto originale.

## File modificati
- app/models/User.php
- app/controllers/turismoController.php
- app/views/layouts/header.php
- app/Data/tourism_data.php
- database/schema.sql
- routes/web.php

## Come verificare
```
mysql -u root -e "CREATE DATABASE proloco_zagarolo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
mysql -u root proloco_zagarolo < database/schema.sql
php database/setup_seed.php
php -S localhost:8000 -t public
```
Poi apri http://localhost:8000/ — funziona subito, senza dover navigare
manualmente dentro /public/, e il login admin (admin/admin) funziona.
