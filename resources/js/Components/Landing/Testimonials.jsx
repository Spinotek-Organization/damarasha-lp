import React from 'react';

export default function Testimonials() {
    return (
        <section className="bg-blue-50 dark:bg-primary text-primary dark:text-white overflow-hidden transition-colors duration-300">
            <div className="py-20 px-6 max-w-7xl mx-auto">
                <div className="mb-8">
                    <span className="uppercase text-[10px] tracking-[0.2em] border border-current px-3 py-1.5 inline-block font-sans font-medium">Testimonials</span>
                </div>
                <h2 className="text-3xl md:text-5xl font-light font-italic leading-tight mb-16 max-w-4xl">
                    <span className="font-serif not-italic">Real results, real stories.</span> See how our <span className="font-italic italic">customers’</span> experiences have transformed with our <span className="font-italic italic">coffee products.</span>
                </h2>
                <div className="flex flex-col lg:flex-row gap-12 lg:gap-20 items-stretch">
                    <div className="relative w-full lg:w-1/2 h-[450px] md:h-[550px]">
                        <div className="absolute -left-12 bottom-12 w-[35%] h-[60%] overflow-hidden opacity-60 z-0 hidden md:block">
                            <img alt="Cafe Atmosphere" className="w-full h-full object-cover mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzBu3ToEd08qy9ueqjPuZnjvJnAkTsu5icCBcq4NY0DJRL-XZ9bHdv_Z3Nb16-DZV4vlE0KWdiGRanun7Dmcm0awYuzbI3RYHXLrkj2lk-880nGAm48luYa5dGvKu_XxBUJqAbTEfJE2RK5QzazKBZUUUqDSKd3Vjuc7mYzowAoJ0UvxRGTB8r_0tde7DCRwpUDSxsVoS31WTqKwpbAXoPzB0mgazPLMT4yGlH_49LUPvaKeOZZjfdAyC9_zk95NyOMPy_TPXdFgU" />
                        </div>
                        <div className="relative z-10 w-full md:w-[75%] h-full md:ml-auto shadow-2xl overflow-hidden rounded-xl">
                            <img alt="Happy Customer" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVKJtJVe7N8xvcDR2Efrs6R4v2ckleeK9zpDNb3A0ZnvetNmEhVOPiz6_Oycv7yeftZWYObiyxTCFxKuH_f7nB9WSEeKWXSwdQ5V-jpVFI_yDf0SydkTFA2SqChtJ4K-TQQ4ACtSMh9Y-MDuCXUNalPbHLGzEwHUNkTYHGfk56PtLi7D2jTkCLnks_m42SPngYKy351k-nY5_yyqTOrlmn1mTTHu9rWu1Cdu7MyaN5qHtgt-ffIMeNG6Uf1ew0uens67oWd6MJiNE" />
                        </div>
                    </div>
                    <div className="w-full lg:w-1/2 flex flex-col justify-between py-4">
                        <div>
                            <blockquote className="font-italic italic text-2xl md:text-4xl leading-snug mb-6">
                                – I’ve never felt my mornings this smooth and energized! The coffee is rich yet smooth, and I love knowing it's ethically sourced.
                            </blockquote>
                            <cite className="not-italic text-lg font-sans opacity-90 block mb-12">
                                Marcus Thorne – Customer
                            </cite>
                            <div className="border-t border-current pt-8 flex flex-col gap-2 opacity-80">
                                <span className="text-sm font-light opacity-80">Customer satisfaction</span>
                                <div className="flex items-end gap-3">
                                    <span className="text-4xl font-light">4.8<span className="text-lg opacity-60">/5</span></span>
                                    <div className="flex mb-1.5">
                                        <span className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                                        <span className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                                        <span className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                                        <span className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star</span>
                                        <span className="material-symbols-outlined text-xl fill-current" style={{ fontVariationSettings: "'FILL' 1" }}>star_half</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="flex justify-between items-center text-[10px] tracking-[0.2em] border-t border-current pt-5 mt-10 md:mt-0 font-sans font-bold">
                            <button className="flex items-center gap-2 hover:opacity-70 transition group uppercase">
                                <span className="material-symbols-outlined text-base group-hover:-translate-x-1 transition-transform">arrow_back</span>
                                Previous
                            </button>
                            <span>01/05</span>
                            <button className="flex items-center gap-2 hover:opacity-70 transition group uppercase">
                                Next
                                <span className="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
