<?php
/**
 * Lumetech Portfolio & Case Studies Registry
 */

function get_portfolio_data(): array {
    return [
        'fintech-credit-hub' => [
            'slug' => 'fintech-credit-hub',
            'title' => 'Processing $500M+ Monthly Credit Disbursals with Zero Downtime',
            'client' => 'FinEdge Capital & NBFC Group',
            'category' => 'Fintech',
            'industry_tag' => 'Banking & Fintech',
            'tech_tags' => ['PHP/Laravel', 'Lumetech CRM', 'PayOS', 'MySQL', 'CIBIL API'],
            'short_desc' => 'Migrated legacy loan underwriting to Lumetech CRM, slashing loan approval time from 3 days to under 15 minutes.',
            'challenge' => 'The client faced high customer drop-off rates due to a manual 72-hour paper approval process and frequent database locking during end-of-month EMI collection spikes.',
            'solution' => 'We deployed Lumetech CRM equipped with automated e-KYC verification, rule-based credit scoring algorithms, and a multi-threaded batch EMI auto-debit engine.',
            'results' => [
                ['value' => '15 Mins', 'label' => 'Avg Approval Speed'],
                ['value' => '70%', 'label' => 'Operational Cost Reduction'],
                ['value' => '99.99%', 'label' => 'API Gateway Uptime'],
                ['value' => '$500M+', 'label' => 'Monthly Volume']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1000&q=80'
            ]
        ],
        'q-commerce-darkstores' => [
            'slug' => 'q-commerce-darkstores',
            'title' => 'Scaling 10-Minute Grocery Delivery Across 120+ Dark Stores',
            'client' => 'RapidGrocery Express',
            'category' => 'Quick Commerce',
            'industry_tag' => 'Retail & E-Commerce',
            'tech_tags' => ['Quick Commerce Platform', 'Node.js', 'React Native', 'Google Maps API', 'Redis'],
            'short_desc' => 'Integrated automated dark-store inventory telemetry and rider dispatch algorithms for sub-10-minute order fulfillment.',
            'challenge' => 'Rapidly growing order volume caused inventory discrepancies between customer app listings and physical shelf stock in micro-warehouses.',
            'solution' => 'Implemented Lumetech Quick Commerce platform with bin-level barcode scanning, real-time stock locks, and AI-based nearest rider assignment.',
            'results' => [
                ['value' => '8.5 Mins', 'label' => 'Average Delivery Time'],
                ['value' => '120+', 'label' => 'Dark Stores Powered'],
                ['value' => '99.4%', 'label' => 'Inventory Accuracy'],
                ['value' => '100K+', 'label' => 'Daily Orders']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1556740758-90de374c12ad?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=1000&q=80'
            ]
        ],
        'smart-manufacturing-erp' => [
            'slug' => 'smart-manufacturing-erp',
            'title' => 'Industry 4.0 Shop Floor Telemetry for Precision Auto Components',
            'client' => 'Apex Precision Engineering',
            'category' => 'Manufacturing',
            'industry_tag' => 'Industrial & Manufacturing',
            'tech_tags' => ['FactoryOS', 'IoT Modbus', 'PHP', 'PostgreSQL', 'Docker'],
            'short_desc' => 'Connected 85 CNC machines directly to FactoryOS ERP to eliminate raw material wastage and track machine OEE.',
            'challenge' => 'Unplanned machine breakdowns and untracked scrap rates resulted in high material costs and delayed export deliveries.',
            'solution' => 'Deployed IoT sensors and FactoryOS shop floor execution system with real-time OEE dashboards and automated preventative maintenance alerts.',
            'results' => [
                ['value' => '35%', 'label' => 'OEE Efficiency Gain'],
                ['value' => '0%', 'label' => 'Raw Material Stockouts'],
                ['value' => '100%', 'label' => 'ISO Audit Compliance'],
                ['value' => '85', 'label' => 'Machines Connected']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1000&q=80'
            ]
        ],
        'hospital-his-cloud' => [
            'slug' => 'hospital-his-cloud',
            'title' => 'Unified Hospital Information System for 500-Bed Multi-Specialty Hospital',
            'client' => 'St. Jude Healthcare Network',
            'category' => 'Healthcare',
            'industry_tag' => 'Healthcare & Life Sciences',
            'tech_tags' => ['Healthopolis HIS', 'React', 'Python', 'ABDM Gateway', 'PostgreSQL'],
            'short_desc' => 'Digitized patient EHR, OPD registration, diagnostic lab machines, and pharmacy billing into a unified HIPAA compliant portal.',
            'challenge' => 'Long patient queues at OPD counters and manual lab result reporting led to poor patient satisfaction scores.',
            'solution' => 'Implemented Healthopolis HIS with digital kiosk check-ins, automated lab machine telemetry, and instant WhatsApp report delivery.',
            'results' => [
                ['value' => '45%', 'label' => 'Reduced Wait Times'],
                ['value' => '100%', 'label' => 'EHR Digital Coverage'],
                ['value' => 'ABDM', 'label' => 'Fully Compliant'],
                ['value' => '500+', 'label' => 'Beds Managed']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1000&q=80'
            ]
        ],
        'fleet-logistics-telemetry' => [
            'slug' => 'fleet-logistics-telemetry',
            'title' => 'Real-Time GPS & Fuel Telemetry for 450+ Interstate Trucks',
            'client' => 'TransGlobal Logistics',
            'category' => 'Logistics',
            'industry_tag' => 'Logistics & Transport',
            'tech_tags' => ['TransFleet', 'Node.js', 'Python', 'OBD-II Sensors', 'AWS'],
            'short_desc' => 'Equipped long-haul commercial trucks with TransFleet IoT sensors to curb fuel theft and optimize trip routes.',
            'challenge' => 'High fuel overheads caused by unaccounted siphoning and unauthorized route detours during interstate transit.',
            'solution' => 'Installed ultrasonic fuel level sensors linked with TransFleet GPS geofencing, triggering instant SMS alerts on sudden fuel drops.',
            'results' => [
                ['value' => '22%', 'label' => 'Fuel Expense Saved'],
                ['value' => '100%', 'label' => 'Trip Geofence Tracking'],
                ['value' => '450+', 'label' => 'Active Fleet Size'],
                ['value' => '0', 'label' => 'Fuel Theft Incidents']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=1000&q=80'
            ]
        ]
    ];
}
