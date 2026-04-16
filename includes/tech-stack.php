<?php
/*
Previous Tech Stack section retained for reference.

<section class="tech-stack-section">
    <div class="container-xl">
        <div class="text-center mb-5">
            <h2 class="tech-stack-heading">Tech Stack</h2>
            <p class="tech-stack-subtext">
                Explore our diverse range of technologies represented by familiar icons. From
                cutting-edge frameworks to robust programming languages, discover the powerful
                tools that drive our innovation.
            </p>
        </div>

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
*/
?>

<section class="tech-stack-section" id="contact-us">
    <div class="container-xl">

        <div class="text-center mb-5">
            <p class="section-eyebrow text-white-50">Get In Touch</p>
            <h2 class="tech-stack-heading">Contact Us</h2>
            <p class="tech-stack-subtext contact-us-subtext">
                Thank you for your interest in VU Soft InfoTech. Whether you have questions about our services,
                need technical support, or want to explore partnership opportunities, we are here to network and grow together.
                Please feel free to reach out to us using the following details.
            </p>
        </div>

        <div class="row g-4 align-items-stretch">
            <div class="col-12 col-lg-5">
                <article class="contact-us-panel h-100">
                    <h3 class="contact-us-title">How We Can Help</h3>
                    <div class="contact-us-list">
                        <div class="contact-us-item">
                            <span class="contact-us-icon"><i class="bi bi-briefcase"></i></span>
                            <div>
                                <h4>Our Services</h4>
                                <p>Discuss websites, applications, digital products, and business technology solutions.</p>
                            </div>
                        </div>
                        <div class="contact-us-item">
                            <span class="contact-us-icon"><i class="bi bi-tools"></i></span>
                            <div>
                                <h4>Technical Support</h4>
                                <p>Reach out when you need guidance, troubleshooting, maintenance, or delivery assistance.</p>
                            </div>
                        </div>
                        <div class="contact-us-item">
                            <span class="contact-us-icon"><i class="bi bi-diagram-3"></i></span>
                            <div>
                                <h4>Partnership Opportunities</h4>
                                <p>Connect with us for collaboration, alliances, and long-term business growth opportunities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-direct-details">
                        <div class="contact-direct-item">
                            <span class="contact-us-icon"><i class="bi bi-envelope"></i></span>
                            <div>
                                <h4>Email</h4>
                                <a href="mailto:info@incorp-umbrellagroup.com" class="contact-direct-link">info@incorp-umbrellagroup.com</a>
                            </div>
                        </div>
                        <div class="contact-direct-item">
                            <span class="contact-us-icon"><i class="bi bi-telephone"></i></span>
                            <div>
                                <h4>Call</h4>
                                <p class="contact-direct-text">+91 9###5 6###2</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-us-actions">
                        <button type="button" class="contact-us-btn contact-us-btn-modal" data-bs-toggle="modal" data-bs-target="#contactConversationModal">
                            Start a Conversation
                        </button>
                    </div>
                </article>
            </div>

            <div class="col-12 col-lg-7">
                <article class="contact-location-card h-100">
                    <div class="contact-location-copy">
                        <div class="contact-location-badge">Visit Our Workspace</div>
                        <h3 class="contact-us-title">Workin Coworking Space, Tilak Road</h3>
                        <p class="contact-location-address">
                            5th floor, White House, Oppo. Tilak Smarak Mandir, Tilak Rd,
                            Perugate, Sadashiv Peth, Pune, Maharashtra 411030
                        </p>
                        <a class="contact-location-link" href="https://www.google.com/maps/search/?api=1&query=Workin+Coworking+Space,+Tilak+Road,+5th+floor,+White+House,+Oppo.+Tilak+Smarak+Mandir,+Tilak+Rd,+Perugate,+Sadashiv+Peth,+Pune,+Maharashtra+411030" target="_blank" rel="noopener noreferrer">
                            Open in Google Maps <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>

                    <div class="contact-map-frame-wrap">
                        <iframe
                            class="contact-map-frame"
                            src="https://www.google.com/maps?q=Workin%20Coworking%20Space,%20Tilak%20Road,%205th%20floor,%20White%20House,%20Oppo.%20Tilak%20Smarak%20Mandir,%20Tilak%20Rd,%20Perugate,%20Sadashiv%20Peth,%20Pune,%20Maharashtra%20411030&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Workin Coworking Space map location"></iframe>
                    </div>
                </article>
            </div>
        </div>

    </div>
</section>

<div class="modal fade contact-conversation-modal" id="contactConversationModal" tabindex="-1" aria-labelledby="contactConversationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content contact-modal-content">
            <div class="modal-header contact-modal-header">
                <div>
                    <p class="contact-modal-eyebrow">Let us know your requirement</p>
                    <h3 class="modal-title contact-modal-title" id="contactConversationModalLabel">Start a Conversation</h3>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body contact-modal-body">
                <form class="contact-modal-form" action="#" method="post">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="contact-modal-label" for="contactModalName">Name</label>
                            <input class="form-control contact-modal-input" type="text" id="contactModalName" name="name" placeholder="Your full name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="contact-modal-label" for="contactModalEmail">Email</label>
                            <input class="form-control contact-modal-input" type="email" id="contactModalEmail" name="email" placeholder="you@example.com">
                        </div>
                        <div class="col-12">
                            <label class="contact-modal-label" for="contactModalSubject">Subject</label>
                            <input class="form-control contact-modal-input" type="text" id="contactModalSubject" name="subject" placeholder="How can we help?">
                        </div>
                        <div class="col-12">
                            <label class="contact-modal-label" for="contactModalMessage">Message</label>
                            <textarea class="form-control contact-modal-input contact-modal-textarea" id="contactModalMessage" name="message" rows="5" placeholder="Share your project goals, support needs, or partnership idea"></textarea>
                        </div>
                    </div>
                    <div class="contact-modal-actions">
                        <button type="button" class="contact-modal-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="contact-modal-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
