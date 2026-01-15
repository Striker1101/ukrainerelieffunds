import './bootstrap';
import '../css/app.css';
import '../css/fontawesome/fontawesome-css.css'
import Swal from 'sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

window.toast = (msg, type = 'success') => {
  Swal.fire({
    toast: true,
    position: 'top-end',
    icon: type,
    title: msg,
    showConfirmButton: false,
    timer: 3500,
    timerProgressBar: true,
  });
};
