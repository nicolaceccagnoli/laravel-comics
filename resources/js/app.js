import './bootstrap';

// Ci portiamo appresso il file scss
import '~resources/scss/app.scss';
import '~resources/scss/partials/header.scss';
import '~resources/scss/partials/main.scss';
import '~resources/scss/partials/footer.scss';

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

// Ci portiamo appresso tutte le immagini che si trovano nella cartella resources/img
import.meta.glob([
    '../img/**'
]);
