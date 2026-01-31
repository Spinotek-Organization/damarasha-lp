import React from 'react';

export default function Philosophy() {
    return (
        <section className="py-24 px-6 overflow-hidden">
            <div className="max-w-4xl mx-auto text-center mb-20">
                <span className="inline-block bg-accent-beige dark:bg-gray-800 text-primary dark:text-white px-4 py-1.5 rounded-full text-sm font-medium mb-8">
                    Philosophy
                </span>
                <h2 className="text-3xl md:text-4xl lg:text-5xl font-display leading-snug text-gray-800 dark:text-gray-100">
                    “Likewise in life, consistency in actions and attitudes and a focus on quality can help us achieve the
                    desired goals and take lessons from every experience we experience.”
                </h2>
            </div>
            <div className="max-w-6xl mx-auto relative h-[600px] flex items-center justify-center">
                <img 
                    alt="Coffee Bean Floating"
                    className="absolute top-0 right-[15%] w-32 h-32 object-contain drop-shadow-xl z-20 animate-pulse hidden lg:block rotate-12"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0ZVE5wwoXgmX-j_eWLm5VX4tFm8ZDW5qUaRADP-JhwaZok03EzxSygvXMgpf0gylNOc7o6k6VV_2W228rhfAez3CiaDb2otfbynwzHngewTV4fehw5Iz3j8oNwxKy4DrN3aefdQwCjc08feRIjYAmdiObCPtMZR8lhNI88cAHrOykmvo-iLyJ2xt5QbHUYEzvBbfWGGkN5Muje45XOpVlOiakcaEaeS8l4pixLyLdvx6upK4XZcVb5IvLjDno1zlMLoqAutMRl2E" 
                />
                <img 
                    alt="Coffee Bean Floating"
                    className="absolute bottom-10 left-[10%] w-40 h-40 object-contain drop-shadow-xl z-20 hidden lg:block -rotate-12 blur-[1px]"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA1tjOBI1yASdP7snHD527te-N_CH3OAWgqGT3c5HLnrM7QobgOuFNy2KNyL5lajZrlMp7IT8eQPygc3gdahmy0QwdQlNDVIRvPfTAdrOhAH2MuJe22hK4eU_c8sCxDgffqqZYV2KSjj6ZgolqxL5nCtm9Nabrg654gZcvnEXWwF7IEX-6rfhQ1VYF_tqYZMukkHnZ5fxtNghvx-vl6QlBcOfhRJIwQfNbV6O32bznjExf6fBtAmRCl32ujt-7o44q5aZCaAhXE_A" 
                />
                <div className="relative w-full h-full flex items-center justify-center">
                    <div className="absolute left-0 lg:left-10 top-1/2 -translate-y-1/2 flex flex-col gap-4 z-10 w-[200px] md:w-[260px] hidden md:flex">
                        <div className="h-40 w-48 bg-gray-200 rounded-3xl overflow-hidden shadow-lg self-end transform rotate-[-6deg] hover:rotate-0 transition duration-500">
                            <img alt="Latte Art" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_FxbPXhnDNUcMNrM5d9a5p_BOM1kcg0xSZ8yXoUiMOZz9xTHDTbe94_ystJ29QUFbL6wcVUfAOMd_LflxKNoj-XW4lMWn6Gk3dQTJPDisLhs9N81bYzPsDebsknHgY0nZXYmfm63KffC9tVEe3rJ7f2RN90usfX1_hCl-PGOh4-t2snBO4UAN5N-3fwaCzMXkvbMR2_0HauuIzZoXRKWHVEYZWSHT02H25BKwxy-TXwrbhIx2BAcumtUNzd5VodCvQR4Il7m_JQE" />
                        </div>
                        <div className="h-56 w-full bg-gray-200 rounded-3xl overflow-hidden shadow-lg transform rotate-[3deg] hover:rotate-0 transition duration-500">
                            <img alt="Pour Over Coffee" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkkOy_5akQIePKLltifLyAGBkLqTf4yP5G3cfNgI6iorc3PpGA1WZtzsvmi0zKCp0Sn_tiz-_59QyUKX-0uY-FtyHABttgn0-ue4LqmRjuuWrMROaWXgxk4bRmawkbSbAeZFr4KuN3qy56cmrLsfbdU8nSQBX64lvo907l4kPC6RkibdO-XyNiOozsrkBMVMVfxyL_D27d1GhmUtfqAjRVoM9gH-YCmCcqOaVP4lvlXqxK4ixEvVF7DFbruy-8TK0MG2524vzYTso" />
                        </div>
                        <div className="h-32 w-40 bg-gray-200 rounded-3xl overflow-hidden shadow-lg self-start transform -rotate-3 hover:rotate-0 transition duration-500">
                            <img alt="Cafe Interior" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJca3ESyCf3OBFmi6nkUR3ZGBzA6IntWR4aZpFg3cQpD7UwWKYJBsVTONyrJ2OfkdHkxW-8-avjMDqLUAumAfGU7r4-3u8iYlLFzyyiktwL5FJQbJe7VLIwIZGD3v2blpJnk4tKEnq7dHvZ54hHHBBQ8FJta8N__GonHXF029gkJqyO_HIzFixrgQFOFnuX96UF6H24w_bHDsf2wzJdsoq2gZ0qSghyIo8uyafBJA6XBgzuvtXt_C_2AbUOZkk8pR1ZaMVcbr8VNE" />
                        </div>
                    </div>
                    <div className="relative z-30 h-[450px] md:h-[550px] w-[300px] md:w-[380px] bg-white p-2 rounded-[2.5rem] shadow-2xl transform hover:scale-105 transition duration-700">
                        <div className="w-full h-full rounded-[2rem] overflow-hidden bg-gray-100">
                            <img alt="Smiling Barista" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEi_IvULdY_5lXAnZQ70p2iP0AIlj81AcHiStBmOC5SA358kA5eP5wI-ikOzHGyWhMD-LvEz3LIHRxfrQxPd5bf7IvZdjujbq2656qM-7fqspjbhUYM17RNkPTI6JXGADhlD1mYKql-IkVvJ_JB8xU6eGNjLON7PxnJe8cKjXrgmBVIz8OMHU3p-pCjqqdmZbXKZc-bTlloOci-pbuHJ88jMTK2FkLuAbeLNxWksF5f6y0XWp20BTVS5rD2RnmXvXoMQOq59NrKOY" />
                        </div>
                    </div>
                    <div className="absolute right-0 lg:right-10 top-1/2 -translate-y-1/2 flex flex-col gap-4 z-10 w-[200px] md:w-[260px] hidden md:flex">
                        <div className="h-44 w-56 bg-gray-200 rounded-3xl overflow-hidden shadow-lg self-start transform rotate-[4deg] hover:rotate-0 transition duration-500">
                            <img alt="Team Outside" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeZhoqS1k18WjieJbKWahAE-_90VTsDlJvAZzksE5MJSlZ7FB30Zv7SQiZrFhORYx1pnXRTjKBhocgVArydKhmzS2aHaDSHN5C03ZvKRfhsdcvOXwUy_ePGtGZSaa6-qOopwSoiKyvljRB-PljCMfdrsZlFphBQg5mjVFlZHkUG9mNh1x2jJUUCLbscm46ilcRWziOKYDYRhz6ZElktryEAJCMHcCuFTkigJ9NiLayGRw8rWbrtu30Q2uhtspHEs9iYnsuc6jbXxI" />
                        </div>
                        <div className="h-48 w-full bg-gray-200 rounded-3xl overflow-hidden shadow-lg transform rotate-[-2deg] hover:rotate-0 transition duration-500">
                            <img alt="Coffee Processing" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVn9Tc95d04djQiYlmYe0YQMa1EOq6xvudJ7WxNKnEemHgZbzdGVdXdQHfX-5AJ9XT9-nmWenLYz904GsPoyt3-9uADXjnqYHQt-7HZKnruF6w0gSc7hW0e-pqw-03p45XoJUaWkzNYmv0ikduHr9ohtK9Gq5nl5H4k-KZWuJpKb9EMxIGq-WCGPF8gehbXKgXOeCgP0WYGtpF32lxHCHeiV8V-XomZvr9klFyu1fc-byZAgblFoCajYEyxDRT5ErFveRIrIyV7fg" />
                        </div>
                        <div className="h-40 w-40 bg-gray-200 rounded-3xl overflow-hidden shadow-lg self-end transform rotate-6 hover:rotate-0 transition duration-500">
                            <img alt="Coffee Plant" className="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsAvBKr5DQOjKYzV_iKfragCVlAPA6RrQ0Fcxzehp2AzChNM3v2C81inXtnV6DK9IWYk9Yvfoka4IMFCMptc2nLIEkZsT3ArK_bsEBmhrrUaKX1a3nBRJ13WOjBVXGUJOFIujV0pdHrcU8MG7Yqq-NZy1Rxdhx45pJNIMQkfi4FItlpDlXQIbL-lzUwg48neQqtUFq-cnbja8UZHKqe7D_v_DSW7zfc_FZ7tWRVZZhAwhjSvBmyRfmgTqv18E3CK0a8gN9lu5QNAA" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
