<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        animation: marquee 30s linear infinite;
    }

    /* Pause animation on hover for better UX */
    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>

<div
    class="relative w-full overflow-hidden bg-[#F5F2EA] border-t-2 border-black dark:bg-background-dark py-40 dark:border-white">
    <!-- Overlay gradients to fade edges -->
    <div
        class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-[#F5F2EA] dark:from-background-dark to-transparent z-20 pointer-events-none">
    </div>
    <div
        class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-[#F5F2EA] dark:from-background-dark to-transparent z-20 pointer-events-none">
    </div>

    <div class="flex animate-marquee w-max gap-12 items-center px-4 pl-8">
        <!-- Original Set -->
        <div class="flex gap-12 items-center">
            <!-- Image 1: Blue Shadow -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-secondary rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 1">
                    <div
                        class="absolute top-4 right-4 bg-white border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #COFFEE
                    </div>
                </div>
            </div>

            <!-- Image 2: Red Shadow -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-accent-red rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 2">
                    <div
                        class="absolute bottom-4 left-4 bg-accent-green text-black border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #VIBES
                    </div>
                </div>
            </div>

            <!-- Image 3: Green Shadow -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-accent-green rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 3">
                    <div
                        class="absolute top-4 left-4 bg-primary text-white border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #FRESH
                    </div>
                </div>
            </div>

            <!-- Image 4: Primary Shadow -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-primary rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 4">
                    <div
                        class="absolute bottom-4 right-4 bg-secondary text-white border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #MOMENTS
                    </div>
                </div>
            </div>

            <!-- Image 5: Black Shadow -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-black rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 5">
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#F5F2EA] border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #DAMARASHA
                    </div>
                </div>
            </div>
        </div>

        <!-- Duplicated Set for infinite loop -->
        <div class="flex gap-12 items-center">
            <!-- Image 1 -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-secondary rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 1">
                    <div
                        class="absolute top-4 right-4 bg-white border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #COFFEE
                    </div>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-accent-red rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 2">
                    <div
                        class="absolute bottom-4 left-4 bg-accent-green text-black border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #VIBES
                    </div>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-accent-green rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 3">
                    <div
                        class="absolute top-4 left-4 bg-primary text-white border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #FRESH
                    </div>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-primary rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 4">
                    <div
                        class="absolute bottom-4 right-4 bg-secondary text-white border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #MOMENTS
                    </div>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="w-[280px] h-[350px] flex-shrink-0 relative group cursor-pointer">
                <div
                    class="absolute inset-0 bg-black rounded-[2rem] translate-x-3 translate-y-3 border-2 border-black transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2">
                </div>
                <div class="absolute inset-0 bg-white rounded-[2rem] border-2 border-black overflow-hidden z-10">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=600&auto=format&fit=crop"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300 hover:scale-105"
                        alt="Gallery 5">
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#F5F2EA] border-2 border-black px-3 py-1 font-mono text-xs font-bold rounded-full shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        #DAMARASHA
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>