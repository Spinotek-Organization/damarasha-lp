import React, { useState } from 'react';

export default function Testimonials() {
    const [activeIndex, setActiveIndex] = useState(0);

    const testimonials = [
        {
            id: 1,
            quote: "Pagi saya jadi lebih bersemangat! Kopinya kaya rasa namun halus, dan saya suka asal usul bijinya yang jelas.",
            name: "Budi Santoso",
            role: "Pelanggan",
            rating: 4.8,
            image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop",
            imageSecondary: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=600&auto=format&fit=crop"
        },
        {
            id: 2,
            quote: "Suasananya tak tertandingi. Tempat favorit saya untuk kerja fokus, dan cold brew-nya sempurna.",
            name: "Siti Aminah",
            role: "Freelancer",
            rating: 5.0,
            image: "https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=600&auto=format&fit=crop", 
            imageSecondary: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=600&auto=format&fit=crop"
        },
        {
            id: 3,
            quote: "Rela datang jauh demi latte art dan staf yang ramah. Sangat layak dikunjungi setiap saat.",
            name: "Dedi Setiawan",
            role: "Pecinta Kopi",
            rating: 4.9,
            image: "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=600&auto=format&fit=crop",
            imageSecondary: "https://images.unsplash.com/photo-1511920170033-f8396924c348?q=80&w=600&auto=format&fit=crop"
        },
        {
            id: 4,
            quote: "Akhirnya tempat kopi yang menyajikan rasa asli tanpa rasa gosong. Kue-kuenya juga bonus yang menyenangkan!",
            name: "Eka Putri",
            role: "Blogger Makanan",
            rating: 4.7,
            image: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=600&auto=format&fit=crop",
            imageSecondary: "https://images.unsplash.com/photo-1517433670267-08bbd4be890f?q=80&w=600&auto=format&fit=crop"
        },
        {
            id: 5,
            quote: "Layanan sangat cepat bahkan saat sibuk. Efisiensi dan kualitas terbaik yang membuat saya kembali.",
            name: "Michael Tan",
            role: "Pemilik Bisnis",
            rating: 5.0,
            image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=600&auto=format&fit=crop",
            imageSecondary: "https://images.unsplash.com/photo-1497935586351-b67a49e012bf?q=80&w=600&auto=format&fit=crop"
        }
    ];

    const handlePrev = () => {
        setActiveIndex((prev) => (prev === 0 ? testimonials.length - 1 : prev - 1));
    };

    const handleNext = () => {
        setActiveIndex((prev) => (prev === testimonials.length - 1 ? 0 : prev + 1));
    };

    const activeTestimonial = testimonials[activeIndex];

    const renderStars = (rating) => {
        const fullStars = Math.floor(rating);
        const hasHalfStar = rating % 1 >= 0.5;
        const totalStars = 5;

        return (
            <>
                {[...Array(fullStars)].map((_, i) => (
                    <span key={`full-${i}`} className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                ))}
                {hasHalfStar && (
                    <span className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star_half</span>
                )}
                {[...Array(totalStars - fullStars - (hasHalfStar ? 1 : 0))].map((_, i) => (
                    <span key={`empty-${i}`} className="material-symbols-outlined text-xl fill-current opacity-30" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                ))}
            </>
        );
    };

    return (
        <section className="bg-blue-50 dark:bg-primary text-primary dark:text-white overflow-hidden transition-colors duration-300">
            <div className="py-20 px-6 max-w-7xl mx-auto">
                <div className="flex flex-row justify-between">
                    <div className="mb-8">
                        <span className=" text-sm tracking-[0.2em] border border-current rounded-full px-6 py-3 inline-block font-medium">Testimoni</span>
                    </div>
                    <h2 className="text-3xl md:text-5xl font-light font-italic leading-tight mb-16 max-w-4xl">
                        <span className="font-medium  not-italic">Hasil nyata, cerita nyata.</span> Lihat bagaimana pengalaman <span className="font-italic italic">pelanggan</span> kami berubah dengan <span className="font-italic italic">produk kopi kami.</span>
                    </h2>
                </div>
                <div className="flex flex-col lg:flex-row gap-12 lg:gap-20 items-stretch">
                    <div className="relative w-full lg:w-1/2 h-[450px] md:h-[550px]">
                        <div key={`bg-${activeTestimonial.id}`} className="absolute -left-12 bottom-12 w-[35%] h-[60%] overflow-hidden opacity-60 z-0 hidden md:block animate-fade-in">
                            <img alt="Atmosphere" className="w-full h-full object-cover mix-blend-multiply" src={activeTestimonial.imageSecondary} />
                        </div>
                        <div key={`img-${activeTestimonial.id}`} className="relative z-10 w-full md:w-[75%] h-full md:ml-auto shadow-2xl overflow-hidden rounded-xl animate-fade-in">
                            <img alt={activeTestimonial.name} className="w-full h-full object-cover" src={activeTestimonial.image} />
                        </div>
                    </div>
                    <div className="w-full lg:w-1/2 flex flex-col justify-between py-4">
                        <div key={`content-${activeTestimonial.id}`} className="animate-fade-in">
                            <blockquote className="font-italic italic text-2xl md:text-4xl leading-snug mb-6">
                                – {activeTestimonial.quote}
                            </blockquote>
                            <cite className="not-italic text-lg font-sans opacity-90 block mb-12">
                                {activeTestimonial.name} – {activeTestimonial.role}
                            </cite>
                            <div className=" pt-8 flex flex-col gap-2 opacity-80">
                                <span className="text-sm font-light opacity-80">Kepuasan Pelanggan</span>
                                <div className="flex items-end gap-3">
                                    <span className="text-4xl font-light">{activeTestimonial.rating}<span className="text-lg opacity-60">/5</span></span>
                                    <div className="flex mb-1.5">
                                        {renderStars(activeTestimonial.rating)}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="flex justify-between items-center text-[10px] tracking-[0.2em] border-t border-current pt-5 mt-10 md:mt-0 font-sans font-bold">
                            <button 
                                onClick={handlePrev}
                                className="flex items-center gap-2 hover:opacity-70 transition group uppercase cursor-pointer"
                            >
                                <span className="material-symbols-outlined text-base group-hover:-translate-x-1 transition-transform">arrow_back</span>
                                Sebelumnya
                            </button>
                            <span>{String(activeIndex + 1).padStart(2, '0')}/{String(testimonials.length).padStart(2, '0')}</span>
                            <button 
                                onClick={handleNext}
                                className="flex items-center gap-2 hover:opacity-70 transition group uppercase cursor-pointer"
                            >
                                Berikutnya
                                <span className="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <style jsx>{`
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(10px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                .animate-fade-in {
                    animation: fadeIn 0.5s ease-out forwards;
                }
            `}</style>
        </section>
    );
}
