import React from 'react';

export default function CTA() {
    return (
        <section className="py-20 px-6 max-w-7xl mx-auto">
            <div className="relative w-full h-[500px] rounded-[3rem] overflow-hidden shadow-2xl group">
                <img alt="Colorful Macarons" className="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuACujb-qTUPGM1ZMgT-EGZhe8Av6Ddp2Qgfs_KAZ2iaZ9L_QaJ-wu31g5mRXmwuYurqQqW-Mvhlvp1dQAhgtmXJO7oDYbX3n_DION1Wy6hYGwhQ8IOoHTQOAdf6tBaGHSQirK_LXmZThj2ONatE0KNYg4uNIMmSFcN2CmHcQwfoo0WqTvXDRg8JttvveTHm-_jos277WSGUdw-bBDSQ7U6b8HoxfucD-ctmTS6NCbIjLjZ2PQW6MpglqHOidywlXp9vNWGpWSR2Uns" />
                <div className="absolute inset-0 bg-black/20"></div>
                <div className="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
                    <h2 className="text-4xl md:text-6xl font-display font-bold text-white mb-6 drop-shadow-md">
                        We believe joy should be effortless.
                    </h2>
                    <p className="text-white text-lg md:text-xl font-medium max-w-2xl mb-10 drop-shadow-sm leading-relaxed">
                        Every sip from Caffeine proves that treating yourself doesn't have to mean waiting for a special occasion.
                    </p>
                    <button className="bg-white text-rose-600 px-10 py-4 rounded-full font-bold text-sm tracking-wider hover:bg-gray-50 transition-all duration-300 shadow-lg flex items-center gap-2 group-btn">
                        SHOP NOW
                        <span className="material-icons-round text-lg group-btn-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section>
    );
}
