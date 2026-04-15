<section class="tech-stack-section">
    <div class="container-xl">

        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class="tech-stack-heading">Tech Stack</h2>
            <p class="tech-stack-subtext">
                Explore our diverse range of technologies represented by familiar icons. From
                cutting-edge frameworks to robust programming languages, discover the powerful
                tools that drive our innovation.
            </p>
        </div>

        <!-- Logo Row -->
        <div class="tech-logos-grid">
            <?php
            $technologies = [
                ['label' => 'iOS',       'icon' => 'bi-apple',     'color' => '#ffffff'],
                ['label' => 'Bootstrap', 'icon' => 'bi-bootstrap', 'color' => '#a78bfa'],
                ['label' => 'Laravel',   'icon' => 'bi-fire',      'color' => '#fb7185'],
                ['label' => 'React',     'icon' => 'bi-braces',    'color' => '#7dd3fc'],
                ['label' => 'Node.js',   'icon' => 'bi-server',    'color' => '#86efac'],
                ['label' => 'Telegram',  'icon' => 'bi-telegram',  'color' => '#60c8f5'],
                ['label' => 'LinkedIn',  'icon' => 'bi-linkedin',  'color' => '#93c5fd'],
                ['label' => 'MySQL',     'icon' => 'bi-database',  'color' => '#fcd34d'],
                ['label' => 'WordPress', 'icon' => 'bi-wordpress', 'color' => '#67e8f9'],
            ];
            foreach ($technologies as $tech) :
            ?>
            <div class="tech-logo-item">
                <i class="bi <?php echo htmlspecialchars($tech['icon']); ?>"
                   style="color:<?php echo $tech['color']; ?>"></i>
                <span><?php echo htmlspecialchars($tech['label']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
