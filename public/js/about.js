document.addEventListener('DOMContentLoaded', () => {

    // const closeModal = document.getElementById('closeModal');

    document.addEventListener('click', function(e) {
        // Open modal
        if (e.target.classList.contains('certificate-img')) {
            const modal = document.getElementById('imgModal');
            const modalImg = document.getElementById('modalImg');

            modalImg.src = e.target.src;
            modal.classList.remove('hidden');
        }

        // Close modal
        if (e.target.id === 'closeModal' || e.target.id === 'imgModal') {
            const modal = document.getElementById('imgModal');
            modal.classList.add('hidden');
        }
    });

});