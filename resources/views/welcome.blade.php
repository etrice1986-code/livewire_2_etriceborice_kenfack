<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <livewire:styles />
</head>
<body>
    <livewire:navbar />
    

    <div class="mt-10 flex justify-center">
        <livewire:counter />
        
    </div>

    <livewire:scripts />
</body>
</html>
