import React from 'react';

export default function Story() {
    return (
        <section className="py-20 px-6 max-w-7xl mx-auto">
            <div className="flex flex-col lg:flex-row justify-between mb-12 lg:mb-16 gap-8">
                <div className="lg:w-1/3">
                    <span className="text-lg font-bold text-gray-800 dark:text-gray-200 block max-w-[150px] leading-tight">Your partner on flavour</span>
                </div>
                <div className="lg:w-2/3">
                    <h2 className="text-3xl md:text-5xl font-bold font-display leading-tight text-primary dark:text-white">
                        There is always a new story that we want to tell our customers through innovative products
                    </h2>
                </div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <StoryCard 
                    title="Aesthetic Place" 
                    icon="photo_camera" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuCKFmVoQyxqgd-9DI_80L0vUlBBGfrUKnsOQTPxXeS1ORzu1Pxz4dU0k75e8pCIZAf5u3yO-GX_-vLhWxqMGIt1I31Z4SCCqzgBH8zKFqiJqISipFkFFBUMXL5m8ppahzPViqi-2LICET7Q3L4BVXCvmkir0ygXE-ETHp9EoQQN67Anua2wMx6BfXsBLk_o9B2ILe7YkCxU6ys4MvIDtby78S9x5dWylf1thTF-2ZUNmP58Ge02ktfurRreiN0g2BunP-RQnrRh5Jc" 
                />
                <StoryCard 
                    title="Good Staff" 
                    icon="sentiment_satisfied_alt" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuD1vpovi9e_0IbPHPc3FjP8mtYVixtVf1e4gwZXHuavV1TwFexDZlujTdOONEUSpDa9-DMJaPmYpUIopA4LqEu8d_wTKwUrxkMOwIXOrIinshLs_e-b2mpo3JMHhmcLiNo7fQGpDcZJxEC2b68Xcdgdzny8XaLGOITiFNMnEQbZkuwmoeQM4coOlvlD0f3-UD_Nw4FzJdsUzd-GL5wSXPlztE5GqC85xbi2QGCoDWHBFnw3_9JOQoskQ3q7o587phpFc8kgKKuCPUk" 
                />
                <StoryCard 
                    title="Modern Device" 
                    icon="coffee" 
                    image="https://lh3.googleusercontent.com/aida-public/AB6AXuBb5rSlMWqq7F-Ntzgo9wMscTiG6L9_7wE4HJN1dQL2gg4rWUdIyllyhfkh7PtBjgkmO95XNIKpV2e-uHPIiMS1vsQm9Z3prFc1pccG9tmCmKvpIHjLIYNz9zIXQS1Ks6fXFkOAOviNh3oER-R1ehLxLEjPJ_M7PX9nlYnpDzeUTCM0OakK1pk-a3ZeM7hrzFVL0JltUH-sCJW3TBYAiPZEyrb90dW96qzqR5pJk6AIoHuj2m1sg9ksryW1usbdMU65Muh42NQ72AI" 
                />
            </div>
            <div className="flex flex-col lg:flex-row justify-between items-end gap-8">
                <div className="flex gap-4">
                    <button className="w-14 h-14 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-800 transition text-primary dark:text-white">
                        <span className="material-icons-round">arrow_back</span>
                    </button>
                    <button className="w-14 h-14 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center hover:bg-gray-100 dark:hover:bg-gray-800 transition text-primary dark:text-white">
                        <span className="material-icons-round">arrow_forward</span>
                    </button>
                </div>
                <div className="lg:w-1/3">
                    <h3 className="text-2xl font-bold font-display text-primary dark:text-white mb-3">Boost your mood with our friendly staff every time!</h3>
                    <p className="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Whether you're looking for a boost of energy, a touch of excitement, or just a little more joy in your day, we've got you covered.
                    </p>
                </div>
            </div>
        </section>
    );
}

function StoryCard({ title, icon, image }) {
    return (
        <div className="group relative aspect-[4/5] md:aspect-[3/4] rounded-[2rem] overflow-hidden cursor-pointer">
            <img alt={title} className="w-full h-full object-cover transition duration-500 group-hover:scale-105" src={image} />
            <div className="absolute top-6 left-6 bg-white py-2 px-4 rounded-full flex items-center gap-2 shadow-sm">
                <span className="material-icons-round text-primary text-sm">{icon}</span>
                <span className="text-xs font-bold text-primary uppercase tracking-wide">{title}</span>
            </div>
        </div>
    );
}
