<?php
includeComponent('components/atoms/star-rating');
includeComponent('components/organisms/star-rating-area');
?>
<div style="background-color: var(--light_bg_primary, #F5F6F7); padding: 40px 0;">
    <div class="container">
{{-- начало компонента rating-area --}}

        <div class="rating-area">
            <div class="rating-area-title h4">Информация была полезна?</div>

            <div class="rating-area-container">
                <div class="rating-wrap" data-type="index" data-id="403">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" data-item="1" >
                        <defs>
                            <linearGradient id="grad_1">
                                <stop offset="100%" stop-color="#00000033"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#grad_1)" d="M5.825 22L7.45 14.975L2 10.25L9.2 9.625L12 3L14.8 9.625L22 10.25L16.55 14.975L18.175 22L12 18.275L5.825 22Z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" data-item="2" >
                        <defs>
                            <linearGradient id="grad_2">
                                <stop offset="100%" stop-color="#00000033"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#grad_2)" d="M5.825 22L7.45 14.975L2 10.25L9.2 9.625L12 3L14.8 9.625L22 10.25L16.55 14.975L18.175 22L12 18.275L5.825 22Z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" data-item="3" >
                        <defs>
                            <linearGradient id="grad_3">
                                <stop offset="100%" stop-color="#00000033"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#grad_3)" d="M5.825 22L7.45 14.975L2 10.25L9.2 9.625L12 3L14.8 9.625L22 10.25L16.55 14.975L18.175 22L12 18.275L5.825 22Z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" data-item="4" >
                        <defs>
                            <linearGradient id="grad_4">
                                <stop offset="100%" stop-color="#00000033"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#grad_4)" d="M5.825 22L7.45 14.975L2 10.25L9.2 9.625L12 3L14.8 9.625L22 10.25L16.55 14.975L18.175 22L12 18.275L5.825 22Z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" data-item="5" >
                        <defs>
                            <linearGradient id="grad_5">
                                <stop offset="100%" stop-color="#00000033"></stop>
                            </linearGradient>
                        </defs>
                        <path fill="url(#grad_5)" d="M5.825 22L7.45 14.975L2 10.25L9.2 9.625L12 3L14.8 9.625L22 10.25L16.55 14.975L18.175 22L12 18.275L5.825 22Z"></path>
                    </svg>
                </div>
                <div class="rating-area_value h-body-small">
                    14 оценок, среднее: 4.8 из 5
                </div>

                {{-- можно очистить содержимое rating-area-container при возврате значения через fetch --}}
{{--                <div class="result-rating-vote hidden">Спасибо, ваш голос учтен!</div>--}}
            </div>
        </div>

{{--конец компонента rating-area --}}
    </div>
</div>
