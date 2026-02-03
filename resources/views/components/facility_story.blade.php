<section class="py-24 bg-grid border-t-2 border-black dark:border-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row justify-between mb-16 gap-8" data-aos="fade-down">
            <div class="lg:w-1/3">
                <span
                    class="inline-block bg-secondary text-white font-display text-sm px-3 py-1 rounded-full border-2 border-black mb-4">FASILITAS</span>
                <span
                    class="text-lg font-bold text-gray-800 dark:text-gray-200 block max-w-[200px] leading-tight font-display">
                    Teman Setia Rasa Anda
                </span>
            </div>
            <div class="lg:w-2/3">
                <h2
                    class="text-4xl md:text-5xl font-display font-semibold leading-tight text-[#2D3E6C] dark:text-white">
                    Selalu ada cerita baru yang kami bagikan kepada pelanggan melalui produk inovatif
                </h2>
            </div>
        </div>

        <!-- Carousel Section -->
        <div class="relative" data-aos="fade-up">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- Card 1: Tempat Estetik (Active) -->
                <div class="story-card active group relative aspect-square rounded-[2rem] border-2 border-black dark:border-white overflow-hidden cursor-pointer transition-all duration-300 ring-4 ring-[#2D3E6C] ring-offset-2 z-10"
                    data-index="0">
                    <img alt="Tempat Estetik"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                        src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=600&auto=format&fit=crop" />
                    <div
                        class="absolute top-6 left-6 pr-4 pl-1 py-1 rounded-full flex items-center gap-2 shadow-brutalist transition-colors duration-300 bg-[#2D3E6C] border-2 border-black z-10">
                        <div
                            class="rounded-full p-1.5 flex items-center justify-center transition-colors duration-300 bg-white border-2 border-black">
                            <span class="material-icons text-sm text-[#2D3E6C]">photo_camera</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-white font-mono">Tempat
                            Estetik</span>
                    </div>
                </div>

                <!-- Card 2: Pelayanan Ramah (Default/Inactive) -->
                <div class="story-card group relative aspect-square rounded-[2rem] border-2 border-black dark:border-white overflow-hidden cursor-pointer transition-all duration-300 opacity-80 hover:opacity-100 bg-white"
                    data-index="1">
                    <img alt="Pelayanan Ramah"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105 filter grayscale group-hover:grayscale-0"
                        src="https://images.unsplash.com/photo-1542181961-9590d0c79dab?q=80&w=600&auto=format&fit=crop" />
                    <div
                        class="absolute top-6 left-6 pr-4 pl-1 py-1 rounded-full flex items-center gap-2 shadow-brutalist transition-colors duration-300 bg-white border-2 border-black z-10">
                        <div
                            class="rounded-full p-1.5 flex items-center justify-center transition-colors duration-300 bg-[#2D3E6C] border-2 border-black">
                            <span class="material-icons text-sm text-white">sentiment_satisfied_alt</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#2D3E6C] font-mono">Pelayanan
                            Ramah</span>
                    </div>
                </div>

                <!-- Card 3: Alat Modern (Default/Inactive) -->
                <div class="story-card group relative aspect-square rounded-[2rem] border-2 border-black dark:border-white overflow-hidden cursor-pointer transition-all duration-300 opacity-80 hover:opacity-100 bg-white"
                    data-index="2">
                    <img alt="Alat Modern"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105 filter grayscale group-hover:grayscale-0"
                        src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=600&auto=format&fit=crop" />
                    <div
                        class="absolute top-6 left-6 pr-4 pl-1 py-1 rounded-full flex items-center gap-2 shadow-brutalist transition-colors duration-300 bg-white border-2 border-black z-10">
                        <div
                            class="rounded-full p-1.5 flex items-center justify-center transition-colors duration-300 bg-[#2D3E6C] border-2 border-black">
                            <span class="material-icons text-sm text-white">coffee</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#2D3E6C] font-mono">Alat
                            Modern</span>
                    </div>
                </div>
            </div>

            <!-- Controls & Description -->
            <div class="flex flex-col max-w-[800px] lg:flex-row justify-between items-start gap-8 mt-4">
                <div class="flex gap-4">
                    <button id="story-prev-btn"
                        class="w-14 h-14 rounded-full bg-white border-2 border-black flex items-center justify-center hover:bg-gray-100 shadow-brutalist hover:shadow-none hover:translate-y-1 transition-all text-black">
                        <span class="material-icons text-2xl">arrow_back</span>
                    </button>
                    <button id="story-next-btn"
                        class="w-14 h-14 rounded-full bg-white border-2 border-black flex items-center justify-center hover:bg-gray-100 shadow-brutalist hover:shadow-none hover:translate-y-1 transition-all text-black">
                        <span class="material-icons text-2xl">arrow_forward</span>
                    </button>
                </div>
                <div class="text-right w-full lg:w-auto">
                    <h3 id="story-heading"
                        class="text-2xl font-bold font-display text-[#2D3E6C] dark:text-white mb-3 min-h-[32px]">
                        Nikmati suasana nyaman dan estetik
                    </h3>
                    <p id="story-description"
                        class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed font-mono min-h-[40px]">
                        Ruang yang tidak hanya nyaman tapi juga memanjakan mata, sempurna untuk media sosial Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const stories = [
            {
                title: "Tempat Estetik",
                heading: "Nikmati suasana nyaman dan estetik",
                description: "Ruang yang tidak hanya nyaman tapi juga memanjakan mata, sempurna untuk media sosial Anda."
            },
            {
                title: "Pelayanan Ramah",
                heading: "Tingkatkan mood dengan staf ramah kami!",
                description: "Baik mencari energi baru, keseruan, atau kebahagiaan kecil, kami siap melayani Anda sepenuh hati."
            },
            {
                title: "Alat Modern",
                heading: "Nikmati kopi terbaik dengan alat modern",
                description: "Peralatan seduh canggih kami memastikan setiap cangkir sempurna, mengeluarkan rasa terbaik biji kopi kami."
            }
        ];

        let activeIndex = 0;
        const cards = document.querySelectorAll('.story-card');
        const headingEl = document.getElementById('story-heading');
        const descEl = document.getElementById('story-description');
        const prevBtn = document.getElementById('story-prev-btn');
        const nextBtn = document.getElementById('story-next-btn');

        const updateUI = () => {
            // Update Text
            headingEl.textContent = stories[activeIndex].heading;
            descEl.textContent = stories[activeIndex].description;

            // Update Cards Visuals
            cards.forEach((card, index) => {
                const img = card.querySelector('img');
                const badge = card.querySelector('.absolute');
                const badgeIconBg = badge.querySelector('div');
                const badgeIcon = badge.querySelector('.material-icons');
                const badgeText = badge.querySelector('span:last-child');

                // Clear state classes
                card.classList.remove('active', 'ring-4', 'ring-[#2D3E6C]', 'ring-offset-2', 'z-10', 'opacity-80', 'hover:opacity-100');
                img.classList.remove('grayscale', 'group-hover:grayscale-0');

                // Remove ALL potential colors from previous states to prevent conflicts
                badge.classList.remove('bg-[#2D3E6C]', 'bg-white', 'bg-[#FAF9F6]');
                badgeIconBg.classList.remove('bg-white', 'bg-[#2D3E6C]');
                badgeIcon.classList.remove('text-[#2D3E6C]', 'text-white');
                badgeText.classList.remove('text-white', 'text-[#2D3E6C]');

                if (index === activeIndex) {
                    // Active State
                    card.classList.add('active', 'ring-4', 'ring-[#2D3E6C]', 'ring-offset-2', 'z-10');
                    // Badge: Blue Pill
                    badge.classList.add('bg-[#2D3E6C]');
                    // Icon Circle: White
                    badgeIconBg.classList.add('bg-white');
                    // Icon: Blue
                    badgeIcon.classList.add('text-[#2D3E6C]');
                    // Text: White
                    badgeText.classList.add('text-white');

                } else {
                    // Inactive State
                    card.classList.add('opacity-80', 'hover:opacity-100');
                    img.classList.add('grayscale', 'group-hover:grayscale-0');

                    // Badge: White Pill
                    badge.classList.add('bg-white');
                    // Icon Circle: Blue
                    badgeIconBg.classList.add('bg-[#2D3E6C]');
                    // Icon: White
                    badgeIcon.classList.add('text-white');
                    // Text: Blue
                    badgeText.classList.add('text-[#2D3E6C]');
                }
            });
        };

        const handlePrev = () => {
            activeIndex = activeIndex === 0 ? stories.length - 1 : activeIndex - 1;
            updateUI();
        };

        const handleNext = () => {
            activeIndex = activeIndex === stories.length - 1 ? 0 : activeIndex + 1;
            updateUI();
        };

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', handlePrev);
            nextBtn.addEventListener('click', handleNext);

            cards.forEach((card, index) => {
                card.addEventListener('click', () => {
                    activeIndex = index;
                    updateUI();
                });
            });
        }
    });
</script>