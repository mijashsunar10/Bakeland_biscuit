@extends('template.template')

@section('pagecontent')
    <section id="pagecontent" class="overflow-x-hidden overflow-y-hidden">
        <div class="relative bg-center bg-cover h-screen" style="background-image: url('{{ asset('images/hero/bakenew.jpg') }}');">
            <div class="absolute inset-0 bg-[rgba(39,28,21,0.85)]">
            </div>

            <div class="relative container mx-auto px-4 py-32 flex flex-col lg:flex-row items-center gap-12">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <span
                        class="inline-block bg-pastry-secondary text-pastry-primary px-4 py-2 rounded-full font-medium mb-4">  Since 2005
                        </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-pastry-cream mb-6">
                        Discover the Crunch of  <br>
                        <span class="text-pastry-secondary">Bakeland Biscuit</span>
                    </h1>
                    <p class="text-lg text-pastry-cream mb-8 max-w-lg">
                  Crispy, delicious, and crafted with quality ingredients—Bakeland brings you biscuits that make every moment special. Since 2005, we’ve been dedicated to creating the perfect crunch that families can trust and enjoy. Every biscuit is baked with care, blending tradition, taste, and freshness .
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#"
                            class="bg-red-600 hover:bg-red-500 text-white font-bold py-3 px-8 rounded-full animation-pulse-glow transition-colors text-center">
                            Explore Products
                        </a>
                        <a href="#"
                            class="border-2 border-pastry-secondary hover:bg-pastry-secondary text-pastry-cream font-bold py-3 px-8 rounded-full transition-colors text-center">
                            View Biscuit Packs
                        </a>
                    </div>
                    <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6 justify-items-center lg:justify-items-start">
                        <div class="flex items-center">
                            <div class="bg-pastry-secondary p-3 rounded-full mr-3">
                                <i class="fas fa-graduation-cap text-pastry-primary text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-pastry-secondary font-bold text-2xl">30+</h3>
                                <p class="text-pastry-cream">Biscuit Varieties</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-pastry-secondary p-3 rounded-full mr-3">
                                <i class="fas fa-medal text-pastry-primary text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-pastry-secondary font-bold text-2xl">25+</h3>
                                <p class="text-pastry-cream">Ingredients</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-pastry-secondary p-3 rounded-full mr-3">
                                <i class="fas fa-bread-slice text-pastry-primary text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-pastry-secondary font-bold text-2xl">100 Millions+</h3>
                                <p class="text-pastry-cream">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Spinning Pastry -->
                <div class="w-full lg:w-1/2 flex justify-center mt-24 lg:mt-0">
                    <div class="relative ">
                        <div class="rounded-full border-8 border-[rgba(255,247,230,0.3)] shadow-lg animate-spin-slow w- h-">
                            {{-- <img src="{{ asset('images/hero/spin.png') }}" alt="Delicate Artisan Pastries" --}}
                               <img src="{{ asset('images/hero/bakelandnew(1).jpg') }}" alt="Delicate Artisan Pastries"

                                class="w-full h-full rounded-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    body { font-family: 'Montserrat', sans-serif; background-color: #FFF8E1; color: #5a3921; }
  </style>
@endsection