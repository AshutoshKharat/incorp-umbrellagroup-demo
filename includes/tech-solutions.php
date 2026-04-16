<section class="tech-solutions-section">
    <div class="container-xl">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <!-- <p class="section-eyebrow">Comprehensive IT Services &amp; Solutions</p> -->
            <h2 class="section-title gradient-text">Why Choose Us</h2>
            <p class="section-subtitle">
                Our IT Developers and subject experts have hands-on experience in the latest Website to Webapplication ,Android and IOS Apps . Blockchain Technology & Protocols to Deliver High-Quality Solutions. As a Top Enterprise Application Development Company, We are Experienced in Developing Robust in Payments Utility Apps. Blockchain Apps, DApps, Virtual Digital Assets,Validator Pool Operations , NFT, DeFi, and interactive 3D metaverse platforms to push forward your business expansion and growth. We also hold years of experience in Hyperledger blockchain development, full stack blockchain development, and custom blockchain development.
            </p>
        </div>

        <!-- Services Icon Grid -->
        <div class="row g-3 justify-content-center">
            <?php
            $services = [
                // ['icon' => 'bi-whatsapp',            'color' => '#25D366', 'bg' => '#e8faf2', 'name' => 'WhatsApp bot'],
                // ['icon' => 'bi-mic-fill',             'color' => '#00caff', 'bg' => '#e0f8ff', 'name' => 'Alexa skill development'],
                // ['icon' => 'bi-telegram',             'color' => '#2AABEE', 'bg' => '#e0f4fd', 'name' => 'Telegram bot'],
                // ['icon' => 'bi-people-fill',          'color' => '#6c63ff', 'bg' => '#f0eeff', 'name' => 'CRM'],
                // ['icon' => 'bi-cloud-fill',           'color' => '#FF9900', 'bg' => '#fff4e0', 'name' => 'AWS Managed Services'],
                // ['icon' => 'bi-phone-fill',           'color' => '#0d6efd', 'bg' => '#e7f0ff', 'name' => 'Mobile app development'],
                // ['icon' => 'bi-cart-fill',            'color' => '#fd7e14', 'bg' => '#fff2e5', 'name' => 'E-commerce solutions'],
                // ['icon' => 'bi-gear-fill',            'color' => '#0077b6', 'bg' => '#e0f2ff', 'name' => 'ERP solution'],
                // ['icon' => 'bi-layout-text-window',   'color' => '#e74c3c', 'bg' => '#fdecea', 'name' => 'CMS solution'],
                // ['icon' => 'bi-globe',                'color' => '#2563eb', 'bg' => '#eff6ff', 'name' => 'Website development'],
                // ['icon' => 'bi-code-slash',           'color' => '#16a34a', 'bg' => '#f0fdf4', 'name' => 'Web scraping'],
                // ['icon' => 'bi-share-fill',           'color' => '#d63384', 'bg' => '#fde8f0', 'name' => 'Social media automation'],
                // ['icon' => 'bi-play-circle-fill',     'color' => '#dc2626', 'bg' => '#fef2f2', 'name' => 'Video automation'],
                // ['icon' => 'bi-palette-fill',         'color' => '#ea580c', 'bg' => '#fff7ed', 'name' => 'Graphics automation'],
                // ['icon' => 'bi-whatsapp',             'color' => '#059669', 'bg' => '#ecfdf5', 'name' => 'WhatsApp flow'],
                // ['icon' => 'bi-graph-up-arrow',       'color' => '#0891b2', 'bg' => '#ecfeff', 'name' => 'Search engine optimization (SEO)'],
                // ['icon' => 'bi-database-fill',        'color' => '#1d4ed8', 'bg' => '#eff6ff', 'name' => 'Database optimization'],
                // ['icon' => 'bi-bar-chart-fill',       'color' => '#d97706', 'bg' => '#fffbeb', 'name' => 'Lead testing'],
                // ['icon' => 'bi-briefcase-fill',       'color' => '#15803d', 'bg' => '#f0fdf4', 'name' => "Business GT's"],
                // ['icon' => 'bi-shield-fill-x',        'color' => '#b91c1c', 'bg' => '#fef2f2', 'name' => 'Security vulnerability'],

                ['icon' => 'bi-diagram-3-fill',       'color' => '#7c3aed', 'bg' => '#f3e8ff', 'name' => 'Core team Blockchain experts'],
                ['icon' => 'bi-badge-vr-fill',        'color' => '#0ea5e9', 'bg' => '#e0f2fe', 'name' => 'Extensive metaverse Knowledge & experience'],
                ['icon' => 'bi-cpu-fill',             'color' => '#0d9488', 'bg' => '#ccfbf1', 'name' => 'Access to the latest Technologies & resources'],
                ['icon' => 'bi-sliders2-vertical',    'color' => '#ea580c', 'bg' => '#ffedd5', 'name' => 'Customized Solutions'],
                ['icon' => 'bi-gem',                  'color' => '#db2777', 'bg' => '#fce7f3', 'name' => 'High-end Services'],
                ['icon' => 'bi-bullseye',             'color' => '#2563eb', 'bg' => '#dbeafe', 'name' => 'Business-focused Approach'],
                ['icon' => 'bi-cash-coin',            'color' => '#16a34a', 'bg' => '#dcfce7', 'name' => 'Budget-friendly Services'],
                ['icon' => 'bi-flask-fill',           'color' => '#4f46e5', 'bg' => '#e0e7ff', 'name' => 'Profound R&D'],
                ['icon' => 'bi-lightning-charge-fill','color' => '#d97706', 'bg' => '#fef3c7', 'name' => 'Agile development Process'],
                ['icon' => 'bi-clock-history',        'color' => '#0891b2', 'bg' => '#cffafe', 'name' => 'On-time Delivery'],
                ['icon' => 'bi-headset',              'color' => '#059669', 'bg' => '#d1fae5', 'name' => 'Credible Support'],
                ['icon' => 'bi-boxes',                'color' => '#be123c', 'bg' => '#ffe4e6', 'name' => 'Expertise in AR & VR Technology']
            ];
            foreach ($services as $service) :
            ?>
            <div class="col-6 col-sm-4 col-md-3">
                <div class="service-icon-card text-center">
                    <div class="service-icon-wrap" style="background:<?php echo $service['bg']; ?>">
                        <i class="bi <?php echo htmlspecialchars($service['icon']); ?>"
                           style="color:<?php echo $service['color']; ?>"></i>
                    </div>
                    <p class="service-icon-label"><?php echo htmlspecialchars($service['name']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
