import React from 'react';

export default function Location() {
    return (
        <section className="relative py-24 min-h-[700px] flex items-center my-40">
            {/* Full Width Map Background */}
            <div className="absolute inset-0 z-0">
                <img 
                    src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2074&auto=format&fit=crop" 
                    alt="Map Visualization" 
                    className="w-full h-full object-cover grayscale opacity-60"
                />
                <div className="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-white via-white/80 to-transparent z-10"></div>
                <div className="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-white via-white/80 to-transparent z-10"></div>
                <div className="absolute inset-0 bg-gradient-to-r from-gray-50/90 via-gray-50/50 to-transparent"></div>
                
                {/* Pulsating Pin (Positioned relative to map for visual effect) */}
                <div className="absolute top-1/2 left-2/3 transform -translate-x-1/2 -translate-y-1/2 hidden lg:block">
                     <span className="flex h-8 w-8 relative">
                        <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span className="relative inline-flex rounded-full h-8 w-8 bg-blue-600 border-4 border-white shadow-lg"></span>
                    </span>
                    <div className="absolute top-full left-1/2 -translate-x-1/2 mt-2 bg-white px-3 py-1 rounded-full shadow-lg whitespace-nowrap">
                        <span className="text-xs font-bold text-gray-900">Damarasha Jogja</span>
                    </div>
                </div>
            </div>

            <div className="max-w-7xl mx-auto w-full relative z-10">
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    
                    {/* Header Text Overlay */}
                    <div>
                        <span className="text-sm font-bold tracking-[0.2em] text-primary uppercase mb-4 block">Lokasi Kami</span>
                        <h2 className="text-4xl md:text-5xl font-sans font-bold text-gray-900 leading-tight mb-6">
                            Kunjungi Kami di <br/> <span className="text-primary  italic">Yogyakarta</span>.
                        </h2>
                        <p className="text-gray-600 max-w-md text-lg leading-relaxed">
                            Temukan tempat ternyaman untuk kopi dan kreativitas. Ruang yang dirancang untuk produktivitas dan relaksasi Anda.
                        </p>
                    </div>

                    {/* Location Details Floating Card */}
                    <div className="bg-white/95 backdrop-blur-sm p-4 rounded-3xl shadow-2xl lg:ml-auto max-w-md w-full border border-gray-100/50">
                        {/* Venue Image */}
                        <div className="rounded-2xl overflow-hidden h-64 w-full mb-8 shadow-md">
                            <img 
                                src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop" 
                                alt="Damarasha Coffee Shop" 
                                className="w-full h-full object-cover hover:scale-105 transition-transform duration-700" 
                            />
                        </div>

                        <div className="space-y-8">
                            {/* Address */}
                            <div className="flex gap-4 items-start">
                                <div className="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-blue-600">
                                    <span className="material-icons-round text-xl">location_on</span>
                                </div>
                                <div>
                                    <h4 className="font-bold text-gray-900 text-lg mb-1">Alamat Lengkap</h4>
                                    <p className="text-gray-500 text-sm leading-relaxed">
                                        Jl. Cangkring Indah 1 No.17, Karangsari, Wedomartani, Kec. Ngemplak, Sleman, Yogyakarta 55584
                                    </p>
                                </div>
                            </div>

                            {/* Operational Hours */}
                            <div className="flex gap-4 items-start">
                                <div className="w-12 h-12 rounded-full bg-orange-50 flex items-center justify-center flex-shrink-0 text-orange-600">
                                    <span className="material-icons-round text-xl">access_time</span>
                                </div>
                                <div>
                                    <h4 className="font-bold text-gray-900 text-lg mb-1">Jam Buka</h4>
                                    <ul className="text-gray-500 text-sm space-y-1">
                                        <li className="flex justify-between gap-8">
                                            <span>Setiap Hari</span>
                                            <span className="font-medium text-gray-700">09:00 - 23:00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div className="mt-8 pt-6 border-t border-gray-100">
                             <a href="https://maps.app.goo.gl/jMaF9ZDryJG2PJQ97" target="_blank" rel="noopener noreferrer" className="flex items-center justify-center gap-2 w-full py-4 bg-gray-900 hover:bg-gray-800 text-white rounded-xl transition-colors font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 duration-300">
                                <span className="material-icons-round text-sm">directions</span>
                                Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
