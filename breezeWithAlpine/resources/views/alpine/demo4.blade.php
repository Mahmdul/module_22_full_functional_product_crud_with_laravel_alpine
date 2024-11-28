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
        <ul>
            <template x-for="person, index in persons" :key="index">
                {{-- <li x-text="`${index} - ${person.name}`"></li> --}}
                <li>
                    <input type="text" x-model="person.name">
                </li>
            </template>
        </ul>
        <button @click="console.log(persons)" class="click">Click Me</button>
    </div>

    <script>
        const data = {
            persons:[
                {name:'Jhon Doe',age:27,email:'jhon@emailcom'},
                {name:'Jane Doe',age:25,email:'jane@emailcom'},
                {name:'Jim Doe',age:45,email:'jim@emailcom'}
            ]
        }
    </script>
</body>
</html>