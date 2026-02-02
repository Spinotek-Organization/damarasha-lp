import React from 'react';
import Navbar from '../Components/Landing/Navbar';
import Hero from '../Components/Landing/Hero';
import Philosophy from '../Components/Landing/Philosophy';
import Menu from '../Components/Landing/Menu';
import Facilities from '../Components/Landing/Facilities';
import Story from '../Components/Landing/Story';
import Features from '../Components/Landing/Features';
import Testimonials from '../Components/Landing/Testimonials';
import Location from '../Components/Landing/Location';
import CTA from '../Components/Landing/CTA';
import Footer from '../Components/Landing/Footer';
import { Head } from '@inertiajs/react';

export default function Welcome() {
    return (
        <div className="bg-white text-gray-900 font-sans antialiased">
            <Head title="Damarasha Coffee and Space - Pengalaman Kopi Premium">
                 <link href="https://fonts.googleapis.com" rel="preconnect" />
                <link crossOrigin="" href="https://fonts.gstatic.com" rel="preconnect" />
                <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
                <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400..900&amp;display=swap"
                    rel="stylesheet" />
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
                <link
                    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                    rel="stylesheet" />
                <style>{`
                    .hide-scrollbar::-webkit-scrollbar {
                        display: none;
                    }
                    .hide-scrollbar {
                        -ms-overflow-style: none;
                        scrollbar-width: none;
                    }
                `}</style>
            </Head>
            <Navbar />
            <Hero />
            <Philosophy />
            <Menu />
            <Facilities />
            <Story />
            <Features />
            <Testimonials />
            <Location />
            <CTA />
            <Footer />
        </div>
    );
}
