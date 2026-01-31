import React from 'react';

export default function Location() {
    return (
        <section className="py-20 px-6 max-w-7xl mx-auto">
            <h2 className="text-4xl font-display font-medium text-center mb-16 text-primary dark:text-white">Our Location</h2>
            <div className="grid grid-cols-1 lg:grid-cols-5 gap-12">
                <div className="lg:col-span-2 space-y-6">
                    <LocationItem number="01" city="Yogyakarta" active />
                    <LocationItem number="02" city="Surakarta" />
                    <LocationItem number="03" city="Semarang" />
                    <LocationItem number="04" city="Jakarta" />
                </div>
                <div className="lg:col-span-3 relative bg-gray-100 dark:bg-surface-dark rounded-3xl overflow-hidden min-h-[400px]">
                    <img alt="Map Texture" className="w-full h-full object-cover opacity-20 dark:opacity-10 mix-blend-overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3l-nqGq0uh5aX8g4iyluuvua8nXkErqT7UYueA2hFnO_ifNAtpMPhYWZJX24h8OtETafyVSD9nMwfw5HgQmsCormcclCAIff6xat1qHLyeMjJUpBrHKIEhIJEf-ULUvabBXUj-YtV9xRrnRLZjdfPOWnZCHN25rbTiv2-sXUVClnXP7JT2Dok5G4O1-k7lKxR72hKm7uuNy9RwoT5WjswLo6byN5CEL9i9rfI7kWCSwXTWyFMhs30QFSPHnYdeGeYu9o_EZ_1FAA" />
                    <div className="absolute inset-0 flex items-center justify-center">
                        <div className="absolute top-1/4 left-1/3 animate-bounce">
                            <span className="material-icons-round text-primary text-5xl drop-shadow-lg">location_on</span>
                        </div>
                        <div className="absolute bottom-1/3 right-1/3">
                            <span className="material-icons-round text-gray-400 text-4xl drop-shadow-md">location_on</span>
                        </div>
                        <div className="absolute top-1/2 right-1/4">
                            <span className="material-icons-round text-gray-400 text-4xl drop-shadow-md">location_on</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}

function LocationItem({ number, city, active }) {
    return (
        <div className="group cursor-pointer">
            <h3 className={`text-3xl font-display font-bold transition group-hover:translate-x-2 duration-300 ${active ? 'text-primary dark:text-white' : 'text-gray-400 dark:text-gray-700 hover:text-primary dark:hover:text-gray-500'}`}>
                {number}. {city}
            </h3>
            <div className={`h-px mt-4 w-full ${active ? 'bg-primary dark:bg-white' : 'bg-gray-200 dark:bg-gray-800'}`}></div>
        </div>
    );
}
