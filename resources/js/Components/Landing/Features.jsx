import React from 'react';

export default function Features() {
    return (
        <section className="py-20 px-6 max-w-7xl mx-auto">
            <div className="text-center mb-16">
                <h2 className="text-4xl font-display font-medium text-primary dark:text-white">Features That Make It Easier <br /> To Buy Coffee</h2>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 h-auto lg:h-[600px]">
                <div className="flex flex-col gap-6">
                    <div className="bg-white dark:bg-surface-dark p-8 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 flex-grow relative overflow-hidden group">
                        <h3 className="text-2xl font-display font-bold mb-2">Options Menu</h3>
                        <p className="text-sm text-gray-500 dark:text-gray-400 mb-6">Choose menus according to your wishes.</p>
                        <a className="text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all text-primary dark:text-white" href="#">
                            Learn more <span className="material-icons-round text-sm">arrow_forward</span>
                        </a>
                        <div className="absolute -bottom-20 -right-4 w-48 h-64 bg-primary rounded-2xl border-4 border-gray-800 shadow-2xl transform rotate-[-12deg] group-hover:rotate-0 transition duration-500 overflow-hidden">
                            <img alt="App Screen" className="w-full h-full object-cover opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA12aufPvyg_1CWlfWZjY76VOFj-65xvcwjFQLUB-AtY2L_opeg3aGNIWKd8QHzQKobSEI_QhoBjdaM2X6jAyRXejvoK9A7PCPR90NJo3WGW0jd8o6KeO0GhLli_hzrJ-zjIcM2aAHyCIHPjWaJdf7Ifnkmzx009HkpwGqrc-_zOJQcizKiuC8rC1a7eDPcyCKZc_ud3o_pB2ruveU3lvE18HfVB6QQGbFSwzl2OeYFT71cRecMlASXUPX1Po5ZfhyJL0J2jRmdNTc" />
                        </div>
                    </div>
                </div>
                <div className="flex flex-col gap-6">
                    <div className="bg-white dark:bg-surface-dark p-8 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 h-1/2 relative overflow-hidden group">
                        <div className="flex justify-between items-start relative z-10">
                            <div>
                                <h3 className="text-2xl font-display font-bold mb-2">Location</h3>
                                <p className="text-sm text-gray-500 dark:text-gray-400 mb-4 max-w-[150px]">Includes information such as the coffeeshop's address.</p>
                                <a className="text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all text-primary dark:text-white" href="#">
                                    Learn more <span className="material-icons-round text-sm">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <div className="absolute top-4 -right-12 w-40 h-40 rounded-full bg-blue-50 dark:bg-gray-800 group-hover:scale-110 transition"></div>
                        <img alt="Map View" className="absolute right-4 top-8 w-24 h-24 rounded-2xl object-cover shadow-lg transform rotate-6 z-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdZCFPOLQltrX8R1YNeZcGTa-OE5Q8Y11m_2BYG1GfmHmpU_fz9DsuowSAjZIZ50domZdM5qw1g0bxAzEZSBZHxjSAap_ENRKaH1LgCszD2dmPvp7O2HtSEjuXv2HTz_TACfzfrkJTTsbpN3uQja4mLSk7K2oEPn3ffA6iJgi_UqzZivNSZYfZzFtrdvnmkCh2ezyiz_Pwh9rz_3j1mPNu-SGpK81QCGJodv-WvUY9qw2NXQ7PLuFQJrytHRhl12sKgDCEhwpxUL0" />
                    </div>
                    <div className="grid grid-cols-2 gap-6 h-1/2">
                        <div className="bg-white dark:bg-surface-dark p-6 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col justify-between">
                            <div>
                                <h3 className="text-lg font-display font-bold mb-1">Delivery</h3>
                                <p className="text-xs text-gray-500 dark:text-gray-400">Features makes it easy for you not to go to shop.</p>
                            </div>
                            <a className="text-xs font-medium flex items-center gap-1 mt-4 text-primary dark:text-white" href="#">
                                Learn more <span className="material-icons-round text-xs">arrow_forward</span>
                            </a>
                        </div>
                        <div className="bg-white dark:bg-surface-dark p-6 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col justify-between">
                            <div>
                                <h3 className="text-lg font-display font-bold mb-1">Pick Up</h3>
                                <p className="text-xs text-gray-500 dark:text-gray-400">Order coffee can be taken directly at the desired hour.</p>
                            </div>
                            <a className="text-xs font-medium flex items-center gap-1 mt-4 text-primary dark:text-white" href="#">
                                Learn more <span className="material-icons-round text-xs">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div className="flex flex-col gap-6">
                    <div className="bg-white dark:bg-surface-dark p-8 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 h-full relative overflow-hidden group">
                        <h3 className="text-2xl font-display font-bold mb-2">Details Order</h3>
                        <p className="text-sm text-gray-500 dark:text-gray-400 mb-6">Additional options that customers might add to their orders.</p>
                        <a className="text-sm font-medium flex items-center gap-1 hover:gap-2 transition-all mb-8 block text-primary dark:text-white" href="#">
                            Learn more <span className="material-icons-round text-sm">arrow_forward</span>
                        </a>
                        <div className="bg-gray-50 dark:bg-gray-800 rounded-t-2xl p-4 shadow-inner absolute bottom-0 left-0 right-0 h-64 border-t border-gray-200 dark:border-gray-700">
                            <div className="space-y-3">
                                <div className="flex justify-between items-center text-xs">
                                    <span className="font-medium">Size</span>
                                    <div className="flex gap-2">
                                        <span className="bg-primary text-white px-2 py-1 rounded">Large</span>
                                        <span className="bg-white dark:bg-gray-600 px-2 py-1 rounded border border-gray-200 dark:border-gray-500">Regular</span>
                                    </div>
                                </div>
                                <div className="flex justify-between items-center text-xs">
                                    <span className="font-medium">Sugar</span>
                                    <div className="flex gap-2">
                                        <span className="bg-white dark:bg-gray-600 px-2 py-1 rounded border border-gray-200 dark:border-gray-500">Normal</span>
                                        <span className="bg-primary text-white px-2 py-1 rounded">Less</span>
                                    </div>
                                </div>
                                <div className="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                                    <span className="font-bold text-sm block mb-2">Add Topping</span>
                                    <div className="flex justify-between text-xs">
                                        <span>Hazelnut syrup</span>
                                        <span>+$1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
