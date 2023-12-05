<?php
includeComponent('components/atoms/button');
includeComponent('components/atoms/button-icon');
?>
<div class="container">
    <div class="row" style="gap: 10px; padding-top: 20px">
        <button class="btn btn-primary btn-md btn-catalog">
            <span class="bi"></span>
            <span class="btn-text">Button</span>
        </button>
        <button class="btn btn-primary btn-md btn-catalog open">
            <span class="bi"></span>
            <span class="btn-text">Button</span>
        </button>
        <button class="btn btn-primary btn-md btn-catalog" disabled>
            <span class="bi"></span>
            <span class="btn-text">Button</span>
        </button>
        <a href="#" class="btn btn-primary btn-md btn-catalog">
            <span class="bi"></span>
            <span class="btn-text">Button</span>
        </a>
        <a href="#" class="btn btn-primary btn-md btn-catalog open">
            <span class="bi"></span>
            <span class="btn-text">Button</span>
        </a>
        <a href="#" class="btn btn-primary btn-md btn-catalog disabled">
            <span class="bi"></span>
            <span class="btn-text">Button</span>
        </a>
    </div>
    <hr>
    <div class="row" style="gap: 10px; padding-top: 20px">
        <button class="btn btn-primary btn-md btn-close-catalog">
            <svg class="bi" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.47705 4.97705L15.5229 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M15.5229 4.97705L4.47705 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <span class="btn-text">Button</span>
        </button>
        <button class="btn btn-primary btn-md btn-close-catalog" disabled>
            <svg class="bi" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.47705 4.97705L15.5229 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M15.5229 4.97705L4.47705 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <span class="btn-text">Button</span>
        </button>
        <a class="btn btn-primary btn-md btn-close-catalog" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.47705 4.97705L15.5229 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M15.5229 4.97705L4.47705 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <span class="btn-text">Button</span>
        </a>
        <a class="btn btn-primary btn-md btn-close-catalog disabled" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.47705 4.97705L15.5229 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M15.5229 4.97705L4.47705 16.0229" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <span class="btn-text">Button</span>
        </a>
    </div>
    <hr>
    <div class="row" style="gap: 10px; padding-top: 20px">
        <button class="btn btn-icon btn-icon-search btn-icon-light">
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.491 15.3128L20.5116 20.3334M10.3571 17.4042C14.1507 17.4042 17.226 14.3289 17.226 10.5354C17.226 6.74182 14.1507 3.66653 10.3571 3.66653C6.56357 3.66653 3.48828 6.74182 3.48828 10.5354C3.48828 14.3289 6.56357 17.4042 10.3571 17.4042Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button class="btn btn-icon btn-icon-search btn-icon-light" disabled>
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.491 15.3128L20.5116 20.3334M10.3571 17.4042C14.1507 17.4042 17.226 14.3289 17.226 10.5354C17.226 6.74182 14.1507 3.66653 10.3571 3.66653C6.56357 3.66653 3.48828 6.74182 3.48828 10.5354C3.48828 14.3289 6.56357 17.4042 10.3571 17.4042Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <a class="btn btn-icon btn-icon-search btn-icon-light" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.491 15.3128L20.5116 20.3334M10.3571 17.4042C14.1507 17.4042 17.226 14.3289 17.226 10.5354C17.226 6.74182 14.1507 3.66653 10.3571 3.66653C6.56357 3.66653 3.48828 6.74182 3.48828 10.5354C3.48828 14.3289 6.56357 17.4042 10.3571 17.4042Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a class="btn btn-icon btn-icon-search btn-icon-light disabled" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.491 15.3128L20.5116 20.3334M10.3571 17.4042C14.1507 17.4042 17.226 14.3289 17.226 10.5354C17.226 6.74182 14.1507 3.66653 10.3571 3.66653C6.56357 3.66653 3.48828 6.74182 3.48828 10.5354C3.48828 14.3289 6.56357 17.4042 10.3571 17.4042Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <hr>
    <div class="row" style="gap: 50px; padding-top: 20px">
        <div class="row" style="gap: 10px">
            <button class="btn btn-icon btn-icon-close btn-icon-light">
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </button>
            <button class="btn btn-icon btn-icon-close btn-icon-light" disabled>
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </button>
            <a class="btn btn-icon btn-icon-close btn-icon-light" href="https://vsezaimyonline.ru/" target="_blank">
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </a>
            <a class="btn btn-icon btn-icon-close btn-icon-light disabled" href="https://vsezaimyonline.ru/" target="_blank">
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </a>
        </div>
        <div class="row" style="gap: 10px">
            <button class="btn btn-icon btn-icon-close btn-icon-light btn-md">
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </button>
            <button class="btn btn-icon btn-icon-close btn-icon-light btn-md" disabled>
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </button>
            <a class="btn btn-icon btn-icon-close btn-icon-light btn-md" href="https://vsezaimyonline.ru/" target="_blank">
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </a>
            <a class="btn btn-icon btn-icon-close btn-icon-light disabled btn-md" href="https://vsezaimyonline.ru/" target="_blank">
                <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3.96973" y="19.2781" width="22" height="1.5" rx="0.75" transform="rotate(-45 3.96973 19.2781)" fill="#141414"/>
                    <rect x="5.03027" y="3.7218" width="22" height="1.5" rx="0.75" transform="rotate(45 5.03027 3.7218)" fill="#141414"/>
                </svg>
            </a>
        </div>
    </div>
    <hr>
    <div class="row" style="gap: 10px; padding-top: 20px">
        <button class="btn btn-icon btn-icon-back btn-icon-light">
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button class="btn btn-icon btn-icon-back btn-icon-light" disabled>
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <a class="btn btn-icon btn-icon-back btn-icon-light" href="https://vsezaimyonline.ru/" target="_blank" >
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a class="btn btn-icon btn-icon-back btn-icon-light disabled" href="https://vsezaimyonline.ru/" target="_blank" >
            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6816 3.67999L2.36161 12M2.36161 12L10.6816 20.3199M2.36161 12L21.6383 12" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <hr>
    <div class="row" style="gap: 10px; padding-top: 20px">
        <button class="btn btn-hamburger" style="display: flex;">
            <span class="hamburger-l-1"></span>
            <span class="hamburger-l-2"></span>
        </button>
{{--       остальные убрать --}}
{{--        <button class="btn btn-icon btn-icon-burger btn-icon-light">--}}
{{--            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--        <button class="btn btn-icon btn-icon-burger btn-icon-light" disabled>--}}
{{--            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--        <a class="btn btn-icon btn-icon-burger btn-icon-light" href="https://vsezaimyonline.ru/" target="_blank">--}}
{{--            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
{{--        <a class="btn btn-icon btn-icon-burger btn-icon-light disabled" href="https://vsezaimyonline.ru/" target="_blank">--}}
{{--            <svg class="bi" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="15.125" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" fill="#141414"/>--}}
{{--                <rect x="2.375" y="7.62497" width="19.25" height="0.75" rx="0.375" stroke="#141414" stroke-width="0.75"/>--}}
{{--            </svg>--}}
{{--        </a>--}}
    </div>
    <hr>
    <div class="row" style="padding: 20px 0; gap: 10px">
        <button class="btn btn-icon btn-icon-arrow btn-icon-dark" >
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2085 4.67816L7.7085 10.1782L13.2085 15.6782" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button class="btn btn-icon btn-icon-arrow btn-icon-dark" disabled>
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2085 4.67816L7.7085 10.1782L13.2085 15.6782" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <a class="btn btn-icon btn-icon-arrow btn-icon-dark" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2085 4.67816L7.7085 10.1782L13.2085 15.6782" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a class="btn btn-icon btn-icon-arrow btn-icon-dark disabled" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2085 4.67816L7.7085 10.1782L13.2085 15.6782" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <hr>
    <div class="row" style="padding: 20px 0; gap: 10px">
        <button class="btn btn-icon btn-icon-arrow btn-icon-dark" >
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.7085 15.6782L13.2085 10.1782L7.7085 4.67816" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <button class="btn btn-icon btn-icon-arrow btn-icon-dark" disabled>
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.7085 15.6782L13.2085 10.1782L7.7085 4.67816" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        <a class="btn btn-icon btn-icon-arrow btn-icon-dark" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.7085 15.6782L13.2085 10.1782L7.7085 4.67816" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <a class="btn btn-icon btn-icon-arrow btn-icon-dark disabled" href="https://vsezaimyonline.ru/" target="_blank">
            <svg class="bi" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.7085 15.6782L13.2085 10.1782L7.7085 4.67816" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</div>


