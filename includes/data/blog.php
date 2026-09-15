<?php
/**
 * Lumetech Blog Articles Data Registry
 */

function get_blog_data(): array {
    return [
        'zero-downtime-microservices' => [
            'slug' => 'zero-downtime-microservices',
            'title' => 'Zero-Downtime Microservice Deployment Strategies in High-Load PHP Systems',
            'author' => 'Alexander Wright',
            'role' => 'Principal Cloud Architect',
            'date' => 'Sep 04, 2026',
            'read_time' => '6 min read',
            'category' => 'Cloud & DevOps',
            'excerpt' => 'How blue-green deployments, database migration locks, and automated canary tests prevent outage risks during enterprise production updates.',
            'content' => '
                <p class="lum-lead">Deploying updates to enterprise applications processing thousands of requests per second requires meticulous architecture planning. A single unhandled schema migration or cache invalidation wave can trigger cascading database locks and system downtime.</p>

                <h2>1. Blue-Green Deployment Pattern</h2>
                <p>Blue-green deployment relies on maintaining two identical physical or virtual production environments. At any given moment, only one environment (e.g., Blue) is actively serving live domain traffic via the load balancer.</p>
                <p>When deploying a new version of the codebase:</p>
                <ul>
                    <li>The code is pushed exclusively to the Green environment.</li>
                    <li>Automated synthetic integration tests execute against Green.</li>
                    <li>Once health checks pass, the router or load balancer atomically switches traffic from Blue to Green.</li>
                </ul>

                <h2>2. Backward-Compatible Database Migrations</h2>
                <p>The trickiest aspect of zero-downtime deployments is database schema evolution. When modifying database columns or tables:</p>
                <ol>
                    <li><strong>Add columns cleanly:</strong> Never drop or rename columns in a single migration step. First add the new column and populate it via trigger or background worker.</li>
                    <li><strong>Dual writing:</strong> Update application logic to write to both old and new columns simultaneously.</li>
                    <li><strong>Deprecation phase:</strong> Once all app instances are running the updated code, safely drop the deprecated column in a separate follow-up deployment.</li>
                </ol>

                <h2>3. Automated Health Check Circuit Breakers</h2>
                <p>Connecting health endpoints (`/healthz`) to load balancers ensures bad releases are rolled back within seconds before end users experience degraded performance.</p>
            ',
            'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1000&q=80'
        ],
        'building-enterprise-rag-pipelines' => [
            'slug' => 'building-enterprise-rag-pipelines',
            'title' => 'Building Enterprise Knowledge RAG Pipelines with Vector DBs & Local LLMs',
            'author' => 'Dr. Maya Lin',
            'role' => 'Head of AI Engineering',
            'date' => 'Aug 28, 2026',
            'read_time' => '8 min read',
            'category' => 'AI & Automation',
            'excerpt' => 'Connecting vector databases with local open-weight LLMs to query confidential corporate document vaults without data leaks.',
            'content' => '
                <p class="lum-lead">Generative AI has shifted from public chatbot interfaces to deeply integrated enterprise knowledge search. Retrieval-Augmented Generation (RAG) empowers organizations to query internal PDFs, financial ledgers, and technical manuals securely.</p>

                <h2>1. Vector Embeddings and Chunking Strategy</h2>
                <p>Chunking unstructured enterprise documents is the foundational step in building an accurate RAG pipeline. Using semantic overlap chunking (500 tokens with 50-token overlap) ensures contextual continuity across boundaries.</p>

                <h2>2. Privacy-First Self-Hosted LLMs</h2>
                <p>For sensitive sectors like Banking and Healthcare, passing internal documentation to third-party public API endpoints violates data privacy compliance. Deploying quantized open-weight models (such as Llama 3 or Mistral) on dedicated GPU nodes guarantees complete data sovereignty.</p>
            ',
            'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1000&q=80'
        ],
        'pci-dss-compliance-guide' => [
            'slug' => 'pci-dss-compliance-guide',
            'title' => 'PCI-DSS 4.0 Compliance: Essential Engineering Rules for Payment Gateways',
            'author' => 'Marcus Vance',
            'role' => 'Chief Information Security Officer',
            'date' => 'Aug 15, 2026',
            'read_time' => '7 min read',
            'category' => 'Cybersecurity',
            'excerpt' => 'Key architectural changes in payment payload encryption, tokenized card storage, and continuous API payload monitoring.',
            'content' => '
                <p class="lum-lead">PCI-DSS version 4.0 shifts payment security from point-in-time compliance audits to continuous automated security validation.</p>

                <h2>1. Tokenization and Card Data Isolation</h2>
                <p>Never allow raw Primary Account Numbers (PAN) to touch web application servers. Modern payment gateways use client-side iframe tokenization so sensitive card details flow directly to PCI-Level-1 vaulted environments.</p>
            ',
            'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1000&q=80'
        ]
    ];
}
