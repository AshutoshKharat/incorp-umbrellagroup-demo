<footer class="site-footer">
    <div class="container-xl">

        <?php
        $aboutLinks = [
            'About'                  => 'about.php',
            'Team'                   => 'team.php',
            'Core Values'            => 'core-values.php',
            'Vision &amp; Mission'   => 'vision-and-mission.php',
            'Leadership Principles'  => 'leadership-principles.php',
            'Our Positions'          => 'our-positions.php',
            'Working Ethics'         => 'working-ethics.php',
            'FAQ'                    => '#',
            'Contact'                => '#',
            'Disclaimer'             => '#',
            'Cookies Policy'         => '#',
            'Terms &amp; Condition'  => '#',
            'Climate Commitment'     => '#',
            'Verify Trusted Site'    => 'https://www.trustedsite.com/verify?host=incorp-umbrellagroup.com',
        ];

        $solutionLinks = [
            'Information Technology',
            'WEB 3.0 VDA',
            'Insurance',
            'Cyber Security',
            'Accounting | Taxation',
            'Tourism',
            'DPOS Validators',
            'Agritech Info',
            'FinTech Solutions',
            'E-Governance',
            'Services via Artificial Intelligence',
        ];

        $securityLinks = [
            'Indian IT Act',
            'Cyber Security in Digital Era',
            'Online Frauds Prevention',
            'Report Cyber Fraud',
        ];

        $communityLinks = [
            ['icon' => 'bi-facebook', 'label' => 'Facebook'],
            ['icon' => 'bi-instagram', 'label' => 'Instagram'],
            ['icon' => 'bi-twitter-x', 'label' => 'Twitter'],
            ['icon' => 'bi-linkedin', 'label' => 'LinkedIn Page'],
            ['icon' => 'bi-youtube', 'label' => 'Youtube'],
            ['icon' => 'bi-reddit', 'label' => 'Reddit'],
            ['icon' => 'bi-telegram', 'label' => 'Telegram'],
            ['icon' => 'bi-github', 'label' => 'Github'],
            ['icon' => 'bi-twitch', 'label' => 'Twitch'],
            ['icon' => 'bi-medium', 'label' => 'Medium'],
            ['icon' => 'bi-discord', 'label' => 'Discord'],
            ['icon' => 'bi-pinterest', 'label' => 'Pinterest'],
            ['icon' => 'bi-quora', 'label' => 'Quora'],
        ];
        ?>

        <div class="row g-4 align-items-start">

            <!-- Company Info -->
            <div class="col-xl-4 col-lg-5">
                <article class="footer-panel footer-company-panel">
                    <a class="footer-brand d-flex align-items-center gap-2 mb-3 text-decoration-none" href="index.php">
                        <span class="footer-brand-logo">
                            <img src="assets/images/logo.jpg" alt="VIOTX UMBRELLA Logo" width="40" height="40">
                        </span>
                        <span class="footer-logo-text">VIOTX UMBRELLA</span>
                    </a>
                    <p class="footer-desc">
                        VIOTX Umbrella Holding Incorporation delivers technology, finance, investment,
                        tourism, and digital business solutions designed to help organizations scale,
                        modernize operations, and build long-term value.
                    </p>

                    <div class="footer-info-split">
                        <div>
                            <h6 class="footer-section-title">Locations</h6>
                            <div class="footer-location-list">
                                <div class="footer-location-item">
                                    <p class="footer-location-city">Pune</p>
                                    <p class="footer-contact-text">Workflow Co-Working Space, Baner Road, Baner 411045</p>
                                </div>
                                <div class="footer-location-item">
                                    <p class="footer-location-city">Chhatrapati Sambhaji Nagar</p>
                                    <p class="footer-contact-text">Aurangabad Saga Co-working Space, CIDCO 431001</p>
                                </div>
                                <div class="footer-location-item">
                                    <p class="footer-location-city">Chikhli</p>
                                    <p class="footer-contact-text">Pratiksha Complex, 1st floor, Office No-2, 443201</p>
                                </div>
                                <div class="footer-location-item">
                                    <p class="footer-location-city">Buldhana</p>
                                    <p class="footer-contact-text">Office No - 152 DSD Mall, 443001</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="footer-section-title">Contact Details</h6>
                            <div class="footer-contact-list">
                                <div class="footer-contact-item">
                                    <span class="footer-contact-icon"><i class="bi bi-envelope"></i></span>
                                    <div>
                                        <p class="footer-contact-label">Email</p>
                                        <a href="mailto:info@incorp-umbrellagroup.com" class="footer-contact-link">info@incorp-umbrellagroup.com</a>
                                    </div>
                                </div>
                                <div class="footer-contact-item">
                                    <span class="footer-contact-icon"><i class="bi bi-telephone"></i></span>
                                    <div>
                                        <p class="footer-contact-label">Call</p>
                                        <p class="footer-contact-text">+91 9@#$5 6###2</p>
                                    </div>
                                </div>
                                <div class="footer-contact-item">
                                    <span class="footer-contact-icon"><i class="bi bi-geo-alt"></i></span>
                                    <div>
                                        <p class="footer-contact-label">Location</p>
                                        <p class="footer-contact-text">Workin Coworking Space, Tilak Road, Pune, Maharashtra 411030</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-xl-8 col-lg-7">
                <div class="row g-4">
                    <!-- About Us -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="footer-panel">
                            <h6 class="footer-section-title">About Us</h6>
                            <ul class="footer-link-list">
                                <?php foreach ($aboutLinks as $label => $href) : ?>
                                <li><a href="<?php echo $href; ?>"><?php echo $label; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    </div>

                    <!-- Solutions & Services -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="footer-panel">
                            <h6 class="footer-section-title">Solutions &amp; Services</h6>
                            <ul class="footer-link-list">
                                <?php foreach ($solutionLinks as $link) : ?>
                                <li><a href="#"><?php echo htmlspecialchars($link); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    </div>

                    <!-- Internet Security -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="footer-panel">
                            <h6 class="footer-section-title">Internet Security</h6>
                            <ul class="footer-link-list">
                                <?php foreach ($securityLinks as $link) : ?>
                                <li><a href="#"><?php echo htmlspecialchars($link); ?></a></li>
                                <?php endforeach; ?>
                            </ul>

                            <h6 class="footer-section-title footer-subsection-title">Group Authenticity</h6>
                            <ul class="footer-link-list">
                                <li><a href="https://www.crunchbase.com/organization/umbrella-incorp">Crunch Base</a></li>
                            </ul>
                        </article>
                    </div>

                    <!-- Community -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <article class="footer-panel">
                            <h6 class="footer-section-title">Community</h6>
                            <ul class="footer-link-list footer-community-list">
                                <?php foreach ($communityLinks as $link) : ?>
                                <li>
                                    <a href="#">
                                        <i class="bi <?php echo htmlspecialchars($link['icon']); ?>"></i>
                                        <span><?php echo htmlspecialchars($link['label']); ?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> VIOTX Umbrella Holding Incorporation. All rights reserved.</p>
        </div>

    </div>
</footer>
