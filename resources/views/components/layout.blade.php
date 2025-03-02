<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        /* Grid Layout */
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 3 columns */
            gap: 10px;
        }

        /* Make all images the same size */
        .grid-item img {
            width: 100%;
            height: 80%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Responsive for smaller screens */
        @media (max-width: 768px) {
            .grid-layout {
                grid-template-columns: repeat(3, 1fr); /* 2 columns on smaller screens */
            }
        }
    </style>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/daisyui@3.0.0/dist/full.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    @vite(['resources/css/app.css'])
</head>
<body class="">
{{$slot}}
    <!--$slot is required for layout-->
</body>
</html>