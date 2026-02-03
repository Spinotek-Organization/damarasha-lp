import React from 'react';

export default function Footer() {
    return (
        <footer className="bg-primary text-white pt-20 pb-8 px-6 rounded-t-[3rem] mt-12">
            <div className="max-w-7xl mx-auto">
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    <div className="space-y-6">
                        <h3 className="text-2xl font-display font-bold">Damarasha Coffee</h3>
                        <div>
                            <p className="text-sm text-gray-400 font-bold uppercase mb-2">Alamat:</p>
                            <p className="text-gray-300 text-sm">Yogyakarta, Indonesia</p>
                        </div>
                        <div>
                            <p className="text-sm text-gray-400 font-bold uppercase mb-2">Kontak:</p>
                            <p className="text-gray-300 text-sm">contact@damarasha.com</p>
                        </div>
                    
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Layanan</h4>
                        <ul className="space-y-4 text-sm text-gray-400">
                            <li><a className="hover:text-white transition" href="#">Ringkasan</a></li>
                            <li><a className="hover:text-white transition" href="#">Fasilitas</a></li>
                            <li><a className="hover:text-white transition" href="#">Menu</a></li>
                            <li><a className="hover:text-white transition" href="#">Reservasi</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Informasi</h4>
                        <ul className="space-y-4 text-sm text-gray-400">
                            <li><a className="hover:text-white transition" href="#">Blog</a></li>
                            <li><a className="hover:text-white transition" href="#">Acara</a></li>
                            <li><a className="hover:text-white transition" href="#">Karir</a></li>
                            <li><a className="hover:text-white transition" href="#">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Media Sosial</h4>
                        <ul className="space-y-4 text-sm text-gray-400">
                            <li><a className="hover:text-white transition" href="#">Instagram</a></li>
                            <li><a className="hover:text-white transition" href="#">Facebook</a></li>
                            <li><a className="hover:text-white transition" href="#">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <div className="border-t border-blue-900 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
                    <p>© 2024 Damarasha Coffee. Hak cipta dilindungi.</p>
                    <div className="flex gap-6 mt-4 md:mt-0">
                        <a className="hover:text-white transition" href="#">Kebijakan Privasi</a>
                        <a className="hover:text-white transition" href="#">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </footer>
    );
}
