import React from 'react';

export default function CTA() {
    return (
        <section className="py-24 px-4 max-w-[90rem] mx-auto overflow-hidden">
            
            {/* Image Wall Grid */}
            <div className="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-3 md:gap-4 relative">
                {/* Vertical Guidelines (Background layer to ensure lines go full height if needed, or stick to borders) */}
                {/* We will use column borders for simplicity */}

                {/* Column 1 - Lowest */}
                <div className="flex flex-col gap-3 pt-32">
                    <img 
                        src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Barista 1" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                     <img 
                        src="https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?auto=format&fit=crop&q=80&w=300&h=300" 
                        alt="Barista 2" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>

                {/* Column 2 - Mid Low */}
                <div className="flex flex-col gap-3 pt-16 hidden md:flex">
                    <img 
                        src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&q=80&w=300&h=300" 
                        alt="Coffee Art" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                    <img 
                        src="https://images.unsplash.com/photo-1542181961-9590d0c79dab?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Barista & Customer" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>

                {/* Column 3 - Mid High */}
                <div className="flex flex-col gap-3 pt-8 hidden lg:flex">
                     <img 
                        src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Barista 3" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                    <img 
                        src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&q=80&w=300&h=200" 
                        alt="Coffee Detail" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>

                {/* Column 4 - Highest (Center) */}
                <div className="flex flex-col gap-3 pt-0">
                    <img 
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Barista Owner" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                    <img 
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=300&h=300" 
                        alt="Cafe Team" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>

                {/* Column 5 - Mid High */}
                <div className="flex flex-col gap-3 pt-8 hidden lg:flex">
                    <img 
                        src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&q=80&w=300&h=300" 
                        alt="Coffee Brewing" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                     <img 
                        src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Barista 4" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>

                 {/* Column 6 - Mid Low */}
                <div className="flex flex-col gap-3 pt-16 hidden md:flex">
                    <img 
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Barista 5" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                    <img 
                        src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&q=80&w=300&h=300" 
                        alt="Coffee Cup" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>

                {/* Column 7 - Lowest */}
                <div className="flex flex-col gap-3 pt-32">
                     <img 
                        src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&q=80&w=300&h=300" 
                        alt="Cafe Detail" 
                        className="w-full aspect-square object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                    <img 
                        src="https://images.unsplash.com/photo-1453614512568-c4024d13c247?auto=format&fit=crop&q=80&w=300&h=400" 
                        alt="Cafe Interior" 
                        className="w-full aspect-[3/4] object-cover rounded-2xl shadow-lg hover:-translate-y-2 transition-transform duration-300"
                    />
                </div>
            </div>

            {/* Content Footer */}
            <div className="text-center max-w-3xl mx-auto">
                <div className="inline-block px-5 py-2 rounded-full border border-gray-200 bg-gray-50 mb-8">
                    <span className="text-sm font-semibold text-gray-900">Ruang Favorit Kami</span>
                </div>
                <div className="flex flex-col justify-center items-center gap-2">
                <h2 className="text-4xl md:text-6xl  tracking-tight leading-tight">
                    <span className="font-medium text-gray-900">Temukan ruang sempurna</span> <br/>
                    <span className="font-medium text-gray-400">di dalam dinding kami</span>
                </h2>
                <p className="text-gray-500 text-lg md:text-xl font-medium max-w-2xl">
                    Baik untuk bekerja fokus, bersantai, atau merenung, setiap sudut dirancang untuk kenyamanan Anda.
                </p>
                
                </div>
            </div>
        </section>
    );
}
