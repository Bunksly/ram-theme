document.addEventListener('DOMContentLoaded', function () {
    const gallerySection = document.querySelector('.ram-container.ram-gallery');
    if (!gallerySection) return;

    let offset = 9;
    let loading = false;

    window.addEventListener('scroll', function () {
        if (loading) return;

        // near bottom check
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 300) {
            loading = true;
            fetch(ramAjax.ajaxurl, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'action=load_gallery_images&offset=' + offset
            })
                .then(res => res.text())
                .then(html => {
                    if (html.trim().length) {
                        gallerySection.insertAdjacentHTML('beforeend', html);
                        offset += 9;
                        loading = false;
                    }
                });
        }
    });
});
