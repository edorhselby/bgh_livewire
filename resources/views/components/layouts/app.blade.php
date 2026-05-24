
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bee’s Glam Hub | The Art of Ritual Beauty</title>
<link rel="icon" href="/BGH-logo.ico" sizes="any">
 <link rel="icon" href="/BGH-wlogo.svg" type="image/svg+xml">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "surface-tint": "#735c00",
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
                        "headline-xl": ["manrope"],
                        "label-sm": ["manrope"],
                        "headline-lg": ["manrope"],
                        "body-lg": ["notoSerif"],
                        "body-md": ["notoSerif"],
                        "headline-md": ["manrope"],
                        "manrope": ["manrope"],
                        "notoSerif": ["Noto Serif"]
                    },
                    "fontSize": {
                        "headline-xl": ["48px", {"lineHeight": "1.2", "letterSpacing": "0.04em", "fontWeight": "300"}],
                        "label-sm": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "0.02em", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "letterSpacing": "0.01em", "fontWeight": "500"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .ethereal-blur {
            backdrop-filter: blur(12px);
            background: rgba(249, 249, 249, 0.85);
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
<x-bgh-components.navbar/>
<main>
<!-- Home -->
 {{ $slot }}  
</main>
<x-bgh-components.mobile-bottom-nav/>
<!-- Footer -->
<x-bgh-components.footer/>
</body></html> 