<?php

return [

    'about' => [
        'summary' => 'Saya adalah mahasiswa Teknologi Rekayasa Perangkat Lunak yang suka mencoba membuat berbagai hal menggunakan teknologi. Selama kuliah, saya mengerjakan berbagai project mulai dari aplikasi mobile menggunakan Flutter, website menggunakan Laravel, hingga sistem IoT yang menghubungkan perangkat keras dengan software. Saya masih terus belajar dan mengeksplorasi teknologi baru, terutama dalam pengembangan aplikasi dan sistem yang bisa digunakan di dunia nyata.',
        'education' => [
            [
                'school' => 'Politeknik Negeri Bali',
                'major'  => 'Teknologi Informasi - Teknologi Rekayasa Perangkat Lunak',
                'period' => '2023 - sekarang',
            ],
            [
                'school' => 'SMA Negeri 1 Kerambitan',
                'major'  => 'MIPA',
                'period' => '2020 - 2023',
            ],
        ],
        'experience' => [
            [
                'title'  => 'Sekretaris Unit Kegiatan Mahasiswa Robotika',
                'period' => '2023 - 2025',
                'desc'   => 'Membantu mempersiapkan segala administrasi organisasi, serta untuk keperluan kompetisi robotika tingkat nasional.',
            ],
            [
                'title'  => 'Koordinator Humas Photonity Art and Exhibition (POTRET) #12',
                'period' => '2024',
                'desc'   => 'Mengelola komunikasi publik dan koordinasi informasi acara serta mendukung publikasi serta koordinasi dengan pihak terkait.',
            ],
            [
                'title'  => 'Koordinator Kesekretariatan Politeknik Negeri Bali Robot Competition (PNBRC) 2025',
                'period' => '2025',
                'desc'   => 'Mengelola kesekretariatan dan koordinasi kegiatan kompetisi robotika tingkat nasional.',
            ],
        ],
        'techstack' => ['PHP', 'Laravel', 'Flutter', 'Dart', 'JavaScript', 'MySQL', 'Arduino', 'Git'],
    ],

    'skills' => [
        'languages' => [
            ['name' => 'PHP', 'icon' => 'bi-filetype-php'],
            ['name' => 'JavaScript', 'icon' => 'bi-filetype-js'],
            ['name' => 'Dart', 'icon' => 'bi-code-slash'],
            ['name' => 'C++', 'icon' => 'bi-cpu'],
            ['name' => 'Python', 'icon' => 'bi-filetype-py'],
        ],
        'frameworks' => [
            ['name' => 'Laravel', 'icon' => 'bi-box-seam'],
            ['name' => 'Flutter', 'icon' => 'bi-phone'],
            ['name' => 'Bootstrap', 'icon' => 'bi-bootstrap'],
            ['name' => 'Filament', 'icon' => 'bi-file-earmark-code'],
        ],
        'tools' => [
            ['name' => 'Git & GitHub', 'icon' => 'bi-github'],
            ['name' => 'VS Code', 'icon' => 'bi-code-square'],
            ['name' => 'Postman', 'icon' => 'bi-send'],
            ['name' => 'Figma', 'icon' => 'bi-palette'],
            ['name' => 'MySQL', 'icon' => 'bi-database'],
            ['name' => 'Arduino IDE', 'icon' => 'bi-cpu'],
        ],
        'iot_hardware' => [
            ['name' => 'Arduino', 'icon' => 'bi-cpu-fill'],
            ['name' => 'ESP32 / ESP8266', 'icon' => 'bi-wifi'],
            ['name' => 'Sensor & Aktuator', 'icon' => 'bi-broadcast'],
        ],
    ],

    'projects' => [
        [
            'title'         => 'Aplikasi Mobile Monitoring Asap Rokok (Prototype)',
            'description'   => 'Aplikasi mobile menggunakan Flutter untuk memonitor asap rokok di area publik, mengambil data dari CCTV beserta sensor udara, dan menampilkan data secara real-time di aplikasi.',
            'image'         => 'assets/img/projects/AQM-Logs.jpeg',
            'gallery'       => [
                'assets/img/projects/AQM-Live.jpeg',
                'assets/img/projects/AQM-Logs.jpeg',
                'assets/img/projects/AQM-Report.jpeg',
                'assets/img/projects/AQM-Settings.jpeg',
            ],
            'tech'          => ['Flutter', 'Dart','Firebase', 'Telegram Bot API', 'REST API'],
            'github'        => 'https://github.com/cayadarma/air_quality_monitor.git',
            'demo'          => null,
            'documentation' => null,
        ],
        [
            'title'         => 'Aplikasi Mobile Manajemen Servis Elektronik',
            'description'   => 'Aplikasi mobile untuk manajemen servis elektronik yang memudahkan pencatatan, pelacakan, dan pengelolaan servis elektronik bagi teknisi.',
            'image'         => 'assets/img/projects/RSE-HomeEmpty.jpeg',
            'gallery'       => [
                'assets/img/projects/RSE-HomeEmpty.jpeg',
                'assets/img/projects/RSE-Tambah.jpeg',
                'assets/img/projects/RSE-HomeIsi.jpeg',
                'assets/img/projects/RSE-DetailServis.jpeg',
                'assets/img/projects/RSE-DetailGambar.jpeg',
                'assets/img/projects/RSE-EditStatus.jpeg',
                'assets/img/projects/RSE-StatusSelesai.jpeg',
                'assets/img/projects/RSE-Selesai.jpeg',
            ],
            'tech'          => ['Flutter', 'Dart', 'SQLite'],
            'github'        => 'https://github.com/cayadarma/management-service-app.git',
            'demo'          => null,
            'documentation' => null,
        ],
        [
            'title'         => 'IoT Smart Trash System',
            'description'   => 'Sistem tempat sampah pintar yang mendeteksi level sampah menggunakan sensor ultrasonik dan mengirim notifikasi otomatis melalui bot Telegram.',
            'image'         => 'assets/img/projects/STB-IOT.jpeg',
            'gallery'       => null,
            'tech'          => ['Laravel', 'Filament', 'REST API', 'MySQL', 'ESP32', 'IoT'],
            'github'        => 'https://github.com/sitaayusuwarii/pbl_peninsula.git',
            'demo'          => null,
            'documentation' => 'assets/docs/PBL_PENINSULA.pdf',
        ],
        [
            'title'         => 'Aplikasi Mobile TaniTalk ',
            'description'   => 'Aplikasi mobile untuk komunikasi antara petani dan ahli pertanian, menyediakan fitur chat, konsultasi, dan informasi pertanian.',
            'image'         => 'assets/img/projects/TANITALK.png',
            'gallery'       => null,
            'tech'          => ['Flutter', 'Dart', 'REST API', 'Laravel', 'MySQL'],
            'github'        => null,
            'demo'          => null,
            'documentation' => 'assets/docs/TANITALK.pdf',
        ],
        [
            'title'         => 'Aplikasi Mobile Monitoring Turbin (Prototype) ',
            'description'   => 'Prototype aplikasi mobile untuk memantau kondisi turbin secara real-time, menampilkan data sensor dan status operasional turbin. Project ini dibuat hanya untuk tujuan pembelajaran.',
            'image'         => 'assets/img/projects/TM-Home.png',
            'gallery'       => [
                'assets/img/projects/TM-Home.png',
            ],
            'tech'          => ['Flutter', 'Dart'],
            'github'        => 'https://github.com/cayadarma/turbine_monitor.git',
            'demo'          => null,
            'documentation' => null,
        ],
        [
            'title'         => 'Aplikasi Mobile AutoMonitor Pembersih Solar Panel (Prototype)',
            'description'   => 'Prototype aplikasi mobile untuk menjadwalkan pembersihan secara otomatis. Project ini dibuat hanya untuk tujuan pembelajaran.',
            'image'         => 'assets/img/projects/AUTOMONITOR.jpeg',
            'gallery'       => [
                'assets/img/projects/AUTOMONITOR-Home.jpeg',
                'assets/img/projects/AUTOMONITOR-Schedule.jpeg',
            ],
            'tech'          => ['Flutter', 'Dart'],
            'github'        => 'https://github.com/cayadarma/automonitor.git',
            'demo'          => null,
            'documentation' => null,
        ],
    ],

    'contact' => [
        'email'    => 'cayadarma239@gmail.com',
        'github'   => 'https://github.com/cayadarma',
        'linkedin' => 'https://linkedin.com/in/cahya-darma',
        'instagram'=> 'https://instagram.com/cayadarmaa',
    ],

];