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
            'title' => 'Technology Transformation and Sovereignty',
            'subtitle' => 'Driving the transformation of strategic sectors through modern technology solutions',
            'view_solutions' => 'View Solutions',
            'our_mission' => 'Our Mission',
            'image_alt' => 'High-precision digital transformation',
        ],
        'id' => [
            'title' => 'Transformasi Teknologi dan Kedaulatan',
            'subtitle' => 'Mendorong transformasi sektor strategis melalui solusi teknologi modern',
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
            'heading' => 'About ARTO PRIMA',
            'subheading' => 'Growing Strong, Continuously Developing',
            'intro' => 'Integrating secure technologies. Safeguarding strategic operations',
            'body' => 'ARTO PRIMA is dedicated to empowering Indonesia’s vital national infrastructures. We provide, manage, and integrate secure IT systems tailored for mission-critical operations. Through advanced technology solutions, we help our clients maintain digital resilience and support national sovereignty across key strategic sectors.',
            'cta' => 'Learn More',
            'image_alt' => 'About ARTO PRIMA',
            'sidebar_title' => 'About Us',
            'breadcrumb' => 'About Us / Profile',
        ],
        'id' => [
            'heading' => 'Tentang ARTO PRIMA',
            'subheading' => 'Bertumbuh Kuat, Berinovasi Tanpa Henti',
            'intro' => 'Mengintegrasikan teknologi aman. Melindungi operasi strategis',
            'body' => 'ARTO PRIMA berdedikasi untuk memberdayakan infrastruktur nasional Indonesia yang vital. Kami menyediakan, mengelola, dan mengintegrasikan sistem IT aman yang disesuaikan untuk operasi mission-critical. Melalui solusi teknologi, kami membantu klien kami mempertahankan ketahanan digital dan mendukung kedaulatan nasional di seluruh sektor strategis utama',
            'cta' => 'Pelajari Lebih Lanjut',
            'image_alt' => 'Tentang ARTO PRIMA',
            'sidebar_title' => 'Tentang Kami',
            'breadcrumb' => 'Tentang Kami / Profil',
        ],
        'page_en' => 'ARTO PRIMA is dedicated to empowering Indonesia’s vital national infrastructures. We provide, manage, and integrate secure IT systems tailored for mission-critical operations. Through advanced technology solutions, we help our clients maintain digital resilience and support national sovereignty across key strategic sectors (including defense, government, transportation, and logistics).',
        'page_id' => 'ARTO PRIMA berdedikasi untuk memberdayakan infrastruktur nasional Indonesia yang vital. Kami menyediakan, mengelola, dan mengintegrasikan sistem IT aman yang disesuaikan untuk operasi mission-critical. Melalui solusi teknologi, kami membantu klien kami mempertahankan ketahanan digital dan mendukung kedaulatan nasional di seluruh sektor strategis utama (termasuk pertahanan, pemerintahan, transportasi, dan logistik).',
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
                'Synergy: Build strategic alliances across Indonesia’s vital institutions.',
                'Integrity: Provide precise, secure, and fully reliable communication and IT infrastructure.',
                'Innovation: Accelerate digital modernization to strengthen national sovereignty.',
            ],
            'learn_more' => 'Learn More',
            'image_alt' => 'Vision and mission',
        ],
        'id' => [
            'heading' => 'Visi & Misi',
            'vision_label' => 'Visi',
            'vision' => 'Menjadi mitra integrasi sistem dan teknologi terdepan melalui inovasi, transformasi digital, dan ketahanan digital yang berkelanjutan',
            'mission_label' => 'Misi',
            'mission_points' => [
                'Sinergi: Menjadi mitra teknologi strategis dalam mengamankan infrastruktur vital nasional.',
                'Integritas: Menghadirkan infrastruktur komunikasi dan IT yang presisi, aman, dan dapat diandalkan penuh.',
                'Inovasi: Mengakselerasi transformasi digital untuk mencapai keunggulan operasional dan taktis.',
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
                    'description' => 'Building a foundation of stable, efficient, and securely layered enterprise-level network infrastructure. We design encrypted network architectures and high-standard data center facilities to ensure your business operations run non-stop, are scalable, and are highly resistant to system interruptions.',
                    'points' => ['Stable and encrypted Site-to-Site Connectivity', 'Centralized network management & Flexible Access', 'Efficient and consolidated IT Infrastructure', 'Primary and Backup Data Center Facilities'],
                ],
                'id' => [
                    'title' => 'Jaringan Aman & Pusat Data',
                    'description' => 'Membangun fondasi infrastruktur jaringan tingkat enterprise yang stabil, efisien, dan terlindungi secara berlapis. Kami merancang arsitektur jaringan terenkripsi dan fasilitas pusat data berstandar tinggi untuk memastikan operasional bisnis Anda berjalan tanpa henti, skalabel, dan sangat tahan terhadap gangguan sistem.',
                    'points' => ['Konektivitas Antar Lokasi yang Stabil dan Terenkripsi', 'Manajemen Jaringan Terpusat dan Fleksibel', 'Infrastruktur IT yang Efisien dan Terkonsolidasi', 'Fasilitas Data Center Primer dan Cadangan'],
                ],
            ],
            [
                'image' => 'images/solutions/cybersecurity.jpg',
                'en' => [
                    'title' => 'Cybersecurity & Zero-Trust',
                    'description' => 'Comprehensive cybersecurity protection with a Zero Trust approach to secure your critical digital assets. We provide proactive threat detection capabilities, strict access management, and automatic incident response to mitigate modern cyber attack risks and prevent strategic data leaks.',
                    'points' => ['Security Operations Center', 'Incident Detection and Automatic Response', 'Identity and Access Management', 'Data Leakage Prevention', 'Incident Response Services'],
                ],
                'id' => [
                    'title' => 'Keamanan Siber & Arsitektur Zero Trust',
                    'description' => 'Perlindungan siber komprehensif dengan pendekatan Zero Trust untuk mengamankan aset digital kritis Anda. Kami menyediakan kapabilitas deteksi ancaman proaktif, manajemen akses yang ketat, dan respons insiden otomatis guna memitigasi risiko serangan siber modern serta mencegah kebocoran data strategis.',
                    'points' => ['Pemantauan Ancaman Berkelanjutan', 'Deteksi & Respons Insiden Otomatis', 'Manajemen Identitas dan Hak Akses', 'Pencegahan Kebocoran Data', 'Layanan Penanganan Insiden Siber'],
                ],
            ],
            [
                'image' => 'images/solutions/command-control.png',
                'en' => [
                    'title' => 'Command, Control, and Oversight',
                    'description' => 'An integrated command center providing comprehensive and real-time field data visibility. Our solution unifies diverse communication streams, geospatial data, and intelligent sensors into a single operational space, empowering you to achieve full situational awareness and accelerate tactical decision-making.',
                    'points' => ['Command center', 'Large scale operational data visualization', 'Geospatial and field data integration', 'Cross functional communications coordination', 'Real time sensor and UAV data aggregation'],
                ],
                'id' => [
                    'title' => 'Pusat Kendali dan Pemantauan Terpadu',
                    'description' => 'Pusat komando terintegrasi yang menyajikan visibilitas data lapangan secara komprehensif dan seketika (real-time). Solusi kami menyatukan berbagai aliran komunikasi, data geospasial, dan sensor cerdas ke dalam satu ruang operasi, memberdayakan Anda untuk mencapai kesadaran situasional penuh dan mempercepat pengambilan keputusan taktis.',
                    'points' => ['Ruangan operasi terpadu', 'Visualisasi data operasional skala besar', 'Integrasi data geospasial dan lapangan', 'Koordinasi komunikasi lintas fungsi', 'Agregasi data sensor dan UAV secara real-time'],
                ],
            ],
            [
                'image' => 'images/solutions/cloud-platform.jpg',
                'en' => [
                    'title' => 'Cloud & Platform Engineering',
                    'description' => 'Build a resilient and adaptive digital ecosystem. We design, implement, and manage cloud architectures while modernizing your applications, ensuring optimal system performance, low latency, and infrastructure readiness for large-scale operational workloads.',
                    'points' => ['Private/Hybrid Cloud', 'Cloud Native App', 'Managed Cloud Service'],
                ],
                'id' => [
                    'title' => 'Solusi Cloud dan Platform',
                    'description' => 'Bangun ekosistem digital yang tangguh dan adaptif. Kami mendesain, mengimplementasikan, hingga mengelola arsitektur cloud serta memodernisasi aplikasi Anda, memastikan performa sistem yang selalu optimal, latensi rendah, dan kesiapan infrastruktur untuk menangani beban kerja operasional berskala besar.',
                    'points' => ['Private/Hybrid Cloud', 'Modernisasi Aplikasi', 'Layanan Kelola Cloud'],
                ],
            ],
            [
                'image' => 'images/solutions/data-ai.jpg',
                'en' => [
                    'title' => 'Data & AI Analytics',
                    'description' => 'Transform complex raw data streams into actionable intelligence. Through real-time analytics processing and interactive smart dashboard visualizations, our platform empowers leadership to extract strategic insights for faster and more precise operational responses.',
                    'points' => ['Real-time analytics', 'Interactive dashboards and platforms'],
                ],
                'id' => [
                    'title' => 'Data & Analitik AI',
                    'description' => 'Ubah aliran data mentah yang kompleks menjadi intelijen yang dapat ditindaklanjuti (actionable intelligence). Melalui pemrosesan analitik real-time dan visualisasi pada dasbor cerdas interaktif, platform kami membantu jajaran manajemen mengekstraksi wawasan strategis untuk mendukung respons operasional yang lebih cepat dan presisi.',
                    'points' => ['Analitik Data Real-Time', 'Platform dan Dashboard Interaktif'],
                ],
            ],
            [
                'image' => 'images/solutions/infrastruktur-jaringan.jpg',
                'en' => [
                    'title' => 'Network Infrastructure & Connectivity',
                    'description' => 'Your operational backbone starts with a reliable physical infrastructure. We provide end-to-end hardware integration services, ranging from the deployment of structured cabling systems, installation of high-speed connectivity terminals, to the unification of communication networks, ensuring no blind spots within your field operations.',
                    'points' => ['Network devices implementation', 'Data cabling infrastructure', 'Communication device integration'],
                ],
                'id' => [
                    'title' => 'Infrastruktur Jaringan & Konektivitas',
                    'description' => 'Tulang punggung operasional Anda bermula dari infrastruktur fisik yang andal. Kami menghadirkan layanan integrasi perangkat keras end-to-end, mulai dari penggelaran sistem pengkabelan terstruktur, instalasi terminal konektivitas berkecepatan tinggi, hingga penyatuan jaringan komunikasi untuk memastikan tidak ada titik buta (blank spot) dalam area operasi lapangan.',
                    'points' => ['Pengadaan & Instalasi Perangkat Jaringan', 'Infrastruktur Kabel Data', 'Integrasi Perangkat Komunikasi'],
                ],
            ],
        ],
        'en' => [
            'heading' => 'Technology Solutions for National Strategic Sovereignty',
            'subtitle' => 'Empowering Indonesia through technological innovation for strategic sectors.',
            'explore' => 'Explore Solution',
        ],
        'id' => [
            'heading' => 'Solusi Teknologi untuk Kedaulatan Strategis Nasional',
            'subtitle' => 'Memperkuat Indonesia melalui inovasi teknologi untuk sektor strategis.',
            'explore' => 'Jelajahi Solusi',
        ],
        // Halaman Solusi (/solutions) — intro untuk halaman detail
        'page_en' => [
            'title' => 'Solutions',
            'intro' => 'ARTO PRIMA delivers integrated technology and digital transformation solutions for strategic enterprises. Below we outline our core solution areas in detail.',
        ],
        'page_id' => [
            'title' => 'Solusi',
            'intro' => 'ARTO PRIMA menyediakan solusi teknologi terintegrasi dan transformasi digital untuk sektor strategis. Di bawah ini kami uraikan area solusi utama kami secara rinci.',
        ],
    ],

    /* ========== TEHCNOLOGICAL CHALLENGE ========== */
    'unified' => [
        'image' => 'images/unified.jpg',
        'en' => [
            'heading' => 'What is Your Current Technological Challenge?',
            'body' => 'We understand that every agency has its own level of complexity. ARTO PRIMA is present and ready to accompany you as a reliable system integration partner. Convey the challenges you face, and let our expert team design technology solutions that are secure, efficient, and targeted.',
            'cta' => 'Let\'s Discuss Your Needs',
            'image_alt' => 'C4ISR / Command & Control visual',
        ],
        'id' => [
            'heading' => 'Apa Tantangan Teknologi Anda Saat Ini?',
            'body' => 'Kami mengerti bahwa setiap instansi memiliki tingkat kompleksitas tersendiri. ARTO PRIMA hadir dan siap mendampingi Anda sebagai mitra integrasi sistem yang dapat diandalkan. Sampaikan kendala yang Anda hadapi, dan biarkan tim ahli kami merancang solusi teknologi yang aman, efisien, dan tepat sasaran.',
            'cta' => 'Mari Diskusikan Kebutuhan Anda',
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
            'disclaimer_text1' => 'ARTO PRIMA (PT Artomoro Prima Internasional) adalah integrator sistem teknologi yang melayani sektor strategis di Indonesia.',
            'disclaimer_text2' => 'Kami menyediakan solusi teknologi yang terintegrasi, aman, dan berkelanjutan untuk kedaulatan nasional dan operasional berprioritas tinggi.',
        ],
    ],

    /* ========== STRATEGIC ALLIANCE (logo partner) ========== */
    /* Logos dinamis: scan folder public/images/alliance/ (png, jpg, gif, webp). Tambah file baru otomatis masuk carousel 1 baris. */
    'alliance' => [
        'en' => ['title' => 'Strategic Alliance'],
        'id' => ['title' => 'Aliansi Strategis'],
    ],
];