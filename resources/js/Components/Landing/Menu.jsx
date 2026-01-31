import React from 'react';

export default function Menu() {
    return (
        <section className="py-16 px-6 max-w-7xl mx-auto">
            <div className="flex flex-col items-center mb-16">
                <h2 className="text-4xl font-display font-medium mb-10 text-center text-primary dark:text-white">Best Menu Our Have</h2>
                <div className="flex flex-wrap justify-center gap-3 md:gap-4">
                    <button className="flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-full text-sm font-medium shadow-lg hover:shadow-xl transition">
                        <span className="material-icons-round text-sm">coffee</span> Coffee
                    </button>
                    <button className="flex items-center gap-2 bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 text-gray-600 dark:text-gray-300 px-6 py-3 rounded-full text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span className="material-icons-round text-sm">local_drink</span> Noncoffee
                    </button>
                    <button className="flex items-center gap-2 bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 text-gray-600 dark:text-gray-300 px-6 py-3 rounded-full text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span className="material-icons-round text-sm">stars</span> Signature
                    </button>
                    <button className="flex items-center gap-2 bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 text-gray-600 dark:text-gray-300 px-6 py-3 rounded-full text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span className="material-icons-round text-sm">wine_bar</span> Mocktail
                    </button>
                    <button className="flex items-center gap-2 bg-white dark:bg-surface-dark border border-gray-100 dark:border-gray-700 text-gray-600 dark:text-gray-300 px-6 py-3 rounded-full text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        <span className="material-icons-round text-sm">egg</span> Cake
                    </button>
                </div>
            </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                <MenuCard 
                    title="Brown Sugar" 
                    price="$2.24 USD" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuD7u-GW7327oe7jAUtlRbs5d-nry5QRc43LmWjmXncQ3ZJluEWTdXCz_aSOa18eAZTzEOgyuGr8_LDZdf97HctRgJuvXsuLRDARRCYfx7EdFS3K7gelBcpwOkNe8E9tlB-dkFRAP1luva7vOy9-mF_6GnAmEe8qf8i7h1D9-ZLX5x--5MiZOPFPLS82pETr-qrb5Z1hA6lnryMFx_UIcq5UUvaTl7KfGm2x2CGFE5yOcaX8ZIP15qx1VzatSbGChWEhTzG_wXzOvIQ" 
                />
                <MenuCard 
                    title="Asian Dolce" 
                    price="$2.64 USD" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuAGaNecKgsVrwQ_zhkSQXxHt1XBU84cjTMt71Bt3o3x9he8Oz5MSYPPCn8nJ6rjSbaAiNtGOeCm57fW0yzutcsTeoA4UgULQdNhDQjnjqB7R1v5EcNUNCYosFhcRmQmvZhaVo072RAtdpP2DzoIXwWLoE3_ihHRQfynBOPin0ipsqYQDZYAWSgl0EZAnGPFWVEUelHUBlmHFoNvFE4U4eyceNoMPt86rvQuuIosK8_81BtTkG8ssGEsk66nJ72Ok2sEWSDFc1D1qrg" 
                />
                <MenuCard 
                    title="Café Latte" 
                    price="$2.64 USD" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuCXkWKRRze6Os5iP0ZGtkLq5JNOZvX6qCjR09RO4SfroSdFT8pTDEjq7p0CBgMFUcFvATsAbQu0vn5AE-2PoDHMrBX8w4Ilq_3KjUy2cYpCGdlwu4d7o7Fp7xo2V9UJEW_CrgXFC2Je_GlQPA5iE1OQxBBePHAD2v051lY3Wj-MsZdfRUKuDQYJumWI-4ylbfVgkpVhh88gj5UH5aYb0HZWLRbSIHwbHpp1KJQfE0u_bwPMYBbYt7AdgrBudIUB8cWyIG6aUPkz2k4" 
                />
                <MenuCard 
                    title="Latte Cappu" 
                    price="$2.64 USD" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuBjBYXADnesAVQ8M-xghXzkvlg_K8Z-KrLaLeelxcoNk0FGY3JbOUrLW7FoD_NZh9Sfy8IrsG64cmpyyvllwXnG14gQx14GmDyQ0yUKcIALJzf27qMWHz6VHwXPkw6_gdXWND2gF9idW6scK32hq1wrnZJsQGrQt4OWAOnTO2BK7SCiK3NUNKF7JZ2NdTqSnVBFShvSINaAKujFK1Rej03M4SlmvRvuHrTilnM-W97DkwTEb4ICGECjU76kv0yPOcM11uFSmb0M-XI" 
                />
                <MenuCard 
                    title="Dalgonna" 
                    price="$2.64 USD" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuAA9Me2I7e2LUN21WN8FxhbHHMhi1QqE1zg2dLTm-H83sCc4gv56bEQDR1WFMLfFlakEy4_3pUeyByjs90WMguY5kjh4HxBEQYIXYZWHbvF0xk-YP9zTb0bvr5uwBMIz3W7OAAFopOFI72wGahDvIdU-0KsA9p9xXZ_5wkf7_WM3gI4rfYvf-RYdOiJUSWu5UGicmXKjU0rh8DgM45hJD11_DIGc9AmwyF8cBx1tNBPL5s1CTNcg61HQgrglt6zUzSBwLaJvaKA6TM" 
                />
                <MenuCard 
                    title="Creamy Matcha" 
                    price="$3.50 USD" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuCnpvmKIxPW4OGBOBNtwTkH3PggX3AkxXKtDisSj-89sTPeDjMeikAEyOUmohzflsZbsNedQ7Mj5r9O_vL5kGQWbpNKgRJ-_EUHaFf4x4Cg8DqB48-SP0mMYwt4lDh988NUdzXSG6gHaDTsbILxakiQumHF5VoOsea904lygAe-pJTbA-Ac5JfaHyYuWBJgOEEijtZmT_liwbwXPz9rTfCUxXoAz6mmprz4Bty96UEVlWyL5vhIUea7Gaf4KIEb6wXimQRtkOboy80" 
                />
            </div>
        </section>
    );
}

function MenuCard({ title, price, image }) {
    return (
        <div className="flex flex-col items-center group cursor-pointer">
            <div className="aspect-square w-full bg-gray-50 dark:bg-gray-800 mb-6 overflow-hidden relative rounded-3xl">
                <img alt={title} className="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out" src={image} />
            </div>
            <h3 className="font-display text-2xl font-bold text-gray-900 dark:text-white mb-2 tracking-tight text-center">{title}</h3>
            <span className="text-base font-medium text-primary dark:text-gray-400 tracking-wide">{price}</span>
        </div>
    );
}
