<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>OATSIDE Clone</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Space+Mono:ital,wght@0,400;0,700;1,400&amp;family=Inter:wght@400;600;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex-shrink-0">
                <a class="font-display text-4xl tracking-tighter uppercase" href="#">Oatside</a>
            </div>
            <nav class="hidden md:flex space-x-8 font-mono text-sm font-bold tracking-tight">
                <a class="hover:underline decoration-2 underline-offset-4" href="#">Products</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#">Recipes</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#">About</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#">Shop</a>
                <a class="hover:underline decoration-2 underline-offset-4" href="#">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button class="p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-full"><span
                        class="material-icons-outlined">search</span></button>
                <button class="p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-full"><span
                        class="material-icons-outlined">shopping_cart</span></button>
                <button class="p-2 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-full"><span
                        class="material-icons-outlined">account_circle</span></button>
            </div>
        </div>
    </header>
    <section class="bg-grid relative pt-16 pb-24 overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            <h1 class="font-display text-6xl md:text-8xl lg:text-9xl uppercase leading-[0.9] tracking-tight mb-4">
                Always Look On<br />the <span class="relative inline-block">OATSIDE <svg
                        class="absolute -bottom-2 w-full h-3 text-primary z-[-1]" preserveAspectRatio="none"
                        viewBox="0 0 100 10">
                        <path d="M0 5 Q 50 10 100 5" fill="none" stroke="currentColor" stroke-width="8"></path>
                    </svg></span> of Life
            </h1>
            <p
                class="font-mono text-sm md:text-base mt-6 max-w-2xl mx-auto bg-white dark:bg-gray-800 border-2 border-black dark:border-white inline-block px-4 py-2 rounded-full shadow-brutalist dark:shadow-brutalist-dark">
                No artificial flavors, no fake colors — just pure goodness in every sip :)
            </p>
            <div class="relative mt-16 h-[300px] md:h-[400px] max-w-5xl mx-auto">
                <div
                    class="absolute left-0 md:left-10 top-10 transform -rotate-6 w-40 md:w-56 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-10">
                    <img alt="Girl smiling"
                        class="w-full h-32 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkMfoWHQBp8DCLNY72v6jhTJ_YWVbLvI74wupbPpvfBnXGZ1G0Xg6x284b67FZBp53VQlg1jcwPHsZAX2oBWiG9ODXrgqutqFnL_g_vlCPnPRCWtNU9QfvhwP_jxTKcu7uWksq-2_kwDjNEO3t1Yhq29V9ADJMjFJbFdxwlSlVWwcl9WtDLmKM9zbhZxPYNoes8RvKODXoOrVjxIRR3GDyEvgvBlDpByGN28Kp6AHfP67v7hpb2wAsCH2Nm2inSe-LCnMfofZKCfI" />
                    <div
                        class="absolute -top-12 -right-12 bg-blue-200 border-2 border-black text-xs font-mono p-2 rounded-xl rounded-bl-none transform rotate-12 max-w-[120px] shadow-sm">
                        No weird stuff. Just ridiculously good oat milk.
                    </div>
                </div>
                <div
                    class="absolute left-1/4 bottom-0 transform rotate-3 w-48 md:w-64 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-20">
                    <img alt="Oat milk carton"
                        class="w-full h-40 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuATfrCHusPa9Hub2ryVz7X5pTm0MCcDWD2Q427M-hs_AI0jtyJ-yzBEksUk8bVLVE00K1flzcdJPBU-dpWh6YHiXWDoI9csz1n4BC6rHnv_PCECgmbTBZQzeSrd7wkaAaHSUZKzjQNCkLTyAa-RGvUfxigHD0zRcuxK1A7PgXK39g8vgXKYX6oEIXluChgm3RJBPHvJygAy0pjDFH4uBGQ0vFfWX1_iJQi-pXEYNgdXzrHaz14i1hc3ziPErlbhDHQf48wzWKoqyL0" />
                </div>
                <div
                    class="absolute right-1/4 top-5 transform -rotate-3 w-44 md:w-60 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-10">
                    <img alt="Friends laughing"
                        class="w-full h-36 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWe_P1BFnyNxiiv61xwugbGHlrJ4L6Qqjn4gS6cxoliaTA6bKHE5IgqfdfyaAVd-_invAAAunwywBpWTjdwsqNVmA7H7RRA50SQDwkfZwY5oR0lxtm9rG_yKD_xqu12-YjtS6HQ1iZ66vOCvV98h_MExcLsQf6aUSGC7rm1BCVXcyTpsd79VidqzfaqDTEqG0q06Fn2IVRIsEb9VF72RI7_kOIew3LsOkUxCViB66rqTyNoh15TU_U6Yqn1M1lqMMq6lercgeiRcg" />
                </div>
                <div
                    class="absolute right-0 bottom-10 transform rotate-6 w-40 md:w-56 bg-white p-2 pb-8 border-2 border-black shadow-brutalist dark:border-white dark:bg-gray-800 dark:shadow-brutalist-dark transition hover:scale-105 z-20">
                    <img alt="Coffee pouring"
                        class="w-full h-32 object-cover border border-black grayscale hover:grayscale-0 transition-all"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxg79E_pfqPqlP4OzDXnvUrl3ehULoAx0zZ8FzHPoYiSjh0QLbwTz-qapebjsl12-CQtg2g2FcZGQB-Z0M8m2mmYqAJXGpgRqYeV06bNJUrZNDk9ONcQCvJOBAPi8mZgicc-GvSiGEeEWEIx-ffduLLn6aD7c0tPlQ9XiC0VdmKy9c3aoNeloLmk27cxhOQ5QxOGsR1gg4sA7FsC1f1A-0irFmUwRzUj6kQ6lLVYzQDAWwXBXmP4Ba5rok5fyOzwaQJP-qHxoOaT8" />
                    <span class="absolute -bottom-4 -left-4 text-4xl">🙂</span>
                </div>
                <span class="absolute top-0 right-1/3 text-4xl animate-bounce">✨</span>
            </div>
        </div>
    </section>
    <section
        class="py-20 bg-background-light dark:bg-background-dark relative border-t-2 border-black dark:border-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-secondary text-white font-display text-lg px-4 py-1 rounded-full border-2 border-black transform -rotate-2 mb-4 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">TOP
                    PICKS</span>
                <h2 class="font-display text-5xl md:text-6xl mb-4">Sip the Difference!</h2>
                <p class="font-mono text-sm max-w-lg mx-auto">From barista-approved blends to rich chocolatey
                    indulgence, discover the oat milk that's anything but ordinary.</p>
            </div>
            <div class="relative group">
                <button
                    class="absolute left-0 top-1/2 -translate-y-1/2 -ml-4 md:-ml-12 z-10 bg-white dark:bg-surface-dark border-2 border-black dark:border-white p-3 rounded-full hover:bg-gray-100 shadow-brutalist dark:shadow-brutalist-dark transition-transform active:scale-95">
                    <span class="material-icons">arrow_back</span>
                </button>
                <button
                    class="absolute right-0 top-1/2 -translate-y-1/2 -mr-4 md:-mr-12 z-10 bg-secondary text-white border-2 border-black dark:border-white p-3 rounded-full hover:bg-blue-600 shadow-brutalist dark:shadow-brutalist-dark transition-transform active:scale-95">
                    <span class="material-icons">arrow_forward</span>
                </button>
                <div class="flex overflow-x-auto gap-6 pb-8 px-4 no-scrollbar snap-x snap-mandatory justify-center">
                    <div
                        class="snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative hover:-translate-y-1 transition-transform duration-300">
                        <img alt="Chocolate Oat Milk" class="h-48 object-contain mb-4 transform rotate-3"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFH5152SXMnGEqLLxO0FAcWcRImNbKk80Bk-bGzh7DAtbs4Rs3TzDmY05XciEj3N2RnzaZ3FQ1rM1JtNZiCBeKT6IYTdZBvFrCAEZ-cr7rUq7qy9uxTZgj-_8oE2k07GGoJTclY1f47hi3W53kapbhB0TxH5A1U4tDBhGzMAU4Jb5lr4IejrT26rfp0xxxzfqXDef6_EWCbUPVPTmpgnEJGclsakTPK0r6qFgRj9cPDm7pvkY5nox2rKgGWlQ98XNH8nMwnN6ED68" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span>Chocolate<br />(1L)</span>
                            <span>$ 6.00</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="snap-center shrink-0 w-[280px] bg-secondary border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative transform scale-105 shadow-brutalist dark:shadow-brutalist-dark z-10">
                        <img alt="Barista Blend" class="h-48 object-contain mb-4 filter drop-shadow-lg"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsZnRwAlTbnj1v68o5domfgxI4YcI6p2XX3UXq01r2IY2LYu2Dn7QubPqAGOqXbhXwpPtcJf5Ph0ywim4kUmQfmElLBM7eMx6aRD3EyQo7E7BllTHKTB2O55n13YPvaDtxlDR1ZCYOwV8yUxwaDEPG4fLS__SdxKNitNFKJMz6oPguYJ2LRdUoOHFjU010BKY79Pe7Llh0sV1t1YUdPXuMrWX_pxHr0M0NmlxBc9RTHrLhhwVcE26kMJmqpevGpdVDeL25uDFcVuw" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4 text-white">
                            <span>Barista Blend<br />(24 x 200ml)</span>
                            <span>$ 29.90</span>
                        </div>
                        <button
                            class="w-full py-2 bg-primary text-black border-2 border-black rounded-full font-bold text-sm uppercase hover:bg-white transition-colors flex items-center justify-center gap-2 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                    <div
                        class="snap-center shrink-0 w-[280px] bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-3xl p-6 flex flex-col items-center relative hover:-translate-y-1 transition-transform duration-300">
                        <img alt="Caramel Macchiato" class="h-48 object-contain mb-4 transform -rotate-2"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnFM8xiBoqk1Qs_inOVaFM5GDPSGeMVXgOe3x2CgQ4m3ibJbjjvYa26CppLQg54TW9cWR8Yrt8Eon35pzVbTfQI3fby2dnXsrW82D9P_4792vPfjuZXALOYvhyRbqfgNsMLBfxUygY-FLhTPgMBbhpLA2AigbjVYldv64VE4co-95uIN9Xll-ZTR7k8g1ThjnhnBQ3rbH5ay7fhBLFArCAxryaAL-6e4NLED57hrsPuA-U8jJTp3wR1_tG-6e3jcd3qbjYqduJdh8" />
                        <div class="w-full flex justify-between items-end font-bold font-mono text-sm mb-4">
                            <span>Caramel Macchiato<br />(24 x 200ml)</span>
                            <span>$ 29.90</span>
                        </div>
                        <button
                            class="w-full py-2 border-2 border-black dark:border-white rounded-full font-bold text-sm uppercase hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-colors flex items-center justify-center gap-2">
                            <span class="material-icons text-sm">shopping_cart</span> Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 bg-[#F5F2EA] dark:bg-surface-dark border-t-2 border-black dark:border-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative h-[400px] md:h-[500px]">
                <img alt="Oatside Boxes"
                    class="absolute left-0 bottom-0 w-3/4 border-2 border-black rounded-lg shadow-brutalist z-10"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNwmjf63hgcYBLtqbPB55wUuGFzDwT61TKniih2HTVSXwm82ipkOaTWHtaSghnRYpUddzyz7YTWObXsjWbfDARlt9gDd09NaGUR7UQ6EhE0c083sX64jBGypktjYplx9s_Ut29EJYho8EaukcxkKGiF--Bneos6NfKtCs7OsuIgTH7Rln4-3n6tHn1uFdOBZ1P9mxJo_Ao1zdjEMruLBY52l__Q4YMXlGcLxlqDm3WtgKUnfAeqRvotfZdh6zgNBHq-t_a24qP7bA" />
                <img alt="Floating Carton"
                    class="absolute top-0 right-10 w-1/3 transform -rotate-12 filter drop-shadow-xl z-20"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuHIxQqoCNemCx7MYzF5PV2mzAWcPd6MKmnH4571P6ep-H_r0h-FpDht79Dnjbaar5Mluwto8Xbxg8DcqjIt38g5uX3whvHtksXkevBthb4fsSqVl1PLrRTdWr7Uj3-8pKzIr4GrXhqZVd6IhJrhUJ3jDuk0N0zHmf-fxs-irGmglMV9YdD9BW9Dsbf0ZzOY8XqrAYl-lqETRQ0uo7FcaH680kPXsJqlWVknEZJRbFJSMNYVR6iVfOIwTazn6FllqR5Pu016TUkpk" />
                <div
                    class="absolute top-1/4 right-0 bg-green-500 text-black font-bold font-display rounded-full p-6 text-center transform rotate-12 border-2 border-black shadow-brutalist z-30 leading-tight">
                    Keep it<br />Cool!
                </div>
                <span class="absolute top-10 left-10 text-5xl text-primary animate-pulse">✨</span>
            </div>
            <div>
                <span
                    class="inline-block bg-secondary text-white font-display text-sm px-3 py-1 rounded-full border-2 border-black transform rotate-2 mb-6 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">WHY
                    OATSIDE?</span>
                <h2 class="font-display text-5xl md:text-7xl mb-6 leading-tight">OAT-rageously<br />Good!</h2>
                <p class="font-mono text-sm mb-8">Creamy, sustainable, and ridiculously good, OATSIDE is made for
                    everyone who wants better taste without the bad stuff.</p>
                <ul class="space-y-4 font-mono text-sm">
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Naturally creamy texture without artificial thickeners.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Uses high-quality Australian oats</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Cholesterol-free and lower in saturated fats compared to dairy</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>Lower carbon footprint</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-secondary">verified</span>
                        <span>No artificial flavors or colors</span>
                    </li>
                </ul>
                <button
                    class="mt-8 bg-primary text-black font-display text-lg px-8 py-3 rounded-full border-2 border-black shadow-brutalist hover:translate-y-1 hover:shadow-none transition-all">
                    Shop now
                </button>
            </div>
        </div>
    </section>
    <section class="py-24 bg-grid border-t-2 border-black dark:border-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <span
                class="inline-block bg-secondary text-white font-display text-sm px-3 py-1 rounded-full border-2 border-black mb-4">TASTY
                IDEAS</span>
            <h2 class="font-display text-5xl md:text-7xl mb-16">Try OATSIDE Your Way</h2>
            <div class="grid md:grid-cols-3 gap-6 text-left">
                <div
                    class="bg-primary border-2 border-black dark:border-white rounded-3xl p-6 h-[400px] flex flex-col justify-between relative overflow-hidden group">
                    <div>
                        <h3 class="font-display text-3xl uppercase leading-tight mb-2">Choco Oat<br />Blast</h3>
                    </div>
                    <div
                        class="absolute right-0 bottom-0 w-48 h-48 rounded-full border-2 border-black overflow-hidden transform translate-x-10 translate-y-10">
                        <img class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAglXeVrXEaAdhqfo5NYOQeU6EkKeLHx7BIwfKZaMpplfm32Ao7WPU17zaa8OnguvSP5Q3Bue_mgIHDu22EAiBlvDj3gMVJHeojbj2Uy1h0KPsmbNa8UY7o0-gMmpjPP_XKa9Sof3xwBBXHwOJKvmGLf1kRjZO0II2OfPXWdwwIV_C4C7qgZzXVsPrMjZV821wLeBcYmRJrEZa8vfFYFL6xAXEBOf45Irtg-AxXCMx-4niLM_TKzvog_cS4DagfxlGs_oAGKbrDKuU" />
                    </div>
                    <div class="flex justify-between items-end relative z-10">
                        <div class="font-mono text-xs font-bold">From<br />Choco Chef</div>
                        <button
                            class="bg-white p-3 rounded-full border-2 border-black shadow-sm group-hover:scale-110 transition-transform">
                            <span class="material-icons text-black">arrow_back</span>
                        </button>
                    </div>
                </div>
                <div
                    class="bg-accent-red border-2 border-black dark:border-white rounded-3xl p-6 h-[400px] flex flex-col justify-between relative overflow-hidden group">
                    <div>
                        <h3 class="font-display text-3xl uppercase leading-tight text-white mb-2">Strawberry<br />Mint
                            Oat Bliss</h3>
                    </div>
                    <div
                        class="absolute right-0 bottom-0 w-48 h-48 rounded-full border-2 border-black overflow-hidden transform translate-x-4 translate-y-4">
                        <img class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQbvcQjcEyy8OlRPI3bM0O5-VBmaJ9wIxHHHtvBI_a62wo6t3CHTqSvtSvMoGtTsPF4cceUPePrA8fGAs6r9o66kplraQmVSQEF2pXWxuHF1l8fijCR-9KAxHYM-vgfbjjbY_KnpXzk-v0T4gVNS9GMHFUe5_2DbZaSjRlEfO0McHhRAAqJCg0APg-MKM20-0OtZYLqZLUNlyy42jwELPxgLwuXCBEmLikbM4jvBTA1lwsS-bFAAhmyQhk5VrOIJ7C_vgiyFXO1XE" />
                    </div>
                    <div class="flex justify-between items-end relative z-10 text-white">
                        <div class="font-mono text-xs font-bold">From<br />Toy's Factory</div>
                    </div>
                </div>
                <div
                    class="bg-accent-green border-2 border-black dark:border-white rounded-3xl p-6 h-[400px] flex flex-col justify-between relative overflow-hidden group">
                    <div>
                        <h3 class="font-display text-3xl uppercase leading-tight text-black mb-2">Creamy Oat<br />Matcha
                        </h3>
                    </div>
                    <div
                        class="absolute right-0 bottom-0 w-48 h-48 rounded-full border-2 border-black overflow-hidden transform translate-x-4 translate-y-4">
                        <img class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbzYQYIVLsSaJAbws2BsnvH-7G8d4N_ihbB1vXQVP4ydz-pNSJz0gh_UHpU6loMP7C8GvMmOfzSoP257-osAwkLeiaYE4PVdBz9P8T1PnS0BKoKVb-XqL699VvHinqE8DxgyjliNHYYXXImf768w4IrSy-c8YSgqvSwSUclAJfATbc44_MCB5v8wqLyUbCQ8nuB1p0xtbYQPYgtVGjcjtx-vjRqpP7vmA4MtZE9FlVUSFT3016Br-6Kg7uVqSS-s9024PtA6TsaXw" />
                    </div>
                    <div class="flex justify-between items-end relative z-10">
                        <div class="font-mono text-xs font-bold">From<br />James McAvocado</div>
                        <button
                            class="bg-white p-3 rounded-full border-2 border-black shadow-sm group-hover:scale-110 transition-transform">
                            <span class="material-icons text-black">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <button
                class="mt-12 bg-white dark:bg-surface-dark text-black dark:text-white font-bold font-mono text-sm px-8 py-3 rounded-full border-2 border-black dark:border-white shadow-brutalist dark:shadow-brutalist-dark hover:translate-y-1 hover:shadow-none transition-all uppercase">
                Explore more
            </button>
        </div>
    </section>
    <section class="py-24 bg-background-light dark:bg-background-dark border-t-2 border-black dark:border-white">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-12 gap-12">
            <div class="md:col-span-4 flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block bg-secondary text-white font-display text-sm px-3 py-1 rounded-full border-2 border-black transform -rotate-3 mb-4">FAQS</span>
                    <h2 class="font-display text-6xl leading-none mb-6">Got Questions?</h2>
                </div>
                <div class="mt-12">
                    <h3 class="font-display text-3xl mb-4">Still got questions?</h3>
                    <button
                        class="bg-white dark:bg-surface-dark font-bold font-mono px-6 py-3 rounded-full border-2 border-black dark:border-white shadow-brutalist dark:shadow-brutalist-dark hover:translate-y-1 hover:shadow-none transition-all">
                        Contact Us
                    </button>
                </div>
            </div>
            <div class="md:col-span-8 space-y-4">
                <div
                    class="bg-white dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group" open="">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">What is OATSIDE?</span>
                            <span
                                class="bg-primary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-black">
                                <span class="material-icons text-sm font-bold">remove</span>
                            </span>
                        </summary>
                        <p class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                            OATSIDE is Asia's delicious take on oat milk, made creamier and maltier than the plant milks
                            you're used to. We keep our products plant-based, planet-friendly, and lactose-free.
                        </p>
                    </details>
                </div>
                <div
                    class="bg-[#F5F2EA] dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">Why does OATSIDE exist?</span>
                            <span
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-white group-open:bg-primary group-open:text-black">
                                <span class="material-icons text-sm font-bold block group-open:hidden">add</span>
                                <span class="material-icons text-sm font-bold hidden group-open:block">remove</span>
                            </span>
                        </summary>
                        <p
                            class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed hidden group-open:block">
                            Because we believe milk should be sustainable and delicious.
                        </p>
                    </details>
                </div>
                <div
                    class="bg-[#F5F2EA] dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">Where is OATSIDE made?</span>
                            <span
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-white group-open:bg-primary group-open:text-black">
                                <span class="material-icons text-sm font-bold block group-open:hidden">add</span>
                                <span class="material-icons text-sm font-bold hidden group-open:block">remove</span>
                            </span>
                        </summary>
                        <p
                            class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed hidden group-open:block">
                            We produce our oat milk in our own facility in Bandung, Indonesia.
                        </p>
                    </details>
                </div>
                <div
                    class="bg-[#F5F2EA] dark:bg-surface-dark border-2 border-black dark:border-white rounded-2xl p-6 shadow-sm">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer list-none">
                            <span class="font-mono font-bold text-lg">What goes into OATSIDE?</span>
                            <span
                                class="bg-secondary w-8 h-8 rounded-full flex items-center justify-center border-2 border-black text-white group-open:bg-primary group-open:text-black">
                                <span class="material-icons text-sm font-bold block group-open:hidden">add</span>
                                <span class="material-icons text-sm font-bold hidden group-open:block">remove</span>
                            </span>
                        </summary>
                        <p
                            class="mt-4 font-mono text-sm text-gray-700 dark:text-gray-300 leading-relaxed hidden group-open:block">
                            Australian oats, water, and minimal other ingredients for texture and fortification.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>
    <footer
        class="bg-background-light dark:bg-background-dark border-t-2 border-black dark:border-white relative overflow-hidden">
        <div class="py-24 text-center relative max-w-4xl mx-auto px-4">
            <h2 class="font-display text-4xl md:text-5xl uppercase mb-8 relative z-10">
                Be the first to know about new flavors, exclusive deals, and get 10% OFF your first order!
            </h2>
            <div
                class="absolute top-0 left-0 md:left-10 transform -rotate-12 bg-accent-red text-white font-mono text-xs p-4 rounded-[50%] border-2 border-black shadow-brutalist z-0 hidden md:flex items-center justify-center w-24 h-24 text-center leading-tight">
                Rich, Creamy & Tasty
            </div>
            <div
                class="absolute top-10 right-0 md:right-10 transform rotate-12 bg-[#76A882] text-black font-mono font-bold text-xs px-6 py-3 rounded-[40%_60%_60%_40%/50%] border-2 border-black shadow-brutalist z-0 hidden md:block">
                Healthy
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
                    Get discount
                </button>
            </form>
        </div>
        <div class="flex justify-between items-center overflow-hidden pb-12 gap-4 px-4">
            <div class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob overflow-hidden border-2 border-black rotate-3">
                <img class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMj47Ugr4DJNpm8gr4HXtln0pREkDa8ARTqboC9-n73kW2VEuh-xZcjS9lmU_u4Y-U5r886x9mXiqc5SzmyqLHNLj9EWnPtInu-UlmglLnBOs8ntaJzCmONiEDn2mEs64Ey1PYML9_xQVMWPYr1q_qFvCtDRQgeeKKzbk2-lKnhmXix3aumueLExqPk2v5iimJFBhp537xEUpiu7QbMqzPs0b-0QZD0VpNz8NRk8bi5S-Uq-ZX7asmgUbLrMpZcM67vFDqkHAAZAc" />
            </div>
            <div
                class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob-2 overflow-hidden border-2 border-black -rotate-6 transform translate-y-4">
                <img class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVWyM9gDNQjcwu4f6R7TtLjp01SAdw40uqK4KnmMYIw3PNP9zomX6ZQXHjmKgQBJ_u9RZnMo8cgemsJEcerQQVtohlr_Hvylui6pXgfTfl0XD4d_IQ8w_gQVRIZPg-PD2t4212bxju-IcLlT-NWv2nQ-Ig7q096Qh17E1t--v0qWSytWgmN4K36h-24HJIskk8LxfX2q0pz8DdimCuSr6jEa_n4J27vuIoAEeoNuKz3J9iNlnjYgSKa1WdCUntDARd9ULeMBaIi6w" />
            </div>
            <div
                class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob overflow-hidden border-2 border-black rotate-12">
                <img class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwjzk3FQAxd_34Z-lgu3h15v24V5-DXUqYBIPAmwPbZKA8FZXUETK1Fay1uWQ0YBhH_EzaHnp03__IjhbUucvbqOt1-gbvI4MsfFsZ9jEeum3M0DUZSIC4Cp_ovo4BSpA7Zpz0NIFpTVBChrqw751g15ggD2KiJk-knyo4T9YsbSizscAc7iaJGBRIVFOe8hAWlW6mJ2ye5sNe83ob6vUxkcH465iuf0doKepzEqKxlGPsYSUwn3u_9zzbACOKo6Ghi15g3CoMjMo" />
            </div>
            <div
                class="w-32 h-32 md:w-48 md:h-48 shrink-0 rounded-blob-2 overflow-hidden border-2 border-black -rotate-3 transform -translate-y-2">
                <img class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiTQlJNWrj5qmdKuFnLxM7MIQVS49HpgIs-sSfOSLILDFz2adb95M3qWz83EZmUOJCEZw3C3hj8IArETrHFQR73yLhiiJj95EJ34fkVWOyPdsIGDlz181hcrT4Mo05WMS4KwAmsuaVdFMk79jG_qB7ktO2PGTDS4RdXkiEMW6aulQPrqHg0xvml1SxujGkxXu0aoELuEx8-gVIqH_7W1p3yh9uTV-iY8mu7Fj5HJox3mgCWqSyDoGVlBMjLCwjTx3Zl9uxAzgJSzU" />
            </div>
        </div>
        <div class="bg-[#F5F2EA] dark:bg-surface-dark border-t-2 border-black dark:border-white py-12">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-start md:items-end">
                <div class="mb-8 md:mb-0">
                    <h2 class="font-display text-7xl uppercase mb-2">Oatside</h2>
                    <p class="font-mono text-sm tracking-tighter">Stay Creamy. Stay OAT-rageous!</p>
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
                        Get in Touch <span class="bg-secondary text-white rounded-full p-1 border-2 border-black"><span
                                class="material-icons">arrow_forward</span></span>
                    </a>
                    <p class="font-mono text-xs text-gray-500 dark:text-gray-400 mb-2">P.S. No cows were harmed in the
                        making of this website.</p>
                </div>
            </div>
            <div
                class="max-w-7xl mx-auto px-4 mt-12 pt-4 border-t border-gray-300 dark:border-gray-700 flex flex-col md:flex-row justify-between text-xs font-mono text-gray-500">
                <div>© 2025 OATSIDE. All rights reserved.</div>
                <div class="space-x-4 mt-2 md:mt-0">
                    <a class="hover:text-black dark:hover:text-white" href="#">Privacy Policy</a>
                    <a class="hover:text-black dark:hover:text-white" href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>