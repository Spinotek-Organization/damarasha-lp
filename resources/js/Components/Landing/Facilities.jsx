import React, { useState } from 'react';

export default function Facilities() {
    const [activeId, setActiveId] = useState('01');

    const facilities = [
        {
            id: '01',
            title: 'Ruang Rapat Private',
            shortDesc: 'Ruang rapat dengan pencahayaan cukup dan kursi ergonomis.',
            description: 'Ruang rapat yang dilengkapi pencahayaan memadai, meja kursi ergonomis, serta audio visual jernih untuk produktivitas Anda.',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCKpxWeRklaPdaNTFUrXwrdSZ6o_YCVM_MQTuqZy371tqQaSWvw97WbOw0kdWItOOAyzGoxMKw-EloDCkE319Ts3PMNWM5QgfMpwd13eNa75fHcHqa1pNP2U01m6j5gyeCKkj26H5Wr7Kd-geAB_3XqWIpuaZI2PhWe668QpcBy7EXBVSnZQ0KVd7c_sbRYtmNx1cXavpXZtZx5g2AK9AN8c8OlerjRR-UtIzWWqSnGmGt80ccFnc7C68AU9sADdFQ0gGpjvhQg-BI',
            cta: 'Pesan ruangan'
        },
        {
            id: '02',
            title: 'Biji Kopi',
            shortDesc: 'Memiliki kualitas terbaik dalam aroma, rasa, dan keseimbangan.',
            description: 'Kualitas terbaik dalam hal aroma, rasa, keasaman, dan keseimbangan rasa. Bersumber dari petani lokal terbaik.',
            image: 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?q=80&w=600&auto=format&fit=crop',
            cta: 'Lihat koleksi'
        },
        {
            id: '03',
            title: 'Ruang Kerja',
            shortDesc: 'Ruang kerja nyaman untuk meningkatkan produktivitas.',
            description: 'Ruang kerja nyaman yang membuat Anda merasa lebih produktif, sehat, dan bahagia dengan internet berkecepatan tinggi.',
            image: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCJca3ESyCf3OBFmi6nkUR3ZGBzA6IntWR4aZpFg3cQpD7UwWKYJBsVTONyrJ2OfkdHkxW-8-avjMDqLUAumAfGU7r4-3u8iYlLFzyyiktwL5FJQbJe7VLIwIZGD3v2blpJnk4tKEnq7dHvZ54hHHBBQ8FJta8N__GonHXF029gkJqyO_HIzFixrgQFOFnuX96UF6H24w_bHDsf2wzJdsoq2gZ0qSghyIo8uyafBJA6XBgzuvtXt_C_2AbUOZkk8pR1ZaMVcbr8VNE',
            cta: 'Cek ketersediaan'
        }
    ];

    const activeFacility = facilities.find(f => f.id === activeId);

    return (
        <section className="bg-white py-24 px-4 sm:px-6">
            <div className="max-w-7xl mx-auto mb-20">
                 <div className="inline-block border border-gray-300 rounded-full px-5 py-2">
                    <span className="text-gray-900 text-sm font-medium">Fasilitas Unggulan Kami</span>
                 </div>

                 <div className="flex flex-col lg:flex-row justify-between items-center gap-12">
                    <h2 className="text-4xl font-medium text-gray-900 max-w-2xl leading-tight">
                        Kami percaya bahwa momen kecil dalam hidup <span className="text-gray-400 italic">layak dirayakan.</span>
                    </h2>
                    
                    <p className="text-gray-500 text-sm leading-relaxed max-w-sm text-left lg:text-right pb-2">
                         Baik itu kopi pagi, teh sore, atau penyegar malam, setiap tegukan adalah cerminan kenyamanan Anda. Produk kami dirancang untuk menyatu dengan sempurna.
                    </p>
                 </div>
            </div>

            <div className="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12 lg:gap-20">
                {/* Left Side: Interactive List */}
                <div className="lg:w-1/3 flex flex-col gap-8 justify-center">
                     {facilities.map((item) => (
                        <div 
                            key={item.id}
                            className={`group cursor-pointer p-4 rounded-2xl transition-all duration-300 ${activeId === item.id ? 'bg-gray-100' : 'hover:bg-gray-50'}`}
                            onClick={() => setActiveId(item.id)}
                        >
                            <div className="flex gap-4 items-start">
                                 <span className={`text-sm font-bold mt-1 ${activeId === item.id ? 'text-[#E85D04]' : 'text-gray-400'}`}>0{item.id}</span>
                                 <div>
                                    <h3 className={`text-xl font-bold font-display mb-2 ${activeId === item.id ? 'text-gray-900' : 'text-gray-400 group-hover:text-gray-600'}`}>
                                        {item.title}
                                    </h3>
                                    <p className={`text-sm leading-relaxed max-w-sm ${activeId === item.id ? 'text-gray-600' : 'text-gray-400'}`}>
                                        {item.shortDesc}
                                    </p>
                                 </div>
                            </div>
                        </div>
                    ))}
                </div>

                {/* Right Side: Active Card Detail */}
                <div className="lg:w-2/3">
                    <FacilityCard item={activeFacility} />
                </div>
            </div>
        </section>
    );
}

function FacilityCard({ item }) {
    if (!item) return null;
    
    return (
        <div key={item.id} className="bg-[#FAF9F6] rounded-[2.5rem] p-3 flex flex-col md:flex-row gap-6 h-full min-h-[500px] shadow-sm overflow-hidden animate-fadeIn">
             {/* Left: Image Section */}
            <div className="md:w-1/2 h-[300px] md:h-full rounded-[2rem] overflow-hidden relative">
                <img 
                    src={item.image} 
                    alt={item.title} 
                    className="absolute inset-0 w-full h-full object-cover" 
                />
            </div>
            
            {/* Right: Content Section */}
            <div className="md:w-1/2 flex flex-col relative p-4 md:py-8 md:pr-8">
                {/* Number Top Right */}
                 <div className="absolute top-0 right-0 md:top-4 md:right-4">
                    <span className="text-6xl lg:text-7xl font-sans font-medium text-black select-none">{item.id}</span>
                </div>

                <div className="mt-auto space-y-8">
                     <div className="space-y-2">
                        <h3 className="text-xl font-semibold text-gray-900">Sebuah Perjalanan</h3>
                        <p className="text-gray-600 leading-normal text-sm lg:text-base">
                            The {item.title.toLowerCase()} is designed to seamlessly blend into your workflow. {item.description}
                        </p>
                    </div>
                    
                    <button className="bg-primary text-white px-8 py-3 rounded-full font-medium hover:bg-[#D35000] transition-colors inline-block w-auto text-sm">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    );
}
