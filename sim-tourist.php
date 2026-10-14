<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'fr';
$page_title = 'Carte SIM au Maroc pour les voyageurs — Telecom Maroc Guide';
$page_description = 'Informations pratiques sur l\'obtention d\'une carte SIM au Maroc : démarches, documents, paramètres APN et conseils pour les voyageurs.';
$page_type = 'article';
$schema_type = 'Article';
$article_headline = 'Carte SIM au Maroc pour les voyageurs';
$breadcrumbs = [
    ['name' => 'Accueil', 'url' => 'https://maroctelecomguide.world/index.php'],
    ['name' => 'SIM', 'url' => 'https://maroctelecomguide.world/sim-tourist.php'],
];

require '_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Accueil</a><span class="sep">/</span><span>SIM</span>
    </nav>

    <h1>Carte SIM au Maroc pour les voyageurs</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Mis à jour : octobre 2026
    </p>

    <p>Se procurer une carte SIM locale constitue l'une des premières étapes pour rester connecté lors d'un séjour au Maroc. Ce guide rassemble les informations pratiques relatives à l'acquisition, à l'enregistrement et à la configuration d'une ligne mobile marocaine.</p>

    <h2>Points de distribution</h2>

    <p>Les cartes SIM sont disponibles dans plusieurs types de points de vente répartis à travers le pays :</p>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <div>
                <h4>Aéroports internationaux</h4>
                <p>Des comptoirs se trouvent dans les halls d'arrivée de Mohammed V (Casablanca), Marrakech-Ménara et Tanger Ibn Battouta, entre autres.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 3v18"/></svg>
            </div>
            <div>
                <h4>Boutiques officielles</h4>
                <p>Les enseignes Maroc Telecom, Orange Maroc et Inwi disposent de magasins dans les centres-villes et les galeries commerciales.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
            </div>
            <div>
                <h4>Revendeurs agréés</h4>
                <p>De nombreux kiosques, épiceries et petits commerces autorisés vendent des cartes SIM dans les villes comme dans les zones rurales.</p>
            </div>
        </div>
    </div>

    <h2>Documents nécessaires</h2>

    <p>La réglementation marocaine impose l'enregistrement de toute carte SIM auprès de l'opérateur. Le document indispensable est le suivant :</p>

    <div class="info-box">
        <p>Un passeport en cours de validité est exigé pour tout ressortissant étranger souhaitant activer une ligne mobile au Maroc. Le vendeur en effectuera une copie ou une numérisation sur place.</p>
    </div>

    <h2>Procédure d'enregistrement</h2>

    <p>L'activation d'une carte SIM au Maroc suit un processus encadré par l'ANRT (Agence Nationale de Réglementation des Télécommunications) :</p>

    <ul>
        <li>Présentation du passeport original au point de vente.</li>
        <li>Remplissage d'un formulaire d'identification (papier ou numérique selon le point de vente).</li>
        <li>Numérisation ou photocopie du document d'identité par le vendeur.</li>
        <li>Insertion de la carte SIM dans le terminal et activation automatique, généralement en quelques minutes.</li>
    </ul>

    <p>La ligne devient opérationnelle peu après l'enregistrement. Dans de rares cas, l'activation peut prendre jusqu'à une heure.</p>

    <h2>Paramètres APN par opérateur</h2>

    <p>Pour accéder aux données mobiles, il est parfois nécessaire de configurer manuellement le point d'accès (APN) dans les réglages du terminal. Voici les paramètres pour chacun des trois exploitants :</p>

    <table class="spec-table">
        <thead><tr><th>Opérateur</th><th>APN</th><th>Authentification</th></tr></thead>
        <tbody>
            <tr><td>Maroc Telecom</td><td>internet1.iam</td><td>Aucune (laisser vide)</td></tr>
            <tr><td>Orange Maroc</td><td>internet.orange.ma</td><td>Aucune (laisser vide)</td></tr>
            <tr><td>Inwi</td><td>internet1.inwi.ma</td><td>Aucune (laisser vide)</td></tr>
        </tbody>
    </table>

    <div class="info-box">
        <p>Sur la plupart des smartphones récents (iOS et Android), les paramètres APN se configurent automatiquement dès l'insertion de la carte SIM. Une intervention manuelle n'est requise que si la connexion de données ne s'établit pas d'elle-même.</p>
    </div>

    <h2>eSIM au Maroc</h2>

    <p>La technologie eSIM (SIM intégrée au terminal, sans support physique) commence à se déployer au Maroc. Certains exploitants proposent l'activation d'un profil eSIM, principalement dans leurs boutiques officielles des grandes villes. La disponibilité reste toutefois variable selon l'opérateur et le type de terminal utilisé.</p>

    <p>Avant de compter exclusivement sur l'eSIM, il est recommandé de vérifier auprès de l'opérateur visé si le service est proposé pour votre modèle de téléphone et dans la ville de votre arrivée.</p>

    <h2>Conseils pratiques pour les voyageurs</h2>

    <div class="feature-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
            </div>
            <div>
                <h4>Compatibilité du terminal</h4>
                <p>Vérifiez que votre téléphone prend en charge les bandes GSM 900/1800, UMTS 2100 et LTE 800/1800/2600 MHz.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            </div>
            <div>
                <h4>Déverrouillage opérateur</h4>
                <p>Assurez-vous que votre appareil n'est pas verrouillé sur un opérateur étranger. Un téléphone verrouillé refusera la carte SIM marocaine.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
            </div>
            <div>
                <h4>Copie du passeport</h4>
                <p>Conservez une photocopie ou une photo numérique de votre passeport. Elle pourra vous être utile en cas de besoin de remplacement de la carte SIM.</p>
            </div>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--c-primary)" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0"/><circle cx="12" cy="20" r="1" fill="var(--c-primary)"/></svg>
            </div>
            <div>
                <h4>Taille de la SIM</h4>
                <p>Les cartes SIM sont généralement fournies au format triple découpe (standard, micro et nano). Choisissez la taille adaptée à votre terminal.</p>
            </div>
        </div>
    </div>
</article>

<?php require '_footer.php'; ?>
