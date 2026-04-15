<section class="ai-appointment-section">
    <div class="container-xl">
        <div class="row align-items-center g-5">

            <!-- Left: Content -->
            <div class="col-lg-6">
                <p class="ai-eyebrow">
                    Listed On Top of WhatsApp Bot.
                    <a href="#" class="ai-link">Get Thinkbix</a>
                </p>

                <h2 class="ai-heading">AI Made Appointments Easy</h2>

                <p class="ai-subtext">
                    Revolutionize bookings with our AI WhatsApp Bot. Effortless scheduling,
                    seamless interactions &ndash; all in one simple message.
                </p>

                <a href="contact.php" class="btn btn-start-booking mb-4">Start Booking</a>

                <ul class="ai-features-list">
                    <?php
                    $features = [
                        ['icon' => 'bi-lightning-charge-fill', 'color' => '#6c63ff', 'text' => 'Powerful Features'],
                        ['icon' => 'bi-cpu-fill',              'color' => '#0891b2', 'text' => 'Well Trained AI Model'],
                        ['icon' => 'bi-sliders',               'color' => '#16a34a', 'text' => 'Customization'],
                        ['icon' => 'bi-currency-dollar',       'color' => '#d97706', 'text' => 'Cost Effective Solution'],
                        ['icon' => 'bi-patch-check-fill',      'color' => '#2563eb', 'text' => 'Authorized Techsolution Provider'],
                        ['icon' => 'bi-lock-fill',             'color' => '#dc2626', 'text' => '100% Secured'],
                    ];
                    foreach ($features as $f) :
                    ?>
                    <li class="ai-feature-item">
                        <span class="ai-feature-icon"
                              style="background:<?php echo $f['color']; ?>18; color:<?php echo $f['color']; ?>">
                            <i class="bi <?php echo htmlspecialchars($f['icon']); ?>"></i>
                        </span>
                        <?php echo htmlspecialchars($f['text']); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Right: Phone Mockup -->
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="phone-mockup">
                    <div class="phone-frame">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">

                            <!-- Chat Header -->
                            <div class="chat-header">
                                <div class="chat-avatar">C</div>
                                <div class="chat-info">
                                    <span class="chat-name">Cardia Care</span>
                                    <span class="chat-status">Online</span>
                                </div>
                            </div>

                            <!-- Chat Messages -->
                            <div class="chat-messages">
                                <div class="chat-bubble received">Hi! I'd like to book an appointment. 👋</div>
                                <div class="chat-bubble sent">Sure! Please choose a date. 📅</div>
                                <div class="chat-bubble received">Tomorrow at 10 AM, please.</div>
                                <div class="chat-bubble sent">Confirmed! Dr. Smith, 10:00 AM ✅</div>
                                <div class="chat-bubble received">Thank you so much! 🙏</div>
                                <div class="chat-bubble sent">You're welcome! See you then. 😊</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
