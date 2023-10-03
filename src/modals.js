const modalContenidoVariable = document.getElementById('modal-contenido-variable');

if (modalContenidoVariable) {
    modalContenidoVariable.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const videoId = button.getAttribute('data-bs-video-id');
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const iframeYoutube = modalContenidoVariable.querySelector('.iframe-youtube');

        iframeYoutube.src = `https://www.youtube.com/embed/${videoId}`;
    })
}