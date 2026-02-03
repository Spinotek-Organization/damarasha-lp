<section class="py-24 bg-white dark:bg-background-dark border-t-2 border-black dark:border-white"
    id="menu-grid-section">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col items-center mb-16">
            <h2 class="font-display text-5xl md:text-6xl mb-10 text-center" data-aos="fade-down">Beragam Menu Kami</h2>
            <div class="flex flex-wrap justify-center gap-3 md:gap-4 font-mono font-bold text-sm" id="menu-filters"
                data-aos="fade-up">
                <button data-filter="all"
                    class="filter-btn active flex items-center gap-2 bg-primary text-white border-2 border-black pl-2 pr-6 py-2 rounded-full shadow-brutalist hover:translate-y-1 hover:shadow-none transition-all">
                    <div
                        class="bg-white text-black rounded-full p-1 flex items-center justify-center border-2 border-black">
                        <span class="material-icons text-sm">grid_view</span>
                    </div>
                    Semua
                </button>
                <button data-filter="Kopi"
                    class="filter-btn flex items-center gap-2 bg-white text-black border-2 border-black pl-2 pr-6 py-2 rounded-full shadow-brutalist hover:bg-gray-100 hover:translate-y-1 hover:shadow-none transition-all">
                    <div class="bg-gray-200 rounded-full p-1 flex items-center justify-center border-2 border-black">
                        <span class="material-icons text-sm">coffee</span>
                    </div>
                    Kopi
                </button>
                <button data-filter="Non-Kopi"
                    class="filter-btn flex items-center gap-2 bg-white text-black border-2 border-black pl-2 pr-6 py-2 rounded-full shadow-brutalist hover:bg-gray-100 hover:translate-y-1 hover:shadow-none transition-all">
                    <div class="bg-gray-200 rounded-full p-1 flex items-center justify-center border-2 border-black">
                        <span class="material-icons text-sm">local_drink</span>
                    </div>
                    Non-Kopi
                </button>
                <button data-filter="Spesial"
                    class="filter-btn flex items-center gap-2 bg-white text-black border-2 border-black pl-2 pr-6 py-2 rounded-full shadow-brutalist hover:bg-gray-100 hover:translate-y-1 hover:shadow-none transition-all">
                    <div class="bg-gray-200 rounded-full p-1 flex items-center justify-center border-2 border-black">
                        <span class="material-icons text-sm">stars</span>
                    </div>
                    Spesial
                </button>
                <button data-filter="Mocktail"
                    class="filter-btn flex items-center gap-2 bg-white text-black border-2 border-black pl-2 pr-6 py-2 rounded-full shadow-brutalist hover:bg-gray-100 hover:translate-y-1 hover:shadow-none transition-all">
                    <div class="bg-gray-200 rounded-full p-1 flex items-center justify-center border-2 border-black">
                        <span class="material-icons text-sm">wine_bar</span>
                    </div>
                    Mocktail
                </button>
                <button data-filter="Kue"
                    class="filter-btn flex items-center gap-2 bg-white text-black border-2 border-black pl-2 pr-6 py-2 rounded-full shadow-brutalist hover:bg-gray-100 hover:translate-y-1 hover:shadow-none transition-all">
                    <div class="bg-gray-200 rounded-full p-1 flex items-center justify-center border-2 border-black">
                        <span class="material-icons text-sm">cake</span>
                    </div>
                    Kue
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12 min-h-[400px]" id="menu-grid">
            <!-- Brown Sugar -->
            <div class="menu-card group cursor-pointer" data-category="Kopi" data-aos="fade-up">
                <div
                    class="aspect-square bg-[#EFEDEA] border-2 border-black rounded-3xl overflow-hidden mb-4 relative shadow-brutalist transition-all duration-300 group-hover:translate-x-1 group-hover:translate-y-1 group-hover:shadow-none">
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop"
                        alt="Brown Sugar"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex flex-col px-2">
                    <span class="font-mono text-xs font-bold mb-1 uppercase text-gray-500 tracking-wide">Kopi</span>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-display text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            Brown Sugar</h3>
                        <span
                            class="font-mono text-lg font-bold border-2 border-black bg-secondary text-white px-2 py-0.5 rounded-lg transform -rotate-2">IDR
                            25k</span>
                    </div>
                </div>
            </div>

            <!-- Asian Dolce -->
            <div class="menu-card group cursor-pointer" data-category="Kopi" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="aspect-square bg-[#EFEDEA] border-2 border-black rounded-3xl overflow-hidden mb-4 relative shadow-brutalist transition-all duration-300 group-hover:translate-x-1 group-hover:translate-y-1 group-hover:shadow-none">
                    <img src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?q=80&w=600&auto=format&fit=crop"
                        alt="Asian Dolce"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex flex-col px-2">
                    <span class="font-mono text-xs font-bold mb-1 uppercase text-gray-500 tracking-wide">Kopi</span>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-display text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            Asian Dolce</h3>
                        <span
                            class="font-mono text-lg font-bold border-2 border-black bg-white px-2 py-0.5 rounded-lg transform rotate-1">IDR
                            28k</span>
                    </div>
                </div>
            </div>

            <!-- Café Latte -->
            <div class="menu-card group cursor-pointer" data-category="Kopi" data-aos="fade-up" data-aos-delay="200">
                <div
                    class="aspect-square bg-[#EFEDEA] border-2 border-black rounded-3xl overflow-hidden mb-4 relative shadow-brutalist transition-all duration-300 group-hover:translate-x-1 group-hover:translate-y-1 group-hover:shadow-none">
                    <img src="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?q=80&w=600&auto=format&fit=crop"
                        alt="Café Latte"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex flex-col px-2">
                    <span class="font-mono text-xs font-bold mb-1 uppercase text-gray-500 tracking-wide">Kopi</span>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-display text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            Café Latte</h3>
                        <span
                            class="font-mono text-lg font-bold border-2 border-black bg-accent-green text-black px-2 py-0.5 rounded-lg transform -rotate-1">IDR
                            28k</span>
                    </div>
                </div>
            </div>

            <!-- Latte Cappu -->
            <div class="menu-card group cursor-pointer" data-category="Kopi" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="aspect-square bg-[#EFEDEA] border-2 border-black rounded-3xl overflow-hidden mb-4 relative shadow-brutalist transition-all duration-300 group-hover:translate-x-1 group-hover:translate-y-1 group-hover:shadow-none">
                    <img src="https://images.unsplash.com/photo-1534040385115-33dcb3acba5b?q=80&w=600&auto=format&fit=crop"
                        alt="Latte Cappu"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex flex-col px-2">
                    <span class="font-mono text-xs font-bold mb-1 uppercase text-gray-500 tracking-wide">Kopi</span>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-display text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            Latte Cappu</h3>
                        <span
                            class="font-mono text-lg font-bold border-2 border-black bg-white px-2 py-0.5 rounded-lg transform rotate-2">IDR
                            28k</span>
                    </div>
                </div>
            </div>

            <!-- Dalgonna -->
            <div class="menu-card group cursor-pointer" data-category="Kopi" data-aos="fade-up" data-aos-delay="400">
                <div
                    class="aspect-square bg-[#EFEDEA] border-2 border-black rounded-3xl overflow-hidden mb-4 relative shadow-brutalist transition-all duration-300 group-hover:translate-x-1 group-hover:translate-y-1 group-hover:shadow-none">
                    <img src="https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?q=80&w=600&auto=format&fit=crop"
                        alt="Dalgonna"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex flex-col px-2">
                    <span class="font-mono text-xs font-bold mb-1 uppercase text-gray-500 tracking-wide">Kopi</span>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-display text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            Dalgonna</h3>
                        <span
                            class="font-mono text-lg font-bold border-2 border-black bg-accent-red text-white px-2 py-0.5 rounded-lg transform -rotate-1">IDR
                            28k</span>
                    </div>
                </div>
            </div>

            <!-- Creamy Matcha -->
            <div class="menu-card group cursor-pointer" data-category="Non-Kopi" data-aos="fade-up"
                data-aos-delay="500">
                <div
                    class="aspect-square bg-[#EFEDEA] border-2 border-black rounded-3xl overflow-hidden mb-4 relative shadow-brutalist transition-all duration-300 group-hover:translate-x-1 group-hover:translate-y-1 group-hover:shadow-none">
                    <img src="https://images.unsplash.com/photo-1505252585461-04db1eb84625?q=80&w=600&auto=format&fit=crop"
                        alt="Creamy Matcha"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex flex-col px-2">
                    <span class="font-mono text-xs font-bold mb-1 uppercase text-gray-500 tracking-wide">Non-Kopi</span>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-display text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            Creamy Matcha</h3>
                        <span
                            class="font-mono text-lg font-bold border-2 border-black bg-primary text-black px-2 py-0.5 rounded-lg transform rotate-1">IDR
                            35k</span>
                    </div>
                </div>
            </div>

            <!-- Hidden Empty State -->
            <div id="no-items" class="hidden col-span-1 sm:col-span-2 lg:col-span-3 text-center py-12">
                <p class="font-display text-2xl font-bold text-gray-400">Belum ada menu di kategori ini.</p>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const menuCards = document.querySelectorAll('.menu-card');
        const noItemsMsg = document.getElementById('no-items');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update buttons
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white');
                    b.classList.add('bg-white', 'text-black');
                });
                btn.classList.remove('bg-white', 'text-black');
                btn.classList.add('bg-primary', 'text-white');

                const filter = btn.getAttribute('data-filter');
                let found = false;

                menuCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block';
                        found = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (noItemsMsg) {
                    if (!found) {
                        noItemsMsg.classList.remove('hidden');
                    } else {
                        noItemsMsg.classList.add('hidden');
                    }
                }
            });
        });
    });
</script>