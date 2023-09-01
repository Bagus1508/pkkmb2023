import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs'
import ScrollReveal from 'scrollreveal';
import AOS from 'aos';

// AlpineJs
window.Alpine = Alpine

import './../../vendor/power-components/livewire-powergrid/dist/powergrid'
import './../../vendor/power-components/livewire-powergrid/dist/powergrid.css'

Alpine.start()


// ScrollReveal
const sr = ScrollReveal();

// Tentukan konfigurasi animasi
const animateConfig = {
    origin: 'bottom',
    distance: '20px',
    duration: 1000,
    delay: 200,
    scale: 1,
    easing: 'ease-in-out',
  };

// Terapkan animasi pada elemen
sr.reveal('.animate__fadeInUp', animateConfig);


// AOS
import 'aos/dist/aos.css'; // You can also use <link> for styles

AOS.init();