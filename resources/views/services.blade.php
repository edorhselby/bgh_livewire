<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-error": "#ffffff",
                    "secondary-fixed-dim": "#debfc2",
                    "on-secondary-fixed-variant": "#574144",
                    "tertiary-fixed": "#e6e5b9",
                    "outline-variant": "#d0c5af",
                    "on-surface": "#1b1b1b",
                    "error": "#ba1a1a",
                    "surface-container": "#eeeeee",
                    "error-container": "#ffdad6",
                    "on-background": "#1b1b1b",
                    "secondary-container": "#f8d8db",
                    "surface": "#f9f9f9",
                    "on-primary-container": "#554300",
                    "on-tertiary-fixed": "#1d1d03",
                    "tertiary": "#60603e",
                    "on-tertiary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "tertiary-container": "#b6b58c",
                    "inverse-surface": "#303030",
                    "outline": "#7f7663",
                    "inverse-primary": "#e9c349",
                    "primary-container": "#d4af37",
                    "tertiary-fixed-dim": "#cac99f",
                    "surface-bright": "#f9f9f9",
                    "surface-tint": "#73500",
                    "surface-container-high": "#e8e8e8",
                    "secondary": "#70585b",
                    "surface-container-lowest": "#ffffff",
                    "primary-fixed-dim": "#e9c349",
                    "surface-variant": "#e2e2e2",
                    "on-secondary-container": "#755d5f",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed": "#281719",
                    "on-tertiary-container": "#474727",
                    "on-primary": "#ffffff",
                    "on-tertiary-fixed-variant": "#484828",
                    "surface-container-highest": "#e2e2e2",
                    "surface-container-low": "#f3f3f3",
                    "background": "#f9f9f9",
                    "on-primary-fixed-variant": "#574500",
                    "surface-dim": "#dadada",
                    "secondary-fixed": "#fbdbde",
                    "on-primary-fixed": "#241a00",
                    "primary-fixed": "#ffe088",
                    "on-surface-variant": "#4d4635",
                    "primary": "#735c00",
                    "inverse-on-surface": "#f1f1f1"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-md": "24px",
                    "stack-lg": "48px",
                    "unit": "4px",
                    "margin-edge": "40px",
                    "stack-sm": "12px",
                    "gutter": "24px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "headline-xl": ["Manrope"],
                    "label-sm": ["Manrope"],
                    "headline-lg": ["Manrope"],
                    "body-lg": ["Noto Serif"],
                    "body-md": ["Noto Serif"],
                    "headline-md": ["Manrope"],
                    "manrope": ["Manrope"]
            },
            "fontSize": {
                    "headline-xl": ["48px", {"lineHeight": "1.2", "letterSpacing": "0.04em", "fontWeight": "300"}],
                    "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "0.01em", "fontWeight": "500"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .tonal-layer {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(248, 216, 219, 0.2) 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.1);
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>
<body class="bg-background text-on-background font-body-md overflow-x-hidden">
<!-- TopAppBar -->
<header class="bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-md docked full-width top-0 sticky z-50 border-b border-yellow-200/30 dark:border-yellow-900/20 shadow-sm shadow-yellow-900/5">
<div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<button class="text-yellow-700 dark:text-yellow-500 hover:text-yellow-600 transition-colors duration-300 active:opacity-80">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
<h1 class="text-2xl font-light tracking-widest text-yellow-700 dark:text-yellow-500 uppercase font-manrope"><img alt="Bee's Glam Hub" class="h-12 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ADBb0uiJ-eg3Ask4iYljcLisLlmgAo1uCU6d1zxa_UCeEI0Y5QHHBeUVQ_aMuRdzmlhrplPxGSBGV1T16SKe0HKXNIYTdZN9ZSOSuvHTlU-i5hueESGzTKSmbQwyNAWEWQ36JgDQMXzTcxUQX_zZS5rODXhKkg0Gx36Hl2mVPeFWgAS21oNU51hZV7f2euDgPEsvOEY-5UaAbZCzKAwunrJ5KUAU8uVGwF6etcr83HxBGTXE_TADjZ42hpccdpR-_0H6qAwvzpQ9ZnPSJg"/></h1>
</div>
<nav class="hidden md:flex gap-8 font-manrope tracking-tight">
<a class="text-stone-500 dark:text-stone-400 hover:text-yellow-600 transition-colors duration-300" href="#">Home</a>
<a class="text-yellow-700 dark:text-yellow-500 border-b-2 border-yellow-700 dark:border-yellow-500 pb-1 hover:text-yellow-600 transition-colors duration-300" href="#">Services</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-yellow-600 transition-colors duration-300" href="#">Shop</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-yellow-600 transition-colors duration-300" href="#">Academy</a>
</nav>
<div class="flex items-center gap-4">
<button class="text-yellow-700 dark:text-yellow-500 hover:text-yellow-600 transition-colors duration-300 active:opacity-80">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
</button>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 pt-12 pb-24">
<!-- Hero Section -->
<section class="mb-stack-lg text-center max-w-3xl mx-auto">
<span class="font-body-lg italic text-primary mb-unit block">The Art of Ritual Beauty</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface mb-stack-md">Bespoke Beauty Experiences</h2>
<p class="font-body-lg text-on-surface-variant">Indulge in a curated selection of premium beauty services designed to elevate your natural glow and provide a moment of pure serenity.</p>
</section>
<!-- 1. Makeup Services - Bento Grid Style -->
<section class="mb-stack-lg">
<div class="flex items-center justify-between mb-stack-md border-b border-outline-variant pb-2">
<h3 class="font-headline-lg text-headline-lg text-primary flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="brush">brush</span> Makeup Artistry
                </h3>
<span class="font-label-sm text-secondary uppercase tracking-[0.2em]">Signature Finishes</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<div class="md:col-span-8 relative overflow-hidden rounded-xl aspect-[16/9] group">
<img alt="Soft Glam Portfolio" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7rHHpXrwJfP3H7Jmsjlnzy6CZsqzdnsmOtZrgEzw1CCoPNFnbq9Os9w0qWxgdn-9MNP3Ah-hDFYYvz5fTpHp66V9is3BgA--zlCZIh1Nw9rVrabHx2jNmYgkKtRuY4K2sAyNPOXD7yTIkEYJnFQM5nQBBUPuLpF9b138kfLRz3xCroQDALzJNk4M5zpLI5xBBMpoChg9ISIt1htZh5YxjXXXu9pLAs6EIjJBJq7y9tsJl2xb3p3fdDI6_nKhH8ETs2xWtb9xVIpM"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/80 to-transparent flex flex-col justify-end p-8">
<h4 class="font-headline-md text-headline-md text-surface mb-2">Signature Glam</h4>
<p class="text-surface-variant max-w-md font-body-md mb-6">Our renowned makeup application techniques that focus on longevity, skin texture, and enhancing your unique facial architecture.</p>
<button class="bg-primary-container text-on-primary-container px-8 py-3 font-label-sm uppercase tracking-widest rounded-full self-start hover:shadow-lg transition-all active:scale-95">Explore Artistry</button>
</div>
</div>
<div class="md:col-span-4 flex flex-col gap-gutter">
<div class="glass-card p-6 rounded-xl flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-2">Soft Glam</h4>
<p class="font-body-md text-on-surface-variant">A weightless, radiant look focusing on enhanced features and a flawless skin-like finish. Perfect for events and dinners.</p>
</div>
<button class="border border-primary text-primary px-6 py-2 font-label-sm uppercase tracking-widest mt-6 hover:bg-primary-container hover:text-on-primary-container transition-colors">Book Now</button>
</div>
<div class="glass-card p-6 rounded-xl flex-1 flex flex-col justify-between">
<div>
<h4 class="font-headline-md text-headline-md text-on-surface mb-2">Editorial/Photoshoot</h4>
<p class="font-body-md text-on-surface-variant">Creative, bold, or perfectly matte artistry optimized for professional lighting and high-resolution lenses.</p>
</div>
<button class="border border-primary text-primary px-6 py-2 font-label-sm uppercase tracking-widest mt-6 hover:bg-primary-container hover:text-on-primary-container transition-colors">Book Now</button>
</div>
</div>
</div>
</section>
<!-- 2. Hairstyling - Tonal Layering -->
<section class="mb-stack-lg p-stack-md bg-secondary-container/30 rounded-2xl">
<div class="flex items-center justify-between mb-stack-md border-b border-outline-variant/30 pb-2 px-4">
<h3 class="font-headline-lg text-headline-lg text-primary flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="styler">styler</span> Hair Sculpting
                </h3>
<span class="font-label-sm text-secondary uppercase tracking-[0.2em]">Luxury Crowns</span>
</div>
<div class="grid grid-cols-1 gap-gutter px-4 md:grid-cols-2">
<div class="flex flex-col gap-4">
<div class="aspect-[4/5] rounded-xl overflow-hidden shadow-sm">
<img alt="Wig Installation" class="w-full h-full object-cover" data-alt="Sophisticated wig installation on a beautiful model with silky texture and natural hairline in a minimalist studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_f2Hasw7j-W9X7FU0bAzeHWrmlHSNd6imGYAY_OSnmzYM7Sm986gRvUmBnNEA5BDXO03gxxEViY4njxXfTosyJX6g42q8DrgxE-WQ69Ql65mrt_R4yYPZRN6MlQNeknzqi3T88yMh6JGPoyDzmehrCEtc4cUIWRlkRukNNF3Bp6wmiXkkeuujs_R3AundJJjS6sJ9Zs4nJIEW5BjjfbQlHH4MorXAU1ti5Z_BZvK-aI5QecGfIjZ4sccGFIpeEUmh9FNsDsSqCHE"/>
</div>
<div class="py-4">
<h4 class="font-headline-md text-headline-md text-on-surface">Wig Installation</h4>
<p class="font-body-md text-on-surface-variant mt-2 mb-4">Meticulous frontal or closure installation with HD lace blending for a seamless, natural look.</p>
<button class="text-primary font-label-sm uppercase tracking-widest flex items-center gap-2 hover:translate-x-1 transition-transform">Book Now <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></button>
</div>
</div>
<div class="flex flex-col gap-4">
<div class="aspect-[4/5] rounded-xl overflow-hidden shadow-sm">
<img alt="Wig Revamp" class="w-full h-full object-cover" data-alt="Polished wig revamp process with styling tools and premium hair products on a white vanity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcflVGhrzLLcVnfLp64YO2RhsFARgdLkRaJG0ZQkrzdUSkVKNeI5CXysp5nH2bOFSUZyjtFrysGYo4Cw1ZFw6fXYdYgJXHDXN3OPTdCs91Zl9vnQaW72FyPEerwBnyAt9ot7Hh5KNIDJgOuJsp14HFpLyYMHrVK-uJvZDR_qWCMFHdzKq1lLnLiJekhawKo3w7c7RAutBxKLUHkpXoGYujEDok_NCQTWjFbSLj0OV1GztkAqbyWpQ-s08VvC5m9mqCrW_EB0BMmhM"/>
</div>
<div class="py-4">
<h4 class="font-headline-md text-headline-md text-on-surface">Wig Revamp</h4>
<p class="font-body-md text-on-surface-variant mt-2 mb-4">Restoration, deep conditioning, and restyling services to breathe new life into your favorite hairpieces.</p>
<button class="text-primary font-label-sm uppercase tracking-widest flex items-center gap-2 hover:translate-x-1 transition-transform">Book Now <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span></button>
</div>
</div>
</div>
</section>
<!-- 3. Bridal Suite - Horizontal Carousel -->
<section class="mb-stack-lg relative overflow-hidden" id="bridal-suite">
<div class="text-center mb-12">
<div class="flex items-center justify-center gap-3 mb-2">
<span class="h-px w-8 bg-primary/30"></span>
<h3 class="font-headline-lg text-headline-lg text-primary flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="favorite">favorite</span> The Bridal Suite
</h3>
<span class="h-px w-8 bg-primary/30"></span>
</div>
<p class="font-body-lg text-on-surface-variant italic">A curated symphony of services for the most beautiful chapter of your life.</p>
</div>
<div class="relative group">
<!-- Left Arrow -->
<button class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-surface/80 backdrop-blur-sm p-2 rounded-full border border-primary/20 text-primary hidden md:flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all shadow-md ml-4 active:scale-95" onclick="document.getElementById('bridal-carousel').scrollBy({left: -400, behavior: 'smooth'})">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<!-- Carousel Container -->
<div class="flex gap-8 overflow-x-auto snap-x snap-mandatory hide-scrollbar pb-8 px-4 md:px-12 scroll-smooth" id="bridal-carousel">
<!-- Package Card 1 -->
<div class="min-w-[320px] md:min-w-[400px] snap-center bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300 relative group overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
<span class="material-symbols-outlined text-6xl" data-icon="auto_awesome">auto_awesome</span>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2">BGH Tulip Bride</h4>
<p class="font-body-md text-on-surface-variant mb-6 italic">A timeless, luminous look designed for the bride who wants to glow from within.</p>
<div class="flex-grow">
<ul class="space-y-3 mb-8">
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Engagement makeup</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Wedding makeup &lpar; same day &rpar;</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free Consultation</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free trial session &lpar; can be used for the save the date shoot or bridal shower &rpar;</span>
</li>
</ul>
</div>
<div class="mt-auto pt-6 border-t border-outline-variant/20 flex flex-col gap-4">
<div class="flex items-baseline justify-between">
<span class="font-label-sm text-secondary uppercase tracking-widest">Price</span>
<span class="text-2xl font-headline-md text-primary">₵1800</span>
</div>
<button class="w-full bg-primary text-on-primary py-3 font-label-sm uppercase tracking-[0.2em] rounded-sm hover:brightness-110 transition-all shadow-sm">Enquire Now</button>
</div>
</div>
<!-- Package Card 2 (Empress Combo) -->
<div class="min-w-[320px] md:min-w-[400px] snap-center bg-secondary-container/10 border-2 border-primary/20 rounded-xl p-8 flex flex-col shadow-md relative overflow-hidden">
<div class="absolute top-0 left-0 bg-primary text-on-primary text-[10px] font-label-sm px-4 py-1 uppercase tracking-widest">Most Coveted</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2 mt-4">BGH LILY BRIDE</h4>
<p class="font-body-md text-on-surface-variant mb-6 italic">The ultimate luxury experience combining artistry and hair sculpting.</p>
<div class="flex-grow">
<ul class="space-y-3 mb-8">
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="auto_awesome">auto_awesome</span>
<span>Engagement makeup</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="auto_awesome">auto_awesome</span>
<span>White wedding makeup &lpar; different days &rpar;</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="auto_awesome">auto_awesome</span>
<span>Free consultation</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="auto_awesome">auto_awesome</span>
<span>Free trial session &lpar; can be used as save the date shoot or bridal shower &rpar;</span>
</li>
{{-- <li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="auto_awesome">auto_awesome</span>
<span>Bridal Touch-up Survival Kit</span>
</li> --}}
</ul>
</div>
<div class="mt-auto pt-6 border-t border-primary/10 flex flex-col gap-4">
<div class="flex items-baseline justify-between">
<span class="font-label-sm text-secondary uppercase tracking-widest">PRICE</span>
<span class="text-3xl font-headline-md text-primary">₵2800</span>
</div>
<button class="w-full bg-on-surface text-surface py-3 font-label-sm uppercase tracking-[0.2em] rounded-sm hover:bg-primary transition-all shadow-md">Book The Suite</button>
</div>
</div>
<!-- Package Card 3 -->
<div class="min-w-[320px] md:min-w-[400px] snap-center bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300 relative group overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
<span class="material-symbols-outlined text-6xl" data-icon="group">group</span>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2">BGH BOUJIE BRIDE</h4>
<p class="font-body-md text-on-surface-variant mb-6 italic">A coordinated, sophisticated glam session for your favorite people.</p>
<div class="flex-grow">
<ul class="space-y-3 mb-8">
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Engagement makeup &amp; hairstyling &lpar; same day &rpar;</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>White weddiing makeup &amp; hairstyling </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free construction of customized wig cap</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free Consultation</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free trial session &lpar; can be used as save the date shoot or bridal shower &rpar;</span>
</li>
</ul>
</div>
<div class="mt-auto pt-6 border-t border-outline-variant/20 flex flex-col gap-4">
<div class="flex items-baseline justify-between">
<span class="font-label-sm text-secondary uppercase tracking-widest">Investment</span>
<span class="text-2xl font-headline-md text-primary">₵3400<span class="text-xs text-on-surface-variant font-normal"></span></span>
</div>
<button class="w-full border border-primary text-primary py-3 font-label-sm uppercase tracking-[0.2em] rounded-sm hover:bg-primary-container hover:text-on-primary-container transition-all">Enquire Now</button>
</div>
</div>
<!-- Package Card 4 -->
<div class="min-w-[320px] md:min-w-[400px] snap-center bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300 relative group overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
<span class="material-symbols-outlined text-6xl" data-icon="group">group</span>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2">BGH HOLLY BRIDE</h4>
<p class="font-body-md text-on-surface-variant mb-6 italic">A coordinated, sophisticated glam session for your favorite people.</p>
<div class="flex-grow">
<ul class="space-y-3 mb-8">
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Engagement makeup &amp; hairstyling &lpar; Different days &rpar;</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>White weddiing makeup &amp; hairstyling </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free construction of customized wig cap</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free Consultation</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free trial session &lpar; can be used as save the date shoot or bridal shower &rpar;</span>
</li>
</ul>
</div>
<div class="mt-auto pt-6 border-t border-outline-variant/20 flex flex-col gap-4">
<div class="flex items-baseline justify-between">
<span class="font-label-sm text-secondary uppercase tracking-widest">PRICE</span>
<span class="text-2xl font-headline-md text-primary">₵4000<span class="text-xs text-on-surface-variant font-normal"></span></span>
</div>
<button class="w-full border border-primary text-primary py-3 font-label-sm uppercase tracking-[0.2em] rounded-sm hover:bg-primary-container hover:text-on-primary-container transition-all">Enquire Now</button>
</div>
</div>
<!-- Package Card 5 -->
<div class="min-w-[320px] md:min-w-[400px] snap-center bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300 relative group overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
<span class="material-symbols-outlined text-6xl" data-icon="group">group</span>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2">BGH EXTRAORDINAIRE BRIDE</h4>
<p class="font-body-md text-on-surface-variant mb-6 italic">A coordinated, sophisticated glam session for your favorite people.</p>
<div class="flex-grow">
<ul class="space-y-3 mb-8">
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Engagement makeup &amp; hairstyling  </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>White weddiing makeup &amp; hairstyling </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free construction of customized wig cap</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free Consultation</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free trial session &lpar; can be used as save the date shoot or bridal shower &rpar;</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Thanksgiving makeup </span>
</li>
</ul>
</div>
<div class="mt-auto pt-6 border-t border-outline-variant/20 flex flex-col gap-4">
<div class="flex items-baseline justify-between">
<span class="font-label-sm text-secondary uppercase tracking-widest">PRICE</span>
<span class="text-2xl font-headline-md text-primary">₵5000<span class="text-xs text-on-surface-variant font-normal"></span></span>
</div>
<button class="w-full border border-primary text-primary py-3 font-label-sm uppercase tracking-[0.2em] rounded-sm hover:bg-primary-container hover:text-on-primary-container transition-all">Enquire Now</button>
</div>
</div>
<!-- Package Card 6 -->
<div class="min-w-[320px] md:min-w-[400px] snap-center bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300 relative group overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
<span class="material-symbols-outlined text-6xl" data-icon="group">group</span>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2">BGH PREMIUM BRIDE</h4>
<p class="font-body-md text-on-surface-variant mb-6 italic">A coordinated, sophisticated glam session for your favorite people.</p>
<div class="flex-grow">
<ul class="space-y-3 mb-8">
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Engagement makeup &amp; hairstyling  </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>White weddiing makeup &amp; hairstyling </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free construction of customized wig cap</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Thanksgiving makeup &amp; hairstyling </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Court wedding makeup &amp; hairstyling </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Thanksgiving makeup </span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free Consultation</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Free trial session &lpar; can be used as save the date shoot or bridal shower &rpar;</span>
</li>
<li class="flex items-start gap-3 text-sm text-on-surface">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
<span>Freebies &lpar; gift for the bride &rpar; </span>
</li>
</ul>
</div>
<div class="mt-auto pt-6 border-t border-outline-variant/20 flex flex-col gap-4">
<div class="flex items-baseline justify-between">
<span class="font-label-sm text-secondary uppercase tracking-widest">PRICE</span>
<span class="text-2xl font-headline-md text-primary">₵6000<span class="text-xs text-on-surface-variant font-normal"></span></span>
</div>
<button class="w-full border border-primary text-primary py-3 font-label-sm uppercase tracking-[0.2em] rounded-sm hover:bg-primary-container hover:text-on-primary-container transition-all">Enquire Now</button>
</div>
</div>
</div>
<!-- Right Arrow -->
<button class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-surface/80 backdrop-blur-sm p-2 rounded-full border border-primary/20 text-primary hidden md:flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all shadow-md mr-4 active:scale-95" onclick="document.getElementById('bridal-carousel').scrollBy({left: 400, behavior: 'smooth'})">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>

<!-- Pagination Dots (Mobile) -->
<div class="flex justify-center gap-2 mt-6 md:hidden">
<div class="w-2 h-2 rounded-full bg-primary"></div>
<div class="w-2 h-2 rounded-full bg-primary/20"></div>
<div class="w-2 h-2 rounded-full bg-primary/20"></div>
</div>
<div class="mt-12 text-center">
<p class="text-sm font-manrope text-on-surface-variant mb-4">Planning a destination wedding or have a large party?</p>
<button class="text-primary font-label-sm uppercase tracking-widest border-b border-primary/30 hover:border-primary transition-all pb-1">Request a Custom Quote</button>
</div>
</section>
<!-- 4. Home/Outdoor Services -->
<section class="mb-stack-lg border border-primary/20 p-stack-lg rounded-3xl text-center relative overflow-hidden">
<div class="absolute inset-0 opacity-5 pointer-events-none">
<span class="material-symbols-outlined text-[300px]" data-icon="house">house</span>
</div>
<div class="relative z-10">
<h3 class="font-headline-lg text-headline-lg text-primary mb-stack-sm">Glamour Beyond the Studio</h3>
<p class="font-body-lg text-on-surface-variant max-w-2xl mx-auto mb-stack-md">We bring the sanctuary of Bee’s Glam Hub to your doorstep. Experience premium beauty in the comfort of your home, hotel, or venue.</p>
<div class="flex flex-wrap justify-center gap-stack-md mb-stack-md">
<div class="flex flex-col items-center p-4 min-w-[160px]">
<span class="material-symbols-outlined text-primary text-4xl mb-2" data-icon="distance">distance</span>
<h6 class="font-label-sm uppercase tracking-wider">Travel Area</h6>
<p class="text-xs text-on-surface-variant">Up to 50 miles from city center</p>
</div>
<div class="flex flex-col items-center p-4 min-w-[160px]">
<span class="material-symbols-outlined text-primary text-4xl mb-2" data-icon="event_available">event_available</span>
<h6 class="font-label-sm uppercase tracking-wider">Flexible Hours</h6>
<p class="text-xs text-on-surface-variant">Available for early morning calls</p>
</div>
<div class="flex flex-col items-center p-4 min-w-[160px]">
<span class="material-symbols-outlined text-primary text-4xl mb-2" data-icon="card_membership">card_membership</span>
<h6 class="font-label-sm uppercase tracking-wider">Premium Kit</h6>
<p class="text-xs text-on-surface-variant">Professional mobile setup</p>
</div>
</div>
<div class="bg-surface p-6 rounded-xl max-w-lg mx-auto border border-outline-variant shadow-inner">
<p class="text-sm italic text-on-surface-variant mb-4">"A travel fee applies based on location. Please provide your destination during the booking process for an accurate quote."</p>
<button class="bg-on-surface text-surface px-8 py-3 font-label-sm uppercase tracking-widest rounded-full hover:bg-primary transition-colors">Request Concierge Service</button>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-stone-100 dark:bg-stone-950 full-width mt-12 border-t border-stone-200 dark:border-stone-800 flat no shadows">
<div class="w-full py-12 px-6 flex flex-col items-center text-center max-w-7xl mx-auto">
<h2 class="text-xl font-medium text-yellow-700 dark:text-yellow-600 mb-4 font-manrope">Bee’s Glam Hub</h2>
<div class="flex flex-wrap justify-center gap-6 mb-8 font-manrope text-sm leading-relaxed">
<a class="text-stone-600 dark:text-stone-400 hover:text-yellow-600 dark:hover:text-yellow-400 transition-colors" href="#">Privacy Policy</a>
<a class="text-stone-600 dark:text-stone-400 hover:text-yellow-600 dark:hover:text-yellow-400 transition-colors" href="#">Terms of Service</a>
<a class="text-stone-600 dark:text-stone-400 hover:text-yellow-600 dark:hover:text-yellow-400 transition-colors" href="#">Shipping &amp; Returns</a>
<a class="text-stone-600 dark:text-stone-400 hover:text-yellow-600 dark:hover:text-yellow-400 transition-colors" href="#">Contact Us</a>
</div>
<p class="text-stone-500 dark:text-stone-500 text-xs font-manrope">© 2024 Bee’s Glam Hub. The Art of Ritual Beauty.</p>
</div>
</footer>
<!-- BottomNavBar (Mobile Only) -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 px-4 md:hidden bg-stone-50 dark:bg-stone-900 border-t border-yellow-100 dark:border-yellow-900/30 shadow-[0_-4px_12px_rgba(212,175,55,0.08)] rounded-t-lg">
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 hover:bg-stone-100 dark:hover:bg-stone-800 transition-all active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="text-[10px] font-manrope font-medium uppercase tracking-tighter">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-yellow-700 dark:text-yellow-500 scale-105 transition-transform hover:bg-stone-100 dark:hover:bg-stone-800 transition-all active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="content_cut">content_cut</span>
<span class="text-[10px] font-manrope font-medium uppercase tracking-tighter">Services</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 hover:bg-stone-100 dark:hover:bg-stone-800 transition-all active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="styler">styler</span>
<span class="text-[10px] font-manrope font-medium uppercase tracking-tighter">Shop</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 hover:bg-stone-100 dark:hover:bg-stone-800 transition-all active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="school">school</span>
<span class="text-[10px] font-manrope font-medium uppercase tracking-tighter">Academy</span>
</a>
</nav>
<script>
    const carousel = document.getElementById('bridal-carousel');
    const dots = document.querySelectorAll('#bridal-suite .w-2.h-2');
    
    carousel.addEventListener('scroll', () => {
        const index = Math.round(carousel.scrollLeft / carousel.offsetWidth);
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-primary', i === index);
            dot.classList.toggle('bg-primary/20', i !== index);
        });
    });
</script>
</body></html>