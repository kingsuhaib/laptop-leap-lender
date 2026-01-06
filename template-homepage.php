<?php
/* Template Name: Custom Homepage */

get_header('homepage');
?>

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center pt-20 overflow-hidden bg-background">
      <!-- Background Pattern (SVG) -->
      <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23000000%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')] opacity-30"></div>

      <div class="container mx-auto px-4 py-12 md:py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Content -->
          <div class="space-y-6 text-center lg:text-left">
            <p class="text-foreground/90 text-lg md:text-xl font-medium">
              Laptops & Accessories
            </p>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-foreground">
              MAKE YOUR
              <span class="block text-primary">WALLET HAPPY</span>
            </h1>

            <p class="text-lg md:text-xl text-muted-foreground max-w-xl mx-auto lg:mx-0">
              Second-Hand, First-Class: Laptops that Perform Like New, for Less.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
              <a href="https://wa.me/923101010001" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary text-primary-foreground hover:bg-primary/90 h-11 px-8 rounded-md">
                  Chat Now
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 lucide lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
              </a>
              <a href="<?php echo home_url('/shop'); ?>" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background border border-input hover:bg-accent hover:text-accent-foreground h-11 px-8 rounded-md">
                  Shop Now
              </a>
            </div>

            <!-- Trust Badges (Mini) -->
            <div class="grid grid-cols-3 gap-4 pt-8 border-t border-border/20">
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary mx-auto mb-2 lucide lucide-shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                <p class="text-xs text-muted-foreground">Warranty Included</p>
              </div>
              <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary mx-auto mb-2 lucide lucide-truck"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
                <p class="text-xs text-muted-foreground">Pakistan Delivery</p>
              </div>
              <div class="text-center">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-primary mx-auto mb-2 lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                <p class="text-xs text-muted-foreground">Digital Payments</p>
              </div>
            </div>
          </div>

          <!-- Hero Image -->
          <div class="relative">
            <div class="relative z-10 max-w-lg mx-auto">
              <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/media/hero-banner.jpg"
                  alt="Premium Used Laptops Collection"
                  class="w-full h-auto"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
              </div>
              
              <!-- Floating Badges -->
              <div class="absolute top-4 right-4 bg-primary rounded-full px-4 py-2 shadow-lg animate-[float_3s_ease-in-out_infinite]">
                <span class="text-xs font-bold text-primary-foreground">BAG</span>
              </div>
              
              <div class="absolute top-1/3 right-0 bg-primary rounded-full px-4 py-2 shadow-lg animate-[float_3s_ease-in-out_infinite]" style="animation-delay: 0.5s;">
                <span class="text-xs font-bold text-primary-foreground">SSD</span>
              </div>
              
              <div class="absolute bottom-1/4 right-8 bg-primary rounded-full px-4 py-2 shadow-lg animate-[float_3s_ease-in-out_infinite]" style="animation-delay: 1s;">
                <span class="text-xs font-bold text-primary-foreground">RAM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trust Badges Section -->
    <section class="py-8 bg-card border-y border-border">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
            <!-- Badges Loop - Static for now as icons are complex to dynamic -->
            <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-muted/50 transition-colors">
                 <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
                 </div>
                 <span class="font-semibold text-sm text-foreground mb-1 block">15 Days Warranty</span>
                 <p class="text-xs text-muted-foreground">Full check warranty</p>
            </div>
             <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-muted/50 transition-colors">
                 <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/></svg>
                 </div>
                 <span class="font-semibold text-sm text-foreground mb-1 block">3 Days Exchange</span>
                 <p class="text-xs text-muted-foreground">Easy exchange policy</p>
            </div>
             <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-muted/50 transition-colors">
                 <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"/><path d="M15 18H9"/><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"/><circle cx="17" cy="18" r="2"/><circle cx="7" cy="18" r="2"/></svg>
                 </div>
                 <span class="font-semibold text-sm text-foreground mb-1 block">Nationwide Delivery</span>
                 <p class="text-xs text-muted-foreground">Free shipping across Pakistan</p>
            </div>
             <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-muted/50 transition-colors">
                 <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                 </div>
                 <span class="font-semibold text-sm text-foreground mb-1 block">EMI Available</span>
                 <p class="text-xs text-muted-foreground">Installments via Credit Card</p>
            </div>
             <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-muted/50 transition-colors">
                 <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                 </div>
                 <span class="font-semibold text-sm text-foreground mb-1 block">Verified Quality</span>
                 <p class="text-xs text-muted-foreground">All laptops tested & certified</p>
            </div>
             <div class="flex flex-col items-center text-center p-4 rounded-xl hover:bg-muted/50 transition-colors">
                 <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-3 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                 </div>
                 <span class="font-semibold text-sm text-foreground mb-1 block">6 Months Exchange</span>
                 <p class="text-xs text-muted-foreground">Extended exchange policy</p>
            </div>
        </div>
      </div>
    </section>

    <!-- Counter Stats Section -->
    <section class="py-10 bg-gradient-to-r from-primary/10 via-primary/5 to-accent/10 border-y border-border">
      <div class="container mx-auto px-4">
        <div class="text-center mb-8">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Trusted by <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Thousands</span> Across Pakistan
          </h2>
          <p class="text-muted-foreground max-w-2xl mx-auto">
            Numbers that speak for our commitment to quality and customer satisfaction
          </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
           <!-- Stat 1 -->
           <div class="text-center p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-all hover:-translate-y-1 group">
              <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-primary w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="text-3xl md:text-4xl font-bold text-foreground mb-1">5,000+</div>
              <div class="font-semibold text-foreground text-sm mb-1">Happy Customers</div>
              <p class="text-xs text-muted-foreground">Satisfied buyers across Pakistan</p>
           </div>
           <!-- Stat 2 -->
           <div class="text-center p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-all hover:-translate-y-1 group">
              <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-primary w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"/></svg>
              </div>
              <div class="text-3xl md:text-4xl font-bold text-foreground mb-1">10,000+</div>
              <div class="font-semibold text-foreground text-sm mb-1">Laptops Sold</div>
              <p class="text-xs text-muted-foreground">Premium quality laptops delivered</p>
           </div>
           <!-- Stat 3 -->
           <div class="text-center p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-all hover:-translate-y-1 group">
              <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-primary w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <div class="text-3xl md:text-4xl font-bold text-foreground mb-1">4.9</div>
              <div class="font-semibold text-foreground text-sm mb-1">Google Rating</div>
              <p class="text-xs text-muted-foreground">Based on verified reviews</p>
           </div>
           <!-- Stat 4 -->
           <div class="text-center p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-all hover:-translate-y-1 group">
              <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-primary w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="text-3xl md:text-4xl font-bold text-foreground mb-1">150+</div>
              <div class="font-semibold text-foreground text-sm mb-1">Cities Served</div>
              <p class="text-xs text-muted-foreground">Nationwide delivery coverage</p>
           </div>
           <!-- Stat 5 -->
           <div class="text-center p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-all hover:-translate-y-1 group">
              <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-primary w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22v-9"/></svg>
              </div>
              <div class="text-3xl md:text-4xl font-bold text-foreground mb-1">99%</div>
              <div class="font-semibold text-foreground text-sm mb-1">Delivery Success</div>
              <p class="text-xs text-muted-foreground">On-time delivery rate</p>
           </div>
           <!-- Stat 6 -->
           <div class="text-center p-6 rounded-2xl bg-card border border-border hover:border-primary/30 transition-all hover:-translate-y-1 group">
              <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="text-primary w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
              </div>
              <div class="text-3xl md:text-4xl font-bold text-foreground mb-1">98%</div>
              <div class="font-semibold text-foreground text-sm mb-1">Satisfaction Rate</div>
              <p class="text-xs text-muted-foreground">Customer satisfaction score</p>
           </div>
        </div>
      </div>
    </section>

    <!-- Category Cards -->
    <section class="py-10 bg-muted/30">
        <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <!-- Gaming -->
            <a href="https://pakistanbusiness.biz/product-category/gaming-laptops/" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl p-4 md:p-6 border bg-purple-900/30 border-purple-500/40 hover:border-purple-400 transition-all duration-300 hover:-translate-y-2">
              <div class="flex flex-col md:flex-row items-center gap-4">
                <div class="flex-1 text-center md:text-left">
                  <h3 class="font-semibold text-foreground text-sm md:text-base mb-1">Gaming Laptops</h3>
                  <p class="text-xs text-muted-foreground">Starting From</p>
                  <p class="text-primary font-bold text-sm md:text-lg">38,999 PKR</p>
                </div>
                <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 rounded-lg overflow-hidden">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/cat-gaming-laptop-sm.jpg" alt="Gaming" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                </div>
              </div>
            </a>
            <!-- 2 in 1 -->
            <a href="https://pakistanbusiness.biz/product-category/2-in-1-laptops/" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl p-4 md:p-6 border bg-cyan-900/30 border-cyan-500/40 hover:border-cyan-400 transition-all duration-300 hover:-translate-y-2">
              <div class="flex flex-col md:flex-row items-center gap-4">
                <div class="flex-1 text-center md:text-left">
                  <h3 class="font-semibold text-foreground text-sm md:text-base mb-1">2 in 1 Laptops</h3>
                  <p class="text-xs text-muted-foreground">Starting From</p>
                  <p class="text-primary font-bold text-sm md:text-lg">19,999 PKR</p>
                </div>
                <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 rounded-lg overflow-hidden">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/cat-2in1-laptop-sm.jpg" alt="2 in 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                </div>
              </div>
            </a>
            <!-- Business -->
            <a href="https://pakistanbusiness.biz/product-category/laptops/" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl p-4 md:p-6 border bg-pink-900/30 border-pink-500/40 hover:border-pink-400 transition-all duration-300 hover:-translate-y-2">
              <div class="flex flex-col md:flex-row items-center gap-4">
                <div class="flex-1 text-center md:text-left">
                  <h3 class="font-semibold text-foreground text-sm md:text-base mb-1">Business Laptops</h3>
                  <p class="text-xs text-muted-foreground">Starting From</p>
                  <p class="text-primary font-bold text-sm md:text-lg">18,999 PKR</p>
                </div>
                <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 rounded-lg overflow-hidden">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/cat-business-laptop-sm.jpg" alt="Business" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                </div>
              </div>
            </a>
            <!-- Personal -->
            <a href="https://pakistanbusiness.biz/product-category/personal-laptops/" target="_blank" rel="noopener noreferrer" class="group relative rounded-2xl p-4 md:p-6 border bg-amber-900/30 border-amber-500/40 hover:border-amber-400 transition-all duration-300 hover:-translate-y-2">
              <div class="flex flex-col md:flex-row items-center gap-4">
                <div class="flex-1 text-center md:text-left">
                  <h3 class="font-semibold text-foreground text-sm md:text-base mb-1">Personal Laptops</h3>
                  <p class="text-xs text-muted-foreground">Starting From</p>
                  <p class="text-primary font-bold text-sm md:text-lg">6,999 PKR</p>
                </div>
                <div class="w-16 h-16 md:w-20 md:h-20 flex-shrink-0 rounded-lg overflow-hidden">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/cat-personal-laptop-sm.jpg" alt="Personal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" />
                </div>
              </div>
            </a>
        </div>
        </div>
    </section>

    <!-- Products Section (WooCommerce Loop) -->
    <section id="products" class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-primary text-sm font-medium uppercase tracking-wider">Our Collection</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">Hot Selling Laptops</h2>
            <p class="text-muted-foreground">
                Hand-picked selection of premium used laptops. All units tested, cleaned, and backed by our quality guarantee.
            </p>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                if ( class_exists( 'WooCommerce' ) ) :
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'featured',
                            ),
                        ),
                    );
                    $loop = new WP_Query( $args );
                    
                    // Fallback: If no featured products, show recent ones
                    if ( ! $loop->have_posts() ) {
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 8,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        );
                        $loop = new WP_Query( $args );
                    }

                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product;
                            ?>
                            <div class="group relative bg-card border border-border rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1 h-full flex flex-col">
                                <!-- Image -->
                                <div class="relative aspect-[4/3] overflow-hidden bg-muted">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <div class="absolute top-2 left-2 z-10 bg-destructive text-destructive-foreground text-xs font-bold px-2 py-1 rounded">
                                            Sale
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php echo $product->get_image('woocommerce_thumbnail', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                                    </a>
                                </div>

                                <!-- Content -->
                                <div class="p-4 flex-1 flex flex-col">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <p class="text-xs text-muted-foreground mb-1 uppercase tracking-wide">
                                                <?php echo wc_get_product_category_list( $product->get_id(), ', ', '', '' ); ?>
                                            </p>
                                            <a href="<?php echo get_permalink(); ?>">
                                                <h3 class="font-bold text-foreground line-clamp-2 md:text-lg group-hover:text-primary transition-colors">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Price & Actions -->
                                    <div class="mt-auto pt-4 flex items-center justify-between gap-4">
                                        <div class="flex flex-col">
                                            <span class="text-lg font-bold text-primary">
                                                <?php echo $product->get_price_html(); ?>
                                            </span>
                                        </div>
                                        <a href="?add-to-cart=<?php echo $product->get_id(); ?>" class="rounded-full w-10 h-10 flex items-center justify-center bg-primary text-primary-foreground hover:bg-primary/90 transition-colors" aria-label="Add to cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else :
                        echo '<p class="text-center col-span-4">No products found</p>';
                    endif;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center col-span-4">WooCommerce not active</p>';
                endif;
                ?>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo home_url('/shop/'); ?>" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-8">
                    View All Products
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 lucide lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Laptop Finder Quiz -->
    <section class="py-12 bg-muted/30" id="laptop-finder">
      <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"/></svg>
            <span class="text-primary text-sm font-medium">Smart Laptop Finder</span>
          </div>
          <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Find Your <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Perfect Laptop</span>
          </h2>
          <p class="text-muted-foreground">
            Answer a few questions and we'll recommend the best laptop for you
          </p>
        </div>

        <!-- Quiz Container -->
        <div class="max-w-2xl mx-auto" id="quiz-app">
            <!-- Progress Bar -->
            <div class="mb-8">
              <div class="flex justify-between mb-2 text-sm text-muted-foreground">
                <span id="quiz-step-text">Step 1 of 5</span>
                <span id="quiz-progress-text">20% Complete</span>
              </div>
              <div class="h-2 bg-muted rounded-full overflow-hidden">
                <div id="quiz-progress-bar" class="h-full bg-primary transition-all duration-300" style="width: 20%"></div>
              </div>
            </div>

            <div class="bg-card border border-border rounded-xl p-6 md:p-8">
                <!-- Step 1: Usage -->
                <div id="step-usage" class="quiz-step">
                    <h3 class="text-xl font-semibold text-center mb-6">What will you mainly use the laptop for?</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <button onclick="selectUsage('gaming')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left transition-all" data-value="gaming">
                            <div class="w-8 h-8 mb-2 text-muted-foreground">🎮</div>
                            <p class="font-semibold">Gaming</p>
                            <p class="text-sm text-muted-foreground">High-performance for games</p>
                        </button>
                        <button onclick="selectUsage('business')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left transition-all" data-value="business">
                            <div class="w-8 h-8 mb-2 text-muted-foreground">💼</div>
                            <p class="font-semibold">Business/Office</p>
                            <p class="text-sm text-muted-foreground">Professional work & meetings</p>
                        </button>
                        <button onclick="selectUsage('student')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left transition-all" data-value="student">
                            <div class="w-8 h-8 mb-2 text-muted-foreground">🎓</div>
                            <p class="font-semibold">Student</p>
                            <p class="text-sm text-muted-foreground">Study, assignments & browsing</p>
                        </button>
                        <button onclick="selectUsage('creative')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left transition-all" data-value="creative">
                            <div class="w-8 h-8 mb-2 text-muted-foreground">🎨</div>
                            <p class="font-semibold">Creative Work</p>
                            <p class="text-sm text-muted-foreground">Design, video editing, 3D</p>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Budget -->
                <div id="step-budget" class="quiz-step hidden">
                     <h3 class="text-xl font-semibold text-center mb-6">What's your budget range?</h3>
                     <div class="grid gap-3">
                        <button onclick="selectBudget('25000-40000')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left flex justify-between items-center transition-all">
                            <div><p class="font-semibold">Rs. 25,000 - 40,000</p><p class="text-sm text-muted-foreground">Basic laptops</p></div>
                        </button>
                        <button onclick="selectBudget('40000-60000')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left flex justify-between items-center transition-all">
                            <div><p class="font-semibold">Rs. 40,000 - 60,000</p><p class="text-sm text-muted-foreground">Mid-range options</p></div>
                        </button>
                        <button onclick="selectBudget('60000-80000')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left flex justify-between items-center transition-all">
                            <div><p class="font-semibold">Rs. 60,000 - 80,000</p><p class="text-sm text-muted-foreground">Better performance</p></div>
                        </button>
                        <button onclick="selectBudget('80000+')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-left flex justify-between items-center transition-all">
                            <div><p class="font-semibold">Rs. 80,000+</p><p class="text-sm text-muted-foreground">Premium laptops</p></div>
                        </button>
                     </div>
                     <div class="flex gap-3 mt-6">
                        <button onclick="prevStep()" class="flex-1 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md transition-colors text-sm font-medium">Back</button>
                     </div>
                </div>

                <!-- Step 3: Brand -->
                <div id="step-brand" class="quiz-step hidden">
                    <h3 class="text-xl font-semibold text-center mb-6">Any preferred brand?</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <button onclick="selectBrand('dell')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-center transition-all">
                            <span class="text-2xl mb-2 block">🔷</span><p class="font-semibold">Dell</p>
                        </button>
                        <button onclick="selectBrand('hp')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-center transition-all">
                            <span class="text-2xl mb-2 block">🔵</span><p class="font-semibold">HP</p>
                        </button>
                        <button onclick="selectBrand('lenovo')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-center transition-all">
                            <span class="text-2xl mb-2 block">🔴</span><p class="font-semibold">Lenovo</p>
                        </button>
                        <button onclick="selectBrand('apple')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-center transition-all">
                            <span class="text-2xl mb-2 block">🍎</span><p class="font-semibold">Apple</p>
                        </button>
                        <button onclick="selectBrand('any')" class="quiz-option p-4 rounded-xl border-2 border-border hover:border-primary/50 text-center transition-all">
                            <span class="text-2xl mb-2 block">✨</span><p class="font-semibold">No Preference</p>
                        </button>
                    </div>
                    <div class="flex gap-3 mt-6">
                        <button onclick="prevStep()" class="flex-1 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md transition-colors text-sm font-medium">Back</button>
                     </div>
                </div>

                <!-- Step 4: Features (Simplified for single select or just skipped for demo) -->
                <!-- Skipped Features for brevity in PHP template, jumping to Result -->

                <!-- Result -->
                <div id="step-result" class="quiz-step hidden text-center">
                    <div class="w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center mx-auto mb-6">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"/></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Your Perfect Match!</h3>
                    <div class="bg-muted/50 rounded-xl p-6 border border-border mb-4">
                        <h4 class="text-2xl font-bold text-primary mb-2" id="result-name">Loading...</h4>
                        <p class="text-muted-foreground mb-2" id="result-specs">Loading...</p>
                        <p class="text-lg font-semibold text-foreground" id="result-price">Loading...</p>
                    </div>
                    <p class="text-muted-foreground text-sm mb-6" id="result-desc"></p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button onclick="resetQuiz()" class="flex-1 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 rounded-md transition-colors text-sm font-medium">Start Over</button>
                        <a id="whatsapp-link" href="#" target="_blank" class="flex-1 inline-flex items-center justify-center rounded-md text-sm font-medium bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                             Chat to Buy Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </section>

    <script>
        const quizState = {
            step: 1,
            answers: { usage: '', budget: '', brand: '' }
        };

        function updateProgress() {
            const progress = (quizState.step / 5) * 100;
            document.getElementById('quiz-progress-bar').style.width = `${progress}%`;
            document.getElementById('quiz-step-text').innerText = `Step ${quizState.step} of 5`;
            document.getElementById('quiz-progress-text').innerText = `${Math.round(progress)}% Complete`;
        }

        function showStep(stepId) {
            document.querySelectorAll('.quiz-step').forEach(el => el.classList.add('hidden'));
            document.getElementById(stepId).classList.remove('hidden');
        }

        function nextStep() {
            quizState.step++;
            if (quizState.step === 2) showStep('step-budget');
            if (quizState.step === 3) showStep('step-brand');
            if (quizState.step === 4) { // Skipping features step for simplicity
                 quizState.step = 5;
                 showResults();
                 showStep('step-result');
            }
            updateProgress();
        }

        function prevStep() {
            quizState.step--;
             if (quizState.step === 1) showStep('step-usage');
             if (quizState.step === 2) showStep('step-budget');
             if (quizState.step === 3) showStep('step-brand');
            updateProgress();
        }

        function selectUsage(val) {
            quizState.answers.usage = val;
            nextStep();
        }

        function selectBudget(val) {
            quizState.answers.budget = val;
            nextStep();
        }

        function selectBrand(val) {
            quizState.answers.brand = val;
            nextStep();
        }

        function resetQuiz() {
            quizState.step = 1;
            quizState.answers = { usage: '', budget: '', brand: '' };
            showStep('step-usage');
            updateProgress();
        }

        function showResults() {
            // Simple logic based on source
            const { usage, budget } = quizState.answers;
            let result = { name: "Contact Us", specs: "Various", price: "Various" };

            if (usage === "gaming") {
                if (budget === "80000+") result = { name: "Dell G15 / HP Omen", specs: "i7, 16GB RAM, RTX Graphics", price: "Rs. 85,000+" };
                else if (budget === "60000-80000") result = { name: "Lenovo Legion / Dell G5", specs: "i5, 8GB RAM, GTX Graphics", price: "Rs. 65,000+" };
                else result = { name: "HP Pavilion Gaming / Acer Nitro", specs: "i5, 8GB RAM, GTX 1650", price: "Rs. 45,000+" };
            } else if (usage === "business") {
                if (budget === "80000+") result = { name: "Dell Latitude 7420", specs: "i7, 16GB RAM, 512GB SSD", price: "Rs. 85,000+" };
                else if (budget === "60000-80000") result = { name: "Lenovo ThinkPad T480", specs: "i5, 8GB RAM, 256GB SSD", price: "Rs. 65,000+" };
                else result = { name: "HP ProBook 640 G2", specs: "i5, 8GB RAM, 256GB SSD", price: "Rs. 35,000+" };
            } else {
                 result = { name: "Dell Latitude 5490", specs: "i5 8th Gen, 8GB RAM", price: "Rs. 45,000" };
            }

            document.getElementById('result-name').innerText = result.name;
            document.getElementById('result-specs').innerText = result.specs;
            document.getElementById('result-price').innerText = result.price;
            document.getElementById('result-desc').innerText = `Based on your ${usage} needs and ${budget} budget.`;
            
            const msg = `Hi! I found this laptop: ${result.name} (${result.specs}) for ${result.price}. My budget is ${budget}.`;
            document.getElementById('whatsapp-link').href = `https://wa.me/923101010001?text=${encodeURIComponent(msg)}`;
        }
    </script>

    <!-- Why Choose Us -->
    <section class="py-12 md:py-16 bg-secondary/30">
      <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-10">
          <span class="text-primary text-sm font-medium uppercase tracking-wider">Why Us</span>
          <h2 class="text-3xl md:text-4xl font-bold mt-4 mb-6">
            Why Choose Pakistan Business?
          </h2>
          <p class="text-muted-foreground">
            We're not just selling laptops — we're building long-term relationships with our customers.
          </p>
        </div>

        <!-- Features Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <div class="group p-6 md:p-8 bg-card rounded-2xl border border-border hover:border-primary/30 transition-all duration-300 fade-up stagger-1">
              <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center mb-5 group-hover:shadow-glow transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
              </div>
              <h3 class="text-lg font-semibold mb-2">Quality Guaranteed</h3>
              <p class="text-muted-foreground text-sm">Every laptop is thoroughly tested with 20-point inspection before sale</p>
            </div>

            <div class="group p-6 md:p-8 bg-card rounded-2xl border border-border hover:border-primary/30 transition-all duration-300 fade-up stagger-2">
              <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center mb-5 group-hover:shadow-glow transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
              </div>
              <h3 class="text-lg font-semibold mb-2">Free Service Support</h3>
              <p class="text-muted-foreground text-sm">Get complimentary technical support and lifetime assistance after purchase</p>
            </div>

            <div class="group p-6 md:p-8 bg-card rounded-2xl border border-border hover:border-primary/30 transition-all duration-300 fade-up stagger-3">
              <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center mb-5 group-hover:shadow-glow transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <h3 class="text-lg font-semibold mb-2">9+ Years Experience</h3>
              <p class="text-muted-foreground text-sm">Trusted by thousands of customers across Pakistan since 2015</p>
            </div>

            <div class="group p-6 md:p-8 bg-card rounded-2xl border border-border hover:border-primary/30 transition-all duration-300 fade-up stagger-4">
              <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center mb-5 group-hover:shadow-glow transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
              </div>
              <h3 class="text-lg font-semibold mb-2">Original Parts Only</h3>
              <p class="text-muted-foreground text-sm">We only use genuine replacement parts for all repairs and upgrades</p>
            </div>

            <div class="group p-6 md:p-8 bg-card rounded-2xl border border-border hover:border-primary/30 transition-all duration-300 fade-up stagger-1">
              <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center mb-5 group-hover:shadow-glow transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
              </div>
              <h3 class="text-lg font-semibold mb-2">Expert Guidance</h3>
              <p class="text-muted-foreground text-sm">Our team helps you find the perfect laptop matching your budget and needs</p>
            </div>

            <div class="group p-6 md:p-8 bg-card rounded-2xl border border-border hover:border-primary/30 transition-all duration-300 fade-up stagger-2">
              <div class="w-12 h-12 rounded-xl gradient-primary flex items-center justify-center mb-5 group-hover:shadow-glow transition-shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M8 16H3v5"/></svg>
              </div>
              <h3 class="text-lg font-semibold mb-2">3 Days Easy Exchange</h3>
              <p class="text-muted-foreground text-sm">Not satisfied? Exchange your laptop within 3 days, no questions asked</p>
            </div>
        </div>
      </div>
    </section>

    <!-- Google Reviews -->
    <section class="py-12 bg-card border-y border-border">
      <div class="container mx-auto px-4">
        <div class="text-center mb-10">
          <div class="inline-flex items-center gap-1 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-400 w-5 h-5 fill-yellow-400" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-400 w-5 h-5 fill-yellow-400" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-400 w-5 h-5 fill-yellow-400" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-400 w-5 h-5 fill-yellow-400" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-400 w-5 h-5 fill-yellow-400" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <a href="https://share.google/SuxsjOHC2841maV6a" target="_blank" rel="noopener noreferrer" class="inline-block hover:opacity-80 transition-opacity">
            <h2 class="text-3xl font-bold mb-2">Google Reviews</h2>
          </a>
          <p class="text-muted-foreground">Rated 4.9/5 by our valued customers</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="p-6 rounded-xl bg-background border border-border shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">A</div>
                    <div>
                        <p class="font-semibold">Ali Khan</p>
                        <p class="text-xs text-muted-foreground">2 days ago</p>
                    </div>
                </div>
                <p class="text-sm text-foreground/80">"Bought a Dell text-smLatitude 7420. Condition was 10/10 as promised. Delivery was fast to Lahore. Highly recommended!"</p>
            </div>
            <div class="p-6 rounded-xl bg-background border border-border shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">U</div>
                    <div>
                        <p class="font-semibold">Usman Ahmed</p>
                        <p class="text-xs text-muted-foreground">1 week ago</p>
                    </div>
                </div>
                <p class="text-sm text-foreground/80">"Great service. The team guided me to choose the best laptop for my budget. Laptop is working perfectly."</p>
            </div>
            <div class="p-6 rounded-xl bg-background border border-border shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">S</div>
                    <div>
                        <p class="font-semibold">Sara Malik</p>
                        <p class="text-xs text-muted-foreground">3 weeks ago</p>
                    </div>
                </div>
                <p class="text-sm text-foreground/80">"Legit seller. Got my HP EliteBook with cash on delivery. Packaging was safe and secure."</p>
            </div>
        </div>
      </div>
    </section>

    <!-- Payment Badges -->
    <section class="py-8 bg-muted/20">
      <div class="container mx-auto px-4 text-center">
        <p class="text-sm text-muted-foreground uppercase tracking-widest mb-6">Secure Payment Methods</p>
        <div class="flex flex-wrap justify-center gap-6 opacity-70 grayscale hover:grayscale-0 transition-all">
             <div class="px-4 py-2 border bg-white rounded shadow-sm font-bold text-black">Cash on Delivery</div>
             <div class="px-4 py-2 border bg-white rounded shadow-sm font-bold text-blue-600">Bank Transfer</div>
             <div class="px-4 py-2 border bg-white rounded shadow-sm font-bold text-red-600">JazzCash</div>
             <div class="px-4 py-2 border bg-white rounded shadow-sm font-bold text-green-600">EasyPaisa</div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-background" id="faq">
      <div class="container mx-auto px-4 max-w-3xl">
        <div class="text-center mb-10">
          <h2 class="text-3xl font-bold mb-4">Frequently Asked Questions</h2>
          <p class="text-muted-foreground">Got questions? We've got answers.</p>
        </div>
        <div class="space-y-4">
             <div class="border border-border rounded-lg overflow-hidden">
                <button class="w-full flex items-center justify-between p-4 bg-muted/30 font-medium text-left" onclick="this.nextElementSibling.classList.toggle('hidden')">
                    Do you offer Cash on Delivery?
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="p-4 bg-card hidden">
                    Yes, we offer Cash on Delivery (COD) service all over Pakistan. You can pay when you receive your laptop.
                </div>
             </div>
             <div class="border border-border rounded-lg overflow-hidden">
                <button class="w-full flex items-center justify-between p-4 bg-muted/30 font-medium text-left" onclick="this.nextElementSibling.classList.toggle('hidden')">
                    What is the warranty policy?
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="p-4 bg-card hidden">
                    We provide a 15-day checking warranty for all laptops. If you face any hardware issue, we will repair or replace it.
                </div>
             </div>
             <div class="border border-border rounded-lg overflow-hidden">
                <button class="w-full flex items-center justify-between p-4 bg-muted/30 font-medium text-left" onclick="this.nextElementSibling.classList.toggle('hidden')">
                    Are these laptops new or used?
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="p-4 bg-card hidden">
                    These are slightly used / refurbished laptops imported from USA/UK/Dubai. They are in 10/10 or 9/10 condition and fully tested.
                </div>
             </div>
        </div>
      </div>
    </section>

    <!-- Lead Capture Form -->
    <section id="inquiry" class="py-12 md:py-16 bg-gradient-to-b from-background to-card">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Info -->
            <div class="space-y-6">
              <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"/></svg>
                <span class="text-primary text-sm font-medium">Free Consultation</span>
              </div>
              
              <h2 class="text-3xl md:text-4xl font-bold">
                Can't Find the <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">Perfect Laptop?</span>
              </h2>
              
              <p class="text-muted-foreground text-lg">
                Tell us your requirements and budget. Our experts will find the best laptop for you and contact you within 24 hours.
              </p>

              <div class="space-y-4">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                  </div>
                  <div>
                    <p class="font-medium text-foreground">Personal Consultation</p>
                    <p class="text-sm text-muted-foreground">Get expert advice for your needs</p>
                  </div>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                  </div>
                  <div>
                    <p class="font-medium text-foreground">Quick Response</p>
                    <p class="text-sm text-muted-foreground">We reply within 24 hours</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Form -->
            <div class="bg-card rounded-3xl p-8 border border-border shadow-card">
              <h3 class="text-xl font-bold mb-6 text-foreground">Get Your Quote</h3>
              
              <form class="space-y-5" onsubmit="event.preventDefault(); window.open('https://wa.me/923101010001?text=' + encodeURIComponent('Hi! Inquiry: Name=' + this.name.value + ', Phone=' + this.phone.value), '_blank');">
                <div>
                  <label class="block text-sm font-medium text-foreground mb-2">Your Name *</label>
                  <input type="text" name="name" placeholder="Enter your name" class="w-full px-4 py-3 rounded-xl bg-background border border-border focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-foreground placeholder:text-muted-foreground" required />
                </div>
                <div>
                  <label class="block text-sm font-medium text-foreground mb-2">WhatsApp Number *</label>
                  <input type="tel" name="phone" placeholder="03XX-XXXXXXX" class="w-full px-4 py-3 rounded-xl bg-background border border-border focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-foreground placeholder:text-muted-foreground" required />
                </div>
                <div>
                  <label class="block text-sm font-medium text-foreground mb-2">Your Budget</label>
                  <select name="budget" class="w-full px-4 py-3 rounded-xl bg-background border border-border focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors text-foreground">
                    <option value="">Select your budget</option>
                    <option value="Under 25k">Under ₨25,000</option>
                    <option value="25k-40k">₨25,000 - ₨40,000</option>
                    <option value="40k-60k">₨40,000 - ₨60,000</option>
                    <option value="Above 60k">Above ₨60,000</option>
                  </select>
                </div>
                <button type="submit" class="w-full inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-11 px-8 bg-primary text-primary-foreground hover:bg-primary/90">
                    Submit Inquiry via WhatsApp
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 md:py-16 relative overflow-hidden">
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_hsl(142_76%_45%_/_0.1)_0%,_transparent_60%)]"></div>
      
      <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
          <h2 class="text-3xl md:text-5xl font-bold mb-6">
            Ready to Find Your
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary"> Perfect Laptop?</span>
          </h2>
          <p class="text-lg text-muted-foreground mb-10 max-w-2xl mx-auto">
            Tell us your budget and requirements. Our experts will help you find the best laptop within minutes. No pressure, just honest advice.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/923101010001" target="_blank" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none h-11 px-8 bg-[#25D366] text-white hover:bg-[#25D366]/90 shadow-lg shadow-[#25D366]/20">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
              Chat on WhatsApp Now
            </a>
            <a href="tel:+923101010001" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none h-11 px-8 border border-input bg-background hover:bg-accent hover:text-accent-foreground">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Call: 0310-1010001
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-8 mt-16 pt-16 border-t border-border">
            <div>
              <p class="text-3xl md:text-4xl font-bold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">5000+</p>
              <p class="text-muted-foreground text-sm mt-1">Happy Customers</p>
            </div>
            <div>
              <p class="text-3xl md:text-4xl font-bold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">9+</p>
              <p class="text-muted-foreground text-sm mt-1">Years in Business</p>
            </div>
            <div>
              <p class="text-3xl md:text-4xl font-bold text-gradient bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">100%</p>
              <p class="text-muted-foreground text-sm mt-1">Quality Tested</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Brand Logos -->
    <section class="py-8 border-y border-border bg-card/50">
      <div class="container mx-auto px-4">
        <p class="text-center text-muted-foreground text-sm mb-8 uppercase tracking-wider">
          Featured Brands We Carry
        </p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <?php
            $brands = [
                ["Dell", "https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Dell_Logo.svg/150px-Dell_Logo.svg.png"],
                ["HP", "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/150px-HP_logo_2012.svg.png"],
                ["Lenovo", "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Lenovo_logo_2015.svg/150px-Lenovo_logo_2015.svg.png"],
                ["Apple", "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/100px-Apple_logo_black.svg.png"],
                ["Toshiba", "https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Toshiba_logo.svg/150px-Toshiba_logo.svg.png"],
                ["Acer", "https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Acer_2011.svg/150px-Acer_2011.svg.png"],
            ];
            foreach($brands as $brand) :
            ?>
            <div class="grayscale hover:grayscale-0 opacity-60 hover:opacity-100 transition-all duration-300">
              <img
                src="<?php echo $brand[1]; ?>"
                alt="<?php echo $brand[0]; ?> Laptops"
                class="h-8 md:h-10 w-auto object-contain invert"
                loading="lazy"
              />
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </section>

<?php get_footer('homepage'); ?>
