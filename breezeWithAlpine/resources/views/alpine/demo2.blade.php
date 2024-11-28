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

        <button @click="open=false"  class="click">Hide</button>
        <button @click="open=true" class="click">Show</button>
        <button @click="open=!open" class="click">Toggle</button>
        <button @click="toggle()" class="click">Toggle Using Built In Function</button>

        <div x-show = "open" x-transition style="height:200px;width:500px;background-color: blanchedalmond;padding:10px;color:black">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto totam omnis recusandae ad, tempora mollitia iure magnam! Non, est unde.

        </div>
    </div>

    <script>
        const data = {
            open:false,
            toggle(){
                this.open = !this.open;
            }
	     }
    </script>
</body>
</html>