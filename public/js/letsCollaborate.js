document.addEventListener('DOMContentLoaded', () => {
    const contactBtn = document.getElementById('contactBtn');
    const contactModal = document.getElementById('contactModal');
    const closeModal = document.getElementById('closeModal');

    if (!contactBtn || !contactModal || !closeModal) return;

    contactBtn.addEventListener('click', () => {
        contactModal.classList.remove('hidden', 'modal-hide');
        contactModal.classList.add('flex', 'modal-show');
    });

    const close = () => {
        contactModal.classList.remove('modal-show');
        contactModal.classList.add('modal-hide');

        // Wait for animation to finish before hiding
        contactModal.addEventListener('animationend', () => {
            contactModal.classList.add('hidden');
            contactModal.classList.remove('flex', 'modal-hide');
        }, { once: true });
    }

    closeModal.addEventListener('click', close);

    contactModal.addEventListener('click', (e) => {
        if (e.target === contactModal) close();
    });
});
