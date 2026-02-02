import React from 'react';

export default function Navbar() {
    return (
        <nav className="fixed w-full z-50 bg-white/90 backdrop-blur-md py-4 ">
            <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <div className="flex items-center gap-2">
                    <span className="font-bold text-2xl font-display tracking-tight text-gray-900">Coffein</span>
                </div>
                <div className="hidden md:flex items-center gap-8 text-sm font-medium text-gray-500">
                    <a className="text-black font-semibold" href="#">Beranda</a>
                    <a className="hover:text-primary transition" href="#">Menu</a>
                    <a className="hover:text-primary transition" href="#">Fasilitas</a>
                    <a className="hover:text-primary transition" href="#">Tentang Kami</a>
                    <a className="hover:text-primary transition" href="#">Acara</a>
                </div>
                <div className="flex items-center gap-4">
              
                    <button className="bg-primary text-white px-6 py-2.5 rounded-full text-sm font-bold hover:opacity-90 transition shadow-lg">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        </nav>
    );
}
