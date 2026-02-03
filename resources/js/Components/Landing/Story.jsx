import React, { useState } from 'react';

export default function Story() {
    const [activeIndex, setActiveIndex] = useState(1); // Default to "Good Staff" (index 1)

    const stories = [
        {
            title: "Tempat Estetik",
            icon: "photo_camera",
            image: "https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=600&auto=format&fit=crop",
            heading: "Nikmati suasana nyaman dan estetik",
            description: "Ruang yang tidak hanya nyaman tapi juga memanjakan mata, sempurna untuk media sosial Anda."
        },
        {
            title: "Pelayanan Ramah",
            icon: "sentiment_satisfied_alt",
            image: "https://images.unsplash.com/photo-1542181961-9590d0c79dab?q=80&w=600&auto=format&fit=crop",
            heading: "Tingkatkan mood dengan staf ramah kami!",
            description: "Baik mencari energi baru, keseruan, atau kebahagiaan kecil, kami siap melayani Anda sepenuh hati."
        },
        {
            title: "Peralatan Coffe Modern",
            icon: "coffee",
            image: "https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=600&auto=format&fit=crop",
            heading: "Nikmati kopi terbaik dengan alat modern",
            description: "Peralatan seduh canggih kami memastikan setiap cangkir sempurna, mengeluarkan rasa terbaik biji kopi kami."
        }
    ];

    const handlePrev = () => {
        setActiveIndex((prev) => (prev === 0 ? stories.length - 1 : prev - 1));
    };

    const handleNext = () => {
        setActiveIndex((prev) => (prev === stories.length - 1 ? 0 : prev + 1));
    };

    const getDisplayStories = () => {
        const total = stories.length;
        const prevIndex = (activeIndex - 1 + total) % total;
        const nextIndex = (activeIndex + 1) % total;
        return [stories[prevIndex], stories[activeIndex], stories[nextIndex]];
    };

    const displayStories = getDisplayStories();

    return (
        <section className="py-20 px-6 max-w-7xl mx-auto">
            <div className="flex flex-col lg:flex-row justify-between mb-12 lg:mb-16 gap-8">
                <div className="lg:w-1/3">
                    <span className="text-lg font-bold text-gray-800 block max-w-[150px] leading-tight">Teman Setia Rasa Anda</span>
                </div>
                <div className="lg:w-2/3">
                    <h2 className="text-2xl md:text-4xl font-semibold leading-tight text-primary">
                        Selalu ada cerita baru yang kami bagikan kepada pelanggan melalui produk inovatif
                    </h2>
                </div>
            </div>
            
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                {displayStories.map((story, index) => (
                    <StoryCard 
                        key={`${story.title}-${index}`}
                        title={story.title} 
                        icon={story.icon} 
                        image={story.image}
                        isActive={index === 1} // Middle item is always active
                        onClick={() => {
                            if (index === 0) handlePrev();
                            if (index === 2) handleNext();
                        }}
                    />
                ))}
            </div>

            <div className="flex flex-col max-w-[800px] lg:flex-row justify-between items-start gap-8 mt-4">
                <div className="flex gap-4">
                    <button 
                        onClick={handlePrev}
                        className="w-14 h-14 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition text-primary"
                    >
                        <span className="material-icons-round">arrow_back</span>
                    </button>
                    <button 
                        onClick={handleNext}
                        className="w-14 h-14 rounded-full border border-gray-200 flex items-center justify-center hover:bg-gray-100 transition text-primary"
                    >
                        <span className="material-icons-round">arrow_forward</span>
                    </button>
                </div>
                <div className="text-left md:text-left lg:text-right lg:ml-52">
                    <h3 className="text-2xl font-bold font-display text-primary mb-3">
                        {stories[activeIndex].heading}
                    </h3>
                    <p className="text-gray-500 text-sm leading-relaxed">
                        {stories[activeIndex].description}
                    </p>
                </div>
            </div>
        </section>
    );
}

function StoryCard({ title, icon, image, isActive, onClick }) {
    return (
        <div 
            onClick={onClick}
            className={`group relative aspect-square rounded-[2rem] overflow-hidden cursor-pointer transition-all duration-300 ${isActive ? 'ring-4 ring-primary ring-offset-2' : 'opacity-80 hover:opacity-100'}`}
        >
            <img alt={title} className="w-full h-full object-cover transition duration-500 group-hover:scale-105" src={image} />
            <div className={`absolute top-6 left-6 pr-4 pl-1 py-1 rounded-full flex items-center gap-2 shadow-sm transition-colors duration-300 ${isActive ? 'bg-primary' : 'bg-[#FAF9F6]'}`}>
                <div className={`rounded-full p-1.5 flex items-center justify-center transition-colors duration-300 ${isActive ? 'bg-white' : 'bg-primary'}`}>
                    <span className={`material-icons-round text-sm ${isActive ? 'text-primary' : 'text-white'}`}>{icon}</span>
                </div>
                <span className={`text-[10px] font-bold uppercase tracking-wider transition-colors duration-300 ${isActive ? 'text-white' : 'text-primary'}`}>{title}</span>
            </div>
        </div>
    );
}
