<?php
http_response_code(200);
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');

$page_lang = 'fr';
$page_title = 'Politique de protection des données — ConnectMaroc';
$page_description = 'Politique de protection des données du site ConnectMaroc : collecte d\'informations, cookies, droits des visiteurs, conformité RGPD et CCPA.';
$page_type = 'website';
$schema_type = 'WebSite';
$breadcrumbs = [
    ['name' => 'Accueil', 'url' => 'https://lamtelmorocco.world/index.php'],
    ['name' => 'Confidentialité', 'url' => 'https://lamtelmorocco.world/privacy.php'],
];

require '_header.php';
?>

<article>
    <nav class="breadcrumb">
        <a href="index.php">Accueil</a><span class="sep">/</span><span>Confidentialité</span>
    </nav>

    <h1>Politique de protection des données</h1>
    <p class="last-updated">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        Date d'entrée en vigueur : 15 septembre 2025
    </p>

    <p>Le présent document expose les pratiques du site ConnectMaroc (ci-après « la Plateforme », « nous ») concernant la collecte, le traitement et la sauvegarde des données relatives aux visiteurs (ci-après « vous ») lors de leur navigation.</p>

    <h2>1. Données recueillies</h2>
    <p>La Plateforme a une vocation purement informative et ne requiert ni création de compte, ni identification préalable. Les éléments techniques ci-dessous peuvent néanmoins être collectés de manière automatique :</p>
    <ul>
        <li>Adresse IP du visiteur.</li>
        <li>Nature et version du logiciel de navigation.</li>
        <li>Système d'exploitation du terminal utilisé.</li>
        <li>Pages consultées et durée de la session.</li>
        <li>Adresse de provenance (referrer).</li>
    </ul>
    <p>Ces éléments servent uniquement au maintien du bon fonctionnement de la Plateforme et à l'étude statistique anonyme de la fréquentation.</p>

    <h2>2. Fichiers témoins (cookies)</h2>
    <p>La Plateforme est susceptible d'employer des fichiers témoins strictement nécessaires au fonctionnement technique. Aucun cookie publicitaire, de pistage ou émanant de tiers n'est utilisé.</p>
    <ul>
        <li>Jeton de session indispensable au serveur.</li>
        <li>Préférences d'affichage (si applicable).</li>
    </ul>
    <p>La désactivation des fichiers témoins dans votre navigateur n'empêchera pas la consultation du contenu de la Plateforme.</p>

    <h2>3. Finalité du traitement</h2>
    <ul>
        <li>Garantir l'accessibilité et la sécurité de la Plateforme.</li>
        <li>Réaliser des analyses de fréquentation sous forme agrégée.</li>
        <li>Identifier et corriger les dysfonctionnements techniques.</li>
    </ul>
    <p>Nous ne procédons à aucune cession, transmission ou divulgation de données à caractère personnel au profit de tiers, sauf obligation légale.</p>

    <h2>4. Droits des visiteurs — RGPD</h2>
    <p>Si vous résidez au sein de l'Union européenne ou de l'Espace économique européen :</p>
    <ul>
        <li><strong>Droit d'accès</strong> — obtenir le détail des données vous concernant faisant l'objet d'un traitement.</li>
        <li><strong>Droit de rectification</strong> — demander la correction de données inexactes.</li>
        <li><strong>Droit à l'effacement</strong> — solliciter la suppression de vos données personnelles.</li>
        <li><strong>Droit à la limitation</strong> — restreindre le traitement dans des circonstances déterminées.</li>
        <li><strong>Droit à la portabilité</strong> — recevoir vos données dans un format structuré et courant.</li>
        <li><strong>Droit d'opposition</strong> — vous opposer au traitement de vos données.</li>
    </ul>
    <p>Pour faire valoir ces droits : adam.henderson62464@gmail.com.</p>

    <h2>5. Droits des visiteurs — CCPA</h2>
    <p>Si vous résidez en Californie :</p>
    <ul>
        <li>Droit de connaître les catégories de données recueillies.</li>
        <li>Droit d'en obtenir la suppression.</li>
        <li>Droit de refuser toute vente de données. Nous ne vendons aucune donnée.</li>
        <li>Droit à un traitement non discriminatoire.</li>
    </ul>
    <p>Pour faire valoir ces droits : adam.henderson62464@gmail.com.</p>

    <h2>6. Mesures de sécurité</h2>
    <p>Nous mettons en place des dispositions techniques et organisationnelles appropriées pour protéger les données traitées. Il reste toutefois impossible de garantir une sécurité absolue pour toute transmission de données via Internet.</p>

    <h2>7. Renvois vers des sites extérieurs</h2>
    <p>La Plateforme ne comporte pas de liens vers des sites tiers. Si de tels renvois venaient à être intégrés, nous déclinons toute responsabilité quant aux pratiques de protection des données de ces sites.</p>

    <h2>8. Évolution de la présente politique</h2>
    <p>Nous nous réservons la faculté de réviser ce document. La version en vigueur est systématiquement accessible sur cette page.</p>

    <h2>9. Coordonnées</h2>
    <p>Pour toute interrogation : adam.henderson62464@gmail.com.</p>
</article>

<?php require '_footer.php'; ?>
