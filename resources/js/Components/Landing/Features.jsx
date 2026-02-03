import React from 'react';

export default function Features() {
    return (
        <section id="events" className="bg-white py-24 px-4 sm:px-6">
            <div className="text-center mb-16">
                 <h2 className="text-3xl md:text-4xl font-display font-medium text-primary ">Mengapa Memilih <br /> Damarasha Coffee?</h2>
            </div>
            
            <div className="max-w-7xl mx-auto">
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {/* Column 1 */}
                    <div className="space-y-6">
                         {/* Service Options */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-8 flex flex-col justify-between h-[400px] relative overflow-hidden group">
                            <div className="relative z-10">
                                <h3 className="text-2xl font-sans font-bold text-gray-900 mb-6">Pilihan Layanan</h3>
                                <ul className="space-y-4">
                                    <li className="flex items-center gap-3 bg-white p-3 rounded-xl shadow-sm border border-gray-100">
                                        <div className="w-8 h-8 rounded-full bg-teal-50 flex items-center justify-center">
                                            <span className="material-icons-round text-teal-600 text-sm">restaurant</span>
                                        </div>
                                        <span className="text-gray-700 font-medium">Makan di Tempat</span>
                                    </li>
                                    <li className="flex items-center gap-3 bg-white p-3 rounded-xl shadow-sm border border-gray-100">
                                        <div className="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                            <span className="material-icons-round text-blue-600 text-sm">delivery_dining</span>
                                        </div>
                                        <span className="text-gray-700 font-medium">Pesan Antar</span>
                                    </li>
                                    <li className="flex items-center gap-3 bg-white p-3 rounded-xl shadow-sm border border-gray-100">
                                        <div className="w-8 h-8 rounded-full bg-orange-50 flex items-center justify-center">
                                            <span className="material-icons-round text-orange-600 text-sm">takeout_dining</span>
                                        </div>
                                        <span className="text-gray-700 font-medium">Bawa Pulang</span>
                                    </li>
                                </ul>
                            </div>
                            <div className="flex items-center gap-2 text-gray-400 text-sm px-2">
                                <span className="material-icons-round text-teal-500 text-sm">check_circle</span>
                                <span>Tersedia di Gofood & Grabfood</span>
                            </div>
                        </div>

                         {/* Parking */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-8 h-[300px] relative overflow-hidden flex flex-col justify-center items-center text-center">
                            <div className="w-20 h-20 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center mb-6">
                                <span className="material-icons-round text-blue-600 text-5xl">local_parking</span>
                            </div>
                            <h3 className="text-2xl font-sans font-bold text-gray-900 mb-2">Parkir Luas</h3>
                            <p className="text-gray-500 font-medium">Gratis untuk Mobil & Motor</p>
                            
                             <div className="absolute top-12 left-8 opacity-10 transform -rotate-12">
                                <span className="material-icons-round text-8xl">directions_car</span>
                            </div>
                            <div className="absolute bottom-8 right-8 opacity-10 transform rotate-12">
                                <span className="material-icons-round text-8xl">local_parking</span>
                            </div>
                        </div>
                    </div>

                    {/* Column 2 */}
                    <div className="space-y-6">
                         {/* Crowd */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-6 h-[220px] relative overflow-hidden flex flex-col justify-center">
                             <div className="flex items-center justify-between mb-2 absolute top-6 left-6 right-6">
                                 <h3 className="text-gray-500 text-sm font-medium">Suasana</h3>
                                 <span className="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-bold">Nyaman</span>
                             </div>
                             
                             <div className="mt-6 flex flex-col items-center">
                                 <div className="flex -space-x-4 mb-4">
                                    <div className="w-12 h-12 rounded-full border-4 border-[#FAF9F6] bg-gray-200 flex items-center justify-center overflow-hidden">
                                        <span className="material-icons-round text-gray-400">person</span>
                                    </div>
                                    <div className="w-12 h-12 rounded-full border-4 border-[#FAF9F6] bg-gray-300 flex items-center justify-center overflow-hidden">
                                        <span className="material-icons-round text-gray-500">face_3</span>
                                    </div>
                                    <div className="w-12 h-12 rounded-full border-4 border-[#FAF9F6] bg-blue-100 flex items-center justify-center overflow-hidden">
                                        <span className="material-icons-round text-blue-500">school</span>
                                    </div>
                                 </div>
                                 <h3 className="text-xl font-bold text-gray-900">Cocok untuk Mahasiswa</h3>
                             </div>
                        </div>

                         {/* Offerings */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-8 flex flex-col items-center justify-center text-center h-[240px] relative overflow-hidden group">
                            <div className="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <span className="material-icons-round text-amber-700 text-3xl">coffee</span>
                            </div>
                            <h3 className="text-gray-500 text-sm font-medium mb-1">Menu Andalan</h3>
                            <h3 className="text-3xl font-sans font-bold text-gray-900">Kopi & Snacks</h3>
                        </div>
                        
                         {/* Dining Options */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-6 h-[220px] relative overflow-hidden flex flex-col justify-end">
                            <div className="absolute top-6 left-6">
                                <h3 className="text-gray-500 text-sm font-medium">Jam Operasional</h3>
                            </div>
                            
                            <div className="bg-white border border-gray-200 rounded-2xl p-4 w-full shadow-sm flex items-center gap-4">
                                <div className="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center">
                                    <span className="material-icons-round text-red-500">schedule</span>
                                </div>
                                <div>
                                    <h4 className="font-bold text-gray-900">Buka Setiap Hari</h4>
                                    <p className="text-xs text-gray-400">09:00 - 23:00</p>
                                </div>
                                <div className="ml-auto">
                                    <span className="material-icons-round text-gray-300">chevron_right</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* Column 3 */}
                    <div className="space-y-6">
                         {/* Facilities (Wifi) */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-8 h-[250px] relative overflow-hidden flex flex-col justify-between group">
                             <div className="flex justify-between items-start">
                                <h3 className="text-2xl font-sans font-bold text-gray-900">Fasilitas</h3>
                                <div className="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center">
                                    <span className="material-icons-round text-teal-600">wifi</span>
                                </div>
                            </div>
                            
                            <div className="bg-white p-4 rounded-2xl border border-gray-200 shadow-sm relative z-10 w-fit">
                                <div className="flex items-center gap-3">
                                    <span className="material-icons-round text-orange-500">bolt</span>
                                    <span className="font-bold text-gray-900">Wifi Sangat Cepat</span>
                                </div>
                            </div>
                            
                             <div className="absolute -bottom-4 -right-4 opacity-5 group-hover:opacity-10 transition-opacity">
                                <span className="material-icons-round text-9xl text-gray-900">wifi</span>
                            </div>
                        </div>

                         {/* Other / Star Rating */}
                        <div className="bg-[#FAF9F6] border border-gray-200 rounded-3xl p-8 flex flex-col items-center justify-center text-center h-[450px]">
                            <h3 className="text-gray-500 text-sm font-medium mb-4">Ulasan Google</h3>
                            <h3 className="text-5xl font-sans font-bold text-gray-900 mb-6">4.9</h3>
                            
                            <div className="flex gap-2">
                                {[1, 2, 3, 4, 5].map((star) => (
                                    <span key={star} className="material-icons-round text-yellow-400 text-4xl transform hover:scale-125 transition-transform cursor-default">star</span>
                                ))}
                            </div>
                            <p className="mt-6 text-gray-400 text-sm">Dari 160+ Ulasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
