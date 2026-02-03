<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Damarasha Coffee and Space</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Space+Mono:ital,wght@0,400;0,700;1,400&amp;family=Inter:wght@400;600;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#FFDE00", // The vibrant yellow
                        secondary: "#4C8BF5", // The bright blue
                        "accent-red": "#E85D4E",
                        "accent-green": "#A3D145",
                        "background-light": "#FAF9F6", // Off-white cream
                        "background-dark": "#121212",
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#1E1E1E",
                        "border-dark": "#333333",
                        "border-light": "#E5E5E5",
                    },
                    fontFamily: {
                        display: ["'Anton'", "sans-serif"],
                        mono: ["'Space Mono'", "monospace"],
                        sans: ["'Inter'", "sans-serif"],
                    },
                    borderWidth: {
                        '3': '3px',
                    },
                    boxShadow: {
                        'brutalist': '4px 4px 0px 0px rgba(0,0,0,1)',
                        'brutalist-sm': '2px 2px 0px 0px rgba(0,0,0,1)',
                        'brutalist-hover': '2px 2px 0px 0px rgba(0,0,0,1)',
                        'brutalist-dark': '4px 4px 0px 0px rgba(255,255,255,1)',
                    },
                    borderRadius: {
                        'blob': '60% 40% 30% 70% / 60% 30% 70% 40%',
                        'blob-2': '30% 70% 70% 30% / 30% 30% 70% 70%',
                    }
                },
            },
        };
    </script>
    <style>
        .bg-grid {
            background-image:
                linear-gradient(to right, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .dark .bg-grid {
            background-image:
                linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .clip-flower {
            clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-black dark:text-white font-sans overflow-x-hidden">
    <header
        class="sticky top-0 z-50 bg-background-light dark:bg-background-dark border-b-2 border-black dark:border-white transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between relative">
            <div class="flex-shrink-0 flex flex-row items-center gap-2">
                <img src="/images/brand-logo.png" alt="" class="w-10 h-10">
                <a class="font-display text-4xl tracking-tighter uppercase" href="#">Damarasha</a>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-8 font-mono text-sm font-bold tracking-tight">
                <a class="hover:underline decoration-2 underline-offset-4" href="#home">Beranda</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#menu">Menu</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#facilities">Fasilitas</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#about">Tentang Kami</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#contact">Kontak</a>
            </nav>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 text-black dark:text-white focus:outline-none">
                <span class="material-icons text-3xl">menu</span>
            </button>
        </div>

        <!-- Mobile Nav Menu (Hidden by default) -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-16 left-0 w-full bg-background-light dark:bg-background-dark border-b-2 border-black dark:border-white shadow-brutalist z-40">
            <nav class="flex flex-col p-4 space-y-4 font-mono text-sm font-bold tracking-tight text-center">
                <a class="block py-2 hover:bg-secondary hover:text-white border-2 border-transparent hover:border-black rounded-lg transition-all"
                    href="#home">Beranda</a>
                <a class="block py-2 hover:bg-secondary hover:text-white border-2 border-transparent hover:border-black rounded-lg transition-all"
                    href="#menu">Menu</a>
                <a class="block py-2 hover:bg-secondary hover:text-white border-2 border-transparent hover:border-black rounded-lg transition-all"
                    href="#facilities">Fasilitas</a>
                <a class="block py-2 hover:bg-secondary hover:text-white border-2 border-transparent hover:border-black rounded-lg transition-all"
                    href="#about">Tentang Kami</a>
                <a class="block py-2 hover:bg-secondary hover:text-white border-2 border-transparent hover:border-black rounded-lg transition-all"
                    href="#contact">Kontak</a>
            </nav>
        </div>
    </header>
    <section id="home" class="bg-grid relative pt-16 pb-24 overflow-hidden">
        <div class="max-w-8xl mx-auto px-4 text-center relative z-10">
            <h1 class="font-display text-5xl md:text-8xl lg:text-9xl uppercase leading-relaxed tracking-tight mb-4"
                data-aos="fade-up">
                Nikmati Signature<br /> <span class="relative inline-block">DAMARASHA <svg
                        class="absolute -bottom-0 w-full h-2 text-primary z-[-1]" preserveAspectRatio="none"
                        viewBox="0 0 100 10">
                        <path d="M0 5 Q 50 10 100 5" fill="none" stroke="#2D3E6C" stroke-width="8"></path>
                    </svg></span>
                <br /> Coffe & Space
            </h1>
            <p class="font-mono text-sm md:text-base mt-6 max-w-2xl mx-auto bg-white dark:bg-gray-800 border-2 border-black dark:border-white inline-block px-4 py-2 rounded-full shadow-brutalist dark:shadow-brutalist-dark"
                data-aos="fade-up" data-aos-delay="200">
                Temukan perpaduan sempurna antara kenyamanan dan cita rasa :)
            </p>
            <div class="relative mt-16 h-[300px] md:h-[400px] max-w-5xl mx-auto">
                <div
                    class="absolute left-2 md:left-10 top-2 md:top-10 transform -rotate-6 w-28 md:w-56 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-10">
                    <img alt="Barista smiling"
                        class="w-full h-20 md:h-32 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEi_IvULdY_5lXAnZQ70p2iP0AIlj81AcHiStBmOC5SA358kA5eP5wI-ikOzHGyWhMD-LvEz3LIHRxfrQxPd5bf7IvZdjujbq2656qM-7fqspjbhUYM17RNkPTI6JXGADhlD1mYKql-IkVvJ_JB8xU6eGNjLON7PxnJe8cKjXrgmBVIz8OMHU3p-pCjqqdmZbXKZc-bTlloOci-pbuHJ88jMTK2FkLuAbeLNxWksF5f6y0XWp20BTVS5rD2RnmXvXoMQOq59NrKOY" />
                    <div
                        class="absolute -top-8 -right-8 md:-top-12 md:-right-12 bg-blue-200 border-2 border-black text-[10px] md:text-xs font-mono p-2 rounded-xl rounded-bl-none transform rotate-12 max-w-[100px] md:max-w-[120px] shadow-sm">
                        Kopi Murni & Berkualitas.
                    </div>
                </div>
                <div
                    class="absolute left-1/4 bottom-0 transform rotate-3 w-32 md:w-64 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-20">
                    <img alt="Coffee Cup"
                        class="w-full h-24 md:h-40 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop" />
                </div>
                <div
                    class="hidden md:block absolute right-1/4 top-5 transform -rotate-3 w-44 md:w-60 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-10">
                    <img alt="Team in Cafe"
                        class="w-full h-36 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeZhoqS1k18WjieJbKWahAE-_90VTsDlJvAZzksE5MJSlZ7FB30Zv7SQiZrFhORYx1pnXRTjKBhocgVArydKhmzS2aHaDSHN5C03ZvKRfhsdcvOXwUy_ePGtGZSaa6-qOopwSoiKyvljRB-PljCMfdrsZlFphBQg5mjVFlZHkUG9mNh1x2jJUUCLbscm46ilcRWziOKYDYRhz6ZElktryEAJCMHcCuFTkigJ9NiLayGRw8rWbrtu30Q2uhtspHEs9iYnsuc6jbXxI" />
                </div>
                <div
                    class="absolute right-2 bottom-10 transform rotate-6 w-28 md:w-56 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-20">
                    <img alt="Coffee Latte Art"
                        class="w-full h-20 md:h-32 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?q=80&w=600&auto=format&fit=crop" />
                    <span class="absolute -bottom-4 -left-4 text-3xl md:text-4xl">🙂</span>
                </div>
                <span class="absolute top-0 right-1/3 text-4xl animate-bounce">✨</span>
            </div>
        </div>
    </section>
    <section id="menu"
        class="py-20 bg-background-light dark:bg-background-dark relative border-t-2 border-black dark:border-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-secondary text-white font-display text-lg px-4 py-1 rounded-full border-2 border-black transform -rotate-2 mb-4 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">MENU
                    TERBAIK</span>
                <h2 class="font-display text-5xl md:text-6xl mb-4">Nikmati Rasa Terbaik!</h2>
                <p class="font-mono text-sm max-w-lg mx-auto">Menu pilihan dari biji kopi terbaik dan bahan berkualitas
                    untuk pengalaman Anda.</p>
            </div>
            <div class="relative group">
                <button id="prev-btn"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-30 md:-ml-12 bg-white dark:bg-surface-dark border-2 border-black dark:border-white p-3 rounded-full hover:bg-gray-100 shadow-brutalist dark:shadow-brutalist-dark transition-transform active:scale-95">
                    <span class="material-icons">arrow_back</span>
                </button>
                <button id="next-btn"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-30 md:-mr-12 bg-secondary text-white border-2 border-black dark:border-white p-3 rounded-full hover:bg-blue-600 shadow-brutalist dark:shadow-brutalist-dark transition-transform active:scale-95">
                    <span class="material-icons">arrow_forward</span>
                </button>

                <!-- Gradients -->
                <div
                    class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-background-light via-background-light/80 to-transparent dark:from-background-dark dark:via-background-dark/80 z-20 pointer-events-none rounded-l-3xl">
                </div>
                <div
                    class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-background-light via-background-light/80 to-transparent dark:from-background-dark dark:via-background-dark/80 z-20 pointer-events-none rounded-r-3xl">
                </div>

                <div id="menu-container"
                    class="flex overflow-x-auto gap-12 py-12 px-4 no-scrollbar snap-x snap-mandatory justify-start scroll-smooth">
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Brown Sugar"
                            class="h-48 w-48 object-cover rounded-full mb-4 transform rotate-3 border-2 border-black"
                            src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Brown Sugar<br />(Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 25k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Asian Dolce"
                            class="h-48 w-48 object-cover rounded-full mb-4 filter drop-shadow-lg border-2 border-black"
                            src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Asian Dolce<br />(Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 28k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Café Latte"
                            class="h-48 w-48 object-cover rounded-full mb-4 transform -rotate-2 border-2 border-black"
                            src="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Café Latte<br />(Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 28k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Americano"
                            class="h-48 w-48 object-cover rounded-full mb-4 transform rotate-1 border-2 border-black"
                            src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Americano<br />(Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 20k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Cappuccino"
                            class="h-48 w-48 object-cover rounded-full mb-4 transform -rotate-3 border-2 border-black"
                            src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Cappuccino<br />(Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 28k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Matcha Latte"
                            class="h-48 w-48 object-cover rounded-full mb-4 transform rotate-2 border-2 border-black"
                            src="https://images.unsplash.com/photo-1515825838458-f2a94b20105a?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Matcha
                                Latte<br />(Non-Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 30k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="menu-item group/item snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transition-all duration-300 transform hover:scale-105 hover:bg-secondary hover:shadow-brutalist hover:z-20 hover:opacity-100 cursor-pointer">
                        <img alt="Red Velvet"
                            class="h-48 w-48 object-cover rounded-full mb-4 transform -rotate-1 border-2 border-black"
                            src="https://images.unsplash.com/photo-1616486029423-aaa478965c97?q=80&w=600&auto=format&fit=crop" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span class="group-hover/item:text-white transition-colors">Red
                                Velvet<br />(Non-Kopi)</span>
                            <span class="group-hover/item:text-white transition-colors">IDR 28k</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2 group-hover/item:bg-primary group-hover/item:text-black group-hover/item:border-black group-hover/item:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.menu_grid')

    <section id="about"
        class="py-24 bg-[#F5F2EA] dark:bg-surface-dark border-t-2 border-black dark:border-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative h-[400px] md:h-[500px]">
                <img alt="Meeting Room"
                    class="absolute left-0 bottom-0 w-3/4 border-2 border-black rounded-lg shadow-brutalist z-10"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKpxWeRklaPdaNTFUrXwrdSZ6o_YCVM_MQTuqZy371tqQaSWvw97WbOw0kdWItOOAyzGoxMKw-EloDCkE319Ts3PMNWM5QgfMpwd13eNa75fHcHqa1pNP2U01m6j5gyeCKkj26H5Wr7Kd-geAB_3XqWIpuaZI2PhWe668QpcBy7EXBVSnZQ0KVd7c_sbRYtmNx1cXavpXZtZx5g2AK9AN8c8OlerjRR-UtIzWWqSnGmGt80ccFnc7C68AU9sADdFQ0gGpjvhQg-BI" />
                <div
                    class="absolute top-0 right-10 w-1/3 transform -rotate-12 filter drop-shadow-xl z-20 border-2 border-black bg-white p-2">
                    <img alt="Coffee Beans" class="w-full object-cover grayscale"
                        src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?q=80&w=600&auto=format&fit=crop" />
                </div>
                <div
                    class="absolute top-1/4 right-0 bg-green-500 text-black font-bold font-display rounded-full p-6 text-center transform rotate-12 border-2 border-black shadow-brutalist z-30 leading-tight">
                    Cozy &<br />Fun!
                </div>
                <span class="absolute top-10 left-10 text-5xl text-primary animate-pulse">✨</span>
            </div>
            <div>
                <span
                    class="inline-block bg-secondary text-white font-display text-sm px-3 py-1 rounded-full border-2 border-black transform rotate-2 mb-6 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">KENAPA
                    DAMARASHA?</span>
                <h2 class="font-display text-5xl md:text-7xl mb-6 leading-tight">Lebih dari<br />Sekedar Kopi</h2>
                <p class="font-mono text-sm mb-8">Kami percaya bahwa setiap cangkir kopi memiliki cerita, dan setiap
                    ruang memiliki jiwa.</p>
                <ul class="space-y-4 font-mono text-sm">
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Biji Kopi Pilihan Petani Lokal</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Fasilitas Wifi Super Cepat</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Ruang Meeting Private & Nyaman</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Area Parkir Luas</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Suasana Homey & Estetik</span>
                    </li>
                </ul>
                <button
                    class="mt-8 bg-primary text-black font-display text-lg px-8 py-3 rounded-full border-2 border-black shadow-brutalist hover:translate-y-1 hover:shadow-none transition-all">
                    Lihat Menu
                </button>
            </div>
        </div>
    </section>

    @include('components.facilities_section')

    @include('components.facility_story')

    @include('components.event_section')

    <section id="contact"
        class="py-24 bg-background-light dark:bg-background-dark border-t-2 border-black dark:border-white">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-12 gap-12">
            <div class="md:col-span-4 flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block bg-secondary text-white font-display text-sm px-3 py-1 rounded-full border-2 border-black transform -rotate-3 mb-4">LOKASI</span>
                    <h2 class="font-display text-6xl leading-none mb-6">Kunjungi Kami</h2>
                </div>
                <div class="mt-12">
                    <h3 class="font-display text-3xl mb-4">Butuh Info Lebih?</h3>
                    <button
                        class="bg-white dark:bg-surface-dark font-bold font-mono px-6 py-3 rounded-full border-2 border-black dark:border-white shadow-brutalist dark:shadow-brutalist-dark hover:translate-y-1 hover:shadow-none transition-all">
                        Hubungi Kami
                    </button>
                </div>
            </div>
            <div class="md:col-span-8 space-y-4">
                <div
                    class="bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group" open="">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">Dimana Lokasi Damarasha?</span>
                            <span
                                class="bg-primary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-black">
                                <span class="material-icons text-sm font-bold">remove</span>
                            </span>
                        </summary>
                        <p class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                            Jl. Cangkring Indah 1 No.17, Karangsari, Wedomartani, Kec. Ngemplak, Sleman, Yogyakarta
                            55584.
                        </p>
                    </details>
                </div>
                <div
                    class="bg-[#F5F2EA] dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">Jam berapa buka?</span>
                            <span
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-white group-open:bg-primary group-open:text-black">
                                <span class="material-icons text-sm font-bold block group-open:hidden">add</span>
                                <span class="material-icons text-sm font-bold hidden group-open:block">remove</span>
                            </span>
                        </summary>
                        <p
                            class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed hidden group-open:block">
                            Kami buka setiap hari dari pukul 09:00 - 23:00 WIB.
                        </p>
                    </details>
                </div>
                <div
                    class="bg-[#F5F2EA] dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">Apakah ada Wifi?</span>
                            <span
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-white group-open:bg-primary group-open:text-black">
                                <span class="material-icons text-sm font-bold block group-open:hidden">add</span>
                                <span class="material-icons text-sm font-bold hidden group-open:block">remove</span>
                            </span>
                        </summary>
                        <p
                            class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed hidden group-open:block">
                            Tentu! Kami menyediakan Wifi super cepat gratis bagi pengunjung.
                        </p>
                    </details>
                </div>
                <div
                    class="bg-[#F5F2EA] dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">Bisa untuk reservasi?</span>
                            <span
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-white group-open:bg-primary group-open:text-black">
                                <span class="material-icons text-sm font-bold block group-open:hidden">add</span>
                                <span class="material-icons text-sm font-bold hidden group-open:block">remove</span>
                            </span>
                        </summary>
                        <p
                            class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed hidden group-open:block">
                            Ya, kami menerima reservasi untuk meeting room atau acara khusus. Hubungi kami untuk info
                            lebih lanjut.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    @include('components.gallery_marquee')

    <footer
        class="bg-background-light dark:bg-background-dark border-t-2 pt-20 border-black dark:border-white relative overflow-hidden">
        <div class="py-24 text-center relative max-w-4xl mx-auto px-4">
            <h2 class="font-display text-4xl md:text-5xl uppercase mb-8 relative z-10">
                Rasakan Kenikmatan Kopi Premium dan Suasana Nyaman!
            </h2>
            <div
                class="absolute top-0 left-0 md:left-10 transform -rotate-12 bg-accent-red text-white font-mono text-xs p-4 rounded-[50%] border-2 border-black shadow-brutalist z-0 hidden md:flex items-center justify-center w-24 h-24 text-center leading-tight">
                Authentic Taste
            </div>
            <div
                class="absolute top-10 right-0 md:right-10 transform rotate-12 bg-[#76A882] text-black font-mono font-bold text-xs px-6 py-3 rounded-[40%_60%_60%_40%/50%] border-2 border-black shadow-brutalist z-0 hidden md:block">
                Cozy Space
            </div>
            <div class="absolute top-1/2 left-10 text-4xl text-primary animate-spin-slow hidden md:block">
                ✦
            </div>
            <form class="flex flex-col md:flex-row justify-center gap-4 relative z-10 max-w-lg mx-auto">
                <input
                    class="flex-1 rounded-full border-2 border-black dark:border-white bg-transparent px-6 py-3 font-mono focus:ring-0 focus:border-black placeholder-gray-500 dark:placeholder-gray-400"
                    placeholder="Email address" type="email" />
                <button
                    class="bg-primary text-black font-bold font-mono px-8 py-3 rounded-full border-2 border-black shadow-brutalist hover:translate-y-1 hover:shadow-none transition-all uppercase"
                    type="button">
                    Dapatkan Info
                </button>
            </form>
        </div>
        <div class="flex justify-between items-center overflow-hidden pb-12 gap-4 px-4">
            <div class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob overflow-hidden border-2 border-black rotate-3">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop" />
            </div>
            <div
                class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob-2 overflow-hidden border-2 border-black -rotate-6 transform translate-y-4">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?q=80&w=600&auto=format&fit=crop" />
            </div>
            <div
                class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob overflow-hidden border-2 border-black rotate-12">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?q=80&w=600&auto=format&fit=crop" />
            </div>
            <div
                class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob-2 overflow-hidden border-2 border-black -rotate-3 transform -translate-y-2">
                <img class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEi_IvULdY_5lXAnZQ70p2iP0AIlj81AcHiStBmOC5SA358kA5eP5wI-ikOzHGyWhMD-LvEz3LIHRxfrQxPd5bf7IvZdjujbq2656qM-7fqspjbhUYM17RNkPTI6JXGADhlD1mYKql-IkVvJ_JB8xU6eGNjLON7PxnJe8cKjXrgmBVIz8OMHU3p-pCjqqdmZbXKZc-bTlloOci-pbuHJ88jMTK2FkLuAbeLNxWksF5f6y0XWp20BTVS5rD2RnmXvXoMQOq59NrKOY" />
            </div>
        </div>
        <div class="bg-[#F5F2EA] dark:bg-surface-dark border-t-2 border-black dark:border-white py-12">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-start md:items-end">
                <div class="mb-8 md:mb-0">
                    <h2 class="font-display text-7xl uppercase mb-2">Damarasha</h2>
                    <p class="font-mono text-sm tracking-tighter">Tempat ternyaman untuk kopi dan kreativitas.</p>
                    <div class="flex gap-4 mt-6">
                        <a class="p-2 border-2 border-black dark:border-white rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors"
                            href="#"><span class="material-icons text-lg">photo_camera</span></a>
                        <a class="p-2 border-2 border-black dark:border-white rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors"
                            href="#"><span class="material-icons text-lg">close</span></a>
                        <a class="p-2 border-2 border-black dark:border-white rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors"
                            href="#"><span class="material-icons text-lg">music_note</span></a>
                        <a class="p-2 border-2 border-black dark:border-white rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors"
                            href="#"><span class="material-icons text-lg">play_arrow</span></a>
                    </div>
                </div>
                <div class="text-right">
                    <a class="inline-flex items-center gap-2 font-display text-3xl uppercase hover:underline decoration-4 underline-offset-4 mb-8"
                        href="#">
                        Hubungi Kami <span class="bg-secondary text-white rounded-full p-1 border-2 border-black"><span
                                class="material-icons">arrow_forward</span></span>
                    </a>
                    <p class="font-mono text-xs text-gray-500 dark:text-gray-400 mb-2">P.S. Kami menyiapkan kopi terbaik
                        untukmu.</p>
                </div>
            </div>
            <div
                class="max-w-7xl mx-auto px-4 mt-12 pt-4 border-t border-gray-300 dark:border-gray-700 flex flex-col md:flex-row justify-between text-xs font-mono text-gray-500">
                <div>© 2025 Damarasha Coffee. All rights reserved.</div>
                <div class="space-x-4 mt-2 md:mt-0">
                    <a class="hover:text-black dark:hover:text-white" href="#">Privacy Policy</a>
                    <a class="hover:text-black dark:hover:text-white" href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuContainer = document.getElementById('menu-container');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            if (menuContainer) {
                const items = document.querySelectorAll('.menu-item');
                let isScrolling = false;

                const centerActiveItem = (item) => {
                    if (!item) return;

                    // Calculate position to center the item
                    const containerCenter = menuContainer.clientWidth / 2;
                    const itemCenter = item.offsetLeft + (item.offsetWidth / 2);
                    const scrollLeft = itemCenter - containerCenter;

                    menuContainer.scrollTo({
                        left: scrollLeft,
                        behavior: 'smooth'
                    });
                };

                const updateActiveStyle = () => {
                    const center = menuContainer.scrollLeft + (menuContainer.clientWidth / 2);
                    let minDistance = Infinity;
                    let activeItem = null;

                    items.forEach(item => {
                        // Calculate center relative to the container's scroll position
                        // item.offsetLeft is relative to the parent's start
                        const itemCenter = item.offsetLeft + (item.offsetWidth / 2);
                        const distance = Math.abs(center - itemCenter);

                        // Reset styles
                        item.classList.remove('scale-110', 'shadow-brutalist', 'z-10', 'bg-secondary');
                        item.classList.add('bg-white', 'dark:bg-surface-dark', 'scale-90', 'opacity-70');

                        // Reset text color
                        const textElements = item.querySelectorAll('div > span');
                        textElements.forEach(el => el.classList.remove('text-white'));

                        // Reset button
                        const btn = item.querySelector('button');
                        if (btn) {
                            btn.classList.remove('bg-primary', 'text-black', 'shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]');
                            btn.classList.add('border-2', 'border-black', 'dark:border-white');
                        }

                        if (distance < minDistance) {
                            minDistance = distance;
                            activeItem = item;
                        }
                    });

                    if (activeItem) {
                        activeItem.classList.remove('bg-white', 'dark:bg-surface-dark', 'scale-90', 'opacity-70');
                        activeItem.classList.add('scale-110', 'shadow-brutalist', 'z-10', 'bg-secondary');

                        // Active text color
                        const textElements = activeItem.querySelectorAll('div > span');
                        textElements.forEach(el => el.classList.add('text-white'));

                        // Active button style
                        const btn = activeItem.querySelector('button');
                        if (btn) {
                            btn.classList.remove('border-2', 'border-black', 'dark:border-white');
                            btn.classList.add('bg-primary', 'text-black', 'shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]');
                        }
                    }
                    return activeItem;
                };

                // Initial setup
                // Center the first item (or second if you prefer)
                setTimeout(() => {
                    centerActiveItem(items[1]); // Center the second item initially
                    updateActiveStyle();
                }, 100);

                menuContainer.addEventListener('scroll', () => {
                    window.requestAnimationFrame(updateActiveStyle);
                });

                // Click to center behavior
                items.forEach(item => {
                    item.addEventListener('click', () => {
                        centerActiveItem(item);
                    });
                });

                if (prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        const currentCenter = menuContainer.scrollLeft + (menuContainer.clientWidth / 2);
                        // Find current active item index
                        let activeIndex = 0;
                        let minDist = Infinity;

                        items.forEach((item, index) => {
                            const itemCenter = item.offsetLeft + (item.offsetWidth / 2);
                            const dist = Math.abs(currentCenter - itemCenter);
                            if (dist < minDist) {
                                minDist = dist;
                                activeIndex = index;
                            }
                        });

                        // scroll to previous
                        if (activeIndex > 0) {
                            centerActiveItem(items[activeIndex - 1]);
                        }
                    });

                    nextBtn.addEventListener('click', () => {
                        const currentCenter = menuContainer.scrollLeft + (menuContainer.clientWidth / 2);
                        // Find current active item index
                        let activeIndex = 0;
                        let minDist = Infinity;

                        items.forEach((item, index) => {
                            const itemCenter = item.offsetLeft + (item.offsetWidth / 2);
                            const dist = Math.abs(currentCenter - itemCenter);
                            if (dist < minDist) {
                                minDist = dist;
                                activeIndex = index;
                            }
                        });

                        // scroll to next
                        if (activeIndex < items.length - 1) {
                            centerActiveItem(items[activeIndex + 1]);
                        }
                    });
                }
            }
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    </script>
</body>

</html>