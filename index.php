<?php
$pageTitle = 'Home';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

$sections = [
    'hero',
    'solutions-services',
    'tech-solutions',
    'about-company',
    // 'ai-appointment',
    // 'intelligent',
    // 'testimonials',
    'faq-section',
    'tech-stack',
    'site-footer',
];
?>

<main>
    <?php foreach ($sections as $section): ?>
        <?php require 'includes/' . $section . '.php'; ?>
    <?php endforeach; ?>
</main>

<?php require 'includes/footer.php'; ?>