<link rel="stylesheet" href="{{ asset('css/landing/home.css') }}">

<style>
    .tab button.active {
        display: inline-block;
        width: 100%;
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        --tw-bg-opacity: 1;
        background-color: rgb(215 58 255 / var(--tw-bg-opacity));
        opacity: 0.95;
        font-weight: 900;
    }

    .tabcontent {
        display: none;
    }

    .tabcontent {
        animation: fadeEffect 1s;
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>