<section class="testimonials-section" id="testimonials">
    <div class="container-xl">

        <div class="row g-4">
            <?php
            $testimonials = [
                [
                    'stars'  => 4,
                    'title'  => '"Data Security Assurance"',
                    'text'   => 'Thinkbix Technologies exceeded our security standards. Their robust measures ensure that our sensitive information is protected, giving us peace of mind.',
                    'author' => 'Rohit Agarwal',
                ],
                [
                    'stars'  => 5,
                    'title'  => '"Cutting Edge Solutions"',
                    'text'   => 'Thinkbix Technologies consistently delivers cutting-edge solutions. Their ability to stay ahead of technological trends ensures that our projects are always at the forefront of innovation.',
                    'author' => 'Kabul Maheshwari',
                ],
                [
                    'stars'  => 4,
                    'title'  => '"Effective Social Media Optimization"',
                    'text'   => 'Our social media presence has skyrocketed thanks to Thinkbix Technologies\' optimization services. They understand the dynamics of various platforms and deliver impactful results.',
                    'author' => 'Ananya Singh',
                ],
                [
                    'stars'  => 5,
                    'title'  => '"Exceptional Website Development"',
                    'text'   => 'Thinkbix Technologies helped us build an amazing website for our business. Their attention to detail and commitment to quality are unmatched.',
                    'author' => 'Rohan Gupta',
                ],
                [
                    'stars'  => 4,
                    'title'  => '"Timely Project Delivery"',
                    'text'   => 'Thinkbix Technologies consistently delivers projects on time. Their commitment to meeting deadlines has been crucial to the success of our projects.',
                    'author' => 'Alfiya Rajni',
                ],
                [
                    'stars'  => 5,
                    'title'  => '"Reliable Support"',
                    'text'   => 'My experience with Thinkbix Technologies\' reliable support, fast response times and professionalism has been crucial to the success of our projects.',
                    'author' => 'Annu Soni',
                ],
                [
                    'stars'  => 4,
                    'title'  => '"Cutting Edge Solutions"',
                    'text'   => 'Thinkbix Technologies consistently delivers cutting-edge solutions. Their innovative approach continues to set industry benchmarks.',
                    'author' => 'Priya Mehta',
                ],
                [
                    'stars'  => 4,
                    'title'  => '"Business Automation Excellence"',
                    'text'   => 'Thinkbix Technologies is our go-to partner for business automation. Their solutions have dramatically improved our operational efficiency.',
                    'author' => 'Vikram Nair',
                ],
                [
                    'stars'  => 5,
                    'title'  => '"Overall Excellence"',
                    'text'   => 'Thinkbix Technologies is our go-to partner for all technology needs. Their comprehensive solutions and dedicated team make them a reliable choice.',
                    'author' => 'Deepak Sharma',
                ],
            ];

            foreach ($testimonials as $t) :
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <i class="bi bi-star<?php echo ($i <= $t['stars']) ? '-fill' : ''; ?>"></i>
                        <?php endfor; ?>
                    </div>
                    <h6 class="testimonial-title"><?php echo $t['title']; ?></h6>
                    <p class="testimonial-text"><?php echo htmlspecialchars($t['text']); ?></p>
                    <p class="testimonial-author">&mdash; <?php echo htmlspecialchars($t['author']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
