<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Thinkbix - Transforming Ideas into Digital Reality</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <style data-purpose="custom-configuration">
    body {
      font-family: 'Inter', sans-serif;
    }

    /* Smooth gradient from deep purple/blue to vibrant orange-red as seen in IMAGE_1 */
    .hero-gradient {
      background: linear-gradient(105deg, #4A6CF7 0%, #7E3AF2 30%, #D61F69 60%, #F05228 100%);
    }

    .glass-card {
      background: #FFFFFF;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body class="hero-gradient min-h-screen text-white overflow-x-hidden">
  <!-- BEGIN: MainHeader -->
  <header class="w-full py-6 px-6 md:px-12 flex justify-between items-center z-50">
    <div class="flex items-center gap-2" data-purpose="logo-container">
      <div class="bg-white p-1.5 rounded-lg shadow-sm">
        <svg class="w-7 h-7 text-[#4A6CF7]" fill="currentColor" viewbox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
      </div>
      <span class="text-2xl font-black tracking-tight lowercase">thinkbix</span>
    </div>
    <!-- Main Navigation -->
    <nav class="hidden lg:flex items-center gap-8 text-sm font-medium">
      <a class="hover:opacity-80 transition-opacity" href="#">Home</a>
      <a class="hover:opacity-80 transition-opacity" href="#">About us</a>
      <div class="flex items-center gap-1 cursor-pointer hover:opacity-80 transition-opacity">
        <span>Services</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
        </svg>
      </div>
      <div class="flex items-center gap-1 cursor-pointer hover:opacity-80 transition-opacity">
        <span>Packages</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
        </svg>
      </div>
      <div class="flex items-center gap-1 cursor-pointer hover:opacity-80 transition-opacity">
        <span>Solutions</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
        </svg>
      </div>
      <a class="hover:opacity-80 transition-opacity" href="#">Careers</a>
      <a class="hover:opacity-80 transition-opacity" href="#">Contact us</a>
    </nav>
    <!-- Mobile Menu Toggle -->
    <button class="lg:hidden p-2" data-purpose="mobile-menu-btn">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
        <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
      </svg>
    </button>
  </header>
  <!-- END: MainHeader -->
  <!-- BEGIN: HeroSection -->
  <main
    class="container mx-auto px-6 md:px-12 pt-8 pb-16 lg:pt-16 flex flex-col lg:flex-row items-center gap-12 lg:gap-8">
    <!-- Hero Text Content -->
    <section class="lg:w-1/2 flex flex-col items-start text-center lg:text-left lg:items-start"
      data-purpose="hero-text">
      <div
        class="mb-8 px-6 py-2 border border-white/40 rounded-full inline-block text-sm font-semibold bg-white/10 mx-auto lg:mx-0">
        India's most trusted IT solution partner.
      </div>
      <h1 class="text-4xl md:text-5xl lg:text-[72px] font-black leading-[1.1] mb-8">
        Transforming Ideas into Digital Reality with Expert IT Solutions
      </h1>
      <p
        class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl lg:max-w-xl font-medium leading-relaxed mx-auto lg:mx-0">
        Elevate your business with our cutting-edge <span class="font-bold border-b-2 border-white/30">software
          development</span>, <span class="font-bold border-b-2 border-white/30">mobile apps</span>, and <span
          class="font-bold border-b-2 border-white/30">AI solutions</span> tailored to your unique needs.
      </p>
      <button
        class="bg-white text-gray-900 px-10 py-4 rounded-xl font-bold text-lg hover:shadow-2xl hover:scale-105 transition-all flex items-center gap-2 mx-auto lg:mx-0"
        id="cta-button">
        Start Project
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
          <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
        </svg>
      </button>
    </section>
    <!-- Cards Grid matching the 3D character style of IMAGE_1 -->
    <section class="lg:w-1/2 w-full grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-5 relative"
      data-purpose="services-grid">
      <!-- AI-Powered Solutions -->
      <div
        class="glass-card rounded-[2.5rem] p-5 text-gray-900 flex flex-col items-center justify-between h-[240px] md:h-[280px] shadow-2xl transition-transform hover:-translate-y-2 self-center">
        <h3 class="text-[#1A56DB] font-extrabold text-[15px] md:text-base text-center leading-tight">AI-Powered <span
            class="text-[#E02424]">Solutions</span></h3>
        <div class="relative w-full flex-grow flex items-center justify-center pt-2">
          <img alt="AI Solutions character" class="max-h-full object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4D4V1mtbsUfDaiHBE5qoYCEkhwIlBmrr09gbcQxMiCAq70ZLQM76VnnL-NeruPe0UibdCMry0ldIXU_DX2aMNAy-sDJSuQdeLjIfbiH3X9s_A3ghfgiSLZmkAklF4QucqSMUsBVYXHsP-NjQ3_zOj16d3rvZEZAZ_-ednZXOzZ8xmGXUlHbIXfN60IDFW41VEQxMEmqahm59Nqw91GidrmwPBENi7n5q-Q3ePUCF_mQhZpSllDw3RC4ffqdS-MEwlGJcnH9AZ7PAO" />
        </div>
      </div>
      <!-- IT Consulting -->
      <div
        class="glass-card rounded-[2.5rem] p-5 text-gray-900 flex flex-col items-center justify-between h-[280px] md:h-[340px] shadow-2xl transition-transform hover:-translate-y-2">
        <h3 class="text-[#1A56DB] font-extrabold text-[15px] md:text-base text-center leading-tight">IT Consulting <span
            class="text-[#E02424]">Solution</span></h3>
        <div class="relative w-full flex-grow flex items-center justify-center pt-2">
          <img alt="IT Consulting character" class="max-h-full object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHYZ49O9nAdg13suKmSN4EMsw_q49mFqUP_NQJPsExxhZKNB4U_aOdizFCLGdx16by1Vay6CDNGKcrwJLnE_XOUsaKGRoJ5I0DlqdrAtb04nu358H_CKHzR_lQ0ENv71C3efO5jiRTM0IapLnQYgFf2Qi_za4Dql196XZCF4RsEdl-Z6nS5Opjfvw9UIAgQfVA6MNqj0gAIMtAwF6RLQ7g7nmdeyDZr4KgkNG2FYn_IYORIYAovnPgFscnqbWeIUHlpSCNmYgMbVGA" />
        </div>
      </div>
      <!-- Cyber Security -->
      <div
        class="glass-card rounded-[2.5rem] p-5 text-gray-900 flex flex-col items-center justify-between h-[300px] md:h-[380px] shadow-2xl transition-transform hover:-translate-y-2 self-start">
        <h3 class="text-[#1A56DB] font-extrabold text-[15px] md:text-base text-center leading-tight">Cyber <span
            class="text-[#E02424]">Security</span> Solutions</h3>
        <div class="relative w-full flex-grow flex items-center justify-center pt-2">
          <img alt="Cyber Security character" class="max-h-full object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuASxcwl-jNPxhCJYZ_kbaOKZH5pQK01KyKHEtEP-LIokuoNZKsjPyr6UpHNDSjmgcTdWVi5wBWfpVaBnFxYyK9OiEg5ItF6CXyAaeni7Rt_w2Gl_Jz9MJyaWcGlihFm6qNzXyi0LqaUpWFuCdafNQ1HRSiB0ACTUMOh8eJn2KPwcASqE27L0gAndmPWUcBxgHD6WfGpi_yQIWO0z6vFIQzn0th_a0cu6l5qJfa4CHSUIkXQIDFolBeWvzoIbpZjJ49Hjj08zIsNKb1N" />
        </div>
      </div>
      <!-- Cloud Infra -->
      <div
        class="glass-card rounded-[2.5rem] p-5 text-gray-900 flex flex-col items-center justify-between h-[300px] md:h-[380px] shadow-2xl transition-transform hover:-translate-y-2 md:-mt-10 lg:-mt-16">
        <h3 class="text-[#1A56DB] font-extrabold text-[15px] md:text-base text-center leading-tight">Cloud Infra <span
            class="text-[#E02424]">Solutions</span></h3>
        <div class="relative w-full flex-grow flex items-center justify-center pt-2">
          <img alt="Cloud Infra character" class="max-h-full object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCyTui7UgMoQ2vYZ3fo9RedeehBmGxNwu1EAbWAHzaw5LUKIy8eV-lHZfh2OW--kh38PqsmWtOv3EfjA3vXHqqt5KSZMj48-qA8rBhxcFsOwHN3Oq9NDmwHAl7RreQ9SseNuClIvv6uDbW1g5hvQCPXZLIA0Iq3kK3Yk9DaZsre2PkWnGEHkIMRfjYGcIFKjcM8kbhXNzJiX7UegYupn9VRLNgHYcyzkjl_oT_is4BdiroFg1eI_z7JRAQwma1WlI3ippFRkW3MWlw" />
        </div>
      </div>
      <!-- Mobile App -->
      <div
        class="glass-card rounded-[2.5rem] p-5 text-gray-900 flex flex-col items-center justify-between h-[280px] md:h-[340px] shadow-2xl transition-transform hover:-translate-y-2">
        <h3 class="text-[#1A56DB] font-extrabold text-[15px] md:text-base text-center leading-tight">Mobile App <span
            class="text-[#E02424]">Developments</span></h3>
        <div class="relative w-full flex-grow flex items-center justify-center pt-2">
          <img alt="Mobile App character" class="max-h-full object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkGD09beOQiAEEr1wIKTgSOxd7m8KmTTIckL8Li2cN7Io-tChA6jwMKLb1FQ8fVUUuLUW-4hYwQYLmdamqcxdp8x9jtDJCrQKfEMo_uHYE2zuk9Jn7IcRpIC68zzpsHNSDXZ7rxxKMUSbHMT3r03Elx78H9bDSNn3FSaAEoGSkq5yR_U-5PfweDA6zupbZh56hq-pp4K02wAaIdk9_oKnnu7UmIFBbn9e-R98eQMpT102FPwv8KcNi8XzIvQRlaaFLNCIKO80BI_UX" />
        </div>
      </div>
      <!-- eCommerce -->
      <div
        class="glass-card rounded-[2.5rem] p-5 text-gray-900 flex flex-col items-center justify-between h-[240px] md:h-[280px] shadow-2xl transition-transform hover:-translate-y-2 self-start">
        <h3 class="text-[#E02424] font-extrabold text-[15px] md:text-base text-center leading-tight">eCommerce <span
            class="text-[#1A56DB]">Solutions</span></h3>
        <div class="relative w-full flex-grow flex items-center justify-center pt-2">
          <img alt="eCommerce character" class="max-h-full object-contain"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8mudl0I7r8HwKIbxHpAPDiNxfn_eZM0CdSaXphjNzKiZfOTN1jXUDOffCvcpnbhQ6Y7nRU9tZ2LIrJSuae8oBqI2hNpnRH4-uZJw3-iXWxROx5gXRO8kEUHOX2xNbXP4r6qgtcIodwkCFpatY9vZUAHUMW4N6tB5OqoG1GstbF33jyn9uPXT7IvwJwaDgr0x3eJe7OlISL8WA--AqTrcUgpSRLkIiHEzo81oHQluxqw_Lnu-XJpga3nw40qvOWRw3sVwJvJzw72gv" />
        </div>
      </div>
    </section>
  </main>
  <!-- END: HeroSection -->
  <!-- Decorations -->
  <div
    class="fixed top-1/4 -left-20 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-[120px] pointer-events-none -z-10">
  </div>
  <div
    class="fixed bottom-1/4 -right-20 w-[500px] h-[500px] bg-orange-500/10 rounded-full blur-[120px] pointer-events-none -z-10">
  </div>
  <script data-purpose="event-handlers">
    document.getElementById('cta-button')?.addEventListener('click', () => {
      // Functional placeholder
    });
  </script>
</body>

</html>