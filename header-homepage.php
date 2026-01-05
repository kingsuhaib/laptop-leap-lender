<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://www.google.com" crossorigin />
	
	<!-- Tailwind CSS CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
    tailwind.config = {
      important: true, // Force all Tailwind utilities to be !important
      darkMode: ["class"],
      theme: {
		container: {
			center: true,
			padding: "2rem",
			screens: {
				"2xl": "1400px",
			},
		},
        extend: {
		  fontFamily: {
			sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
		  },
          colors: {
            border: "hsl(var(--border))",
            input: "hsl(var(--input))",
            ring: "hsl(var(--ring))",
            background: "hsl(var(--background))",
            foreground: "hsl(var(--foreground))",
            primary: {
              DEFAULT: "hsl(var(--primary))",
              foreground: "hsl(var(--primary-foreground))",
            },
            secondary: {
              DEFAULT: "hsl(var(--secondary))",
              foreground: "hsl(var(--secondary-foreground))",
            },
            destructive: {
              DEFAULT: "hsl(var(--destructive))",
              foreground: "hsl(var(--destructive-foreground))",
            },
            muted: {
              DEFAULT: "hsl(var(--muted))",
              foreground: "hsl(var(--muted-foreground))",
            },
            accent: {
              DEFAULT: "hsl(var(--accent))",
              foreground: "hsl(var(--accent-foreground))",
            },
            popover: {
              DEFAULT: "hsl(var(--popover))",
              foreground: "hsl(var(--popover-foreground))",
            },
            card: {
              DEFAULT: "hsl(var(--card))",
              foreground: "hsl(var(--card-foreground))",
            },
          },
		  borderRadius: {
			lg: "var(--radius)",
			md: "calc(var(--radius) - 2px)",
			sm: "calc(var(--radius) - 4px)",
		  },
		  keyframes: {
			"accordion-down": {
			  from: { height: "0" },
			  to: { height: "var(--radix-accordion-content-height)" },
			},
			"accordion-up": {
			  from: { height: "var(--radix-accordion-content-height)" },
			  to: { height: "0" },
			},
			"float": {
			  "0%, 100%": { transform: "translateY(0px)" },
			  "50%": { transform: "translateY(-10px)" },
			},
			"glow": {
			  "0%, 100%": { opacity: "0.5" },
			  "50%": { opacity: "1" },
			},
		  },
		  animation: {
			"accordion-down": "accordion-down 0.2s ease-out",
			"accordion-up": "accordion-up 0.2s ease-out",
			"float": "float 3s ease-in-out infinite",
			"glow": "glow 2s ease-in-out infinite",
		  },
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    /* Global Overrides for Astra */
    @layer base {
      :root {
        --background: 220 20% 6% !important;
        --foreground: 0 0% 98% !important;

        --card: 220 18% 10% !important;
        --card-foreground: 0 0% 98% !important;

        --popover: 220 18% 10% !important;
        --popover-foreground: 0 0% 98% !important;

        --primary: 174 100% 45% !important;
        --primary-foreground: 0 0% 2% !important;

        --secondary: 270 70% 55% !important;
        --secondary-foreground: 0 0% 98% !important;

        --muted: 220 15% 18% !important;
        --muted-foreground: 220 10% 60% !important;

        --accent: 45 100% 55% !important;
        --accent-foreground: 0 0% 2% !important;

        --destructive: 0 84.2% 60.2% !important;
        --destructive-foreground: 210 40% 98% !important;

        --border: 220 15% 18% !important;
        --input: 220 15% 18% !important;
        --ring: 174 100% 45% !important;

        --radius: 0.75rem !important;

        /* Custom Design Tokens */
        --gradient-primary: linear-gradient(135deg, hsl(174, 100% 45%) 0%, hsl(174, 90% 35%) 100%) !important;
        --gradient-hero: linear-gradient(135deg, hsl(220, 60% 25%) 0%, hsl(250, 50% 20%) 50%, hsl(280, 60% 25%) 100%) !important;
        --gradient-card: linear-gradient(180deg, hsl(220, 18% 12%) 0%, hsl(220, 18% 8%) 100%) !important;
        --shadow-glow: 0 0 40px hsl(174 100% 45% / 0.3) !important;
        --shadow-card: 0 8px 32px hsl(0 0% 0% / 0.3) !important;
      }
      
      html, body {
        @apply bg-background text-foreground font-sans antialiased;
        background-color: hsl(220, 20%, 6%) !important;
        color: hsl(0, 0%, 98%) !important;
        font-family: 'Plus Jakarta Sans', sans-serif !important;
      }

      h1, h2, h3, h4, h5, h6 {
         color: inherit !important;
         font-family: inherit !important;
      }
      
      p, span, div, li, a {
         color: inherit;
      }

      /* Override Astra Header/Footer if leaked */
      .site-header, .site-footer {
         background: transparent !important;
         color: inherit !important;
      }
    }
    
    @layer utilities {
      .gradient-primary {
        background: var(--gradient-primary);
      }
      .gradient-card {
        background: var(--gradient-card);
      }
      .shadow-glow {
        box-shadow: var(--shadow-glow);
      }
      .shadow-card {
        box-shadow: var(--shadow-card);
      }
      .text-gradient {
        @apply bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary;
      }
      .hero-gradient {
        background: linear-gradient(135deg, hsl(220, 60%, 25%) 0%, hsl(250, 50%, 20%) 50%, hsl(280, 60%, 25%) 100%);
      }
    }

    @layer components {
        .fade-up {
            animation: fadeUp 0.6s ease-out forwards;
            opacity: 0;
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
    }
  </style>

	<?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen bg-background font-sans antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="fixed top-0 left-0 right-0 z-50 bg-background/95 backdrop-blur-xl border-b border-border">
	<div class="container mx-auto px-4">
	<div class="flex items-center justify-between h-16 md:h-20">
		<!-- Logo -->
		<a href="<?php echo home_url(); ?>" class="flex items-center gap-3">
		<img 
			src="https://pakistanbusiness.biz/wp-content/uploads/2023/11/Logo-1-white-bg-120x120.png" 
			alt="Pakistan Business Logo - Best Used Laptops in Pakistan"
			class="w-10 h-10 md:w-12 md:h-12 rounded-lg"
			width="48"
			height="48"
		/>
		<div class="hidden sm:block">
			<span class="text-foreground font-bold text-lg">Pakistan Business</span>
			<p class="text-muted-foreground text-xs">Connecting Tomorrow</p>
		</div>
		</a>

		<!-- Navigation - Desktop -->
		<nav class="hidden lg:flex items-center gap-6">
		<a href="<?php echo home_url(); ?>" class="text-muted-foreground hover:text-primary transition-colors text-sm font-medium">Home</a>
		<a href="<?php echo home_url('/shop/'); ?>" class="text-muted-foreground hover:text-primary transition-colors text-sm font-medium">Laptops</a>
		<a href="<?php echo home_url('/buying-guide'); ?>" class="text-muted-foreground hover:text-primary transition-colors text-sm font-medium">Buying Guide</a>
		<a href="<?php echo home_url('/faq'); ?>" class="text-muted-foreground hover:text-primary transition-colors text-sm font-medium">FAQ</a>
		<a href="<?php echo home_url('/contact'); ?>" class="text-muted-foreground hover:text-primary transition-colors text-sm font-medium">Contact</a>
		</nav>

		<!-- Right Side Actions -->
		<div class="flex items-center gap-2 md:gap-4">
		<!-- Contact Info - Desktop -->
		<a href="tel:+923101010001" class="hidden xl:flex items-center gap-2 text-muted-foreground hover:text-primary transition-colors text-sm">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
			<span>0310-1010001</span>
		</a>

		<!-- Cart Icon -->
		<a href="<?php echo wc_get_cart_url(); ?>" class="hidden md:flex items-center gap-1 text-muted-foreground hover:text-primary transition-colors">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
			<span class="text-xs">Cart</span>
		</a>

		<!-- CTA Button -->
		<a href="https://wa.me/923101010001" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-[#25D366] text-white hover:bg-[#25D366]/90 h-9 px-3 gap-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
			<span>WhatsApp</span>
		</a>

		<!-- Mobile Menu Toggle (Simplified) -->
		<button class="lg:hidden p-2 text-muted-foreground hover:text-primary">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
		</button>
		</div>
	</div>
	</div>
</header>
<main>
