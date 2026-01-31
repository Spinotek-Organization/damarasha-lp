import React from 'react';

export default function Facilities() {
    return (
        <section className="py-20 px-6 max-w-7xl mx-auto">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 className="text-4xl lg:text-5xl font-display font-medium leading-tight mb-12 text-primary dark:text-white">
                        Our Quality <br /> Facilities Favorite
                    </h2>
                    <div className="space-y-10">
                        <FacilityItem 
                            title="Meeting Room" 
                            description="Meeting rooms that have adequate lighting, ergonomic tables and chairs, have clear audio and visuals" 
                        />
                        <FacilityItem 
                            title="Coffee Bean" 
                            description="Has very good quality in terms of aroma, taste, acidity, and balance of taste." 
                        />
                        <FacilityItem 
                            title="Work Space" 
                            description="A comfortable workspace can make workers feel more productive, healthy and happy at work" 
                        />
                    </div>
                </div>
                <div className="relative">
                    <div className="rounded-[2.5rem] overflow-hidden shadow-2xl h-[500px]">
                        <img alt="Modern Cafe Interior" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKpxWeRklaPdaNTFUrXwrdSZ6o_YCVM_MQTuqZy371tqQaSWvw97WbOw0kdWItOOAyzGoxMKw-EloDCkE319Ts3PMNWM5QgfMpwd13eNa75fHcHqa1pNP2U01m6j5gyeCKkj26H5Wr7Kd-geAB_3XqWIpuaZI2PhWe668QpcBy7EXBVSnZQ0KVd7c_sbRYtmNx1cXavpXZtZx5g2AK9AN8c8OlerjRR-UtIzWWqSnGmGt80ccFnc7C68AU9sADdFQ0gGpjvhQg-BI" />
                    </div>
                </div>
            </div>
        </section>
    );
}

function FacilityItem({ title, description }) {
    return (
        <div className="flex gap-6 group">
            <div className="w-1 h-12 bg-gray-200 dark:bg-gray-700 group-hover:bg-primary transition-colors duration-300 rounded-full"></div>
            <div>
                <h3 className="text-xl font-bold font-display mb-2">{title}</h3>
                <p className="text-gray-500 dark:text-gray-400 text-sm leading-relaxed max-w-sm">
                    {description}
                </p>
            </div>
        </div>
    );
}
