import React from 'react';

export default function Menu() {
    return (
        <section className="py-16 px-6 max-w-7xl mx-auto">
            <div className="flex flex-col items-center mb-16">
                <h2 className="text-4xl font-display font-medium mb-10 text-center text-primary">Menu Terbaik Kami</h2>
                <div className="flex flex-wrap justify-center gap-3 md:gap-4">
                    <button className="flex items-center gap-2 bg-primary pr-4 pl-1 py-1 rounded-full text-sm font-medium shadow-lg hover:shadow-xl transition text-white">
                        <div className="bg-white text-primary rounded-full p-1.5 flex items-center justify-center">
                            <span className="material-icons-round text-sm">coffee</span>
                        </div>
                        Kopi
                    </button>
                    <button className="flex items-center gap-2 bg-gray-200  pr-4 pl-1 py-1 rounded-full text-sm font-medium hover:bg-gray-300 transition text-gray-600 ">
                        <div className="bg-white  rounded-full p-1.5 flex items-center justify-center">
                            <span className="material-icons-round text-sm">local_drink</span>
                        </div>
                        Non-Kopi
                    </button>
                    <button className="flex items-center gap-2 bg-gray-200  pr-4 pl-1 py-1 rounded-full text-sm font-medium hover:bg-gray-300 transition text-gray-600 ">
                        <div className="bg-white  rounded-full p-1.5 flex items-center justify-center">
                            <span className="material-icons-round text-sm">stars</span>
                        </div>
                        Spesial
                    </button>
                    <button className="flex items-center gap-2 bg-gray-200  pr-4 pl-1 py-1 rounded-full text-sm font-medium hover:bg-gray-300 transition text-gray-600 ">
                        <div className="bg-white  rounded-full p-1.5 flex items-center justify-center">
                            <span className="material-icons-round text-sm">wine_bar</span>
                        </div>
                        Mocktail
                    </button>
                    <button className="flex items-center gap-2 bg-gray-200  pr-4 pl-1 py-1 rounded-full text-sm font-medium hover:bg-gray-300 transition text-gray-600 ">
                        <div className="bg-white  rounded-full p-1.5 flex items-center justify-center">
                            <span className="material-icons-round text-sm">egg</span>
                        </div>
                        Kue
                    </button>
                </div>
            </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                <MenuCard 
                    title="Brown Sugar" 
                    price="Rp 25.000" 
                    category="Kopi"
                    image="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=600&auto=format&fit=crop" 
                />
                <MenuCard 
                    title="Asian Dolce" 
                    price="Rp 28.000" 
                    category="Kopi"
                    image="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?q=80&w=600&auto=format&fit=crop" 
                />
                <MenuCard 
                    title="Café Latte" 
                    price="Rp 28.000" 
                    category="Kopi"
                    image="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?q=80&w=600&auto=format&fit=crop" 
                />
                <MenuCard 
                    title="Latte Cappu" 
                    price="Rp 28.000" 
                    category="Kopi"
                    image="https://images.unsplash.com/photo-1534040385115-33dcb3acba5b?q=80&w=600&auto=format&fit=crop" 
                />
                <MenuCard 
                    title="Dalgonna" 
                    price="Rp 28.000" 
                    category="Kopi"
                    image="https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?q=80&w=600&auto=format&fit=crop" 
                />
                <MenuCard 
                    title="Creamy Matcha" 
                    price="Rp 35.000" 
                    category="Non-Kopi"
                    image="https://images.unsplash.com/photo-1505252585461-04db1eb84625?q=80&w=600&auto=format&fit=crop" 
                />
            </div>
        </section>
    );
}

function MenuCard({ title, price, image, category = "Kopi" }) {
    return (
        <div className="group cursor-pointer flex flex-col">
            <div className="w-full aspect-square bg-[#EFEDEA] mb-4 relative overflow-hidden">
                <img alt={title} className="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out" src={image} />
            </div>
            
            <div className="flex flex-col px-1">
                 <span className="text-xs text-gray-400 mb-1 font-medium uppercase tracking-wide">{category}</span>
                 <div className="flex justify-between items-start">
                    <h3 className="font-display text-lg font-bold text-gray-900 tracking-tight">{title}</h3>
                    <span className="text-lg font-bold text-gray-900">{price}</span>
                 </div>
            </div>
        </div>
    );
}
