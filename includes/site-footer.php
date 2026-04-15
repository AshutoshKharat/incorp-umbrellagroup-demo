<footer class="site-footer">
    <div class="container-xl">

        <div class="row g-5">

            <!-- Company Info -->
            <div class="col-lg-3 col-md-6">
                <a class="footer-brand d-flex align-items-center gap-2 mb-3 text-decoration-none" href="index.php">
                    <div class="logo-icon">X</div>
                    <span class="footer-logo-text">thinkbix</span>
                </a>
                <p class="footer-desc">
                    At Thinkbix Technologies, we believe in the transformative power of technology.
                    Our team of dedicated experts is committed to delivering innovative digital solutions
                    that empower businesses to thrive in the digital era.
                </p>

                <h6 class="footer-section-title mt-4">Follow us on</h6>
                <div class="footer-social">
                    <a href="#" class="footer-social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="Twitter/X"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="Telegram"><i class="bi bi-telegram"></i></a>
                </div>
            </div>

            <!-- Our Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-section-title">Our Services</h6>
                <ul class="footer-services-list">
                    <li>
                        <a href="#">Web Development</a> &mdash;
                        From sleek websites to complex web applications, we craft digital experiences
                        that captivate your audience and drive conversions.
                    </li>
                    <li>
                        <a href="#">Mobile App Development</a> &mdash;
                        Engaging mobile applications for iOS and Android that connect you with customers
                        anywhere, anytime.
                    </li>
                    <li>
                        <a href="#">Digital Marketing</a> &mdash;
                        Comprehensive strategies to increase your online visibility, generate leads,
                        and grow brand awareness effectively.
                    </li>
                    <li>
                        <a href="#">Cloud Services</a> &mdash;
                        Scalable cloud infrastructure and managed services that power your business
                        operations reliably and securely.
                    </li>
                    <li>
                        <a href="#">Security Solutions</a> &mdash;
                        Robust cybersecurity measures to protect your digital assets, data, and
                        reputation from evolving threats.
                    </li>
                </ul>
            </div>

            <!-- FAQ -->
            <div class="col-lg-6">
                <h6 class="footer-section-title">FAQ</h6>
                <div class="footer-faq">
                    <?php
                    $faqs = [
                        [
                            'q' => 'What services does Thinkbix Technologies provide?',
                            'a' => 'Thinkbix Technologies offers a wide range of IT services including web development, mobile app development, digital marketing, cloud services, AI-powered chatbot solutions, and cybersecurity.',
                        ],
                        [
                            'q' => 'How can Thinkbix Technologies help my business grow?',
                            'a' => 'We provide tailored digital strategies that help businesses improve their online presence, automate operations, reach a wider audience, and convert more leads into customers.',
                        ],
                        [
                            'q' => 'Do you offer website development off-shore?',
                            'a' => 'Yes, our team works with clients globally. We deliver high-quality website development solutions regardless of your location, with clear communication and timely delivery.',
                        ],
                        [
                            'q' => 'What is a WhatsApp Chatbot Solution?',
                            'a' => 'A WhatsApp Chatbot Solution allows businesses to automate customer interactions through AI-powered bots on the WhatsApp platform, enabling 24/7 support, appointment booking, and lead generation.',
                        ],
                        [
                            'q' => 'How does a WhatsApp Chatbot Benefit my Business?',
                            'a' => 'It reduces manual workload, provides instant responses to customers, improves engagement, and helps you scale support and sales operations cost-effectively.',
                        ],
                        [
                            'q' => 'What is a WhatsApp Flow & Appointment?',
                            'a' => 'WhatsApp Flow automates guided conversations, allowing customers to complete actions like booking appointments, filling forms, or making purchases directly in WhatsApp.',
                        ],
                    ];
                    foreach ($faqs as $faq) :
                    ?>
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFaq(this)" type="button">
                            <?php echo htmlspecialchars($faq['q']); ?>
                            <i class="bi bi-chevron-down faq-chevron"></i>
                        </button>
                        <div class="faq-answer">
                            <p><?php echo htmlspecialchars($faq['a']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Thinkbix Technologies. All rights reserved.</p>
        </div>

    </div>
</footer>

<script>
function toggleFaq(btn) {
    const answer = btn.nextElementSibling;
    const icon   = btn.querySelector('.faq-chevron');
    const isOpen = answer.classList.contains('open');

    // Close all open answers
    document.querySelectorAll('.faq-answer.open').forEach(el => el.classList.remove('open'));
    document.querySelectorAll('.faq-chevron.rotated').forEach(el => el.classList.remove('rotated'));

    if (!isOpen) {
        answer.classList.add('open');
        icon.classList.add('rotated');
    }
}
</script>
