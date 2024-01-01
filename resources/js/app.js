import './coreui.bundle.min.js'
import './simplebar.min.js'
import './libs';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';