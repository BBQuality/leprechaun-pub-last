@php
$items = [
    route('index') => 'Головна',
    route('menu') => 'Наше Меню',
    route('contact') => 'Контакти',
    route('policy') => 'Юридична інформація',
    route('terms') => 'Обов`язки'
];
@endphp

<style>
        @keyframes neon-pulse {
            0%, 100% { text-shadow: 0 0 5px #5f5c04de, 0 0 10px #5f5c04de, 0 0 15px #5f5c04de, 0 0 20px #105f13, 0 0 35px #105f13, 0 0 40px #105f13, 0 0 50px #105f13, 0 0 75px #105f13; }
            50% { text-shadow: 0 0 2px #5f5c04de, 0 0 5px #5f5c04de, 0 0 7px #5f5c04de, 0 0 10px #105f13, 0 0 17px #105f13, 0 0 20px #105f13, 0 0 25px #105f13, 0 0 37px #105f13; }
        }

        .neon-text {
            animation: neon-pulse 1.5s infinite alternate;
        }

        .bg-animated {
            background: linear-gradient(-45deg, #000000, #1a1a1a, #000033, #003366);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .glitch {
            position: relative;
        }

        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            left: 2px;
            text-shadow: -2px 0 #ff00de;
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim 3s infinite linear alternate-reverse;
        }

        .glitch::after {
            left: -2px;
            text-shadow: -2px 0 #00ffff;
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim 2s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% { clip: rect(39px, 9999px, 71px, 0); }
            5% { clip: rect(76px, 9999px, 53px, 0); }
            10% { clip: rect(42px, 9999px, 16px, 0); }
            15% { clip: rect(94px, 9999px, 33px, 0); }
            20% { clip: rect(3px, 9999px, 5px, 0); }
            25% { clip: rect(21px, 9999px, 100px, 0); }
            30% { clip: rect(79px, 9999px, 82px, 0); }
            35% { clip: rect(56px, 9999px, 18px, 0); }
            40% { clip: rect(6px, 9999px, 38px, 0); }
            45% { clip: rect(65px, 9999px, 91px, 0); }
            50% { clip: rect(31px, 9999px, 56px, 0); }
            55% { clip: rect(88px, 9999px, 71px, 0); }
            60% { clip: rect(13px, 9999px, 43px, 0); }
            65% { clip: rect(50px, 9999px, 9px, 0); }
            70% { clip: rect(27px, 9999px, 68px, 0); }
            75% { clip: rect(85px, 9999px, 25px, 0); }
            80% { clip: rect(44px, 9999px, 93px, 0); }
            85% { clip: rect(19px, 9999px, 39px, 0); }
            90% { clip: rect(71px, 9999px, 86px, 0); }
            95% { clip: rect(2px, 9999px, 62px, 0); }
            100% { clip: rect(54px, 9999px, 47px, 0); }
        }

        .hover-3d {
            transition: transform 0.3s;
        }

        .hover-3d:hover {
            transform: perspective(1000px) rotateX(10deg) rotateY(-10deg) rotateZ(2deg);
        }

        .neon-border {
            box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #00ffff, 0 0 35px #00ffff, 0 0 40px #00ffff;
            animation: neon-border-pulse 1.5s infinite alternate;
        }

        @keyframes neon-border-pulse {
            0%, 100% { box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #00ffff, 0 0 35px #00ffff, 0 0 40px #00ffff; }
            50% { box-shadow: 0 0 2px #fff, 0 0 5px #fff, 0 0 7px #fff, 0 0 10px #00ffff, 0 0 17px #00ffff, 0 0 20px #00ffff; }
        }

        .cyber-grid {
            background-image: linear-gradient(rgb(36 134 18 / 44%) 1px, #0a1c04bf 1px), linear-gradient(90deg, rgb(69 54 11 / 74%) 1px, #201b02bf 1px);
            background-size: 138px 67px;
            animation: cyber-grid-move 12s linear infinite;
        }

        @keyframes cyber-grid-move {
            0% { background-position: 0 0; }
            100% { background-position: 20px 20px; }
        }
</style>

<footer class="bg-animated cyber-grid relative overflow-hidden">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-row flex-wrap justify-center">
                <div class="flex flex-row justify-center">
                    <div class="flex-col justify-center text-center">
                        <h3 class="text-xl font-bold text-green-900 neon-text mb-4">PUB "ЛЕПРЕКОН"</h3>
                    </div>
                    <div class="flex flex-col justify-center text-center">
                        <ul class="flex flex-wrap flex-row justify-center">
                        @foreach ($items as $href => $label)
                            <x-nav-item :$href>{{ $label }}</x-nav-item>
                        @endforeach
                        </ul>
                    </div>
                    <div class="flex-col justify-center text-center">
                        <div class="flex justify-center md:justify-center space-x-2">
                            <a href="https://www.instagram.com/lepreconpub"><svg class="w-6 h-6 fill-green-900" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><title>PUB "Лепрекон" - Instagram</title><path d="M61.45,0C44.76,0,42.66.07,36.11.37A45.08,45.08,0,0,0,21.2,3.23a29.86,29.86,0,0,0-10.88,7.08,30.26,30.26,0,0,0-7.1,10.88A44.92,44.92,0,0,0,.37,36.11C.08,42.66,0,44.75,0,61.44S.07,80.21.37,86.77a45.08,45.08,0,0,0,2.86,14.91,30.12,30.12,0,0,0,7.08,10.88,30.13,30.13,0,0,0,10.88,7.1,45.17,45.17,0,0,0,14.92,2.85c6.55.3,8.64.37,25.33.37s18.77-.07,25.33-.37a45.17,45.17,0,0,0,14.92-2.85,31.54,31.54,0,0,0,18-18,45.6,45.6,0,0,0,2.86-14.91c.29-6.55.37-8.64.37-25.33s-.08-18.78-.37-25.33a45.66,45.66,0,0,0-2.86-14.92,30.1,30.1,0,0,0-7.09-10.88,29.77,29.77,0,0,0-10.88-7.08A45.14,45.14,0,0,0,86.76.37C80.2.07,78.12,0,61.43,0ZM55.93,11.07h5.52c16.4,0,18.34.06,24.82.36a34,34,0,0,1,11.41,2.11,19,19,0,0,1,7.06,4.6,19.16,19.16,0,0,1,4.6,7.06,34,34,0,0,1,2.11,11.41c.3,6.47.36,8.42.36,24.82s-.06,18.34-.36,24.82a33.89,33.89,0,0,1-2.11,11.4A20.35,20.35,0,0,1,97.68,109.3a33.64,33.64,0,0,1-11.41,2.12c-6.47.3-8.42.36-24.82.36s-18.35-.06-24.83-.36a34,34,0,0,1-11.41-2.12,19,19,0,0,1-7.07-4.59,19,19,0,0,1-4.59-7.06,34,34,0,0,1-2.12-11.41c-.29-6.48-.35-8.42-.35-24.83s.06-18.34.35-24.82a33.7,33.7,0,0,1,2.12-11.41,19,19,0,0,1,4.59-7.06,19.12,19.12,0,0,1,7.07-4.6A34.22,34.22,0,0,1,36.62,11.4c5.67-.25,7.86-.33,19.31-.34Zm38.31,10.2a7.38,7.38,0,1,0,7.38,7.37,7.37,7.37,0,0,0-7.38-7.37ZM61.45,29.89A31.55,31.55,0,1,0,93,61.44,31.56,31.56,0,0,0,61.45,29.89Zm0,11.07A20.48,20.48,0,1,1,41,61.44,20.48,20.48,0,0,1,61.45,41Z"/></svg></a>
                            <a href="https://www.facebook.com/grillpubleprekon"><svg class="w-6 h-6 fill-green-900" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640"><title>PUB "Лепрекон" - Facebook</title><path d="M380.001 120.001h99.993V0h-99.993c-77.186 0-139.986 62.8-139.986 139.986v60h-80.009V320h79.985v320h120.013V320h99.994l19.996-120.013h-119.99v-60.001c0-10.843 9.154-19.996 19.996-19.996v.012z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="flex flex-row justify-center mt-4 pt-4 border-t border-yellow-900">
                <p class="text-center font-bold text-green-900">&copy; 2025 PUB "ЛЕПРЕКОН". Всі права захищені.</p>
            </div>
        </div>
        <div class="absolute inset-0 pointer-events-none neon-border"></div>
</footer>