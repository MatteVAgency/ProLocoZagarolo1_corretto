<?php
declare(strict_types=1);

/**
 * Contenuti statici per la sezione "Turismo".
 *
 * Non è stata creata una tabella nel database: si tratta di contenuti
 * semi-fissi (monumenti, B&B) più simili a "pagine" che a "news", quindi
 * per ora vengono gestiti qui, in un unico file facile da modificare.
 * Se in futuro servirà un CRUD da admin, questi array possono diventare
 * tabelle (es. `monumenti`, `strutture_ricettive`) seguendo lo stesso
 * schema già usato per `news`.
 *
 * OGNI VOCE "immagini" è una lista di slide per il carosello.
 * Due tipi possibili:
 *   ['tipo' => 'placeholder', 'classe' => 'ph-1']   -> box colorato via CSS
 *   ['tipo' => 'file', 'src' => '/assets/img/monumenti/foo-1.jpg']
 *
 * Per sostituire un placeholder con una foto vera basta:
 *  1. Mettere il file in public/assets/img/monumenti/ (o /bnb/)
 *  2. Cambiare la voce corrispondente in 'tipo' => 'file' + 'src' => '...'
 * Le classi ph-1..ph-6 sono definite in assets/css/turismo.css con
 * gradienti diversi, così i placeholder risultano "sparsi" e non tutti uguali.
 */

function turismo_monumenti(): array
{
    return [

        // =========================================================
        // PALAZZI E ARCHITETTURE CIVILI
        // =========================================================

        [
            'slug' => 'palazzo-rospigliosi',
            'nome' => 'Palazzo Rospigliosi',
            'sottotitolo' => 'Il principale edificio storico di Zagarolo',
            'descrizione' => 'Nato dall’antico castello dei Colonna e trasformato tra XVI e XVII secolo in una sontuosa residenza signorile, conserva sale affrescate e ambienti di grande interesse storico e artistico. Oggi ospita anche il Museo del Giocattolo.',
            'indirizzo' => 'Piazza Indipendenza, 6 — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
            ],
        ],

        [
            'slug' => 'palazzo-dei-gonfalonieri',
            'nome' => 'Palazzo dei Gonfalonieri',
            'sottotitolo' => 'Storica architettura civile',
            'descrizione' => 'Storico edificio civile legato all’organizzazione amministrativa della città e alla vita pubblica del borgo. È indicato tra le architetture storiche di Zagarolo.',
            'indirizzo' => 'Centro storico — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
            ],
        ],

        [
            'slug' => 'palazzo-della-giustizia',
            'nome' => 'Palazzo della Giustizia',
            'sottotitolo' => 'Edificio storico civile',
            'descrizione' => 'Edificio storico civile legato alle funzioni giudiziarie e amministrative del paese.',
            'indirizzo' => 'Centro storico — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
            ],
        ],


        // =========================================================
        // CHIESE E ARCHITETTURE RELIGIOSE
        // =========================================================

        [
            'slug' => 'collegiata-san-lorenzo',
            'nome' => 'Collegiata di San Lorenzo Martire',
            'sottotitolo' => 'La chiesa principale del centro storico',
            'descrizione' => 'Chiesa principale del centro storico, edificata a partire dal XVI secolo su una precedente costruzione. La facciata e l’impianto architettonico caratterizzano la scenografica Piazza Guglielmo Marconi.',
            'indirizzo' => 'Piazza Guglielmo Marconi — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
            ],
        ],

        [
            'slug' => 'chiesa-san-pietro-apostolo',
            'nome' => 'Chiesa di San Pietro Apostolo',
            'sottotitolo' => 'Architettura religiosa barocca',
            'descrizione' => 'Importante edificio religioso barocco, costruito nel XVIII secolo. È caratterizzato da una particolare pianta centrale e da una grande cupola ellittica.',
            'indirizzo' => 'Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
            ],
        ],

        [
            'slug' => 'chiesa-santissima-annunziata',
            'nome' => 'Chiesa della Santissima Annunziata',
            'sottotitolo' => 'Chiesa storica del centro',
            'descrizione' => 'Costruita per volontà dei Colonna a partire dal XVI secolo, conserva una facciata monumentale e un caratteristico campanile ottagonale. L’interno presenta decorazioni e stucchi di gusto barocco.',
            'indirizzo' => 'Centro storico — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
            ],
        ],

        [
            'slug' => 'santuario-convento-santa-maria-grazie',
            'nome' => 'Santuario e Convento di Santa Maria delle Grazie',
            'sottotitolo' => 'Antico complesso religioso',
            'descrizione' => 'Complesso religioso di origine medievale, sviluppatosi intorno alla chiesa e all’antico convento dei Francescani. È uno dei luoghi religiosi storicamente più importanti di Zagarolo.',
            'indirizzo' => 'Piazza Santa Maria — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
            ],
        ],

        [
            'slug' => 'chiesa-divin-salvatore',
            'nome' => 'Chiesa del Divin Salvatore',
            'sottotitolo' => 'Edificio religioso',
            'descrizione' => 'Edificio religioso situato nella parte più recente del territorio cittadino, dedicato al Divin Salvatore.',
            'indirizzo' => 'Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
            ],
        ],

        [
            'slug' => 'cappella-colle-dei-frati',
            'nome' => 'Cappella di Colle dei Frati',
            'sottotitolo' => 'Piccola architettura religiosa',
            'descrizione' => 'Piccolo edificio religioso storico legato alla zona di Colle dei Frati.',
            'indirizzo' => 'Colle dei Frati — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
            ],
        ],

        [
            'slug' => 'chiesa-santa-maria-regina-della-valle',
            'nome' => 'Chiesa di Santa Maria Regina della Valle',
            'sottotitolo' => 'La chiesa di Valle Martella',
            'descrizione' => 'Chiesa situata nella frazione di Valle Martella, importante punto di riferimento religioso della comunità locale.',
            'indirizzo' => 'Valle Martella — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
            ],
        ],

        [
            'slug' => 'cappella-cimitero-zagarolo',
            'nome' => 'Cappella del Cimitero di Zagarolo',
            'sottotitolo' => 'Architettura religiosa ottocentesca',
            'descrizione' => 'Piccola architettura religiosa ottocentesca inserita nel complesso del cimitero cittadino.',
            'indirizzo' => 'Cimitero di Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
            ],
        ],

        [
            'slug' => 'cappella-san-nicola-pallavicina',
            'nome' => 'Cappella di San Nicola ai Casali della Pallavicina',
            'sottotitolo' => 'Antico edificio religioso rurale',
            'descrizione' => 'Antico edificio religioso della zona rurale, risalente all’età moderna.',
            'indirizzo' => 'Casali della Pallavicina — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
            ],
        ],


        // =========================================================
        // PORTE E ARCHITETTURE DEL BORGO
        // =========================================================

        [
            'slug' => 'porta-san-martino',
            'nome' => 'Porta San Martino',
            'sottotitolo' => 'Antica porta del borgo',
            'descrizione' => 'Antica porta di accesso al borgo storico, collocata nella parte nord-orientale del centro antico. Costituisce uno degli ingressi storici alla città.',
            'indirizzo' => 'Centro storico — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
            ],
        ],

        [
            'slug' => 'porta-rospigliosi',
            'nome' => 'Porta Rospigliosi',
            'sottotitolo' => 'Storico ingresso al borgo',
            'descrizione' => 'Storico ingresso al borgo nella parte meridionale, collegato alla zona di Palazzo Rospigliosi e alla struttura urbana rinascimentale.',
            'indirizzo' => 'Centro storico — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
            ],
        ],


        // =========================================================
        // FONTANE E STRUTTURE STORICHE
        // =========================================================

        [
            'slug' => 'fontana-romana-piazza-santa-maria',
            'nome' => 'Fontana Romana di Piazza Santa Maria',
            'sottotitolo' => 'Testimonianza di epoca romana',
            'descrizione' => 'Grande vasca in granito di epoca romana collocata al centro di Piazza Santa Maria. È una delle testimonianze più caratteristiche del passato antico di Zagarolo.',
            'indirizzo' => 'Piazza Santa Maria — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
            ],
        ],

        [
            'slug' => 'fontana-tre-cannelle',
            'nome' => 'Fontana delle Tre Cannelle',
            'sottotitolo' => 'Storica fontana del borgo',
            'descrizione' => 'Storica fontana situata nell’omonima piazzetta vicino a Porta Rospigliosi. La vasca è ricavata da un antico sarcofago romano e rappresenta uno degli elementi caratteristici del borgo.',
            'indirizzo' => 'Piazzetta delle Tre Cannelle — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
            ],
        ],

        [
            'slug' => 'fontana-de-chiocchio',
            'nome' => 'Fontana de Chiòchiò',
            'sottotitolo' => 'Antico abbeveratoio',
            'descrizione' => 'Antico abbeveratoio lungo Viale Ungheria, un tempo collocato in una zona rurale utilizzata anche per l’abbeveraggio degli animali. È stato restaurato e costituisce una testimonianza della vita quotidiana della Zagarolo storica.',
            'indirizzo' => 'Viale Ungheria — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
            ],
        ],

        [
            'slug' => 'antica-pesa-lu-giustu',
            'nome' => 'Antica Pesa e “Lu Giustu”',
            'sottotitolo' => 'Testimonianza della vita pubblica del borgo',
            'descrizione' => 'In Via Fabrini è ancora visibile l’antica pesa con le unità di misura utilizzate nel territorio. Accanto si trova il busto tradizionalmente chiamato “Lu Giustu”, identificato con Papa Clemente IX Rospigliosi.',
            'indirizzo' => 'Via Fabrini — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
            ],
        ],


        // =========================================================
        // TESTIMONIANZE ARCHEOLOGICHE
        // =========================================================

        [
            'slug' => 'tondo-romano-colle-del-pero',
            'nome' => 'Tondo Romano di Colle del Pero',
            'sottotitolo' => 'Testimonianza archeologica romana',
            'descrizione' => 'Piccola struttura ellittica di epoca romana, datata al I secolo d.C. e interpretata come possibile ludus gladiatorius, cioè luogo destinato all’allenamento dei gladiatori, collegato a una villa romana.',
            'indirizzo' => 'Colle del Pero — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
            ],
        ],

        [
            'slug' => 'via-prenestina-resti-basolato',
            'nome' => 'Resti e basolato della Via Prenestina',
            'sottotitolo' => 'Antica viabilità romana',
            'descrizione' => 'Nel territorio di Zagarolo sono presenti testimonianze dell’antica viabilità romana, tra cui tratti di basolato associati alla Via Prenestina.',
            'indirizzo' => 'Territorio di Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
            ],
        ],


        // =========================================================
        // BORGHI, PIAZZE E LUOGHI STORICI
        // =========================================================

        [
            'slug' => 'centro-storico-zagarolo',
            'nome' => 'Centro storico di Zagarolo',
            'sottotitolo' => 'Il cuore storico della città',
            'descrizione' => 'L’intero borgo costituisce un’importante testimonianza urbanistica medievale e rinascimentale. La città si sviluppa sulla caratteristica collina tufacea, con vicoli, archi, piazze, porte storiche e costruzioni che raccontano l’evoluzione del paese.',
            'indirizzo' => 'Centro storico — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-2'],
                ['tipo' => 'placeholder', 'classe' => 'ph-5'],
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
            ],
        ],

        [
            'slug' => 'piazzetta-tre-cannelle',
            'nome' => 'Piazzetta delle Tre Cannelle',
            'sottotitolo' => 'Piccolo spazio storico del borgo',
            'descrizione' => 'Piccolo spazio storico del borgo situato accanto a Porta Rospigliosi, caratterizzato dalla fontana storica e dalla presenza di elementi architettonici di origine antica.',
            'indirizzo' => 'Piazzetta delle Tre Cannelle — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-3'],
                ['tipo' => 'placeholder', 'classe' => 'ph-1'],
            ],
        ],

        [
            'slug' => 'piazza-santa-maria',
            'nome' => 'Piazza Santa Maria',
            'sottotitolo' => 'Una delle piazze storiche di Zagarolo',
            'descrizione' => 'Una delle piazze storiche del centro, dominata dal complesso di Santa Maria delle Grazie e caratterizzata dalla grande vasca romana.',
            'indirizzo' => 'Piazza Santa Maria — Zagarolo',
            'immagini' => [
                ['tipo' => 'placeholder', 'classe' => 'ph-4'],
                ['tipo' => 'placeholder', 'classe' => 'ph-6'],
            ],
        ],

    ];
}

function turismo_bnb(): array
{
    // Strutture ricettive realmente esistenti a Zagarolo (nome, indirizzo e
    // telefono verificati su Google Maps a settembre 2026). Orari, prezzi e
    // disponibilità cambiano nel tempo: prima di pubblicare in modo definitivo
    // la Pro Loco dovrebbe ricontattare ogni struttura per una conferma e,
    // se possibile, sostituire i placeholder con foto proprie o fornite dai
    // gestori (va comunque chiesta un'autorizzazione all'uso delle immagini).
    return [
        [
            'nome' => 'Il Casale di Rosaria',
            'descrizione' => 'Bed & breakfast in un casale immerso nel verde della campagna zagarolese, apprezzato per l\'accoglienza familiare e la posizione comoda per visitare Roma, i Castelli Romani e Tivoli.',
            'indirizzo' => 'Via Colle Giacinto, 14 — Zagarolo',
            'contatti' => '+39 328 121 8857',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-2'],
        ],
        [
            'nome' => 'B&B Borgo San Martino',
            'descrizione' => 'Struttura a conduzione familiare nel borgo antico, con camere pulite e curate e una terrazza panoramica molto apprezzata dagli ospiti per il tramonto su Zagarolo.',
            'indirizzo' => 'Borgo San Martino, 182 — Zagarolo',
            'contatti' => '+39 328 202 8705',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-4'],
        ],
        [
            'nome' => 'B&B A Casa del Pittore',
            'descrizione' => 'Dimora storica ricca di arte e atmosfera, con giardino e piscina: una soluzione tranquilla per un soggiorno più lento, a pochi minuti dal centro di Zagarolo.',
            'indirizzo' => 'Via Colle del Pero, 29 — Zagarolo',
            'contatti' => '+39 339 364 0909',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-6'],
        ],
        [
            'nome' => 'Affittacamere La Stazione',
            'descrizione' => 'Affittacamere con bar interno, comodo per chi arriva o riparte in treno grazie alla vicinanza alla stazione di Zagarolo, con collegamento diretto a Roma Termini.',
            'indirizzo' => 'Viale della Stazione, 20 — Zagarolo',
            'contatti' => '+39 06 9524 739',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-1'],
        ],
    ];
}
function turismo_ristoranti(): array
{
    // Locali realmente esistenti a Zagarolo (nome, indirizzo e telefono
    // verificati su Google Maps a settembre 2026). Orari e menù cambiano
    // spesso: prima di pubblicare in modo definitivo la Pro Loco dovrebbe
    // ricontattare ogni locale per una conferma e, se possibile, sostituire
    // i placeholder con foto proprie o fornite dai gestori (va comunque
    // chiesta un'autorizzazione all'uso delle immagini).
    return [
        [
            'nome' => 'Osteria Saint Martin',
            'descrizione' => 'Ristorante di cucina ricercata nel borgo storico, con un menù curato nei dettagli e un servizio attento: la scelta ideale per una cena importante o un\'occasione speciale a Zagarolo.',
            'indirizzo' => 'Piazza San Martino, 8 — Zagarolo',
            'contatti' => '+39 06 9887 6554',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-3'],
        ],
        [
            'nome' => 'Trattoria Filù',
            'descrizione' => 'Piccola trattoria nel centro storico, apprezzata per la cucina tradizionale casereccia e per l\'atmosfera calorosa e familiare: un classico per chi cerca i sapori genuini del territorio.',
            'indirizzo' => 'Corso Vittorio Emanuele, 98 — Zagarolo',
            'contatti' => '+39 06 9570 565',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-5'],
        ],
        [
            'nome' => 'Il Giardino',
            'descrizione' => 'Ristorante di pesce e cucina italiana nel cuore di Zagarolo, con una terrazza panoramica particolarmente amata al tramonto: adatto sia a una cena in famiglia sia a un\'occasione conviviale.',
            'indirizzo' => 'Corso Vittorio Emanuele, 5 — Zagarolo',
            'contatti' => '+39 06 9524 015',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-1'],
        ],
        [
            'nome' => 'L\'Oasi del Goloso',
            'descrizione' => 'Locale immerso nel verde della campagna zagarolese, con cucina casereccia romana e un ambiente semplice e rilassato: perfetto per un pranzo lontano dal traffico, magari all\'aperto.',
            'indirizzo' => 'Via Valle del Formale — Zagarolo',
            'contatti' => '+39 350 020 7649',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-6'],
        ],
        [
            'nome' => 'Lo Chalet',
            'descrizione' => 'Locale informale tra pub e ristorante, con hamburger, cucina di carne e musica dal vivo: la proposta più giovane e serale del panorama gastronomico di Zagarolo.',
            'indirizzo' => 'Via Valle del Formale — Zagarolo',
            'contatti' => '+39 352 209 8667',
            'immagine' => ['tipo' => 'placeholder', 'classe' => 'ph-4'],
        ],
    ];
}   