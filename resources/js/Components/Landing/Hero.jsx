import React from 'react';

export default function Hero() {
    return (
        <header className="relative pt-20 px-4 pb-24 md:pb-32">
            <div className="max-w-full mx-auto relative">
                {/* Main Card Container */}
                <div className="relative h-[640px] rounded-[3rem] overflow-hidden shadow-2xl group">
                    {/* Background Image */}
                    <img 
                        alt="Coffee Pouring" 
                        className="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=2574&auto=format&fit=crop" 
                    />
                    
                    {/* Dark Overlay - adjusting to match the dark aesthetic of the image */}
                    <div className="absolute inset-0 bg-black/60 md:bg-black/50 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>

                    {/* Content */}
                    <div className="absolute inset-0 flex flex-col justify-center px-8 md:px-20 lg:px-24">
                        <div className="max-w-5xl">
                            <h1 className="text-5xl md:text-7xl font-sans font-medium text-white leading-[1.1] mb-8 tracking-tight">
                                Nikmati Kopi Premium di Damarasha Coffee and Space
                            </h1>
                            
                            <p className="text-gray-300 text-sm md:text-base leading-relaxed mb-12 max-w-lg font-light opacity-90">
                                Temukan perpaduan sempurna antara kenyamanan dan cita rasa. 
                                Tempat favorit untuk bekerja, bersantai, dan menikmati setiap momen di Jogja.
                            </p>

                            <div className="flex gap-16">
                                <div className="space-y-1">
                                    <span className="block text-5xl font-medium text-white">Luas</span>
                                    <span className="text-[#D4A574] text-base font-medium block">Area Indoor & Outdoor</span>
                                    <p className="text-gray-400 text-sm leading-tight max-w-[240px]">
                                        Pilihan ruang yang nyaman untuk berbagai aktivitas Anda.
                                    </p>
                                </div>
                                <div className="space-y-1">
                                    <span className="block text-5xl font-medium text-white">Lengkap</span>
                                    <span className="text-[#D4A574] text-base font-medium block">Fasilitas Terbaik</span>
                                    <p className="text-gray-400 text-sm leading-tight max-w-[240px]">
                                        Wifi cepat, parkir luas, dan suasana yang menenangkan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Floating Circular CTA Button */}
                <div className="absolute -bottom-10 left-1/2 transform -translate-x-1/2 z-20">
                    <div className="relative w-28 h-28 bg-white rounded-full flex items-center justify-center p-2 shadow-2xl">
                         {/* SVG Text for curvature effect */}
                        <div className="absolute inset-0 w-full h-full animate-spin-slow">
                            <svg viewBox="0 0 100 100" width="100%" height="100%">
                                <path id="curve" d="M 50 50 m -37 0 a 37 37 0 1 1 74 0 a 37 37 0 1 1 -74 0" fill="transparent" />
                                <text>
                                    <textPath href="#curve" className="text-[11px] font-bold uppercase tracking-widest text-black fill-current">
                                        • Lihat Menu Kami • Lihat Menu Kami •
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                        {/* Arrow Icon */}
                        <div className="w-12 h-12 rounded-full border border-black flex items-center justify-center bg-transparent">
                            <span className="material-icons-round text-2xl">arrow_downward</span>
                        </div>
                    </div>
                </div>
                
                 {/* Visual trick to blend the button into the card if needed, 
                     but the provided image shows it floating over/hanging.
                     We'll rely on the z-index and positioning. */}
            </div>
        </header>
    );
}
