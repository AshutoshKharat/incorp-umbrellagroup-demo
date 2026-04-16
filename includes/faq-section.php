<section class="faq-section" id="faq">
    <div class="container-xl">

        <div class="text-center mb-5">
            <p class="section-eyebrow">Support</p>
            <h2 class="section-title gradient-text">Frequently Asked Questions</h2>
            <p class="section-subtitle faq-subtitle">
                Everything you need to know about our services, project process, timelines,
                pricing approach, and long-term support.
            </p>
        </div>

        <?php
        $faqItems = [
            [
                'q' => 'What services does your company offer?',
                'a' => 'Our company offers a wide range of internet technology services, including web development, mobile app development, software development, cloud solutions, digital marketing, and cybersecurity.'
            ],
            [
                'q' => 'What industries do you work with?',
                'a' => 'We work with a diverse range of industries, including healthcare, finance, retail, education, agriculture, and many more.'
            ],
            [
                'q' => 'Can you customize your services to fit my business needs?',
                'a' => 'Yes, we offer customized solutions to fit the unique needs of each client. Every business is different, and we provide tailored solutions that meet your specific requirements.'
            ],
            [
                'q' => 'What is your experience in the industry?',
                'a' => 'Our team has years of experience in the internet technology industry, working with businesses of different sizes across multiple sectors. We have a proven track record of delivering high-quality, result-driven solutions.'
            ],
            [
                'q' => 'How do you ensure the security of my data?',
                'a' => 'We take data security very seriously and follow strict protocols to keep client data safe. Our team uses industry-standard security measures and stays updated with the latest best practices.'
            ],
            [
                'q' => 'How do you handle maintenance and support after project completion?',
                'a' => 'We provide ongoing maintenance and support to ensure systems stay secure, updated, and reliable. We also offer multiple support package levels based on your business requirements.'
            ],
            [
                'q' => 'Can you provide references or case studies of previous work?',
                'a' => 'Yes. We are happy to share references or case studies on request and showcase success stories relevant to your business goals.'
            ],
            [
                'q' => 'How do you handle project management and communication?',
                'a' => 'We follow a collaborative project management process with regular check-ins, milestone reviews, and transparent communication using modern project tracking tools.'
            ],
            [
                'q' => 'How do you handle changes or revisions to project scope?',
                'a' => 'We accommodate scope changes through a structured change process. We communicate any timeline or budget impact early and align revisions with project objectives.'
            ],
            [
                'q' => 'How do I get started with your company?',
                'a' => 'You can get started by contacting us through our website or directly. We will discuss your needs, define scope, and provide a clear proposal with timeline.'
            ],
            [
                'q' => 'How long does it take to design and develop a website?',
                'a' => 'The timeline depends on project complexity and feature requirements. We always aim for efficient delivery without compromising quality.'
            ],
            [
                'q' => 'What digital marketing services do you offer?',
                'a' => 'We provide SEO, pay-per-click (PPC) advertising, social media marketing, email marketing, and content marketing services.'
            ],
            [
                'q' => 'How do you ensure the security of my website and data?',
                'a' => 'We use up-to-date security technologies and secure development practices to protect websites and business data from vulnerabilities and cyber threats. We also monitor and improve security continuously.'
            ],
            [
                'q' => 'Do you offer web hosting services?',
                'a' => 'Yes, we offer reliable, secure, and scalable hosting services that support businesses of all sizes.'
            ],
            [
                'q' => 'How do you determine the cost of your services?',
                'a' => 'Pricing depends on the scope, complexity, timeline, and engagement model. We provide transparent and competitive pricing tailored to your project requirements.'
            ],
            [
                'q' => 'Do you provide ongoing support for your services?',
                'a' => 'Yes. We provide continuous support, updates, and maintenance to ensure your technology solutions perform smoothly and stay aligned with current standards.'
            ]
        ];
        ?>

        <div class="faq-main-wrap">
            <div class="accordion faq-accordion" id="mainFaqAccordion">
                <?php foreach ($faqItems as $index => $item) :
                    $headingId = 'faqHeading' . $index;
                    $collapseId = 'faqCollapse' . $index;
                    $isFirst = $index === 0;
                ?>
                <div class="accordion-item faq-accordion-item">
                    <h3 class="accordion-header" id="<?php echo $headingId; ?>">
                        <button
                            class="accordion-button faq-accordion-btn <?php echo $isFirst ? '' : 'collapsed'; ?>"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#<?php echo $collapseId; ?>"
                            aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>"
                            aria-controls="<?php echo $collapseId; ?>">
                            <?php echo htmlspecialchars($item['q']); ?>
                        </button>
                    </h3>
                    <div
                        id="<?php echo $collapseId; ?>"
                        class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>"
                        aria-labelledby="<?php echo $headingId; ?>"
                        data-bs-parent="#mainFaqAccordion">
                        <div class="accordion-body faq-accordion-body">
                            <?php echo htmlspecialchars($item['a']); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
