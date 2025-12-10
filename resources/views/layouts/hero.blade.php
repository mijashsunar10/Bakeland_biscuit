@extends('template.template')

@section('pagecontent')
    <style>
        /* Enhanced animation styles */
        .scroll-animate {
            opacity: 0;
            transition: all 0.8s ease-out;
        }
        
        .animate-initial {
            opacity: 1 !important;
        }
        
        /* Hero specific animations */
        .hero-bg {
            animation: fadeIn 1.2s ease-out forwards;
        }
    </style>

    <section id="pagecontent" class="overflow-x-hidden overflow-y-hidden " >
        <div class="relative bg-center bg-cover h-auto lg:h-screen hero-bg" style="background-image: url('{{ asset('images/hero/bakenew.jpg')}}');">
            <div class="absolute inset-0 bg-[rgba(48,30,17,0.85)]"></div>
            <div class="relative max-w-[85%] mx-auto px-4 py-40 flex flex-col lg:flex-row items-center gap-12">

                <!-- Text Content -->
                <div class="w-full lg:mt-16 xl:mt-0 lg:w-1/2 text-center lg:text-left">
                    <span class="inline-block bg-pastry-secondary text-pastry-primary px-4 py-2 rounded-full font-medium mb-4 scroll-animate animate-dropIn" data-scroll data-delay="100">
                        Est. 2005
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-pastry-cream mb-6 scroll-animate animate-slideInLeft" data-scroll data-delay="200">
                        Master the Art of <br>
                        <span class="text-pastry-secondary">Pastry Perfection</span>
                    </h1>
                    <p class="text-lg text-pastry-cream mb-8 max-w-lg scroll-animate animate-fadeIn" data-scroll data-delay="300">
                        Welcome to Sweet Chronicles, where flour, sugar, and passion combine to create magic.
                        Our award-winning pastry school and artisan bakery blend tradition with innovation
                        to deliver exceptional baking experiences.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start scroll-animate animate-slideUp" data-scroll data-delay="400">
                        <a href="#"
                            class="bg-pastry-accent hover:bg-red-500 text-white font-bold py-3 px-8 rounded-full animation-pulse-glow transition-colors text-center">
                            Explore Courses
                        </a>
                        <a href="#"
                            class="border-2 border-pastry-secondary hover:bg-pastry-secondary text-pastry-cream font-bold py-3 px-8 rounded-full transition-colors text-center">
                            Visit Our Bakery
                        </a>
                    </div>
                    <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6 justify-items-center lg:justify-items-start scroll-animate animate-slideUp" data-scroll data-delay="500">
                        <div class="flex items-center">
                            <div class="bg-pastry-secondary p-3 rounded-full mr-3">
                                <i class="fas fa-graduation-cap text-pastry-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-pastry-secondary font-bold text-xl">2000+</h3>
                                <p class="text-pastry-cream">Students Trained</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-pastry-secondary p-3 rounded-full mr-3">
                                <i class="fas fa-medal text-pastry-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-pastry-secondary font-bold text-xl">25+</h3>
                                <p class="text-pastry-cream">Awards Won</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-pastry-secondary p-3 rounded-full mr-3">
                                <i class="fas fa-bread-slice text-pastry-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-pastry-secondary font-bold text-xl">50+</h3>
                                <p class="text-pastry-cream">Specialty Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Spinning Pastry -->
                <div class="w-full lg:w-1/2 flex justify-center mt-12 lg:mt-12 scroll-animate animate-fadeIn" data-scroll data-delay="600">
                    <div class="relative animate-float">
                        <div class="rounded-full border-8 border-[rgba(255,247,230,0.3)] shadow-lg animate-spin-slow w-auto h-auto">
                            <img src="{{ asset('images/hero/spin.png') }}" alt="Delicate Artisan Pastries"
                                class="w-full h-full rounded-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Scroll Reveal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Intersection Observer for scroll animations
            const animateOnScroll = (elements) => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const delay = entry.target.dataset.delay || 0;
                            setTimeout(() => {
                                entry.target.classList.add('animate-initial');
                            }, parseInt(delay));
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                });

                elements.forEach(element => {
                    observer.observe(element);
                });
            };

            // Animate elements on page load (above the fold)
            const initialElements = document.querySelectorAll('[data-scroll]');
            animateOnScroll(initialElements);

            // Animate hero background immediately
            const heroBg = document.querySelector('.hero-bg');
            if (heroBg) {
                heroBg.style.opacity = '1';
            }

            // For elements that load later (like via AJAX)
            window.animateNewElements = function() {
                const newElements = document.querySelectorAll('[data-scroll]:not(.animate-initial)');
                animateOnScroll(newElements);
            };
        });
    </script>

    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #FFF8E1; color: #5a3921; }
    </style>

   
@endsection