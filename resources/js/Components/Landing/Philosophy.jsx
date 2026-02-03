import React from 'react';

export default function Philosophy() {
    return (
        <section id="about" className="py-24 overflow-hidden">
            <div className="max-w-5xl mx-auto text-center mb-6">
                <span className="inline-block bg-accent-beige dark:bg-gray-800 text-primary dark:text-white px-4 py-1.5 rounded-full text-sm font-medium mb-8">
                    Filosofi Kami
                </span>
                <h2 className="text-3xl md:text-4xl lg:text-5xl font-display leading-snug text-gray-800">
                    “Kami percaya bahwa setiap cangkir kopi memiliki cerita, dan setiap ruang memiliki jiwa. Damarasha Coffee and Space hadir untuk menghidupkan inspirasi Anda melalui perpaduan rasa autentik dan suasana yang menenangkan.”
                </h2>
            </div>
            <div className="max-w-full mx-auto relative h-auto md:h-[700px] grid grid-cols-1 md:grid-cols-3 items-center justify-center gap-10 md:gap-0">
                
                {/* --- Left Cluster --- */}
                <div className=" h-[500px] hidden lg:block pointer-events-none">
                     {/* Coffee Bean - Top Left Floating */}
                     <img 
                        alt="Coffee Bean"
                        className="absolute -top-10 -left-3 w-72 object-contain drop-shadow-lg z-30 rotate-12"
                        src="/images/coffee-blast-2.png" 
                    />
                     
                     <div className="flex gap-2 h-full items-center justify-end">
                         {/* Column 1 */}
                         <div className="flex flex-col gap-2 pt-12">
                             {/* Cafe Interior (Vertical) */}
                             <div className="w-40 h-56 rounded-2xl overflow-hidden shadow-md z-10">
                                <img alt="Cafe Interior" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJca3ESyCf3OBFmi6nkUR3ZGBzA6IntWR4aZpFg3cQpD7UwWKYJBsVTONyrJ2OfkdHkxW-8-avjMDqLUAumAfGU7r4-3u8iYlLFzyyiktwL5FJQbJe7VLIwIZGD3v2blpJnk4tKEnq7dHvZ54hHHBBQ8FJta8N__GonHXF029gkJqyO_HIzFixrgQFOFnuX96UF6H24w_bHDsf2wzJdsoq2gZ0qSghyIo8uyafBJA6XBgzuvtXt_C_2AbUOZkk8pR1ZaMVcbr8VNE" />
                             </div>
                         </div>

                         {/* Column 2 */}
                         <div className="flex flex-col gap-2">
                             {/* Latte (Square-ish) */}
                             <div className="w-48 h-40 rounded-2xl overflow-hidden shadow-md z-20">
                                <img alt="Latte Art" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_FxbPXhnDNUcMNrM5d9a5p_BOM1kcg0xSZ8yXoUiMOZz9xTHDTbe94_ystJ29QUFbL6wcVUfAOMd_LflxKNoj-XW4lMWn6Gk3dQTJPDisLhs9N81bYzPsDebsknHgY0nZXYmfm63KffC9tVEe3rJ7f2RN90usfX1_hCl-PGOh4-t2snBO4UAN5N-3fwaCzMXkvbMR2_0HauuIzZoXRKWHVEYZWSHT02H25BKwxy-TXwrbhIx2BAcumtUNzd5VodCvQR4Il7m_JQE" />
                             </div>
                             {/* Pour Over (Vertical) */}
                             <div className="w-48 h-60 rounded-2xl overflow-hidden shadow-md z-20">
                                <img alt="Pour Over" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkkOy_5akQIePKLltifLyAGBkLqTf4yP5G3cfNgI6iorc3PpGA1WZtzsvmi0zKCp0Sn_tiz-_59QyUKX-0uY-FtyHABttgn0-ue4LqmRjuuWrMROaWXgxk4bRmawkbSbAeZFr4KuN3qy56cmrLsfbdU8nSQBX64lvo907l4kPC6RkibdO-XyNiOozsrkBMVMVfxyL_D27d1GhmUtfqAjRVoM9gH-YCmCcqOaVP4lvlXqxK4ixEvVF7DFbruy-8TK0MG2524vzYTso" />
                             </div>
                         </div>
                     </div>
                </div>

                {/* --- Center Image --- */}
                <div className="relative z-30 w-full h-[400px] md:h-[550px] bg-white p-2 rounded-[2.5rem] shadow-2xl shrink-0">
                     <div className="w-full h-full rounded-[2rem] overflow-hidden bg-gray-100">
                         <img alt="Smiling Barista" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEi_IvULdY_5lXAnZQ70p2iP0AIlj81AcHiStBmOC5SA358kA5eP5wI-ikOzHGyWhMD-LvEz3LIHRxfrQxPd5bf7IvZdjujbq2656qM-7fqspjbhUYM17RNkPTI6JXGADhlD1mYKql-IkVvJ_JB8xU6eGNjLON7PxnJe8cKjXrgmBVIz8OMHU3p-pCjqqdmZbXKZc-bTlloOci-pbuHJ88jMTK2FkLuAbeLNxWksF5f6y0XWp20BTVS5rD2RnmXvXoMQOq59NrKOY" />
                     </div>
                </div>

                {/* --- Right Cluster --- */}
                <div className=" h-[500px] hidden lg:block pointer-events-none">
                     {/* Coffee Bean - Top Right Floating */}
                     <img 
                        alt="Coffee Bean"
                        className="absolute -top-6 -right-3 w-72 object-contain drop-shadow-lg z-30"
                        src="/images/coffee-blast-1.png" 
                    />

                    <div className="flex gap-2 h-full items-center">
                        {/* Column 1 */}
                        <div className="flex flex-col gap-2">
                            {/* Team (Landscape) */}
                            <div className="w-48 h-40 rounded-2xl overflow-hidden shadow-md z-20">
                                 <img alt="Team" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeZhoqS1k18WjieJbKWahAE-_90VTsDlJvAZzksE5MJSlZ7FB30Zv7SQiZrFhORYx1pnXRTjKBhocgVArydKhmzS2aHaDSHN5C03ZvKRfhsdcvOXwUy_ePGtGZSaa6-qOopwSoiKyvljRB-PljCMfdrsZlFphBQg5mjVFlZHkUG9mNh1x2jJUUCLbscm46ilcRWziOKYDYRhz6ZElktryEAJCMHcCuFTkigJ9NiLayGRw8rWbrtu30Q2uhtspHEs9iYnsuc6jbXxI" />
                            </div>
                             {/* Processing (Landscape) */}
                             <div className="w-48 h-32 rounded-2xl overflow-hidden shadow-md z-20">
                                 <img alt="Processing" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVn9Tc95d04djQiYlmYe0YQMa1EOq6xvudJ7WxNKnEemHgZbzdGVdXdQHfX-5AJ9XT9-nmWenLYz904GsPoyt3-9uADXjnqYHQt-7HZKnruF6w0gSc7hW0e-pqw-03p45XoJUaWkzNYmv0ikduHr9ohtK9Gq5nl5H4k-KZWuJpKb9EMxIGq-WCGPF8gehbXKgXOeCgP0WYGtpF32lxHCHeiV8V-XomZvr9klFyu1fc-byZAgblFoCajYEyxDRT5ErFveRIrIyV7fg" />
                             </div>
                        </div>

                        {/* Column 2 */}
                        <div className="flex flex-col gap-2 pt-20">
                             {/* Plant (Small) */}
                             <div className="w-36 h-40 rounded-2xl overflow-hidden shadow-md z-10">
                                <img alt="Plant" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsAvBKr5DQOjKYzV_iKfragCVlAPA6RrQ0Fcxzehp2AzChNM3v2C81inXtnV6DK9IWYk9Yvfoka4IMFCMptc2nLIEkZsT3ArK_bsEBmhrrUaKX1a3nBRJ13WOjBVXGUJOFIujV0pdHrcU8MG7Yqq-NZy1Rxdhx45pJNIMQkfi4FItlpDlXQIbL-lzUwg48neQqtUFq-cnbja8UZHKqe7D_v_DSW7zfc_FZ7tWRVZZhAwhjSvBmyRfmgTqv18E3CK0a8gN9lu5QNAA" />
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
