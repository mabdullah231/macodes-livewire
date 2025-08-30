import './bootstrap';

// Debug navigation events
document.addEventListener('livewire:navigating', (event) => {
    console.log('Navigating to:', event.detail?.url || 'Unknown');
});

document.addEventListener('livewire:navigated', () => {
    console.log('Navigation completed');
    initializeNavigation();
    initializeAnimations();
    initializeHeroTyping()
    initializeScrollButton();
});

document.addEventListener('livewire:navigation-failed', (event) => {
    console.error('Navigation failed:', event.detail || 'Unknown error');
});

// Run on initial DOM load
document.addEventListener('DOMContentLoaded', () => {
    initializeNavigation();
    initializeAnimations();
    initializeHeroTyping()
    initializeScrollButton();
});

function initializeNavigation() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    if (!hamburgerBtn || !mobileMenu || !hamburgerIcon || !closeIcon) {
        console.log('Navigation elements not found, skipping initialization');
        return;
    }

    // Reset duplicate listeners
    const newHamburgerBtn = hamburgerBtn.cloneNode(true);
    hamburgerBtn.parentNode.replaceChild(newHamburgerBtn, hamburgerBtn);

    newHamburgerBtn.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.contains('max-h-0');

        if (isOpen) {
            mobileMenu.classList.remove('max-h-0', 'border-hidden-color', 'pt-0', 'pb-0');
            mobileMenu.classList.add('max-h-[500px]', 'border-color', 'pt-4', 'pb-4');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('max-h-0', 'border-hidden-color', 'pt-0', 'pb-0');
            mobileMenu.classList.remove('max-h-[500px]', 'border-color', 'pt-4', 'pb-4');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });

    console.log('Navigation initialized successfully');
}

function initializeAnimations() {
    const sections = document.querySelectorAll(".animate-fade-up");

    if (!sections.length) {
        console.log("No fade-up sections found");
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); // prevent re-trigger
            }
        });
    }, { threshold: 0.1 });

    sections.forEach(section => observer.observe(section));
    console.log("Animations initialized");
}

function initializeHeroTyping() {
    const typedText = document.getElementById('typed-text');
    const roles = ['SaaS Solution', 'AI Chatbot', 'AI Agents', 'Full Stack'];
    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typingTimeout;

    // Initialize with &nbsp; to prevent empty space
    typedText.innerHTML = '&nbsp;';

    function type() {
        const currentRole = roles[roleIndex];
        let displayText;

        if (isDeleting) {
            charIndex--;
            displayText = currentRole.substring(0, charIndex);
        } else {
            charIndex++;
            displayText = currentRole.substring(0, charIndex);
        }

        // Use innerHTML and fallback to &nbsp; when empty
        typedText.innerHTML = displayText || '&nbsp;';

        if (!isDeleting && charIndex < currentRole.length) {
            typingTimeout = setTimeout(type, 100);
        } else if (isDeleting && charIndex > 0) {
            typingTimeout = setTimeout(type, 50);
        } else {
            isDeleting = !isDeleting;
            if (!isDeleting) {
                roleIndex = (roleIndex + 1) % roles.length;
            }
            typingTimeout = setTimeout(type, isDeleting ? 1500 : 500);
        }
    }

    type();

    // Clean up on Livewire updates
    document.addEventListener('livewire:update', function() {
        clearTimeout(typingTimeout);
        typedText.innerHTML = '&nbsp;'; // Reset to &nbsp; on update
    });
}

function initializeScrollButton() {
    const scrollBtn = document.getElementById('scrollToTopBtn');
    if (!scrollBtn) return;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 150) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });
}
