<section id="testimonials" class="py-24 bg-light"> 
    <div class="max-w-3xl mx-auto text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent drop-shadow-xl">
            {{ __('messages.testimonials_title') }}
        </h2>
        <p class="text-dark/70 text-lg md:text-xl font-medium">
            {{ __('messages.testimonials_subtitle') }}
        </p>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-4">
        @foreach ($testimonios as $t)
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border-t-4 border-primary hover:scale-105 hover:shadow-3xl transition-all duration-300 flex flex-col items-center p-8">
                <img src="{{ $t['foto'] }}" alt="{{ $t['nombre'] }}" class="w-24 h-24 rounded-full shadow-lg mb-4 object-cover ring-4 ring-primary/20">
                <h3 class="font-bold text-xl text-dark">{{ $t['nombre'] }}</h3>
                <span class="text-primary font-medium text-sm mb-2 tracking-wide">{{ $t['empresa'] }}</span>
                <p class="italic text-dark/80 text-base text-center mt-3 leading-relaxed">
                    <svg class="inline-block w-6 h-6 text-primary -mt-2 mr-1" fill="currentColor" viewBox="0 0 24 24"><path d="M9.17 6.999A3.001 3.001 0 0 0 6 10v1c0 2.21 1.79 4 4 4h.003c-.003.058-.003.115-.003.173 0 2.278 1.722 4.146 3.995 4.828V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2c0-4.97 4.03-9 9-9 .117 0 .234.004.349.01a2.978 2.978 0 0 0-2.179-2.01z"/></svg>
                    {{ __($t['mensaje']) }}
                </p>
            </div>
        @endforeach
    </div>
</section>
