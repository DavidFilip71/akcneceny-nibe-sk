# Cirque frontend dev Starter Pack

Tento repozitář poskytuje základní nastavení pro frontend vývoj s využitím Gulp a SCSS. Zároveň obsahuje rady, jak se orientovat ve struktuře Cirque GitHubu, což usnadní přechod od individuálního kódování k týmové spolupráci. Cílem je pomoci vývojářům efektivně pracovat na projektech s více členy týmu.

## Obsah

- [Struktura SCSS](#struktura-scss)
- [Použití SCSS](#použití-scss)
- [Instalace a spuštění](#instalace-a-spuštění)
  - [1. Klonování repozitáře](#1-klonování-repozitáře)
    - [a) Vytvoření nového projektu ze šablony](#a-vytvoření-nového-projektu-ze-šablony)
    - [b) Zapojení do existujícího projektu](#b-zapojení-do-existujícího-projektu)
  - [2. Instalace závislostí](#2-instalace-závislostí)
  - [3. Spuštění Gulp pro SASS a generování barev](#3-spuštění-gulp-pro-sass-a-generování-barev)
  - [4. Commitování a vytváření větví](#4-commitování-a-vytváření-větví)
    - [a) Vytváření nové větve](#a-vytváření-nové-větve)
    - [b) Vytvoření pull requestu](#b-vytvoření-pull-requestu)
    - [c) Doporučení pro zprávy commitů](#c-doporučení-pro-zprávy-commitů)
    - [d) Alternativa: Přímé sloučení změn (Merge)](#d-alternativa-přímé-sloučení-změn-merge)
    - [e) Odstranění větve](#e-odstranění-větve)
  - [5. Publikování projektu jako privátní repozitář do GitHub organizace](#5-publikování-projektu-jako-privátní-repozitář-do-github-organizace)
  - [6. Dobré praktiky při používání GitHubu](#6-dobré-praktiky-při-používání-githubu)
    - [a) Využívání Issues pro správu úkolů](#a-využívání-issues-pro-správu-úkolů)
    - [b) Strukturované Pull Requesty](#b-strukturované-pull-requesty)
    - [c) Používání Wiki pro dokumentaci](#c-používání-wiki-pro-dokumentaci)
    - [d) Využívání GitHub Projects pro plánování](#d-využívání-github-projects-pro-plánování)
    - [e) Automatizace pomocí GitHub Actions](#e-automatizace-pomocí-github-actions)

## Struktura SCSS

SCSS soubory jsou organizovány podle jednoduché struktury

```plaintext
src/
├── abstracts/   # Mixins, variables, functions
├── base/        # Reset, typografie, základní styly
├── components/  # Reusable komponenty (buttons, cards, modals)
├── layout/      # Layout soubory (grid, header, footer, shluky komponent, sekce)
├── pages/       # Specifické styly pro jednotlivé stránky
```

### Použití SCSS

- Přizpůsobuj a přidávej si proměnné v **abstracts/_mixins.scss** a **abstracts/_colors.scss**.
- Kóduj co nejvíce komponetově.
- Pojmenovávej rozumně a jasně sobory a třídy.
- Sobory které se nemají propsat do /css pojmnenuj s podtržítkem **_jsem-fragment.scss**.
- Používej SASS jak nejlépe dovedeš
- Když to dává smysl použij třídy z **toolbox**.
- [Cheatsheet s SASS triky co ti může pomoci](https://devhints.io/sass)
- Od začátku mysli na přístupnost, je to jednoduší než to pak dolepovat zpětně. Tato stránka ti s tím může pomoci: [a11yproject](https://www.a11yproject.com/checklist). Případně pro zorientování podcast v češtině: [Vzhuru dolu 57](https://www.vzhurudolu.cz/podcast/252-tereza-kosnarova)

## Instalace a spuštění

### 1. Klonování repozitáře

- [a) Vytvoření nového projektu ze šablony](#a-vytvoření-nového-projektu-ze-šablony)
- [b) Zapojení do existujícího projektu](#b-zapojení-do-existujícího-projektu)

#### a) Vytvoření nového projektu ze šablony

Pokud chceš použít tento repozitář jako šablonu pro nový projekt:

1. Klonuj repozitář:

   ```sh
   git clone https://github.com/Cirque-Digital/cirque-startpack.git novy-projekt
   cd novy-projekt
   ```

2. Odstraň historii Git, aby ses odpojil od původního repozitáře:

   ```sh
    rm -Recurse -Force .git
    git init
   ```

3. Dogeneruj si strukturu složek (pro windows)

    ```sh
   $folders = @(
    "src\base",
    "src\components",
    "src\layout",
    "src\pages",
    "js",
    "includes",
    "assets\data",
    "assets\images",
    "assets\fonts",
    "assets\icons"

    )

    foreach ($folder in $folders) {
        if (-not (Test-Path $folder)) {
            mkdir $folder -Force
            Write-Host "Vytvořena složka: $folder"
        } else {
            Write-Host "Složka již existuje: $folder"
        }
    }
   ```

4. Přizpůsob si projekt podle svých potřeb.

5. Publikuj svůj projekt aby byl zálohovaný a dostupný pro všechny [Publikování projektu](#5-publikování-projektu-jako-privátní-repozitář-do-github-organizace)

#### b) Zapojení do existujícího projektu

Pokud se chceš zapojit do již existujícího projektu:

1. Klonuj repozitář:

   ```sh
   git clone https://github.com/Cirque-Digital/existujici-projekt.git
   cd existujici-projekt
   ```

2. Ujisti se, že máš aktuální verzi větve:

   ```sh
   git pull origin main
   ```

3. Pokračuj v práci podle pokynů týmu.

### 2. Instalace závislostí

Ujisti se, že máš nainstalovaný **Node.js** a **npm**. Pak spusť:

```sh
npm install
```

### 3. Spuštění Gulp pro SASS a generování barev

Pro spuštění vývojového prostředí použij:

```sh
npm run watch:sass
```

Tím se spustí sledování souborů, kompilace SCSS a další úlohy.

### 4. Commitování a vytváření větví

#### a) Vytváření nové větve

Při práci na nové funkci nebo opravě chyby je doporučeno vytvořit novou větev. Postup:

1. Vytvoř novou větev:
   ```sh
   git checkout -b nazev-vetve
   ```
   Příklad:
   ```sh
   git checkout -b feature/nova-funkce
   ```

2. Pracuj na změnách ve své větvi.

3. Pushni svou větev na vzdálený repozitář:
   ```sh
   git push origin nazev-vetve
   ```

#### b) Vytvoření pull requestu

Po dokončení práce na větvi je doporučeno vytvořit pull request (PR) na GitHubu. Postup:

1. Otevři stránku repozitáře na platformě (např. GitHub).
2. Najdi svou větev a klikni na tlačítko **Compare & pull request** (GitHub) nebo ekvivalentní tlačítko na jiné platformě.
3. Vyplň popis pull requestu:
   - Stručně popiš, co pull request řeší.
   - Pokud PR řeší konkrétní issue, přidej odkaz na issue (např. `Fixes #123`).
4. Požádej o review od ostatních členů týmu.
5. Po schválení PR můžeš (nebo někdo jiný) sloučit změny do hlavní větve.

#### c) Doporučení pro zprávy commitů

- Používej jasné a stručné popisy.
- Piš zprávy v přítomném čase (např. "Přidat validaci formuláře").
- Pokud commit řeší konkrétní issue, přidej odkaz na issue (např. `#123`).

#### d) Alternativa: Přímé sloučení změn (Merge)

**Používej pouze jako hlavní vývojář projektu.**  
Pokud pull request není vhodný, slouč změny přímo do hlavní větve.

1. Ujisti se, že máš aktuální verzi hlavní větve:
   ```sh
   git checkout main
   git pull origin main
   ```

2. Sloučit svou větev:
   ```sh
   git merge nazev-vetve
   ```

3. Pokud dojde ke konfliktům, vyřeš je ručně a poté dokonči merge:
   ```sh
   git add .
   git commit
   ```

4. Pushni změny do hlavní větve:
   ```sh
   git push origin main
   ```

#### e) Odstranění větve

Po sloučení změn (ať už přes pull request nebo merge) můžeš odstranit svou větev:

1. Lokálně:
   ```sh
   git branch -d nazev-vetve
   ```

2. Na vzdáleném repozitáři:
   ```sh
   git push origin --delete nazev-vetve
   ```

---

Používání pull requestů je preferovaný způsob, protože umožňuje ostatním členům týmu zkontrolovat změny, diskutovat o nich a zajistit, že vše odpovídá standardům projektu.

### 5. Publikování projektu jako privátní repozitář do GitHub organizace

Pokud chceš publikovat projekt jako privátní repozitář v rámci GitHub organizace, postupuj podle následujících kroků:

#### a) Vytvoření nového repozitáře v organizaci

1. Přihlas se do GitHubu a přejdi na stránku organizace.
2. Klikni na tlačítko **New repository**.
3. Vyplň následující informace:
   - **Repository name**: Zadej název projektu.
   - **Description**: Přidej krátký popis projektu.
   - **Visibility**: Vyber možnost **Private**, aby byl repozitář přístupný pouze členům organizace.
4. Klikni na tlačítko **Create repository**.

#### b) Přidání vzdáleného repozitáře a push projektu

1. Přidej vzdálený repozitář do svého projektu:

   ```sh
   git remote add origin https://github.com/Cirque-Digital/nazev-repozitare.git
   ```

2. Pushni svůj projekt do nového repozitáře:

   ```sh
   git branch -M main
   git push -u origin main
   ```

### 6. Dobré praktiky při používání GitHubu

#### a) Využívání Issues pro správu úkolů

**Issues** jsou skvělým nástrojem pro sledování úkolů, chyb a návrhů. Doporučený postup:

1. **Vytváření Issues**:
   - Každý úkol nebo problém by měl mít vlastní Issue.
   - Používej jasné a stručné názvy, které vystihují podstatu problému nebo úkolu.
   - V popisu Issue uveď:
     - Co je potřeba udělat nebo opravit.
     - Jaké kroky vedou k reprodukci problému (pokud jde o chybu).
     - Případné návrhy na řešení.

2. **Přiřazení a štítky**:
   - Přiřaď Issue konkrétnímu členovi týmu, který na něm bude pracovat.
   - Používej štítky (např. `bug`, `enhancement`, `question`) pro snadnější kategorizaci.

3. **Propojení s Pull Requesty**:
   - Při vytváření Pull Requestu odkazuj na příslušné Issue pomocí klíčových slov, jako je `Fixes #123` nebo `Closes #123`. Tím se Issue automaticky uzavře po sloučení Pull Requestu.

#### b) Strukturované Pull Requesty

Pull Requesty by měly být jasné a přehledné. Doporučení:

1. **Popis Pull Requestu**:
   - Stručně popiš, co Pull Request řeší.
   - Pokud PR řeší konkrétní Issue, přidej odkaz na Issue (např. `Fixes #123`).
   - Uveď, jaké změny byly provedeny a proč.

2. **Malé a zaměřené změny**:
   - Každý Pull Request by měl řešit pouze jeden konkrétní problém nebo funkci. Vyhni se velkým PR, které obsahují mnoho nesouvisejících změn.

3. **Review a schválení**:
   - Požádej o review od ostatních členů týmu.
   - Přijímej zpětnou vazbu a prováděj potřebné úpravy.

#### c) Používání Wiki pro dokumentaci

(nemáme placenou verzi GitHub abychom mohli používat wiki i na privátních repozitářích)

Pokud projekt vyžaduje rozsáhlejší dokumentaci, využij GitHub Wiki:

1. **Struktura Wiki**:
   - Rozděl dokumentaci do přehledných sekcí (např. Úvod, Instalace, API, Příručky).
   - Používej odkazy mezi stránkami pro snadnou navigaci.

2. **Aktualizace**:
   - Pravidelně aktualizuj Wiki, aby odpovídala aktuálnímu stavu projektu.

#### d) Využívání GitHub Projects pro plánování

GitHub Projects umožňuje vizuální správu úkolů pomocí kanban boardů:

1. **Vytvoření projektu**:
   - Vytvoř projekt pro sledování úkolů (např. `Sprint 1`, `Release 1.0`).
   - Přidej sloupce, jako jsou `To Do`, `In Progress`, `Done`.

2. **Přidání Issues a Pull Requestů**:
   - Přetáhni Issues a Pull Requesty do příslušných sloupců podle jejich stavu.

3. **Pravidelná aktualizace**:
   - Pravidelně aktualizuj stav úkolů, aby board odrážel aktuální stav projektu.

#### e) Automatizace pomocí GitHub Actions

GitHub Actions umožňuje automatizaci procesů, jako je testování, nasazování nebo kontrola kódu:

1. **Vytvoření workflow**:
   - Vytvoř soubor `.github/workflows/ci.yml` pro definici automatizovaných úloh.
   - Například pro spuštění testů při každém pushi:
     ```yaml
     name: CI
     on: [push, pull_request]
     jobs:
       build:
         runs-on: ubuntu-latest
         steps:
           - uses: actions/checkout@v3
           - name: Install dependencies
             run: npm install
           - name: Run tests
             run: npm test
     ```

2. **Použití šablon**:
   - Využij předpřipravené šablony GitHub Actions pro běžné úlohy (např. nasazení na server, kontrola formátování kódu).

---

Dodržování těchto dobrých praktik pomůže zlepšit spolupráci v týmu, zvýšit přehlednost projektu a usnadnit jeho správu.

## Authors

- [@Janek](https://www.github.com/xJANKOSLAVx)
- paní GePeTová s paní Copilotovou
