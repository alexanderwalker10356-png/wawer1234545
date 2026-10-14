<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'fr';
$page_title = 'Politique de confidentialité — Telecom Maroc Guide';
$page_description = 'Politique de confidentialité du site Telecom Maroc Guide : traitement des données personnelles, cookies, droits des utilisateurs, RGPD et CCPA.';
$page_type = 'website';
$schema_type = 'WebSite';
$breadcrumbs = [
    ['name' => 'Accueil', 'url' => 'https://maroctelecomguide.world/index.php'],
    ['name' => 'Confidentialité', 'url' => 'https://maroctelecomguide.world/privacy.php'],
];

require '_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Accueil</a><span class="sep">/</span><span>Confidentialité</span>
    </nav>

    <h1>Politique de confidentialité</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Date d'entrée en vigueur : 15 septembre 2025
    </p>

    <p>La présente Politique de confidentialité décrit la manière dont le site Telecom Maroc Guide (ci-après « le Site », « nous ») collecte, utilise et protège les informations que les utilisateurs (ci-après « vous ») fournissent lors de leur visite.</p>

    <h2>1. Informations collectées</h2>
    <p>Le Site est une ressource informative et ne nécessite ni inscription, ni création de compte. Nous pouvons collecter automatiquement les informations techniques suivantes :</p>
    <ul>
        <li>Adresse IP du visiteur.</li>
        <li>Type et version du navigateur.</li>
        <li>Système d'exploitation de l'appareil.</li>
        <li>Pages visitées et durée de la visite.</li>
        <li>URL de provenance (referrer).</li>
    </ul>
    <p>Ces informations sont utilisées exclusivement pour assurer le bon fonctionnement du Site et analyser la fréquentation de manière agrégée.</p>

    <h2>2. Cookies</h2>
    <p>Le Site peut utiliser des cookies techniquement nécessaires. Nous n'utilisons pas de cookies publicitaires, de suivi ni de cookies tiers.</p>
    <ul>
        <li>Identifiant de session pour le fonctionnement serveur.</li>
        <li>Paramètres d'affichage (le cas échéant).</li>
    </ul>
    <p>La désactivation des cookies n'affectera pas l'accès au contenu du Site.</p>

    <h2>3. Utilisation des informations</h2>
    <ul>
        <li>Assurer le fonctionnement et la sécurité du Site.</li>
        <li>Analyser la fréquentation de manière agrégée.</li>
        <li>Détecter et prévenir les problèmes techniques.</li>
    </ul>
    <p>Nous ne vendons, ne transférons et ne divulguons pas de données personnelles à des tiers, sauf dans les cas prévus par la loi.</p>

    <h2>4. Droits des utilisateurs — RGPD</h2>
    <p>Si vous êtes résident de l'Union européenne ou de l'EEE :</p>
    <ul>
        <li><strong>Droit d'accès</strong> — informations sur les données traitées vous concernant.</li>
        <li><strong>Droit de rectification</strong> — correction de données inexactes.</li>
        <li><strong>Droit à l'effacement</strong> — suppression de vos données personnelles.</li>
        <li><strong>Droit à la limitation du traitement</strong> — limitation du traitement dans certains cas.</li>
        <li><strong>Droit à la portabilité</strong> — données dans un format structuré.</li>
        <li><strong>Droit d'opposition</strong> — opposition au traitement de vos données.</li>
    </ul>
    <p>Pour exercer ces droits : adam.henderson62464@gmail.com.</p>

    <h2>5. Droits des utilisateurs — CCPA</h2>
    <p>Si vous êtes résident de Californie :</p>
    <ul>
        <li>Droit de savoir quelles catégories de données sont collectées.</li>
        <li>Droit à la suppression des données collectées.</li>
        <li>Droit de refuser la vente de données. Nous ne vendons pas de données.</li>
        <li>Droit à la non-discrimination.</li>
    </ul>
    <p>Pour exercer ces droits : adam.henderson62464@gmail.com.</p>

    <h2>6. Protection des données</h2>
    <p>Nous prenons des mesures techniques et organisationnelles raisonnables pour protéger les informations que nous traitons. Toutefois, aucune méthode de transmission de données sur Internet n'est totalement sécurisée.</p>

    <h2>7. Liens vers des ressources tierces</h2>
    <p>Le Site ne contient pas de liens vers des ressources tierces. Si de tels liens venaient à être ajoutés, nous ne saurions être tenus responsables de la politique de confidentialité des sites tiers.</p>

    <h2>8. Modifications de la politique</h2>
    <p>Nous nous réservons le droit de modifier cette Politique de confidentialité. La version actuelle est toujours disponible sur cette page.</p>

    <h2>9. Coordonnées</h2>
    <p>Pour toute question : adam.henderson62464@gmail.com.</p>
</article>

<?php require '_footer.php'; ?>
