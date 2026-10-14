<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'fr';
$page_title = 'Infrastructure et standards mobiles au Maroc — Telecom Maroc Guide';
$page_description = 'Analyse détaillée de l\'infrastructure mobile au Maroc : bandes de fréquences 2G/3G/4G/5G, standards internationaux, itinérance et connectivité.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Infrastructure et standards mobiles au Maroc';
$breadcrumbs = [
    ['name' => 'Accueil', 'url' => 'https://maroctelecomguide.world/index.php'],
    ['name' => 'Technologies', 'url' => 'https://maroctelecomguide.world/technology.php'],
];

require '_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Accueil</a><span class="sep">/</span><span>Technologies</span>
    </nav>

    <h1>Infrastructure et standards mobiles au Maroc</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Mis à jour : octobre 2026
    </p>

    <p>Le socle technique des réseaux sans fil marocains s'appuie sur les spécifications internationales reconnues, ce qui assure une interopérabilité immédiate avec l'immense majorité des terminaux conçus pour les marchés européen, moyen-oriental et africain.</p>

    <h2>2G — Réseau GSM</h2>

    <p>Les réseaux de seconde génération ont été mis en service au Maroc au milieu de la décennie 1990 et continuent de former la couche fondamentale de la connectivité mobile nationale. Le standard GSM exploite deux plages de fréquences :</p>

    <table class="spec-table">
        <thead><tr><th>Plage</th><th>Spectre</th><th>Rôle</th></tr></thead>
        <tbody>
            <tr><td>GSM 900</td><td>890–960 MHz</td><td>Plage fondamentale procurant une large portée territoriale grâce à sa capacité de pénétration du signal</td></tr>
            <tr><td>GSM 1800</td><td>1710–1880 MHz</td><td>Plage additionnelle destinée à renforcer la capacité dans les secteurs à forte densité</td></tr>
        </tbody>
    </table>

    <p>Les infrastructures GSM prennent en charge les appels vocaux et l'acheminement des SMS sur la totalité du sol marocain, jusque dans les contrées reculées de l'Atlas et les confins sahariens.</p>

    <h2>3G — UMTS / HSPA+</h2>

    <p>La troisième génération, fondée sur le protocole UMTS, a démarré au Maroc en 2007. Les installations 3G opèrent sur la plage 2100 MHz (Band 1).</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6M9 13h4"/></svg>
            </div>
            <div>
                <h4>UMTS (R99)</h4>
                <p>Phase initiale — plafond théorique de 384 Kbit/s</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>HSDPA</h4>
                <p>Voie descendante optimisée — plafond de 14,4 Mbit/s</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>HSPA+</h4>
                <p>Évolution avancée — plafond théorique de 42 Mbit/s</p>
            </div>
        </div>
    </div>

    <p>À l'heure actuelle, les réseaux 3G desservent la grande majorité des zones habitées du pays. Ils jouent un rôle de relais essentiel là où le signal 4G n'est pas encore disponible.</p>

    <h2>4G — LTE / LTE-Advanced</h2>

    <p>La mise en exploitation commerciale de la quatrième génération s'est effectuée en avril 2015. Les trois exploitants ont reçu des autorisations portant sur plusieurs segments du spectre LTE :</p>

    <table class="spec-table">
        <thead><tr><th>Segment</th><th>Identifiant 3GPP</th><th>Propriétés</th></tr></thead>
        <tbody>
            <tr><td>800 MHz</td><td>Band 20</td><td>Spectre basse fréquence offrant une propagation étendue et une forte pénétration. Adapté aux zones périurbaines et rurales.</td></tr>
            <tr><td>1800 MHz</td><td>Band 3</td><td>Spectre intermédiaire conjuguant capacité et étendue. Fréquence de référence du LTE en milieu urbain.</td></tr>
            <tr><td>2600 MHz</td><td>Band 7</td><td>Spectre haute fréquence à forte capacité mais portée réduite. Déployé dans les centres-villes et les lieux à forte affluence.</td></tr>
        </tbody>
    </table>

    <p>Les exploitants recourent massivement à l'agrégation de porteuses (Carrier Aggregation), combinant deux voire trois segments de spectre afin d'atteindre des débits effectifs de 100 à 150 Mbit/s dans les grandes villes.</p>

    <div class="info-box">
        <p>La technologie LTE-Advanced Pro (parfois désignée 4.5G) est progressivement mise en place pour accroître les débits crêtes et abaisser le temps de latence. Elle est déjà opérationnelle dans certains quartiers de Casablanca et Rabat.</p>
    </div>

    <h2>5G — Situation actuelle et feuille de route</h2>

    <p>L'introduction de la 5G au Maroc en est à sa phase préliminaire. L'ANRT a procédé à l'attribution des ressources spectrales. Voici les segments de fréquences retenus :</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M2 20h20M6 16h12M10 12h4M12 8V4"/></svg>
            </div>
            <div>
                <h4>3,5 GHz (n78)</h4>
                <p>Segment central pour la desserte 5G en milieu urbain</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M1.42 9a16 16 0 0 1 21.16 0M5 12.55a11 11 0 0 1 14.08 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-accent)"/></svg>
            </div>
            <div>
                <h4>700 MHz (n28)</h4>
                <p>Segment basse fréquence pour une desserte rurale élargie</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon" style="background:var(--c-accent-light);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-accent)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <div>
                <h4>26 GHz (n258)</h4>
                <p>Ondes millimétriques — débits extrêmes sur des périmètres restreints</p>
            </div>
        </div>
    </div>

    <p>Les phases expérimentales 5G se déroulent dans les quartiers d'affaires de Casablanca et dans le centre administratif de Rabat. Le déploiement à grande échelle est envisagé de manière progressive.</p>

    <h2>Fonctionnement de l'itinérance internationale</h2>

    <p>Le Maroc participe pleinement au système mondial d'itinérance (roaming). Les trois exploitants entretiennent des conventions avec des centaines d'homologues à travers la planète.</p>

    <h3>Mécanisme d'inscription au réseau</h3>

    <p>Dès l'arrivée sur le sol marocain, le terminal s'enregistre de manière automatique auprès de l'un des réseaux locaux. Les standards employés étant identiques aux normes européennes, les appareils acquis en Europe, au Moyen-Orient ou en Asie fonctionnent sans difficulté.</p>

    <h3>Détails techniques</h3>

    <ul>
        <li>Itinérance 2G (GSM) — accessible sur la quasi-totalité du sol marocain.</li>
        <li>Itinérance 3G (UMTS) — agglomérations principales et autoroutes.</li>
        <li>Itinérance 4G (LTE) — conditionnée par un accord entre les exploitants concernés.</li>
        <li>Itinérance VoLTE — restreinte à un nombre limité de couples d'exploitants.</li>
    </ul>

    <div class="info-box">
        <p>Pour un fonctionnement optimal en itinérance, veillez à activer la fonction « Données en itinérance » dans la configuration de votre terminal et laissez la sélection du réseau en mode automatique.</p>
    </div>

    <h2>Synthèse du spectre fréquentiel marocain</h2>

    <table class="spec-table">
        <thead>
            <tr><th>Génération</th><th>Standard</th><th>Spectre</th><th>Identifiant 3GPP</th></tr>
        </thead>
        <tbody>
            <tr><td>2G</td><td>GSM</td><td>900 MHz</td><td>—</td></tr>
            <tr><td>2G</td><td>GSM</td><td>1800 MHz</td><td>—</td></tr>
            <tr><td>3G</td><td>UMTS / HSPA+</td><td>2100 MHz</td><td>Band 1</td></tr>
            <tr><td>4G</td><td>LTE</td><td>800 MHz</td><td>Band 20</td></tr>
            <tr><td>4G</td><td>LTE</td><td>1800 MHz</td><td>Band 3</td></tr>
            <tr><td>4G</td><td>LTE</td><td>2600 MHz</td><td>Band 7</td></tr>
            <tr><td>5G</td><td>NR</td><td>3500 MHz</td><td>n78</td></tr>
            <tr><td>5G</td><td>NR</td><td>700 MHz</td><td>n28</td></tr>
        </tbody>
    </table>
</article>

<?php require '_footer.php'; ?>
