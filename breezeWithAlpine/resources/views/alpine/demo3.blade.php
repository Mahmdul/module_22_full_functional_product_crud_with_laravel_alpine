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

    <div x-data="person">
        <p x-text="name"></p>
        <p x-text="age"></p>
        <p x-text="email"></p>
        <button @click="age=57" class="click">Update</button>
        <hr>
        <input type="text" x-model="name">
        <input type="text" x-model="age">
        <input type="text" x-model="email">
    </div>

    <script>
        const person = {
            name: 'Jhon Doe',
            age: 30,
            email: 'jhon@exam.com'
        }
    </script>
</body>
</html>