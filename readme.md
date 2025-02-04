📝 Beskrivelse
Dette projekt er en personlig portefølje udviklet med PHP, HTML, CSS, og JavaScript, hvor Bootstrap og Sass er anvendt til styling. Formålet er at præsentere dine projekter, blogindlæg og musikalske værker på en struktureret og æstetisk tiltalende måde.

🚀 Funktioner
Projekter: En sektion dedikeret til at fremvise dine tidligere og nuværende projekter med detaljerede beskrivelser og billeder.
Blog: En integreret blogplatform, hvor du kan dele dine tanker, erfaringer og indsigt inden for forskellige emner.
📂 Projektstruktur
css/: Indeholder genererede CSS-filer fra Sass-kildekoden.
scss/: Indeholder Sass-filer, herunder dem med Bootstrap-importer og tilpassede variabler.
images/: Indeholder billeder brugt på tværs af porteføljen, såsom projektbilleder og blogillustrationer.
includes/: Indeholder PHP-filer med genanvendelig kode, såsom header, footer og databaseforbindelser.
DinIndreJuvel.php: En side dedikeret til dit projekt "Din Indre Juvel".
Musik.php: Siden, hvor dine musikalske værker præsenteres.
dijblog.php: Blogsektionen for "Din Indre Juvel".
index.php: Hjemmesiden for porteføljen, der giver en oversigt over dine hovedaktiviteter.
marittima.php: En side dedikeret til dit projekt "Marittima".
📦 Teknologier anvendt
PHP: Server-side scripting for dynamisk indholdshåndtering.
HTML/CSS: For strukturering og styling af webindhold.
JavaScript: Til interaktive funktioner og forbedret brugeroplevelse.
Bootstrap: CSS-rammeværk for responsivt og mobil-først design.
Sass: CSS-forprocessor for mere effektiv og modulær styling.
🔧 Installation
Følg disse trin for at køre projektet lokalt:
1.Klon repoet
git clone https://github.com/loay0013/portfolio.git
cd portfolio
2.Installer afhængigheder
npm install
3.Kompiler Sass-filer
npm run build-css
Dette vil kompilere dine Sass-filer til CSS og placere dem i mappen css/.
4.Opsætning af server
Brug en lokal server som XAMPP eller MAMP.
Placer projektfilerne i serverens htdocs-mappe.
5.Konfigurer database
Opret en MySQL-database og importer eventuelle nødvendige tabeller.
Opdater databaseforbindelsesoplysningerne i includes/db_connect.php eller tilsvarende fil.
6.Start serveren
Åbn din browser og naviger til http://localhost/portfolio for at se porteføljen.
