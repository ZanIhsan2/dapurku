import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import AOS from 'aos';
import 'aos/dist/aos.css';

// Inisialisasi AOS
AOS.init({
    once: false, 
    duration: 800, 
    delay: 200, 
});
// Untuk animasi scroll

// Untuk filter menu berdasarkan kategori
// Menggunakan event delegation untuk menangani klik pada tombol filter
// dan menyembunyikan/menampilkan item menu sesuai kategori yang dipilih
document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".filter-btn");
    const items = document.querySelectorAll(".menu-item");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            buttons.forEach(btn => btn.classList.remove("bg-yellow-500", "text-white"));
            button.classList.add("bg-yellow-500", "text-white");

            const category = button.getAttribute("data-category");

            items.forEach(item => {
                const itemCategory = item.getAttribute("data-category");

                if (category === "all" || itemCategory === category) {
                    // SHOW with animation
                    item.classList.remove("hidden");
                    item.classList.add("opacity-0", "scale-95");

                    // Trigger reflow to allow transition
                    void item.offsetWidth;

                    item.classList.remove("opacity-0", "scale-95");
                    item.classList.add("opacity-100", "scale-100");
                } else {
                    // HIDE with animation
                    item.classList.remove("opacity-100", "scale-100");
                    item.classList.add("opacity-0", "scale-95");

                    // Delay hiding to allow animation
                    setTimeout(() => {
                        item.classList.add("hidden");
                    }, 300);
                }
            });
        });
    });
});


// Untuk navigasi link aktif
// Menggunakan event delegation untuk menangani klik pada link navigasi
// dan mengatur kelas aktif berdasarkan data-target yang sesuai
document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".nav-link");

    function setActive(target) {
        links.forEach(link => {
            if (link.dataset.target === target) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    }

    links.forEach(link => {
        link.addEventListener("click", (e) => {
            const target = link.dataset.target;
            setActive(target);
        });
    });

    // Optional: aktifkan berdasarkan scroll (kalau ingin lebih keren)
    const sections = document.querySelectorAll("section[id]");

    window.addEventListener("scroll", () => {
        let current = "";
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            if (scrollY >= sectionTop) {
                current = section.getAttribute("id");
            }
        });
        if (current) setActive(current);
    });
});

// Untuk modal login dan register
    window.openModal = function () {
        document.getElementById('authModal').classList.remove('hidden');
        showLogin(); // default: tampilkan form login
    }

    window.closeModal = function () {
        document.getElementById('authModal').classList.add('hidden');
    }

    window.showLogin = function () {
        document.getElementById('loginForm').classList.remove('hidden');
        document.getElementById('registerForm').classList.add('hidden');
    }

    window.showRegister = function () {
        document.getElementById('loginForm').classList.add('hidden');
        document.getElementById('registerForm').classList.remove('hidden');
    }
