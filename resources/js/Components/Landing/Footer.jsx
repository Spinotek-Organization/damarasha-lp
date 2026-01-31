import React from 'react';

export default function Footer() {
    return (
        <footer className="bg-primary text-white pt-20 pb-8 px-6 rounded-t-[3rem] mt-12">
            <div className="max-w-7xl mx-auto">
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    <div className="space-y-6">
                        <h3 className="text-2xl font-display font-bold">Coffein</h3>
                        <div>
                            <p className="text-sm text-gray-400 font-bold uppercase mb-2">Address:</p>
                            <p className="text-gray-300 text-sm">Yogyakarta, Indonesia</p>
                        </div>
                        <div>
                            <p className="text-sm text-gray-400 font-bold uppercase mb-2">Contact:</p>
                            <p className="text-gray-300 text-sm">0800 0000 XXXX</p>
                            <p className="text-gray-300 text-sm">coffein@kopi.id</p>
                        </div>
                        <div className="flex gap-4 text-gray-400">
                            <a className="hover:text-white transition" href="#"><i className="material-icons-round text-sm">facebook</i></a>
                            <a className="hover:text-white transition" href="#"><i className="material-icons-round text-sm">camera_alt</i></a>
                            <a className="hover:text-white transition" href="#"><i className="material-icons-round text-sm">alternate_email</i></a>
                        </div>
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Product</h4>
                        <ul className="space-y-4 text-sm text-gray-400">
                            <li><a className="hover:text-white transition" href="#">Overview</a></li>
                            <li><a className="hover:text-white transition" href="#">Features</a></li>
                            <li><a className="hover:text-white transition" href="#">Solution</a></li>
                            <li><a className="hover:text-white transition" href="#">Pricing</a></li>
                            <li><a className="hover:text-white transition" href="#">Releases</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Resources</h4>
                        <ul className="space-y-4 text-sm text-gray-400">
                            <li><a className="hover:text-white transition" href="#">Blog</a></li>
                            <li><a className="hover:text-white transition" href="#">Newsletter</a></li>
                            <li><a className="hover:text-white transition" href="#">Event</a></li>
                            <li><a className="hover:text-white transition" href="#">Help Center</a></li>
                            <li><a className="hover:text-white transition" href="#">Support</a></li>
                        </ul>
                    </div>
                    <div></div>
                </div>
                <div className="border-t border-blue-900 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
                    <p>© 2023 Coffein. All rights reserved.</p>
                    <div className="flex gap-6 mt-4 md:mt-0">
                        <a className="hover:text-white transition" href="#">Privacy Policy</a>
                        <a className="hover:text-white transition" href="#">Term of service</a>
                    </div>
                </div>
            </div>
        </footer>
    );
}
