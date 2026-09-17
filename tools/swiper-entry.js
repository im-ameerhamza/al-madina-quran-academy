// Only the Swiper modules the site uses (see th-slider options in assets/js/main.js).
import Swiper from "swiper";
import { A11y, Autoplay, EffectFade, Navigation, Pagination } from "swiper/modules";

Swiper.use([A11y, Autoplay, EffectFade, Navigation, Pagination]);
window.Swiper = Swiper;
