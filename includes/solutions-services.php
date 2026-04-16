<section class="solutions-services-section" id="solutions-services">
    <div class="container-xl">

        <div class="text-center mb-5">
            <h2 class="section-title gradient-text">Our Solutions &amp; Services</h2>
            <p class="section-subtitle solutions-services-subtitle">
                Technology, Insurance, Investment, Fintax, and Tourism solutions to power your business.
                Partner with us to grow your business, manage risk, and unlock new opportunities.
            </p>
        </div>

        <?php
        $serviceGroups = [
            [
                'icon' => 'bi-code-square',
                'name' => 'IT Services',
                'items' => [
                    'Software development and customization',
                    'Website design and development',
                    'Cloud computing and hosting',
                    'IT consulting and support'
                ]
            ],
            [
                'icon' => 'bi-shield-check',
                'name' => 'Insurance Services',
                'items' => [
                    'Health insurance',
                    'Vehicle insurance',
                    'Business insurance',
                    'Property and casualty insurance',
                    'Liability insurance'
                ]
            ],
            [
                'icon' => 'bi-graph-up-arrow',
                'name' => 'Investment Services',
                'items' => [
                    'Portfolio management',
                    'Retirement planning',
                    'Wealth management',
                    'Tax planning'
                ]
            ],
            [
                'icon' => 'bi-receipt',
                'name' => 'Fintax Services',
                'items' => [
                    'Accounting and bookkeeping',
                    'Tax preparation and planning',
                    'Payroll processing',
                    'Financial statement analysis'
                ]
            ],
            [
                'icon' => 'bi-airplane',
                'name' => 'Tourism Services',
                'items' => [
                    'Travel planning and booking',
                    'Accommodation booking',
                    'Tour packages and excursions',
                    'Destination management services'
                ]
            ],
            [
                'icon' => 'bi-cash-stack',
                'name' => 'Finance Services',
                'items' => [
                    'Financial planning and analysis',
                    'Investment management',
                    'Risk management',
                    'Tax planning and compliance'
                ]
            ],
            [
                'icon' => 'bi-newspaper',
                'name' => 'Media News Services',
                'items' => [
                    'News reporting and analysis',
                    'Media content creation',
                    'Social media management',
                    'Public relations'
                ]
            ],
            [
                'icon' => 'bi-flower1',
                'name' => 'Agricultural E-Services',
                'items' => [
                    'Agricultural production and management',
                    'Agribusiness consulting',
                    'Farm financing',
                    'Agricultural supply chain management'
                ]
            ],
            [
                'icon' => 'bi-link-45deg',
                'name' => 'Web3.0 Services',
                'items' => [
                    'Blockchain development and consulting',
                    'Decentralized finance solutions',
                    'NFT development and management',
                    'Web3 application development'
                ]
            ],
            [
                'icon' => 'bi-building-gear',
                'name' => 'E-Governance Services',
                'items' => [
                    'E-commerce solutions',
                    'Digital marketing',
                    'Web design and development',
                    'Cybersecurity'
                ]
            ]
        ];
        ?>

        <div class="row g-4">
            <?php foreach ($serviceGroups as $group) : ?>
            <div class="col-12 col-md-6 col-xl-4">
                <article class="solutions-service-card h-100">
                    <div class="solutions-service-card-head">
                        <span class="solutions-service-icon">
                            <i class="bi <?php echo htmlspecialchars($group['icon']); ?>"></i>
                        </span>
                        <h3 class="solutions-service-title"><?php echo htmlspecialchars($group['name']); ?></h3>
                    </div>
                    <ul class="solutions-service-list">
                        <?php foreach ($group['items'] as $item) : ?>
                        <li><?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
