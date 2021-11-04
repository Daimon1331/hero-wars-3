<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        window.ASSET_PATH = "/assets"
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div id="app">
    <div id="main">
        <div class="back">
            <video id="video" autoplay playsinline loop muted poster="">
                <source id="video-src" src="" type="video/mp4">
            </video>
{{--            <video autoplay playsinline loop muted poster="assets/poster_mob.png">--}}
{{--                <source src="assets/back_mob.mp4">--}}
{{--            </video>--}}
        </div>
        <div class="container">
            <div class="col-lg-4 col-md-5 container-form">
                <div class="logo">
                    <img src="assets/logo.gif" alt="hero-wars">
                </div>
                <form id="register">
                    <p class="h2 name-form">Register & Play
                        <img src="assets/name_form.png">
                    </p>
                    <div class="step1 box-step step-active">
                        <p class="desc-modal">What should I call you?</p>
                        <div class="input-valid">
                            <input class="entryfield name" autocomplete="off" placeholder="Username"
                                   name="name">
                            <p>Use 3-30 letters and numbers.</p>
                        </div>
                        <div class="hero-button">
                            <p class="p1">Next</p>
                            <img src="assets/back_button.png">
                        </div>
                        <p class="d-flex already-account">Already have an account? <span class="open-login">Log In</span></p>
                        <div class="pagination-modal">
                            <img src="assets/pagination1.svg">
                        </div>
                    </div>
                    <div class="step2 box-step">
                        <p class="desc-modal">Enter a strong password</p>
                        <div class="input-valid">
                            <input class="entryfield password" autocomplete="off" type="password" placeholder="Password"
                                   name="password">
                            <p>Use 6-40 symbols, except spaces, <, >, ', "</p>
                            <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                                <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            </svg>
                            <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                                <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            </svg>
                        </div>
                        <div class="hero-button">
                            <p class="p1">Next</p>
                            <img src="assets/back_button.png">
                        </div>
                        <p class="d-flex already-account">Already have an account? <span class="open-login">Log In</span></p>
                        <div class="pagination-modal">
                            <img src="assets/pagination2.svg">
                        </div>
                    </div>
                    <div class="step3 box-step">
                        <p class="desc-modal">How can I contact you in time of need?</p>

                        <div class="input-valid">
                            <input class="entryfield mail" autocomplete="off" placeholder="E-mail"
                                   name="mail">
                            <p>The email you entered is incorrect. Try again.</p>
                        </div>
                        <div class="d-flex box-check-ico">
                            <label class="check-ico">
                                <input class="consent" type="checkbox" name="agreement" value="true"
                                       autocomplete="off" required>
                                <span class="d-flex align-items-center"></span>
                            </label>
                            <p>By signing up, you agree to our
                                <a target="_blank" href="https://hero-wars.com/policy/terms/en">Terms of Service</a>,
                                <a target="_blank" href="https://hero-wars.com/policy/privacy/en">Privacy and Cookie Policy</a>.</p>
                        </div>
                        <button type="button" class="hero-button" disabled>
                            <p class="p1">Play free</p>
                            <img src="assets/back_button.png">
                        </button>
                        <p class="d-flex already-account">Already have an account? <span class="open-login">Log In</span></p>
                        <div class="pagination-modal">
                            <img src="assets/pagination3.svg">
                        </div>
                    </div>
                </form>
                <form id="login">
                    <div class="input-valid">
                        <input class="entryfield mail" autocomplete="off" placeholder="E-mail"
                               name="mail">
                        <p>Field is required.</p>
                        <p class="sign-up">Couldn’t find an account associated with this email. Want to
                        {{--                        <span class="close-modal">sing up</span>?</p>--}}
                    </div>
                    <div class="input-valid">
                        <input class="entryfield password-type password" autocomplete="off" type="password" placeholder="Password"
                               name="password">
                        <p>Use 6-40 symbols, except spaces, <, >, ', "</p>
                        <p>Your password is incorrect.</p>
                        <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        </svg>
                        <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        </svg>
                    </div>
                    <p class="forgot-password">Forgot password?</p>
                    <button type="button" class="hero-button">
                        <p class="p1">Play free</p>
                        <img src="assets/back_button.png" alt="hero-wars">
                    </button>
                    <p class="d-flex already-account">Don't have an account? <span class="open-register">Register now</span></p>                </form>
                <form id="reset">
                    <div class="input-valid">
                        <input class="entryfield mail" autocomplete="off" placeholder="E-mail"
                               name="mail">
                        <p>Field is required.</p>
                    </div>
                    <button type="button" class="hero-button">
                        <p class="p1">Reset</p>
                        <img src="assets/back_button.png" alt="hero-wars">
                    </button>
                    <p class="d-flex already-account">Don't have an account? <span class="open-register">Register now</span></p>
                </form>
                <form id="updatepassword">
                    <p class="desc-modal">Enter your new password</p>
                    <div class="input-valid">
                        <input class="entryfield password password-new" autocomplete="off" type="password" placeholder="Password"
                               name="password">
                        <p>Use 6-40 symbols, except spaces, <, >, ', "</p>
                        <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        </svg>
                        <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        </svg>
                    </div>
                    <div class="input-valid">
                        <input class="entryfield password password-confirm" autocomplete="off" type="password" placeholder="Password"
                               name="password">
                        <p>The passwords entered do not match. Please re-enter your password.</p>
                        <svg class="password-button password-visible view" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.185 18.899L13.764 16.4765C12.8278 16.8112 11.8157 16.8732 10.8456 16.6553C9.87554 16.4373 8.98729 15.9483 8.28423 15.2453C7.58117 14.5422 7.09221 13.654 6.87424 12.6839C6.65628 11.7138 6.71827 10.7017 7.053 9.76551L3.963 6.67551C1.407 8.94801 0 11.531 0 11.531C0 11.531 4.5 19.781 12 19.781C13.4406 19.776 14.8649 19.4758 16.185 18.899ZM7.815 4.16301C9.13508 3.58614 10.5594 3.28597 12 3.28101C19.5 3.28101 24 11.531 24 11.531C24 11.531 22.5915 14.1125 20.0385 16.388L16.9455 13.295C17.2802 12.3588 17.3422 11.3467 17.1243 10.3766C16.9063 9.40655 16.4173 8.51829 15.7143 7.81524C15.0112 7.11218 14.123 6.62322 13.1529 6.40525C12.1828 6.18728 11.1707 6.24927 10.2345 6.58401L7.815 4.16451V4.16301Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            <path d="M8.28786 11C8.20535 11.5765 8.25823 12.1642 8.4423 12.7167C8.62638 13.2692 8.9366 13.7712 9.34838 14.183C9.76015 14.5948 10.2622 14.905 10.8147 15.0891C11.3671 15.2731 11.9549 15.326 12.5314 15.2435L8.28636 11H8.28786ZM15.7129 12.062L11.4694 7.817C12.0458 7.73449 12.6336 7.78737 13.1861 7.97145C13.7385 8.15552 14.2406 8.46574 14.6523 8.87752C15.0641 9.28929 15.3743 9.79131 15.5584 10.3438C15.7425 10.8963 15.7954 11.484 15.7129 12.0605V12.062ZM20.4694 21.062L2.46936 3.062L3.53136 2L21.5314 20L20.4694 21.062Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        </svg>
                        <svg class="password-button password-hide" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 12C15.75 12.9946 15.3549 13.9484 14.6517 14.6517C13.9484 15.3549 12.9946 15.75 12 15.75C11.0054 15.75 10.0516 15.3549 9.34835 14.6517C8.64509 13.9484 8.25 12.9946 8.25 12C8.25 11.0054 8.64509 10.0516 9.34835 9.34835C10.0516 8.64509 11.0054 8.25 12 8.25C12.9946 8.25 13.9484 8.64509 14.6517 9.34835C15.3549 10.0516 15.75 11.0054 15.75 12Z" fill="#FFE5B5" fill-opacity="0.2"/>
                            <path d="M0 12C0 12 4.5 3.75 12 3.75C19.5 3.75 24 12 24 12C24 12 19.5 20.25 12 20.25C4.5 20.25 0 12 0 12ZM12 17.25C13.3924 17.25 14.7277 16.6969 15.7123 15.7123C16.6969 14.7277 17.25 13.3924 17.25 12C17.25 10.6076 16.6969 9.27226 15.7123 8.28769C14.7277 7.30312 13.3924 6.75 12 6.75C10.6076 6.75 9.27226 7.30312 8.28769 8.28769C7.30312 9.27226 6.75 10.6076 6.75 12C6.75 13.3924 7.30312 14.7277 8.28769 15.7123C9.27226 16.6969 10.6076 17.25 12 17.25Z" fill="#FFE5B5" fill-opacity="0.2"/>
                        </svg>
                    </div>
                    <button type="button" class="hero-button">
                        <p class="p1">Save</p>
                        <img src="assets/back_button.png" alt="hero-wars">
                    </button>
                    <p class="d-flex already-account">Don't have an account? <span class="open-register">Register now</span></p>
                </form>
            </div>
            <div class="steps">
                <div class="step-desc">
                    <img src="assets/back_step.png">
                    <img src="assets/back_step_mob.png">
                    <p class="p-step">1</p>
                    <div>
                        <p class="h2">Create your account</p>
                        <p class="p2">Sign up with your username, password and email</p>
                    </div>
                </div>
                <div class="step-desc">
                    <img src="assets/back_step.png">
                    <img src="assets/back_step_mob.png">
                    <p class="p-step">2</p>
                    <div>
                        <p class="h2">Go to the game page</p>
                        <p class="p2">Press «Play for free» and go to the game page</p>
                    </div>
                </div>
                <div class="step-desc">
                    <img src="assets/back_last_step.png">
                    <img src="assets/back_last_step_mob.png">
                    <p class="p-step">3</p>
                    <div>
                        <p class="h2">Play Hero Wars!</p>
                        <p class="p2">The game will launch automatically. Enjoy!</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="box-music">
                <audio id="audio" loop src="assets/audio.mp3"></audio>
                <div id="button-music" class="position-relative mute">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_11:6191)">
                            <rect x="11" y="11" width="40" height="40" rx="20" fill="url(#paint0_linear_11:6191)" fill-opacity="0.5" shape-rendering="crispEdges"/>
                            <rect x="11.5" y="11.5" width="39" height="39" rx="19.5" stroke="url(#paint1_linear_11:6191)" shape-rendering="crispEdges"/>
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.08 28H24C23.4696 28 22.9609 28.2107 22.5858 28.5858C22.2107 28.9608 22 29.4695 22 30V32C22 32.5304 22.2107 33.0391 22.5858 33.4142C22.9609 33.7893 23.4696 34 24 34H24.08C24.3686 33.9999 24.6537 34.0622 24.9159 34.1827C25.1781 34.3031 25.4111 34.4789 25.599 34.698L29.241 38.948C29.845 39.652 31 39.225 31 38.297V23.703C31 22.775 29.845 22.348 29.24 23.053L25.6 27.301C25.4121 27.5203 25.179 27.6964 24.9166 27.817C24.6542 27.9377 24.3688 28.0001 24.08 28ZM37.636 23.275C37.5414 23.1817 37.4291 23.1082 37.3057 23.0588C37.1823 23.0095 37.0504 22.9852 36.9175 22.9874C36.7847 22.9896 36.6536 23.0182 36.5319 23.0717C36.4102 23.1251 36.3005 23.2023 36.209 23.2986C36.1174 23.395 36.0461 23.5086 35.999 23.6328C35.9519 23.7571 35.93 23.8895 35.9347 24.0223C35.9393 24.1551 35.9704 24.2856 36.0261 24.4063C36.0818 24.5269 36.161 24.6353 36.259 24.725C39.914 28.197 39.914 33.803 36.259 37.275C36.161 37.3647 36.0818 37.473 36.0261 37.5937C35.9704 37.7143 35.9393 37.8449 35.9347 37.9777C35.93 38.1105 35.9519 38.2429 35.999 38.3671C36.0461 38.4914 36.1174 38.605 36.209 38.7013C36.3005 38.7977 36.4102 38.8748 36.5319 38.9283C36.6536 38.9817 36.7847 39.0104 36.9175 39.0126C37.0504 39.0148 37.1823 38.9905 37.3057 38.9411C37.4291 38.8917 37.5414 38.8182 37.636 38.725C42.121 34.465 42.121 27.535 37.636 23.275V23.275ZM34.689 26.075C34.4967 25.8922 34.2397 25.7934 33.9745 25.8001C33.7094 25.8069 33.4577 25.9187 33.275 26.111C33.0923 26.3033 32.9934 26.5603 33.0001 26.8254C33.0069 27.0906 33.1187 27.3422 33.311 27.525C35.338 29.45 35.338 32.55 33.311 34.475C33.2158 34.5655 33.1393 34.6738 33.086 34.7938C33.0327 34.9139 33.0035 35.0432 33.0001 35.1745C32.9968 35.3058 33.0194 35.4365 33.0665 35.5591C33.1137 35.6817 33.1845 35.7938 33.275 35.889C33.4577 36.0813 33.7094 36.1931 33.9745 36.1998C34.1058 36.2032 34.2365 36.1806 34.3591 36.1335C34.4817 36.0863 34.5938 36.0155 34.689 35.925C37.546 33.211 37.546 28.789 34.689 26.075V26.075Z" fill="url(#paint2_linear_11:6191)"/>
                        <line x1="44.7811" y1="17.7071" x2="17.7071" y2="44.7811" stroke="url(#paint3_linear_11:6191)" stroke-width="2"/>
                        <defs>
                            <filter id="filter0_d_11:6191" x="0" y="0" width="62" height="62" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset/>
                                <feGaussianBlur stdDeviation="5.5"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.976471 0 0 0 0 0.552941 0 0 0 0 0.145098 0 0 0 1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_11:6191"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_11:6191" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_11:6191" x1="31" y1="11" x2="31" y2="51" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#170D07"/>
                                <stop offset="1" stop-color="#462E18"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_11:6191" x1="31" y1="11" x2="31" y2="51" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDD77"/>
                                <stop offset="1" stop-color="#F8B300"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_11:6191" x1="31.4999" y1="22.7016" x2="31.4999" y2="39.2986" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDD77"/>
                                <stop offset="1" stop-color="#F8B300"/>
                            </linearGradient>
                            <linearGradient id="paint3_linear_11:6191" x1="44.037" y1="17.537" x2="17.537" y2="44.037" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FED766"/>
                                <stop offset="1" stop-color="#F9BA13"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_11:6186)">
                            <rect x="11" y="11" width="40" height="40" rx="20" fill="url(#paint0_linear_11:6186)" fill-opacity="0.5" shape-rendering="crispEdges"/>
                            <rect x="11.5" y="11.5" width="39" height="39" rx="19.5" stroke="url(#paint1_linear_11:6186)" shape-rendering="crispEdges"/>
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.08 28H24C23.4696 28 22.9609 28.2107 22.5858 28.5858C22.2107 28.9608 22 29.4695 22 30V32C22 32.5304 22.2107 33.0391 22.5858 33.4142C22.9609 33.7893 23.4696 34 24 34H24.08C24.3686 33.9999 24.6537 34.0622 24.9159 34.1827C25.1781 34.3031 25.4111 34.4789 25.599 34.698L29.241 38.948C29.845 39.652 31 39.225 31 38.297V23.703C31 22.775 29.845 22.348 29.24 23.053L25.6 27.301C25.4121 27.5203 25.179 27.6964 24.9166 27.817C24.6542 27.9377 24.3688 28.0001 24.08 28ZM37.636 23.275C37.5414 23.1817 37.4291 23.1082 37.3057 23.0588C37.1823 23.0095 37.0504 22.9852 36.9175 22.9874C36.7847 22.9896 36.6536 23.0182 36.5319 23.0717C36.4102 23.1251 36.3005 23.2023 36.209 23.2986C36.1174 23.395 36.0461 23.5086 35.999 23.6328C35.9519 23.7571 35.93 23.8895 35.9347 24.0223C35.9393 24.1551 35.9704 24.2856 36.0261 24.4063C36.0818 24.5269 36.161 24.6353 36.259 24.725C39.914 28.197 39.914 33.803 36.259 37.275C36.161 37.3647 36.0818 37.473 36.0261 37.5937C35.9704 37.7143 35.9393 37.8449 35.9347 37.9777C35.93 38.1105 35.9519 38.2429 35.999 38.3671C36.0461 38.4914 36.1174 38.605 36.209 38.7013C36.3005 38.7977 36.4102 38.8748 36.5319 38.9283C36.6536 38.9817 36.7847 39.0104 36.9175 39.0126C37.0504 39.0148 37.1823 38.9905 37.3057 38.9411C37.4291 38.8917 37.5414 38.8182 37.636 38.725C42.121 34.465 42.121 27.535 37.636 23.275V23.275ZM34.689 26.075C34.4967 25.8922 34.2397 25.7934 33.9745 25.8001C33.7094 25.8069 33.4577 25.9187 33.275 26.111C33.0923 26.3033 32.9934 26.5603 33.0001 26.8254C33.0069 27.0906 33.1187 27.3422 33.311 27.525C35.338 29.45 35.338 32.55 33.311 34.475C33.2158 34.5655 33.1393 34.6738 33.086 34.7938C33.0327 34.9139 33.0035 35.0432 33.0001 35.1745C32.9968 35.3058 33.0194 35.4365 33.0665 35.5591C33.1137 35.6817 33.1845 35.7938 33.275 35.889C33.4577 36.0813 33.7094 36.1931 33.9745 36.1998C34.1058 36.2032 34.2365 36.1806 34.3591 36.1335C34.4817 36.0863 34.5938 36.0155 34.689 35.925C37.546 33.211 37.546 28.789 34.689 26.075V26.075Z" fill="url(#paint2_linear_11:6186)"/>
                        <defs>
                            <filter id="filter0_d_11:6186" x="0" y="0" width="62" height="62" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset/>
                                <feGaussianBlur stdDeviation="5.5"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.976471 0 0 0 0 0.552941 0 0 0 0 0.145098 0 0 0 1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_11:6186"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_11:6186" result="shape"/>
                            </filter>
                            <linearGradient id="paint0_linear_11:6186" x1="31" y1="11" x2="31" y2="51" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#170D07"/>
                                <stop offset="1" stop-color="#462E18"/>
                            </linearGradient>
                            <linearGradient id="paint1_linear_11:6186" x1="31" y1="11" x2="31" y2="51" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDD77"/>
                                <stop offset="1" stop-color="#F8B300"/>
                            </linearGradient>
                            <linearGradient id="paint2_linear_11:6186" x1="31.4999" y1="22.7016" x2="31.4999" y2="39.2986" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDD77"/>
                                <stop offset="1" stop-color="#F8B300"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="d-flex justify-content-between footer-link">
                <p class="p2">2021 © Nexters</p>
                <a target="_blank" class="p2" href="https://hero-wars.com/policy/terms/en">Terms of Service</a>
                <a target="_blank" class="p2" href="https://hero-wars.com/policy/privacy/en">Privacy and Cookie Policy</a>
            </div>
        </footer>
    </div>


</div>

<script defer src="/js/app.js"></script>
</body>
</html>
