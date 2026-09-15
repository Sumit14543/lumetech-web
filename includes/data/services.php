<?php
/**
 * Lumetech Services Data Registry - 9 Core Services
 */

function get_services_data(): array {
    return [
        'web-development' => [
            'id' => 1,
            'slug' => 'web-development',
            'title' => 'Web Development',
            'subtitle' => 'Custom web application development company',
            'icon' => 'bi-code-slash',
            'short_desc' => 'Custom web platforms, admin panels and dashboards built on React JS and modern frameworks, designed to scale from your first hundred users to your first hundred thousand.',
            'full_desc' => 'Lumetech delivers custom web platforms, admin panels, and enterprise dashboards built on React JS, Node.js, Laravel, and modern cloud frameworks. Designed to scale seamlessly from your first hundred users to your first hundred thousand with sub-second performance.',
            'features' => [
                'Custom Web Application Development',
                'Single Page Applications (SPA) & Progressive Web Apps (PWA)',
                'High-Availability Cloud Hosting & DevOps Setup',
                'Web Vitals & Performance Optimization',
                'Micro-Frontend & Serverless Architecture'
            ],
            'technologies' => ['React JS', 'Node.js', 'Laravel', 'Python', '.NET', 'HTML', 'CSS', 'JavaScript'],
            'faq' => [
                ['q' => 'How long does a custom web development project take?', 'a' => 'Most custom web application projects range from 6 to 12 weeks depending on scope, with an MVP deliverable in 6 to 8 weeks.'],
                ['q' => 'Do you provide post-launch support and maintenance?', 'a' => 'Yes, every project includes documentation and ongoing maintenance as part of our long-term technology partnership model.']
            ]
        ],
        'app-development' => [
            'id' => 2,
            'slug' => 'app-development',
            'title' => 'App Development',
            'subtitle' => 'Mobile app development company (Android/iOS)',
            'icon' => 'bi-phone',
            'short_desc' => 'Native and cross-platform Android/iOS apps built with React Native, so your product reaches every customer regardless of device — without maintaining two separate codebases.',
            'full_desc' => 'Native and cross-platform mobile apps for Android and iOS engineered with React Native and Flutter. We deliver fluid performance, biometric authentication, offline synchronization, and seamless Play Store / App Store deployments.',
            'features' => [
                'Native iOS (Swift) & Android (Kotlin) Apps',
                'Cross-Platform React Native & Flutter Solutions',
                'Biometric Authentication & Security Encryption',
                'Offline-First Data Synchronization',
                'App Store & Play Store Publishing & ASO'
            ],
            'technologies' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Firebase', 'REST APIs'],
            'faq' => [
                ['q' => 'Can React Native handle complex enterprise mobile features?', 'a' => 'Yes, React Native allows us to ship high-performance native-speed apps for both iOS and Android from a single unified codebase, saving development time and maintenance cost.']
            ]
        ],
        'ui-ux-designing' => [
            'id' => 3,
            'slug' => 'ui-ux-designing',
            'title' => 'UI/UX Designing',
            'subtitle' => 'Product design and prototyping services',
            'icon' => 'bi-palette',
            'short_desc' => 'Wireframes, prototypes and full product design systems in Figma, built around how your real users actually work — not generic templates.',
            'full_desc' => 'Human-centered UI/UX design, wireframing, and interactive prototyping. We create enterprise design systems in Figma built around real user workflows, accessibility standards, and conversion optimization.',
            'features' => [
                'Wireframing & Interactive Prototyping',
                'Figma Product Design Systems & Libraries',
                'User Research & Persona Mapping',
                'Accessibility (WCAG 2.1 AA) Audits',
                'Usability & Conversion Rate Optimization'
            ],
            'technologies' => ['Figma', 'Adobe', 'Canva', 'Storybook', 'Design Tokens'],
            'faq' => [
                ['q' => 'What deliverables do we receive in the UI/UX design phase?', 'a' => 'You receive production-ready Figma source files, interactive click-through prototypes, component design tokens, and WCAG accessibility guidelines.']
            ]
        ],
        'api-development' => [
            'id' => 4,
            'slug' => 'api-development',
            'title' => 'API Development & Integration',
            'subtitle' => 'REST API development & third-party integrations',
            'icon' => 'bi-plug',
            'short_desc' => 'REST APIs and vendor integrations — payment gateways, Odoo, Zoho, WhatsApp, SMS, CRM, HRMS, AEPS, BBPS, biometric and face recognition, GPS/location, and IoT/hardware device APIs.',
            'full_desc' => 'Engineered REST APIs and multi-vendor integrations connecting payment gateways, Odoo, Zoho, WhatsApp, SMS, CRM, HRMS, AEPS, BBPS, biometric/face recognition, GPS telemetry, and IoT hardware devices.',
            'features' => [
                'REST API & Microservices Engineering',
                'Payment Gateway, Odoo & Zoho Integrations',
                'WhatsApp, SMS & Notification API Automation',
                'Biometric, Face Recognition & IoT Device APIs',
                'OAuth2, JWT & API Key Security Architecture'
            ],
            'technologies' => ['RESTful', 'GraphQL', 'Node.js', 'Python', 'Redis', 'Swagger/OpenAPI'],
            'faq' => [
                ['q' => 'Can you integrate third-party APIs with our existing legacy systems?', 'a' => 'Yes, we engineer custom API middleware and webhook connectors to bridge legacy databases with modern third-party services safely.']
            ]
        ],
        'cms-development' => [
            'id' => 5,
            'slug' => 'cms-development',
            'title' => 'CMS Development',
            'subtitle' => 'WordPress & Shopify development company',
            'icon' => 'bi-file-earmark-text',
            'short_desc' => 'Content-managed websites and e-commerce portals on WordPress and Shopify, built for editors who aren\'t developers and marketers who need speed.',
            'full_desc' => 'Enterprise content management systems and e-commerce stores on WordPress and Shopify. Built with custom blocks, speed optimization, SEO automation, and intuitive editing dashboards.',
            'features' => [
                'WordPress & Shopify Custom Enterprise Portals',
                'Headless CMS Architecture (Strapi, Payload)',
                'E-Commerce Storefront & Payment Gateway Setup',
                'Multi-Language & Multi-Region Localization',
                'SEO Automation & Dynamic Content Workflows'
            ],
            'technologies' => ['WordPress', 'Shopify', 'PHP', 'Headless CMS', 'MySQL'],
            'faq' => [
                ['q' => 'Are your WordPress/Shopify sites fast and secure?', 'a' => 'Yes, we build lightweight custom themes with zero bloatware, strict security hardening, and sub-second page load speeds.']
            ]
        ],
        'saas-product-development' => [
            'id' => 6,
            'slug' => 'saas-product-development',
            'title' => 'SaaS Product Development',
            'subtitle' => 'Multi-tenant SaaS development company India',
            'icon' => 'bi-cloud-slash',
            'short_desc' => 'Multi-tenant, subscription-based platforms architected for resale from day one — the same discipline behind our own 11 in-house products.',
            'full_desc' => 'End-to-end multi-tenant SaaS application engineering. We architect subscription billing, tenant isolation, custom domains, usage analytics, and auto-scaling infrastructure built for commercial resale.',
            'features' => [
                'Multi-Tenant Database & Workspace Architecture',
                'Subscription & Recurring Billing (Stripe, Razorpay, PayOS)',
                'Usage-Based Telemetry & Admin Dashboards',
                'Custom Subdomain & Domain Management',
                'CI/CD Pipeline & Auto-Scaling Infrastructure'
            ],
            'technologies' => ['Node.js', 'Laravel', 'React', 'PostgreSQL', 'Stripe', 'PayOS', 'Docker', 'Kubernetes'],
            'faq' => [
                ['q' => 'How much does it cost to build a SaaS product?', 'a' => 'Cost depends on the number of roles, integrations, and platforms (web/mobile/desktop); we scope this in a free consultation call.']
            ]
        ],
        'ai-agent-development' => [
            'id' => 7,
            'slug' => 'ai-agent-development',
            'title' => 'AI Agent Development',
            'subtitle' => 'AI voice agent & chatbot development for business',
            'icon' => 'bi-robot',
            'short_desc' => 'AI-powered assistants and workflow agents that handle calls, qualify leads, and automate the repetitive parts of your operations.',
            'full_desc' => 'Autonomous AI agents, voice assistants, and retrieval-augmented generation (RAG) pipelines. We build custom AI workflow automation that qualifies leads, handles customer support calls, and queries internal document vaults securely.',
            'features' => [
                'Autonomous AI Voice & Chatbot Workflow Agents',
                'Retrieval-Augmented Generation (RAG) & Vector DBs',
                'Custom LLM Fine-Tuning & Prompt Engineering',
                'Real Estate & CRM Lead Follow-Up Automation',
                'AI Privacy Guardrails & Zero Data Retention'
            ],
            'technologies' => ['Python', 'LangChain', 'LlamaIndex', 'Pinecone', 'OpenAI API', 'HuggingFace'],
            'faq' => [
                ['q' => 'How are AI voice agents changing lead follow-up?', 'a' => 'AI voice agents handle instant inbound and outbound calls, qualify lead interest against custom parameters, and sync qualified leads directly to your CRM without human delay.']
            ]
        ],
        'bot-development' => [
            'id' => 8,
            'slug' => 'bot-development',
            'title' => 'Bot Development',
            'subtitle' => 'WhatsApp bot & booking bot development',
            'icon' => 'bi-chat-left-dots',
            'short_desc' => 'Chat and automation bots for booking, support and sales — from ticket-booking bots to WhatsApp-based customer service.',
            'full_desc' => 'Omnichannel chat and automation bots for WhatsApp, Telegram, and web. We engineer ticket booking bots, automated WhatsApp customer support, payment collection links, and seamless human agent handoffs.',
            'features' => [
                'WhatsApp Business API & Telegram Automation',
                'Automated Ticket & Booking Flow Bots',
                '24/7 Customer Support & Human Agent Handoff',
                'NLP Intent Matching & Lead Qualification',
                'Payment Link & CRM Bot Integrations'
            ],
            'technologies' => ['Node.js', 'Python', 'Dialogflow', 'WhatsApp Cloud API', 'Webhooks'],
            'faq' => [
                ['q' => 'Can a WhatsApp bot take payments directly in chat?', 'a' => 'Yes, our bots generate secure instant payment links via PayOS or payment gateways directly inside the WhatsApp chat thread.']
            ]
        ],
        'desktop-app-development' => [
            'id' => 9,
            'slug' => 'desktop-app-development',
            'title' => 'Desktop App Development',
            'subtitle' => 'Offline-capable desktop software (.exe)',
            'icon' => 'bi-display',
            'short_desc' => 'Windows desktop applications with full offline support, so your business keeps running even when the internet doesn\'t.',
            'full_desc' => 'Cross-platform Windows, macOS, and Linux desktop software engineered with Tauri, Electron, and C#/.NET. Features full offline support, local SQLite database storage, thermal printer/barcode hardware interfacing, and automatic cloud background syncing.',
            'features' => [
                'Cross-Platform Windows/macOS Desktop Apps (.exe)',
                'Full Offline Support with Automatic Cloud Sync',
                'POS Printer, Barcode & Hardware Device Interfacing',
                'Local SQLite / RocksDB Storage Engine',
                'Background Services & OTA Auto-Updates'
            ],
            'technologies' => ['Tauri', 'Electron', 'C# / .NET', 'WPF', 'C++', 'SQLite'],
            'faq' => [
                ['q' => 'Why do restaurant and POS chains need offline-first desktop apps?', 'a' => 'An offline-capable desktop app ensures billing and kitchen displays never stop taking orders during internet outages, auto-syncing data once connectivity drops are restored.']
            ]
        ]
    ];
}
