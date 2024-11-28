<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">

</head>
<body>
    <h1>Advance Javascript</h1>
    <h2>{{ $title }}</h2>

    <div x-data="data">
        <p x-text="message"></p>
        <p x-text="date"></p>
        <p x-text="date"></p>
        <p x-text="date"></p>
        <button @click="date='26th Nov, 2024'" class="click">Click Me</button>
    </div>

    <script>
        const data = {
	        message: 'Hello from Ostad Batch 4',
	        date: 'Nov 20, 2024'
	     }
    </script>
</body>
</html>