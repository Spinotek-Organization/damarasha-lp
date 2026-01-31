import React from 'react';

export default function Navbar() {
    return (
        <nav className="fixed w-full z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md py-4">
            <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <div className="flex items-center gap-2">
                    <span className="font-bold text-2xl font-display tracking-tight text-primary dark:text-white">Coffein</span>
                </div>
                <div className="hidden md:flex gap-8 text-sm font-medium text-gray-600 dark:text-gray-300">
                    <a className="text-primary dark:text-white font-bold" href="#">Home</a>
                    <a className="hover:text-primary dark:hover:text-white transition" href="#">Menu</a>
                    <a className="hover:text-primary dark:hover:text-white transition" href="#">About</a>
                    <a className="hover:text-primary dark:hover:text-white transition" href="#">Event</a>
                </div>
                <div className="flex items-center gap-4">
                    <div className="flex items-center gap-1 text-sm font-medium cursor-pointer">
                        <span className="material-icons-round text-lg">language</span>
                        <span>Eng</span>
                        <span className="material-icons-round text-sm">expand_more</span>
                    </div>
                    <button className="bg-primary text-white px-6 py-2.5 rounded-full text-sm font-medium hover:opacity-90 transition shadow-lg">
                        Contact Us
                    </button>
                </div>
            </div>
        </nav>
    );
}
