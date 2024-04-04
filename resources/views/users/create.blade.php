<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Chat - Create User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('css/create-form.css') }}>
</head>
<body>
<nav>
    <svg class="logo" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_ii_28_78)">
            <circle cx="28" cy="28" r="25" transform="rotate(-180 28 28)" fill="#FCB2A5"/>
        </g>
        <circle cx="28" cy="28" r="26.5" transform="rotate(-180 28 28)" stroke="#222944" stroke-width="3"/>
        <defs>
            <filter id="filter0_ii_28_78" x="-3" y="-10" width="59" height="69" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="-13"/>
                <feGaussianBlur stdDeviation="5"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.866667 0 0 0 0 0.576471 0 0 0 0 0.643137 0 0 0 1 0"/>
                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_28_78"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feMorphology radius="7" operator="dilate" in="SourceAlpha" result="effect2_innerShadow_28_78"/>
                <feOffset dx="-4" dy="15"/>
                <feGaussianBlur stdDeviation="5"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.996078 0 0 0 0 1 0 0 0 1 0"/>
                <feBlend mode="normal" in2="effect1_innerShadow_28_78" result="effect2_innerShadow_28_78"/>
            </filter>
        </defs>
    </svg>
</nav>
<main>
    <div class="window">
        <form action="/users" method="POST">
            @csrf
            <div class="banner">
                <span>create user</span>
                <hr>
            </div>
            <input type="text" name="nickname" placeholder="nickname.." maxlength="35">
            <button type="submit">submit</button>
        </form>
    </div>
</main>
</body>
</html>
