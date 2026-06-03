<?php

/**
 * Semua konten dan path gambar untuk website ARTO PRIMA.
 * Edit file ini untuk mengubah teks dan gambar yang ditampilkan di setiap section.
 * Gunakan 'en' untuk bahasa Inggris dan 'id' untuk bahasa Indonesia.
 */

return [
    /* ========== NAV (Header) ========== */
    'nav' => [
        'en' => [
            'home' => 'Home',
            'about' => 'About',
            'solutions' => 'Solutions',
            'contact_us' => 'Contact Us',
            'en' => 'EN',
            'id' => 'ID',
        ],
        'id' => [
            'home' => 'Beranda',
            'about' => 'Tentang Kami',
            'solutions' => 'Solusi',
            'contact_us' => 'Hubungi Kami',
            'en' => 'EN',
            'id' => 'ID',
        ],
    ],

    /* ========== HERO (Section atas) ========== */
    'hero' => [
        'image' => 'images/hero-image.jpg',
        'en' => [
            'title' => 'Technological Sovereignty',
            'subtitle' => 'Precision technology and advanced surveillance for national security',
            'view_solutions' => 'View Solutions',
            'our_mission' => 'Our Mission',
            'image_alt' => 'High-precision digital transformation',
        ],
        'id' => [
            'title' => 'Kedaulatan Teknologi',
            'subtitle' => 'Memberdayakan keamanan nasional melalui transformasi digital presisi tinggi dan integrasi pengawasan canggih dalam ekosistem teknologi pertahanan global.',
            'view_solutions' => 'Lihat Solusi',
            'our_mission' => 'Misi Kami',
            'image_alt' => 'Transformasi digital presisi tinggi',
        ],
    ],

    /* ========== PARALLAX BANNERS (hanya gambar, efek parallax saat scroll) ========== */
    'parallax_banners' => [
        'between_about_mission' => 'images/parallax/banner-1.jpg',   // antara About & Mission
        'between_unified_values' => 'images/parallax/banner-2.jpg', // antara Unified & Values
        'about_page' => '', // antara header dan konten di halaman About. Kosong = pakai between_about_mission
        'solutions_page' => '', // antara header dan konten di halaman Solutions. Kosong = pakai between_about_mission
    ],

    /* ========== ABOUT (Section About + halaman /about) ========== */
    'about' => [
        'image' => 'images/about.jpg', // gambar kolom kanan + bisa dipakai untuk hero banner
        'page_banner' => '', // banner atas halaman About (full-width). Kosongkan = pakai image di atas
        'link' => '',
        'en' => [
            'heading' => 'About PT. Artomoro Prima Internasional',
            'subheading' => 'Growing Strong, Continuously Developing',
            'intro' => 'Integrating secure technologies. Safeguarding strategic operations',
            'body' => 'PT. Artomoro Prima Internasional is dedicated to empowering Indonesia’s vital national infrastructures. We provide, manage, and integrate secure IT systems tailored for mission-critical operations. Through advanced technology solutions, we help our clients maintain digital resilience and support national sovereignty across key strategic sectors (including defense, government, transportation, and logistics).',
            'cta' => 'Learn More',
            'image_alt' => 'About Artomoro Prima Internasional',
            'sidebar_title' => 'About Us',
            'breadcrumb' => 'About Us / Profile',
        ],
        'id' => [
            'heading' => 'Tentang PT. Artomoro Prima Internasional',
            'subheading' => 'Bertumbuh Kuat, Berinovasi Tanpa Henti',
            'intro' => 'Mengintegrasikan teknologi aman. Melindungi operasi strategis',
            'body' => 'PT. Artomoro Prima Internasional berdedikasi untuk memberdayakan infrastruktur nasional Indonesia yang vital. Kami menyediakan, mengelola, dan mengintegrasikan sistem IT aman yang disesuaikan untuk operasi mission-critical. Melalui solusi teknologi, kami membantu klien kami mempertahankan ketahanan digital dan mendukung kedaulatan nasional di seluruh sektor strategis utama (termasuk pertahanan, pemerintahan, transportasi, dan logistik)',
            'cta' => 'Pelajari Lebih Lanjut',
            'image_alt' => 'Tentang Artomoro Prima Internasional',
            'sidebar_title' => 'Tentang Kami',
            'breadcrumb' => 'Tentang Kami / Profil',
        ],
        'page_en' => 'PT. Artomoro Prima Internasional is dedicated to empowering Indonesia’s vital national infrastructures. We provide, manage, and integrate secure IT systems tailored for mission-critical operations. Through advanced technology solutions, we help our clients maintain digital resilience and support national sovereignty across key strategic sectors (including defense, government, transportation, and logistics).',
        'page_id' => 'PT. Artomoro Prima Internasional berdedikasi untuk memberdayakan infrastruktur nasional Indonesia yang vital. Kami menyediakan, mengelola, dan mengintegrasikan sistem IT aman yang disesuaikan untuk operasi mission-critical. Melalui solusi teknologi, kami membantu klien kami mempertahankan ketahanan digital dan mendukung kedaulatan nasional di seluruh sektor strategis utama (termasuk pertahanan, pemerintahan, transportasi, dan logistik).',
        'sidebar_links' => [],
        'sections' => [],
    ],

    /* ========== MISSION (Visi & Misi) ========== */
    'mission' => [
        'image' => 'images/solutions/mission.png',
        'en' => [
            'heading' => 'Vision & Mission',
            'vision_label' => 'Vision',
            'vision' => 'To serve as the ultimate technology integrator in safeguarding Indonesia’s strategic sectors and defence, building absolute digital resilience',
            'mission_label' => 'Mission',
            'mission_points' => [
                '- Partner: Build strategic alliances across Indonesia’s vital institutions.',
                '- Integrate: Deliver secure, high-performance IT systems for zero-failure operations.',
                '- Empower: Accelerate digital modernization to strengthen national sovereignty.',
            ],
            'learn_more' => 'Learn More',
            'image_alt' => 'Vision and mission',
        ],
        'id' => [
            'heading' => 'Visi & Misi',
            'vision_label' => 'Visi',
            'vision' => 'Menjadi mitra integrasi sistem dan teknologi terkemuka di Indonesia, Berperan sebagai integrator teknologi utama dalam menjaga sektor strategis dan pertahanan Indonesia, membangun ketahanan digital absolut',
            'mission_label' => 'Misi',
            'mission_points' => [
                '- Mitra: Membangun aliansi strategis di seluruh institusi vital Indonesia.',
                '- Integrasi: Menyediakan sistem IT berkinerja tinggi yang aman untuk operasi tanpa kegagalan (zero-failure)',
                '- Pemberdayaan: Mengakselerasi modernisasi digital untuk memperkuat kedaulatan nasional.',
            ],
            'learn_more' => 'Pelajari Lebih Lanjut',
            'image_alt' => 'Visi dan misi',
        ],
    ],

    /* ========== SOLUTIONS (kategori + gambar per solusi) ========== */
    /* Setiap item punya 'image' => path relatif dari public/, misal: 'images/solutions/secure-network.jpg'
       Letakkan file gambar di folder public/images/solutions/ lalu isi path-nya di bawah. */
    'solutions' => [
        'items' => [
            [
                'image' => 'images/solutions/secure-network.jpg',
                'en' => [
                    'title' => 'Secure Network & Data Centers',
                    'description' => 'We design and deploy secure, high-availability network and data center infrastructure for defence and government environments. Our solutions cover campus and metro networks, SD-WAN/SASE, hyperconverged infrastructure, and full DC/DR site builds to meet classified and mission-critical requirements.',
                    'points' => ['Campus/metro networks', 'SD-WAN/SASE', 'Hyperconverged infra', 'DC/DR site build'],
                ],
                'id' => [
                    'title' => 'Jaringan Aman & Pusat Data',
                    'description' => 'Kami merancang dan menggelar infrastruktur jaringan dan data center yang aman dan berkesinambungan tinggi untuk lingkungan pertahanan dan pemerintah. Solusi kami mencakup jaringan kampus dan metro, SD-WAN/SASE, infrastruktur hyperconverged, serta pembangunan lengkap DC/DR site untuk memenuhi kebutuhan terklasifikasi dan mission-critical.',
                    'points' => ['Jaringan kampus/metro', 'SD-WAN/SASE', 'Infrastruktur hyperconverged', 'Pembangunan DC/DR site'],
                ],
            ],
            [
                'image' => 'images/solutions/cybersecurity.jpg',
                'en' => [
                    'title' => 'Cybersecurity & Zero-Trust',
                    'description' => 'We help build and operate security operations capabilities and zero-trust architectures. From SOC build-out, SIEM, EDR/XDR, and IAM/PAM to DLP and incident response retainers, we support defence and government clients in protecting critical assets and data.',
                    'points' => ['SOC build-out', 'SIEM', 'EDR/XDR', 'IAM & PAM', 'DLP', 'Incident response retainers'],
                ],
                'id' => [
                    'title' => 'Keamanan Siber & Arsitektur Kepercayaan Nol',
                    'description' => 'Kami membantu membangun dan mengoperasikan kemampuan security operations serta arsitektur zero-trust. Mulai dari SOC build-out, SIEM, EDR/XDR, IAM/PAM, DLP, hingga retainer respons insiden, kami mendukung klien pertahanan dan pemerintah dalam melindungi aset dan data kritis.',
                    'points' => ['SOC build-out', 'SIEM', 'EDR/XDR', 'IAM & PAM', 'DLP', 'Incident response retainers'],
                ],
            ],
            [
                'image' => 'images/solutions/command-control.png',
                'en' => [
                    'title' => 'Command, Control, and Situational Awareness',
                    'description' => 'We deliver integrated command, control, and situational awareness solutions including operations rooms, video walls, geospatial integration, communications gateways, and UAV/sensor data pipelines to support real-time decision-making in defence and security operations.',
                    'points' => ['Ops rooms', 'Video walls', 'Geospatial integration', 'Comms gateways', 'UAV/sensor data pipelines'],
                ],
                'id' => [
                    'title' => 'Komando, Kendali & Kesadaran Situasional',
                    'description' => 'Kami menyediakan solusi komando, kendali, dan kesadaran situasional terintegrasi termasuk ruang operasi, video walls, integrasi geospasial, gateway komunikasi, dan pipa data UAV/sensor untuk mendukung pengambilan keputusan waktu-nyata dalam operasi pertahanan dan keamanan.',
                    'points' => ['Ruangan operasi', 'Video walls', 'Integrasi geospasial', 'Comms gateways', 'Pipa data UAV/sensor'],
                ],
            ],
            [
                'image' => 'images/solutions/cloud-platform.jpg',
                'en' => [
                    'title' => 'Cloud & Platform Engineering',
                    'description' => 'We implement private and hybrid cloud, container-based platforms, and platform reliability engineering to enable secure, scalable, and compliant IT for defence and strategic enterprises.',
                    'points' => ['Private/hybrid cloud', 'Container', 'Platform reliability engineering'],
                ],
                'id' => [
                    'title' => 'Rekayasa Awan & Platform',
                    'description' => 'Kami mengimplementasikan private dan hybrid cloud, platform berbasis container, serta platform reliability engineering untuk mendukung IT yang aman, skalabel, dan memenuhi kepatuhan bagi pertahanan dan perusahaan strategis.',
                    'points' => ['Private/hybrid cloud', 'Container', 'Platform reliability engineering'],
                ],
            ],
            [
                'image' => 'images/solutions/data-ai.jpg',
                'en' => [
                    'title' => 'Data & AI Analytics',
                    'description' => 'We deliver streaming analytics and unified dashboard or platform solutions so defence and intelligence clients can ingest, process, and visualize data in real time. Our services enable data-driven decisions, operational visibility, and reporting for mission-critical environments.',
                    'points' => ['Streaming analytics', 'Dashboard or platform'],
                ],
                'id' => [
                    'title' => 'Data & Analitik Kecerdasan Buatan',
                    'description' => 'Kami menyediakan solusi streaming analytics serta dashboard atau platform terpadu agar klien pertahanan dan intelijen dapat mengolah dan memvisualisasikan data secara real time. Layanan kami mendukung keputusan berbasis data, visibilitas operasional, dan pelaporan untuk lingkungan mission-critical.',
                    'points' => ['Streaming analytics', 'Dashboard atau platform'],
                ],
            ],
            [
                'image' => 'images/solutions/mission-critical.jpg',
                'en' => [
                    'title' => 'Mission-Critical Facilities',
                    'description' => 'We design and build command centers, server rooms, structured cabling, power and cooling, and fire suppression to meet the highest standards for availability and security in defence and government installations.',
                    'points' => ['Command centers', 'Server rooms', 'Data and power cable', 'Power & cooling', 'Fire suppression'],
                ],
                'id' => [
                    'title' => 'Fasilitas Kritis',
                    'description' => 'Kami merancang dan membangun command center, ruang server, kabel terstruktur, daya dan pendingin, serta pemadam kebakaran untuk standar ketersediaan dan keamanan tertinggi di instalasi pertahanan dan pemerintah.',
                    'points' => ['Command center', 'Ruangan server', 'Kabel data dan power', 'Power & pendingin', 'Pemadam kebakaran'],
                ],
            ],
        ],
        'en' => [
            'heading' => 'Solutions for National Strategic Sovereignty',
            'subtitle' => 'Empowering Indonesia with mission-critical technology for defense, intelligence, and digital transformation.',
            'explore' => 'Explore Solution',
        ],
        'id' => [
            'heading' => 'Solusi untuk Kedaulatan Strategis Nasional',
            'subtitle' => 'Memberdayakan Indonesia dengan teknologi yang kritis untuk pertahanan, intelijen, dan transformasi digital.',
            'explore' => 'Jelajahi Solusi',
        ],
        // Halaman Solusi (/solutions) — intro untuk halaman detail
        'page_en' => [
            'title' => 'Solutions',
            'intro' => 'PT. Artomoro Prima Internasional delivers integrated technology and digital transformation solutions for government, defence, and strategic enterprises. Below we outline our core solution areas in detail.',
        ],
        'page_id' => [
            'title' => 'Solusi',
            'intro' => 'PT. Artomoro Prima Internasional menyediakan solusi teknologi terintegrasi dan transformasi digital untuk pemerintah, pertahanan, dan perusahaan strategis. Di bawah ini kami uraikan area solusi utama kami secara rinci.',
        ],
    ],

    /* ========== UNIFIED SECURITY ========== */
    'unified' => [
        'image' => 'images/unified.jpg',
        'en' => [
            'heading' => 'Unified Security',
            'body' => 'Artomoro Prima Internasional integrates advanced surveillance and intelligence systems to secure national sovereignty. Our C4ISR solutions provide a unified command and control framework, enabling real-time decision-making in complex and evolving defense environments.',
            'cta' => 'Get in Touch',
            'image_alt' => 'C4ISR / Command & Control visual',
        ],
        'id' => [
            'heading' => 'Keamanan Terpadu',
            'body' => 'Artomoro Prima Internasional mengintegrasikan sistem pengawasan dan intelijen canggih untuk mengamankan kedaulatan nasional. Solusi C4ISR kami menyediakan kerangka komando dan kendali terpadu, memungkinkan pengambilan keputusan waktu-nyata dalam lingkungan pertahanan yang kompleks dan terus berkembang.',
            'cta' => 'Hubungi Kami',
            'image_alt' => 'Visual C4ISR / Komando & Kendali',
        ],
    ],

    /* ========== VALUES (4 nilai) ========== */
    'values' => [
        'en' => [
            'heading' => 'Our Values',
            'contact_us' => 'Contact Us',
            'items' => [
                ['letter' => 'I', 'title' => 'Integrity', 'desc' => 'We uphold the highest ethical standards in all defense integration projects, ensuring the absolute reliability and trust expected by national security agencies.'],
                ['letter' => 'P', 'title' => 'Precision', 'desc' => 'Engineering perfection in every layer, from AI-driven analytics to mission-critical surveillance systems, ensuring operational accuracy in high-stakes environments.'],
                ['letter' => 'I', 'title' => 'Innovation', 'desc' => 'Pioneering advanced cybersecurity and hybrid cloud solutions that redefine the technical boundaries of defense and surveillance ecosystems.'],
                ['letter' => 'S', 'title' => 'Sovereignty', 'desc' => 'Committed to strengthening Indonesia\'s digital sovereignty through local technology integration and self-reliant technological infrastructure.'],
            ],
        ],
        'id' => [
            'heading' => 'Nilai-Nilai Kami',
            'contact_us' => 'Hubungi Kami',
            'items' => [
                ['letter' => 'I', 'title' => 'Integritas', 'desc' => 'Kami menjunjung standar etika tertinggi dalam semua proyek integrasi pertahanan, memastikan keandalan dan kepercayaan mutlak yang diharapkan oleh lembaga keamanan nasional.'],
                ['letter' => 'P', 'title' => 'Presisi', 'desc' => 'Kesempurnaan rekayasa di setiap lapisan, dari analitik berbasis AI hingga sistem pengawasan yang kritis, memastikan akurasi operasional dalam lingkungan berisiko tinggi.'],
                ['letter' => 'I', 'title' => 'Inovasi', 'desc' => 'Merintis solusi keamanan siber dan hybrid cloud canggih yang mendefinisikan ulang batas teknis ekosistem pertahanan dan pengawasan.'],
                ['letter' => 'S', 'title' => 'Kedaulatan', 'desc' => 'Berkomitmen memperkuat kedaulatan digital Indonesia melalui integrasi teknologi lokal dan infrastruktur teknologi yang mandiri.'],
            ],
        ],
    ],

    /* ========== CONTACT ========== */
    'contact' => [
        'en' => [
            'heading' => 'Get in Touch',
            'subtitle' => 'For enquiries on solutions and partnerships, contact our team. We\'re here to support your mission-critical requirements.',
            'contact_us' => 'Contact Us',
            'view_solutions' => 'View Solutions',
        ],
        'id' => [
            'heading' => 'Hubungi Kami',
            'subtitle' => 'Untuk pertanyaan tentang solusi dan kemitraan, hubungi tim kami. Kami siap mendukung kebutuhan kritis Anda.',
            'contact_us' => 'Hubungi Kami',
            'view_solutions' => 'Lihat Solusi',
        ],
    ],

    /* ========== CTA BANNER (headline + background parallax) ========== */
    'cta_banner' => [
        'background_image' => 'images/cta-banner/cta_banner.background_image.jpg',
        'en' => [
            'headline' => 'Architecting Technology for Your Business With Us',
        ],
        'id' => [
            'headline' => 'Merancang Teknologi untuk Bisnis Anda Bersama Kami',
        ],
    ],

    /* ========== FOOTER ========== */
    'footer' => [
        'logo' => 'images/logo.png',
        'email' => 'info@artoprima.co.id',
        'phone' => '+62 21 55 777 000',
        'fax' => '+62 21 2911 0270',
        'en' => [
            'banner' => 'LEADING DIGITAL TRANSFORMATION',
            'location' => 'Sopo Del Office Towers & Lifestyle Tower B, Lt. 18, Jl. Mega Kuningan Barat III, Lot 10, 1-6, Kawasan Mega Kuningan, Kuningan Timur, Setiabudi, Jakarta Selatan, DKI Jakarta 12950',
            'contact_us' => 'Contact Us',
            'copyright' => 'Artomoro Prima Internasional. All rights reserved.',
            'navigation' => 'Navigation',
            'follow_us' => 'Follow Us',
            'disclaimer' => 'Disclaimer',
            'privacy_policy' => 'Privacy Policy',
            'company_name' => 'PT ARTOMORO PRIMA INTERNASIONAL',
            'office' => 'Operational Office',
            'office_address' => "Sopo Del Office Towers & Lifestyle\nTower B, Lt. 18\nJl. Mega Kuningan Barat III, Lot 10, 1-6\nKawasan Mega Kuningan, Kuningan Timur, Setiabudi\nJakarta Selatan, DKI Jakarta 12950",
            'phone_label' => 'T',
            'fax_label' => 'F',
            'disclaimer_text1' => 'PT Artomoro Prima Internasional is a defense technology system integrator serving government, defense, and strategic enterprises in Indonesia.',
            'disclaimer_text2' => 'We deliver integrated, secure, and sustainable technology solutions for national sovereignty and mission-critical requirements.',
        ],
        'id' => [
            'banner' => 'PEMIMPIN TRANSFORMASI DIGITAL',
            'location' => 'Sopo Del Office Towers & Lifestyle Tower B, Lt. 18, Jl. Mega Kuningan Barat III, Lot 10, 1-6, Kawasan Mega Kuningan, Kuningan Timur, Setiabudi, Jakarta Selatan, DKI Jakarta 12950',
            'contact_us' => 'Hubungi Kami',
            'copyright' => 'Artomoro Prima Internasional. Hak cipta dilindungi.',
            'navigation' => 'Navigasi',
            'follow_us' => 'Ikuti Kami',
            'disclaimer' => 'Penafian',
            'privacy_policy' => 'Kebijakan Privasi',
            'company_name' => 'PT ARTOMORO PRIMA INTERNASIONAL',
            'office' => 'Kantor Operasional',
            'office_address' => "Sopo Del Office Towers & Lifestyle\nTower B, Lt. 18\nJl. Mega Kuningan Barat III, Lot 10, 1-6\nKawasan Mega Kuningan, Kuningan Timur, Setiabudi\nJakarta Selatan, DKI Jakarta 12950",
            'phone_label' => 'T',
            'fax_label' => 'F',
            'disclaimer_text1' => 'PT Artomoro Prima Internasional adalah integrator sistem teknologi pertahanan yang melayani pemerintah, pertahanan, dan perusahaan strategis di Indonesia.',
            'disclaimer_text2' => 'Kami menyediakan solusi teknologi terintegrasi, aman, dan berkelanjutan untuk kedaulatan nasional dan kebutuhan yang kritis.',
        ],
    ],

    /* ========== STRATEGIC ALLIANCE (logo partner) ========== */
    /* Logos dinamis: scan folder public/images/alliance/ (png, jpg, gif, webp). Tambah file baru otomatis masuk carousel 1 baris. */
    'alliance' => [
        'en' => ['title' => 'Strategic Alliance'],
        'id' => ['title' => 'Aliansi Strategis'],
    ],
];
