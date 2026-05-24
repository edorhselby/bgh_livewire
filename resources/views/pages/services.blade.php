<x-layouts.app>
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
<main class="max-w-7xl mx-auto px-6 pt-12 pb-24">
<!-- Hero Section -->
<x-bgh-service-components.hero/>
<!-- 1. Makeup Services - Bento Grid Style -->
<x-bgh-service-components.bento-grid/>
<!-- 3. Bridal Suite - Horizontal Carousel -->
<x-bgh-service-components.bridal-package/>
<!-- 2. Hairstyling - Tonal Layering -->
<x-bgh-service-components.hair-style-package/>
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
<!-- BottomNavBar (Mobile Only) -->
<x-bgh-components.mobile-bottom-nav/>
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
</x-layouts.app>