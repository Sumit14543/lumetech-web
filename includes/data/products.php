<?php
/**
 * Lumetech Products Data Registry - 11 Enterprise Products
 */

function get_products_data(): array {
    return [
        'quick-commerce' => [
            'id' => 1,
            'slug' => 'quick-commerce',
            'name' => 'Quick Commerce Platform',
            'category' => 'E-Commerce & Retail',
            'badge' => 'Hyperlocal Delivery Platform',
            'short_desc' => 'Hyperlocal delivery platform for stores & dark-stores built for 10–30 minute delivery businesses with real-time inventory, OTP delivery flow, and phone-assisted ordering.',
            'full_desc' => 'Built for 10–30 minute delivery businesses running multiple dark-stores or outlets. Super Admin gets platform-wide control over stores, inventory, wallets and compliance; Admin runs day-to-day store operations; a bilingual customer app with a phone-assisted ordering mode ("Grandma Mode") makes sure no customer is left out.',
            'tagline' => 'Hyperlocal Delivery Platform for Stores & Dark-Stores',
            'features' => [
                ['title' => 'Multi-Role Administration', 'desc' => 'Super Admin, Admin, Delivery Partner & Customer roles with granular permissions.'],
                ['title' => 'Real-Time Inventory Engine', 'desc' => 'Auto stock deduction, GRN processing, low-stock alerts & full stock ledger.'],
                ['title' => 'OTP-Verified Delivery & Wallet', 'desc' => 'OTP-verified pickup/delivery flow with COD wallet settlement for delivery partners.'],
                ['title' => '"Grandma Mode" Call Orders', 'desc' => 'Assisted call-based ordering for non-app users, seamlessly synced into live app orders.'],
                ['title' => 'Bilingual Customer App', 'desc' => 'Bilingual customer app (English & regional) with live GPS order tracking and one-click reorder.'],
                ['title' => 'GST & FSSAI Compliance', 'desc' => 'GST/FSSAI compliance tracking and merchant KYC approvals built into Super Admin console.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1556740758-90de374c12ad?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                '10–30 Min Hyperlocal Delivery',
                'Zero Stock Discrepancies with Auto Stock Deduction',
                'Phone-Assisted Order Capture for Non-App Users',
                'Multi-Dark-Store Centralized Admin Control'
            ],
            'use_cases' => ['Dark-Store Grocery Chains', 'Emergency Pharmacy Delivery', 'Hyperlocal FMCG Outlets'],
            'industries' => ['Retail', 'FMCG', 'Grocery & Dark-Stores'],
            'integrations' => ['PayOS', 'WhatsApp Business', 'Google Maps API', 'ERP Systems'],
            'case_study' => [
                'client' => 'Adinsi',
                'desc' => 'Adinsi needed a hyperlocal delivery platform that could run multiple dark-stores centrally, keep inventory accurate in real time, and serve customers calling in orders. Lumetech built a 4-role platform tying inventory deduction directly to delivery OTP. Result: Adinsi runs every outlet\'s orders, stock, and delivery fleet from one live dashboard.'
            ],
            'faq' => [
                ['q' => 'Can non-app users place orders on Quick Commerce?', 'a' => 'Yes, our built-in "Grandma Mode" allows call-center staff to capture phone orders that sync directly into the delivery fleet pipeline.']
            ]
        ],
        'hathbook' => [
            'id' => 2,
            'slug' => 'hathbook',
            'name' => 'Hathbook',
            'category' => 'E-Commerce & Marketplace',
            'badge' => 'Multi-Vendor Marketplace',
            'short_desc' => 'Multi-vendor e-commerce marketplace software with Aadhaar-verified seller onboarding, guest browsing, and integrated content moderation.',
            'full_desc' => 'A marketplace platform where independent sellers onboard, list products and manage their own storefront under Admin\'s oversight. Guest visitors browse freely before committing to an account, with blog, video and gallery content built in alongside the core shopping experience.',
            'tagline' => 'Multi-Vendor E-Commerce Marketplace Platform',
            'features' => [
                ['title' => 'Multi-Role Marketplace Control', 'desc' => 'Dedicated Admin, Seller, and Customer/Guest role interfaces.'],
                ['title' => 'Aadhaar-Verified Seller Onboarding', 'desc' => 'Identity verification and Admin approval workflow before seller store activation.'],
                ['title' => 'Content Moderation Gate', 'desc' => 'Product listings, blog posts, videos, and galleries moderated before going live.'],
                ['title' => 'Guest Browsing & OTP Checkout', 'desc' => 'Free guest browsing without login; registration required only at purchase.'],
                ['title' => 'Configurable Commissions', 'desc' => 'Set platform commission rates, delivery fees, and handling charges per seller or category.'],
                ['title' => 'Protected Seller Payouts', 'desc' => 'Seller fund withdrawals unlock only after product delivery + return-window expiry.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Safe Aadhaar-Verified Merchant Onboarding',
                'Zero Dispute Bottlenecks for Admin',
                'Protected Buyer Return-Window Escrow',
                'Seamless Content & E-Commerce Integration'
            ],
            'use_cases' => ['Multi-Vendor Shopping Hubs', 'Specialty Craft Marketplaces', 'B2B Merchant Portals'],
            'industries' => ['E-Commerce & Retail Marketplace'],
            'integrations' => ['Aadhaar e-KYC', 'PayOS', 'WhatsApp API', 'Logistics Gateways'],
            'case_study' => [
                'client' => 'Hathbook',
                'desc' => 'Hathbook wanted a marketplace that could onboard independent sellers safely, let them manage their own storefronts, and give Admin full control over approvals. Lumetech built a multi-vendor platform where sellers manage products directly, and Admin steps in only at approval gates. Result: Hathbook sellers go from application to first sale without needing Admin on the phone.'
            ],
            'faq' => [
                ['q' => 'How does seller payout escrow work on Hathbook?', 'a' => 'Seller withdrawal requests unlock automatically once customer delivery is confirmed and the product return window expires.']
            ]
        ],
        'healthopolis' => [
            'id' => 3,
            'slug' => 'healthopolis',
            'name' => 'Healthopolis',
            'category' => 'Healthcare & Diagnostics',
            'badge' => 'Home Healthcare & Diagnostics Platform',
            'short_desc' => 'Multi-role home healthcare & diagnostics platform with technician dispatch, barcode sample tracking & doctor referral rewards.',
            'full_desc' => 'Designed for franchise-based home-diagnostics businesses running across multiple cities. Covers technician dispatch with automatic escalation, barcode-based sample handling to the lab, a doctor-referral rewards program, and call-based booking for B2B/TPA clients and non-app patients.',
            'tagline' => 'Home Healthcare & Diagnostic Lab Management Suite',
            'features' => [
                ['title' => '8 Granular User Roles', 'desc' => 'Super Admin, Admin, Call Executive, Technician, Patient, Shop User, Doctor, Delivery Man.'],
                ['title' => 'Auto-Escalating Dispatch Timers', 'desc' => 'OTP-based technician dispatch with automatic escalation timers (Technician -> Admin -> Super Admin).'],
                ['title' => 'Barcode Sample Traceability', 'desc' => 'Barcode-tagged sample collection and lab handoff tracking.'],
                ['title' => 'Doctor Referral Rewards', 'desc' => 'Real-time coin rewards credited to referring doctors upon service completion.'],
                ['title' => 'TPA & Call Booking Engine', 'desc' => 'Call-based booking flow for TPA/B2B package bookings and non-app patients.'],
                ['title' => 'Live Technician GPS Tracking', 'desc' => 'Live technician location shared with the patient throughout the home visit.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1538108149393-fbbd81895907?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Zero Missed Sample Collections with Auto Escalation',
                'Full Barcode Chain-of-Custody Lab Traceability',
                'Automated Doctor Referral Loyalty Coins',
                'Seamless Multi-City Franchise Management'
            ],
            'use_cases' => ['Home Sample Collection Chains', 'Multi-City Diagnostic Labs', 'Polyclinic Franchises'],
            'industries' => ['Healthcare & Diagnostics'],
            'integrations' => ['LIS Lab Machines', 'SMS & WhatsApp API', 'PayOS', 'GPS Gateway'],
            'case_study' => [
                'client' => 'Healthopolis',
                'desc' => 'Healthopolis runs home-visit diagnostics across multiple cities and needed one system to manage franchises and dispatch technicians reliably. Lumetech built an 8-role platform with automatic escalation so a late technician never falls through the cracks. Result: Healthopolis technicians, doctors and call staff all work off the same live booking record.'
            ],
            'faq' => [
                ['q' => 'What happens if a diagnostic technician is delayed for a sample pickup?', 'a' => 'Healthopolis triggers automated escalation alerts to outlet Admin and Super Admin if a technician fails to acknowledge a sample dispatch window.']
            ]
        ],
        'transfleet' => [
            'id' => 4,
            'slug' => 'transfleet',
            'name' => 'TransFleet',
            'category' => 'Logistics & Supply Chain',
            'badge' => 'Transport & Fleet Management',
            'short_desc' => 'Transport & fleet management system with live GPS tracking, order-merge for part loads, OTP-verified proof of delivery, and GST billing.',
            'full_desc' => 'A single dashboard covering the full transport lifecycle — customer orders, truck and driver assignment, live shipment tracking, expense management and GST billing. Built for transporters juggling multiple trucks, routes and part-loads at once.',
            'features' => [
                ['title' => '4 Transport Roles', 'desc' => 'Super User, Transporter, Driver & Customer/Company role portals.'],
                ['title' => 'Smart Order-Merge Engine', 'desc' => 'Auto-merge part loads on the same or nearby routes to share transport costs.'],
                ['title' => 'GPS Tracking & Geofencing', 'desc' => 'Live vehicle telemetry with geofence alerts and route-deviation detection.'],
                ['title' => 'OTP-Verified ePOD', 'desc' => 'Electronic proof of delivery (ePOD) with OTP verification, photo, and signature capture.'],
                ['title' => 'Fleet & Cost Analytics', 'desc' => 'Cost per KM, revenue per truck, driver performance, and fuel scorecards.'],
                ['title' => 'Mid-Trip Driver Swaps', 'desc' => 'Support for multi-destination shipments and mid-trip truck/driver replacements.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=1000&q=80',
                'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Maximised Truck Capacity via Part-Load Order Merge',
                'Dispute-Free OTP Photo Proof of Delivery',
                'Real-Time Fleet Cost Per KM Visibility',
                'Automated Transport GST Invoicing'
            ],
            'use_cases' => ['Interstate Transport Fleets', 'Part-Load Logistics Operators', 'Corporate Cargo Fleets'],
            'industries' => ['Logistics & Freight Transport'],
            'integrations' => ['GPS Hardware Sensors', 'FASTag', 'PayOS', 'GST Portal'],
            'case_study' => [
                'client' => 'ADMMI',
                'desc' => 'ADMMI needed to move away from manual order sheets to real-time tracking of every truck, driver, and shipment. Lumetech built a fleet platform where order-merge finds compatible loads on the same route automatically, and OTP-verified ePOD ends disputes. Result: ADMMI dispatchers now see every truck and shipment status in real time from one screen.'
            ],
            'faq' => [
                ['q' => 'How does order-merge save transport costs on TransFleet?', 'a' => 'TransFleet identifies compatible part-load shipments along nearby routes and merges them onto a single truck, optimizing load capacity and fuel costs.']
            ]
        ],
        'genset-rental' => [
            'id' => 5,
            'slug' => 'genset-rental',
            'name' => 'Genset Rental Management System',
            'category' => 'Operations & Equipment Rental',
            'badge' => 'Equipment Rental Lifecycle',
            'short_desc' => 'End-to-end genset/equipment rental software — booking, dispatch, running-hour maintenance tracking, and auto GST billing in one platform.',
            'full_desc' => 'Covers the complete rental journey for genset (or similar equipment) rental businesses — from instant customer quotation through dispatch, running-hour tracking, maintenance and final GST billing, with a single live status field per unit syncing everything.',
            'features' => [
                ['title' => '8 Roles & Self-Service Portal', 'desc' => 'Web Portal, Mobile App, and self-service Customer quotation & booking portal.'],
                ['title' => 'Single Live Genset Status Field', 'desc' => 'Syncs booking, dispatch, maintenance & billing across all teams in real time.'],
                ['title' => 'Running-Hour Maintenance Alerts', 'desc' => 'Interval tracking with 80%/100% threshold alerts based on generator run-hours.'],
                ['title' => 'Photo Meter Readings', 'desc' => 'OTP and photo-verified meter readings captured at both dispatch and return.'],
                ['title' => 'Automated GST Billing Engine', 'desc' => 'Auto-calculates rate x hours + fuel + late-return penalty - deposit.'],
                ['title' => 'Instant Quotation Builder', 'desc' => 'Self-service quotation generator for instant customer equipment hires.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Zero Unbilled Run-Hours',
                'Single Live Source of Truth for Fleet & Billing',
                'Photo-Verified Meter Readings on Dispatch & Return',
                'Automated Run-Hour Maintenance Thresholds'
            ],
            'use_cases' => ['Diesel Generator Rentals', 'Heavy Construction Machinery Hire', 'Event Power Equipment'],
            'industries' => ['Equipment Rental & Heavy Industry'],
            'integrations' => ['IoT Run-Hour Sensors', 'WhatsApp API', 'PayOS', 'Tally'],
            'case_study' => [
                'client' => 'Ace4Power',
                'desc' => 'Ace4Power was losing track of unit locations, maintenance due dates, and billing metrics. Lumetech built a rental platform around a single live Genset Status field and auto-calculated GST billing pulling straight from field data. Result: Ace4Power\'s fleet, billing and maintenance teams now work off one shared source of truth.'
            ],
            'faq' => [
                ['q' => 'How are running-hour maintenance alerts triggered?', 'a' => 'Genset Rental tracking logs generator run-hours at return or via IoT, triggering service alerts when reaching 80% and 100% maintenance thresholds.']
            ]
        ],
        'rta-back-office' => [
            'id' => 6,
            'slug' => 'rta-back-office',
            'name' => 'RTA Back Office Software',
            'category' => 'Financial Compliance & Securities',
            'badge' => 'Registrar & Transfer Agent Platform',
            'short_desc' => 'Compliance-first RTA back-office software with Maker-Checker-Supervisor workflow, NSDL/CDSL processing, and OCR-based grievance capture.',
            'full_desc' => 'A compliance-first back-office system for Registrar & Transfer Agents (RTA), built around a strict Maker-Checker-Supervisor approval chain. Handles corporate-action processing, investor self-service KYC and IPO allotment lookup, plus OCR-based grievance capture, all with a full regulator-ready audit trail.',
            'features' => [
                ['title' => 'Maker-Checker-Supervisor Roles', 'desc' => 'Enforced approval chain with Customer and Company self-service portals.'],
                ['title' => 'NSDL/CDSL Batch Processing', 'desc' => 'Automated handling of corporate actions (Bonus, Dividend, Split, Redemption).'],
                ['title' => 'OCR Grievance Intake', 'desc' => 'Automated grievance extraction from email/web forms with SLA escalation.'],
                ['title' => 'Investor KYC & IPO Lookup', 'desc' => 'Investor KYC document uploads with CIN tracking & instant IPO allotment status.'],
                ['title' => 'Automated ISIN Reconciliation', 'desc' => 'Daily automated ISIN reconciliation across depositories with exception reporting.'],
                ['title' => 'Regulator Audit Logs', 'desc' => 'Full SEBI/depository compliance audit trail for every transaction.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                '100% SEBI / NSDL / CDSL Audit Compliance',
                'Zero Unreviewed Corporate Actions',
                'Instant OCR Grievance Logging & SLA Tracing',
                'Automated Daily ISIN Depository Reconciliation'
            ],
            'use_cases' => ['Registrar & Transfer Agencies (RTA)', 'Capital Market Back-Offices', 'Share Registry Services'],
            'industries' => ['Capital Markets & Financial Compliance'],
            'integrations' => ['NSDL Portal', 'CDSL Gateway', 'OCR Engine', 'PayOS'],
            'case_study' => [
                'client' => 'Induss',
                'desc' => 'Induss needed strict control over every KYC entry and corporate action with a clean SEBI/NSDL/CDSL audit trail. Lumetech built a Maker-Checker-Supervisor workflow where no record moves without independent review, plus OCR grievance capture. Result: Induss compliance teams get a full, auditable trail on every transaction automatically.'
            ],
            'faq' => [
                ['q' => 'How does Maker-Checker-Supervisor workflow ensure compliance?', 'a' => 'No corporate action or KYC record moves forward without independent review and approval by higher supervisor tiers, preventing data tampering.']
            ]
        ],
        'lumetech-crm' => [
            'id' => 7,
            'slug' => 'lumetech-crm',
            'name' => 'Lumetech CRM – Loan Management',
            'category' => 'Fintech & Lending',
            'badge' => 'Loan Management CRM for NBFC & Lending',
            'short_desc' => 'Lending CRM enforcing a 5-stage loan workflow — lead intake to collections — with AI risk summaries and mobile OTP e-sign.',
            'full_desc' => 'Built to replace the five disconnected tools most lending teams juggle — leads, approvals, e-sign, payments and collections. One system enforces the correct sequence at every stage of a loan, so nothing is ever accidentally skipped or approved out of order.',
            'features' => [
                ['title' => 'Enforced 5-Stage Loan Flow', 'desc' => 'Lead Intake -> Approval -> e-Sign -> Payment Out -> Collections.'],
                ['title' => 'Multi-Team Workspace Views', 'desc' => 'Dedicated views for Calling, Approval, Payments & Recovery teams, plus Management.'],
                ['title' => 'AI Risk Summary Engine', 'desc' => 'AI-generated applicant risk summaries for faster, safer loan approval decisions.'],
                ['title' => 'Mobile OTP e-Sign', 'desc' => 'Paperless mobile OTP e-signature flow letting borrowers sign loan terms instantly.'],
                ['title' => 'Bank-Verified Disbursal', 'desc' => 'Every disbursal matched to a real, verified bank transaction before closing stage.'],
                ['title' => 'Time-Stamped Audit Trail', 'desc' => 'Fully time-stamped, person-attributed activity log for every loan action.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Enforced Loan Workflow Execution (No Skipped Steps)',
                'Paperless Instant Mobile OTP Loan e-Signing',
                'AI-Powered Risk Assessment for Safer Underwriting',
                'Closed Disbursal Audit Trail Matched to Bank Feeds'
            ],
            'use_cases' => ['NBFC Lenders', 'Digital Lending Platforms', 'Microfinance Companies'],
            'industries' => ['Fintech & Lending'],
            'integrations' => ['Bank Verification API', 'CIBIL', 'Aadhaar e-Sign', 'PayOS', 'WhatsApp API'],
            'case_study' => [
                'client' => 'Waqt Finance',
                'desc' => 'Waqt Finance was running loans across five disconnected tools. Lumetech built a lending CRM enforcing sequence at the system level, so a loan cannot be disbursed before e-sign or KYC is verified. Result: Waqt Finance loan officers close a file in days, not weeks — with nothing slipping through the cracks.'
            ],
            'faq' => [
                ['q' => 'Can a loan be disbursed before borrower e-signature on Lumetech CRM?', 'a' => 'No, the system strictly locks the payment-out stage until valid mobile OTP e-signature and KYC approvals are recorded.']
            ]
        ],
        'factoryos' => [
            'id' => 8,
            'slug' => 'factoryos',
            'name' => 'FactoryOS – Manufacturing ERP',
            'category' => 'Industrial & Manufacturing',
            'badge' => 'Multi-Tenant Manufacturing ERP/CRM',
            'short_desc' => 'Multi-tenant manufacturing ERP covering production, inventory, sales and HR — with credit-limit enforcement and biometric-linked payroll.',
            'full_desc' => 'A full manufacturing ERP covering production planning, inventory, sales and HR under one roof, built as a multi-tenant SaaS product so it can be configured and resold to any factory — not just customised once for a single client\'s shop floor.',
            'features' => [
                ['title' => '7 Specialized Factory Roles', 'desc' => 'Factory Admin, Production Manager, Inventory Manager, Sales Executive, Accountant, HR Manager.'],
                ['title' => 'Versioned Bill of Materials', 'desc' => 'Versioned BOM with job-work/subcontracting and automated raw material wastage tracking.'],
                ['title' => 'Auto Credit-Limit Order Blocking', 'desc' => 'Sales orders auto-blocked when a customer\'s outstanding balance breaches credit limits.'],
                ['title' => 'Biometric Attendance Salary Slip', 'desc' => 'Biometric attendance sync feeding directly into locked, HR-generated salary slips.'],
                ['title' => 'Automated Tax & E-Way Bills', 'desc' => 'Auto-computed GST, e-way bills, and period-wise input/output tax reports.'],
                ['title' => 'Quality Inspection Logs', 'desc' => 'Stage-by-stage quality inspection logging against every production order.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Prevents Bad Debt via Automated Credit-Limit Order Blocks',
                'Versioned BOM with Auto Raw Material Wastage Logs',
                'Biometric-Linked Tamper-Proof Payroll',
                'Multi-Tenant SaaS Ready for Resale'
            ],
            'use_cases' => ['Small & Mid Manufacturing SMEs', 'Auto Component Factories', 'Process & Packaging Plants'],
            'industries' => ['Manufacturing & Industrial ERP'],
            'integrations' => ['Biometric Devices', 'GST & E-Way Portal', 'PayOS', 'Tally'],
            'case_study' => [
                'client' => 'Lumetech (in-house)',
                'desc' => 'Manufacturers we spoke to were running production and accounts on spreadsheets with no way to catch credit-limit breaches. Lumetech built a 7-role manufacturing ERP where sales orders auto-block at credit-limit checks, stopping bad debt before it\'s created. Result: FactoryOS gives Lumetech a resellable manufacturing product.'
            ],
            'faq' => [
                ['q' => 'How does credit-limit enforcement work on FactoryOS?', 'a' => 'If a customer\'s pending invoices exceed their configured credit threshold, FactoryOS automatically blocks new sales orders from entering production.']
            ]
        ],
        'cafeos' => [
            'id' => 9,
            'slug' => 'cafeos',
            'name' => 'CaféOS – Restaurant Management',
            'category' => 'Hospitality & Food Services',
            'badge' => 'Multi-Outlet Café & Restaurant Platform',
            'short_desc' => 'Multi-outlet café & restaurant management platform with offline-capable POS desktop app, kitchen display system (KDS), and per-outlet HRM & accounting.',
            'full_desc' => 'Built for multi-outlet café and restaurant chains that need centralized oversight but can\'t afford downtime when the internet drops. An offline-capable desktop app keeps billing running at every outlet regardless of connectivity, auto-syncing back to the cloud once restored.',
            'features' => [
                ['title' => '5 Tiered Roles', 'desc' => 'Superadmin (org-wide) down to outlet-level Admin, Staff, Customer and Delivery Man.'],
                ['title' => 'POS & Table Management', 'desc' => 'POS, Kitchen Display System (KDS), reservations & table/floor management.'],
                ['title' => 'Offline Desktop POS App', 'desc' => 'Offline-capable Desktop App with automatic cloud sync once internet connectivity returns.'],
                ['title' => 'In-App Payment QR Code', 'desc' => 'In-app payment QR code so delivery partners collect payment straight from customers.'],
                ['title' => 'Per-Outlet HRM & Accounts', 'desc' => 'Full HRM & accounting suite (payroll, attendance, expenses) scoped per outlet.'],
                ['title' => 'Recipe & Ingredient Costing', 'desc' => 'Auto-deduct exact raw ingredients on every dish order.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Uninterrupted Offline POS Billing During Internet Drops',
                'Real-Time Kitchen Display System (KDS) Order Flow',
                'Outlet-Scoped HRM & Payroll Accounting',
                'Centralized Superadmin Multi-Branch Analytics'
            ],
            'use_cases' => ['Multi-Outlet Café Chains', 'Quick Service Restaurants (QSR)', 'Cloud Kitchen Networks'],
            'industries' => ['Hospitality & Restaurants'],
            'integrations' => ['Thermal POS Printers', 'PayOS', 'WhatsApp API', 'Swiggy/Zomato APIs'],
            'case_study' => [
                'client' => 'Chunk City',
                'desc' => 'Chunk City runs multiple café outlets and needed one system for billing, kitchen flow, HR and accounts across every location without operations stopping during internet drops. Lumetech built an offline-first desktop platform. Result: Chunk City managers run billing, kitchen and HR the same way whether online or offline.'
            ],
            'faq' => [
                ['q' => 'Does CaféOS stop taking orders if the internet goes down at an outlet?', 'a' => 'No, the CaféOS desktop POS app saves billing data locally instant connectivity drops, auto-syncing back to the cloud when restored.']
            ]
        ],
        'payos' => [
            'id' => 10,
            'slug' => 'payos',
            'name' => 'PayOS – Payment Gateway',
            'category' => 'Fintech & Payments',
            'badge' => 'Payment Gateway Aggregator Platform',
            'short_desc' => 'Payment aggregator platform with multi-acquirer routing, configurable settlement cycles (Instant/T+1/T+2), and full API/no-code merchant collection.',
            'full_desc' => 'A payment aggregator system sitting between merchants and multiple banking acquirers — routing transactions, applying settlement and MDR rules, and giving merchants both no-code and API-based ways to collect payments from their own customers.',
            'features' => [
                ['title' => 'Administrator & Merchant Roles', 'desc' => 'Dedicated Admin management & merchant portal dashboards.'],
                ['title' => 'Multi-Acquirer Smart Routing', 'desc' => 'Smart acquirer routing with amount-based rules per payment mode to optimize costs.'],
                ['title' => 'Configurable Settlement Cycles', 'desc' => 'Support for Instant, Hourly, T+1, T+2, T+3 settlement cycles & MDR templates.'],
                ['title' => 'Omnichannel Merchant Collection', 'desc' => 'Collect via Payment Links, hosted Order Page or full REST API integration.'],
                ['title' => 'Chargeback & Dispute Workflow', 'desc' => 'Built-in dispute-marking, document upload, and chargeback processing workflow.'],
                ['title' => 'Unified Payment Ledger', 'desc' => 'Real-time transaction status reconciliation across acquiring bank feeds.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Dynamic Acquirer Routing for Lower MDR & High Success Rates',
                'Flexible Settlement Cycles (Instant to T+3)',
                'No-Code Payment Links + REST API Integration',
                'Built-in Merchant Dispute & Chargeback Workflow'
            ],
            'use_cases' => ['Payment Aggregators', 'E-Commerce Merchant Services', 'SaaS Platform Collections'],
            'industries' => ['Fintech & Payment Gateway'],
            'integrations' => ['Indian Acquirer Banks', 'UPI Gateway', 'Cards & NetBanking', 'PayOS API'],
            'case_study' => [
                'client' => 'Codeuth',
                'desc' => 'Codeuth wanted to operate as a payment aggregator without manual reconciliation eating up time every day. Lumetech built a two-role platform letting merchants choose between Payment Links, hosted Order Pages, or REST APIs with amount-based acquirer routing. Result: Codeuth merchants collect payments their way on one ledger.'
            ],
            'faq' => [
                ['q' => 'What merchant collection methods does PayOS support?', 'a' => 'PayOS supports Payment Links, hosted checkout Order Pages, and REST API integrations for direct custom web/mobile checkouts.']
            ]
        ],
        'finconnect' => [
            'id' => 11,
            'slug' => 'finconnect',
            'name' => 'FinConnect – Fintech Distributor',
            'category' => 'Fintech & Distribution',
            'badge' => 'Multi-Level Fintech Distributor Platform',
            'short_desc' => 'Multi-level fintech distributor platform turning retail counters into financial-service points — AEPS, DMT, BBPS on a single wallet.',
            'full_desc' => 'Turns local retail counters into full financial-service points — recharge, bill pay, AEPS, money transfer and more — all reconciled back to a single wallet per retailer, distributed across a 4-level distributor hierarchy.',
            'features' => [
                ['title' => '4-Level Distributor Hierarchy', 'desc' => 'Administrator, Master Distributor, Distributor & Retailer roles.'],
                ['title' => 'Single-Wallet Architecture', 'desc' => 'Single wallet across 10+ bundled financial services (Recharge, BBPS, AEPS, DMT, PAN).'],
                ['title' => 'Multi-Biometric AEPS Support', 'desc' => 'AEPS support for Mantra, Morpho, Startek and standard biometric devices.'],
                ['title' => 'Three DMT Variants', 'desc' => 'Standard Payout, Banking Correspondent, and Aadhaar e-KYC direct money transfer.'],
                ['title' => 'Aadhaar 2-Step Retailer Onboarding', 'desc' => 'Aadhaar-based 2-step retailer onboarding with a strict KYC approval gate.'],
                ['title' => 'Real-Time Commission Credit', 'desc' => 'Auto-calculated distributor margins credited instantly on every transaction.']
            ],
            'screenshots' => [
                'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&w=1000&q=80'
            ],
            'benefits' => [
                'Single-Wallet Architecture for 10+ Financial Services',
                '4-Level Hierarchy (Master, Dist, Retailer Management)',
                'Multi-Device AEPS Biometric Fingerprint Support',
                'Instant Commission Margin Distribution'
            ],
            'use_cases' => ['Fintech Agent Networks', 'Retail Merchant Service Points', 'Rural Banking Correspondent Chains'],
            'industries' => ['Fintech & Retail Financial Services'],
            'integrations' => ['AEPS Biometric Devices', 'BBPS Gateway', 'Banking APIs', 'PayOS'],
            'case_study' => [
                'client' => 'Saathipay',
                'desc' => 'Saathipay wanted to turn local retail counters into financial-service points without retailers needing separate logins or wallets per service. Lumetech built a 4-level distributor platform on a single-wallet architecture bundling recharge, BBPS, AEPS, DMT, and UPI under one login. Result: Saathipay retailers run an entire counter off a single wallet.'
            ],
            'faq' => [
                ['q' => 'What biometric hardware devices work with FinConnect AEPS?', 'a' => 'FinConnect AEPS supports standard biometric devices including Mantra, Morpho, Startek, and SecuGen for Aadhaar cash withdrawal and balance inquiry.']
            ]
        ]
    ];
}
