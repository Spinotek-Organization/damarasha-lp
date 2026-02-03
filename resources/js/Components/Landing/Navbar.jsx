import React, { useState } from 'react';

export default function Navbar() {
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    return (
        <nav className="fixed w-full z-50 bg-white/90 backdrop-blur-md py-4 ">
            <div className="max-w-7xl mx-auto px-6 flex justify-between items-center relative">
                <div className="flex items-center gap-2">
                    <img src="/images/brand-logo.png" alt="Logo" className="w-10 h-10" />
                    <span className="font-bold text-2xl font-display tracking-tight text-gray-900">Damarasha</span>
                </div>
                
                {/* Desktop Nav */}
                <div className="hidden md:flex items-center gap-8 text-sm font-medium text-gray-500">
                    <a className="text-black font-semibold" href="#home">Beranda</a>
                    <a className="hover:text-primary transition" href="#menu">Menu</a>
                    <a className="hover:text-primary transition" href="#facilities">Fasilitas</a>
                    <a className="hover:text-primary transition" href="#about">Tentang Kami</a>
                    <a className="hover:text-primary transition" href="#events">Acara</a>
                </div>

                <div className="flex items-center gap-4">
                    <button className="hidden md:block bg-primary text-white px-6 py-2.5 rounded-full text-sm font-bold hover:opacity-90 transition shadow-lg">
                        Hubungi Kami
                    </button>
                    
                     {/* Mobile Hamburger Button */}
                    <button 
                        className="md:hidden p-2 text-gray-900 focus:outline-none"
                        onClick={() => setIsMenuOpen(!isMenuOpen)}
                    >
                        <span className="material-icons text-3xl">{isMenuOpen ? 'close' : 'menu'}</span>
                    </button>
                </div>
            </div>

            {/* Mobile Nav Menu */}
            {isMenuOpen && (
                <div className="md:hidden absolute top-full left-0 w-full bg-white border-b border-gray-200 shadow-lg z-40">
                    <nav className="flex flex-col p-4 space-y-4 font-sans text-sm font-bold text-center">
                        <a className="block py-2 hover:bg-gray-50 hover:text-primary rounded-lg transition-all" href="#home" onClick={() => setIsMenuOpen(false)}>Beranda</a>
                        <a className="block py-2 hover:bg-gray-50 hover:text-primary rounded-lg transition-all" href="#menu" onClick={() => setIsMenuOpen(false)}>Menu</a>
                        <a className="block py-2 hover:bg-gray-50 hover:text-primary rounded-lg transition-all" href="#facilities" onClick={() => setIsMenuOpen(false)}>Fasilitas</a>
                        <a className="block py-2 hover:bg-gray-50 hover:text-primary rounded-lg transition-all" href="#about" onClick={() => setIsMenuOpen(false)}>Tentang Kami</a>
                        <a className="block py-2 hover:bg-gray-50 hover:text-primary rounded-lg transition-all" href="#events" onClick={() => setIsMenuOpen(false)}>Acara</a>
                    </nav>
                </div>
            )}
        </nav>
    );
}
