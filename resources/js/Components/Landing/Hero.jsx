import React from 'react';

export default function Hero() {
    return (
        <header className="relative pt-24 px-4 pb-12">
            <div className="max-w-[1400px] mx-auto relative">
                <div className="relative h-[650px] rounded-b-[4rem] overflow-hidden bg-primary shadow-2xl">
                    <img 
                        alt="Pouring rich dark coffee" 
                        className="absolute inset-0 w-full h-full object-cover opacity-80"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDSsulGyaGgNjgHcgSfEhHf0p_IxOQlDtCwCzmflekW7BCdvCt5xTpxSad4VQkCxPOZaKnb90BvHjvR_01q3eOUNl654o3hJ5KE-vt3Xa0peES2NgNIUhFxte06vQyEg6Wte6Fyo7L9yGF6QaXu3OZkKmRtxMVjjBwdrIy-6AklcrQJ5Au-qEUeCTRfbDffnUzJaUNsNyDRgLOkpS24GRYD2mJt20JNsMGmU7REsIn_-8mRd9N8QDolq4_I8_59NUwtAgvSsRa3-0" 
                    />
                    <div className="absolute inset-0 bg-gradient-to-r from-[#08306E]/90 to-transparent"></div>
                    <div className="absolute inset-0 flex flex-col justify-center px-8 md:px-16 lg:px-24">
                        <h1 className="text-5xl md:text-7xl font-display text-white font-medium leading-tight max-w-3xl mb-6">
                            Enjoy Premium Coffee at <br /> Our Charming Cafe
                        </h1>
                        <p className="text-gray-200 max-w-lg text-sm md:text-base leading-relaxed mb-12">
                            Discover the Perfect Blend of Rich Flavor and indulge in the Rich Aroma and Smooth Flavor of Our
                            Handcrafted Coffees.
                        </p>
                        <div className="flex gap-12">
                            <div>
                                <span className="block text-3xl font-display text-white mb-1">30+</span>
                                <span className="text-orange-300 text-sm font-medium block mb-1">Event Space</span>
                                <p className="text-gray-300 text-xs max-w-[150px]">Register your event and enjoy the excitement.</p>
                            </div>
                            <div>
                                <span className="block text-3xl font-display text-white mb-1">15+</span>
                                <span className="text-orange-300 text-sm font-medium block mb-1">Meeting Room</span>
                                <p className="text-gray-300 text-xs max-w-[150px]">Your meeting will feel optimally provided.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="absolute -bottom-10 left-1/2 transform -translate-x-1/2 z-10">
                    <button className="bg-white dark:bg-surface-dark text-primary dark:text-white h-24 w-24 rounded-full flex flex-col items-center justify-center shadow-xl border-4 border-background-light dark:border-background-dark hover:scale-105 transition duration-300">
                        <span className="material-icons-round animate-bounce">arrow_downward</span>
                        <span className="text-[10px] font-bold uppercase mt-1 tracking-wide">Scroll</span>
                    </button>
                </div>
            </div>
        </header>
    );
}
