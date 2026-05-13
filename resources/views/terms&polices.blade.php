<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "outline": "#7f7663",
                    "tertiary-fixed": "#e6e5b9",
                    "surface-container-high": "#e8e8e8",
                    "surface-tint": "#735c00",
                    "tertiary-container": "#b6b58c",
                    "surface-variant": "#e2e2e2",
                    "on-primary": "#ffffff",
                    "tertiary-fixed-dim": "#cac99f",
                    "tertiary": "#60603e",
                    "secondary-fixed": "#fbdbde",
                    "on-secondary": "#ffffff",
                    "on-background": "#1b1b1b",
                    "primary-fixed": "#ffe088",
                    "surface-container-highest": "#e2e2e2",
                    "on-primary-container": "#554300",
                    "inverse-surface": "#303030",
                    "surface-bright": "#f9f9f9",
                    "primary": "#735c00",
                    "on-primary-fixed": "#241a00",
                    "surface": "#f9f9f9",
                    "outline-variant": "#d0c5af",
                    "on-tertiary": "#ffffff",
                    "on-surface-variant": "#4d4635",
                    "primary-container": "#d4af37",
                    "on-tertiary-container": "#474727",
                    "secondary-container": "#f8d8db",
                    "on-primary-fixed-variant": "#574500",
                    "on-surface": "#1b1b1b",
                    "background": "#f9f9f9",
                    "on-secondary-fixed-variant": "#574144",
                    "error-container": "#ffdad6",
                    "on-tertiary-fixed-variant": "#484828",
                    "error": "#ba1a1a",
                    "surface-container-low": "#f3f3f3",
                    "on-error": "#ffffff",
                    "secondary": "#70585b",
                    "surface-container-lowest": "#ffffff",
                    "surface-container": "#eeeeee",
                    "on-secondary-fixed": "#281719",
                    "inverse-primary": "#e9c349",
                    "secondary-fixed-dim": "#debfc2",
                    "on-secondary-container": "#755d5f",
                    "inverse-on-surface": "#f1f1f1",
                    "on-tertiary-fixed": "#1d1d03",
                    "on-error-container": "#93000a",
                    "surface-dim": "#dadada",
                    "primary-fixed-dim": "#e9c349"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-md": "24px",
                    "container-max": "1280px",
                    "unit": "4px",
                    "margin-edge": "40px",
                    "stack-lg": "48px",
                    "stack-sm": "12px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "headline-md": ["Manrope", "sans-serif"],
                    "body-md": ["Noto Serif", "serif"],
                    "body-lg": ["Noto Serif", "serif"],
                    "label-sm": ["Manrope", "sans-serif"],
                    "headline-xl": ["Manrope", "sans-serif"],
                    "headline-lg": ["Manrope", "sans-serif"]
            },
            "fontSize": {
                    "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "1.2", "letterSpacing": "0.04em", "fontWeight": "300"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "0.02em", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #d4af37;
            border-radius: 10px;
        }
        .modal-blur-overlay {
            backdrop-filter: blur(8px);
            background-color: rgba(27, 27, 27, 0.4);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container" id="myModal">
<!-- Background Content (Simulating the App State) -->
<header class="bg-stone-50/80 backdrop-blur-md sticky top-0 z-40 border-b border-yellow-200/30 shadow-sm shadow-yellow-900/5">
<div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-yellow-700" data-icon="menu">menu</span>
<h1 class="text-2xl font-light tracking-widest text-yellow-700 uppercase font-headline-md">Bee’s Glam Hub</h1>
</div>
<div class="flex items-center gap-6">
<span class="material-symbols-outlined text-yellow-700" data-icon="shopping_bag">shopping_bag</span>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-margin-edge py-stack-lg">
<div class="grid grid-cols-12 gap-gutter">
<div class="col-span-12 md:col-span-8 space-y-stack-md">
<div class="aspect-video w-full bg-surface-container overflow-hidden rounded-lg">
<img alt="Salon Interior" class="w-full h-full object-cover grayscale-[0.2]" data-alt="A serene and impeccably polished high-end boutique spa interior. The room features a soft cream and gold color palette with minimalist furniture and warm, ambient lighting. Large arched windows let in diffused sunlight, highlighting the premium marble surfaces and gold accents. The atmosphere is quiet, luxurious, and ethereal." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBefgzA3nDCEQdZv1DTG0gKYKHKRD-vf6zKGfSYq_KbaFoTEqOBJiEOXrxJiORWJhD-G8djC8-yEinnr-Z7LPTMtrnzcZy1wmY7VbWTxBKKpTxRS4u_J2joWAkWBP4Xim2l71iJA8LaAKi2wA3ssXynEO0rAY1D0p1onaiUbrwrIOjGIJnWbvo_MWzn0YoVkzbA2Mjcopto4iLuc0-DDOyNaWvMwoXwUwU84QcQek1rVsU67pA3C4UbI87lxRYP4XPJlJelg4qMJHY"/>
</div>
<h2 class="font-headline-xl text-primary">The Art of Ritual</h2>
<p class="font-body-lg text-on-surface-variant max-w-2xl">Step into a world where beauty is treated as a sacred ritual. Our hub provides the finest curated experiences for the modern soul.</p>
</div>
<div class="col-span-12 md:col-span-4 space-y-gutter">
<div class="p-stack-md border border-outline-variant bg-surface-bright rounded-lg shadow-sm shadow-yellow-900/5">
<h3 class="font-headline-md text-primary mb-4">Book Your Experience</h3>
<div class="space-y-4">
<div class="h-10 border-b border-outline-variant flex items-center text-on-surface-variant font-label-sm">SELECT SERVICE</div>
<div class="h-10 border-b border-outline-variant flex items-center text-on-surface-variant font-label-sm">CHOOSE DATE</div>
<button class="w-full py-4 bg-primary-container text-on-primary-container font-label-sm tracking-widest hover:opacity-90 transition-opacity">CONFIRM BOOKING</button>
</div>
</div>
</div>
</div>
</main>
<!-- Modal Overlay -->
<div class="fixed inset-0 z-50 flex items-center justify-center p-4 md:p-8 modal-blur-overlay">
<!-- Modal Window -->
<div class="bg-surface-container-lowest w-full max-w-2xl max-h-[870px] flex flex-col rounded-xl border border-outline-variant shadow-[0_20px_50px_rgba(115,92,0,0.12)] overflow-hidden">
<!-- Modal Header -->
<div class="px-8 py-6 border-b border-outline-variant flex justify-between items-center bg-surface-bright">
<div>
<h2 class="font-headline-md text-primary tracking-tight">Terms of Service</h2>
<p class="font-label-sm text-outline mt-1 uppercase">Last updated: June 2024</p>
</div>
<button class="w-10 h-10 rounded-full flex items-center justify-center hover:bg-surface-container transition-colors text-outline">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto px-8 py-10 space-y-stack-md custom-scrollbar bg-surface-container-lowest">
<section>
<h3 class="font-headline-md text-primary-fixed-dim italic mb-4 font-body-md">1. Introduction</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                        Welcome to Bee’s Glam Hub. By accessing our services, academy, or online store, you agree to be bound by the following terms and conditions. These terms govern your use of our physical locations and digital platforms, ensuring a premium and safe experience for all our patrons.
                    </p>
</section>
<section class="p-6 bg-secondary-container/30 border border-secondary-container rounded-lg">
<h3 class="font-headline-md text-secondary mb-4 font-body-md">2. Services &amp; Consultations</h3>
<p class="font-body-md text-on-secondary-container leading-relaxed">
                        Our services are tailored to individual needs. We require a mandatory consultation for first-time ritual bookings. Bee’s Glam Hub reserves the right to refuse service if health contraindications are present that might compromise your safety or our professional standards.
                    </p>
</section>
<section>
<h3 class="font-headline-md text-primary-fixed-dim italic mb-4 font-body-md">3. Payments &amp; Fees</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                        All prices are listed in local currency and are inclusive of relevant taxes. A non-refundable deposit of 30% is required to secure any high-tier service booking or academy enrollment. We accept all major credit cards and premium digital payment methods.
                    </p>
</section>
<section>
<h3 class="font-headline-md text-primary-fixed-dim italic mb-4 font-body-md">4. Cancellations &amp; Rescheduling</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                        To respect the time of our artisans, we require at least 48 hours' notice for cancellations. Late cancellations or no-shows will result in the forfeiture of the deposit. Rescheduling is permitted once per booking, provided the 48-hour window is respected.
                    </p>
</section>
<section class="border-t border-outline-variant pt-stack-md">
<h3 class="font-headline-md text-primary-fixed-dim italic mb-4 font-body-md">5. Intellectual Property</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">
                        All educational materials, techniques, and brand imagery associated with Bee’s Glam Academy are the exclusive property of Bee’s Glam Hub. Unauthorized reproduction or commercial use of our proprietary rituals is strictly prohibited.
                    </p>
</section>
<div class="flex items-start gap-4 p-4 rounded-lg bg-surface-container-high/50">
<span class="material-symbols-outlined text-primary mt-1" data-icon="info" data-weight="fill" style="font-variation-settings: 'FILL' 1;">info</span>
<p class="font-label-sm text-on-surface-variant uppercase leading-tight tracking-wide">
                        By continuing to use our site, you acknowledge that you have read and understood our Privacy Policy regarding the handling of your personal data.
                    </p>
</div>
</div>
<!-- Modal Footer Actions -->
<div class="px-8 py-6 border-t border-outline-variant bg-surface-bright flex flex-col sm:flex-row gap-4 items-center justify-between">
<button class="font-label-sm text-outline hover:text-primary transition-colors underline underline-offset-4 uppercase order-2 sm:order-1">
                    Print Version
                </button>
<div class="flex gap-3 w-full sm:w-auto order-1 sm:order-2">
<button class="flex-1 sm:flex-none px-8 py-3 border border-outline text-on-surface font-label-sm tracking-widest hover:bg-surface-container transition-all uppercase">
                        Decline
                    </button>
<button class="flex-1 sm:flex-none px-8 py-3 bg-primary-container text-on-primary-container font-label-sm tracking-widest shadow-md shadow-yellow-900/10 hover:opacity-90 transition-all uppercase">
                        I Accept
                    </button>
</div>
</div>
</div>
</div>
<!-- Footer -->
<footer class="w-full py-12 px-6 flex flex-col items-center text-center max-w-7xl mx-auto mt-12 border-t border-stone-200">
<div class="text-xl font-medium text-yellow-700 mb-4 font-headline-md">Bee’s Glam Hub</div>
<div class="flex flex-wrap justify-center gap-6 mb-8">
<a class="text-stone-600 font-manrope text-sm hover:text-yellow-600 transition-colors" href="#">Privacy Policy</a>
<a class="text-yellow-700 underline underline-offset-4 font-manrope text-sm" href="#">Terms of Service</a>
<a class="text-stone-600 font-manrope text-sm hover:text-yellow-600 transition-colors" href="#">Shipping &amp; Returns</a>
<a class="text-stone-600 font-manrope text-sm hover:text-yellow-600 transition-colors" href="#">Contact Us</a>
</div>
<p class="text-stone-600 font-manrope text-sm leading-relaxed">© 2024 Bee’s Glam Hub. The Art of Ritual Beauty.</p>
</footer>
<script>
    const modal = document.getElementById("myModal");
    const btn = document.getElementById("openBtn");
    const closeBtn = document.querySelector(".material-symbols-outlined")

    btn.onclick =()=> modal.style.display = "block";
    closeBtn.onclick =()=> modal.style.display = "none";
    window.onclick = (event) => {
        if (event.target == modal ) modal.style.display = "none";
    } 

</script>    
</body></html>