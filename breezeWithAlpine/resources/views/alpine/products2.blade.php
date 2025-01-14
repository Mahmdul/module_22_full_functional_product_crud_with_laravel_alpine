<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpine Products</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>Products</h1>
    <div x-data="data">
        <ul>
            <template x-for="product,index in products" :key="index">
                <li x-text="`${index+1} - ${product.name}`"></li>
            </template>
        </ul>
    </div>
     
    <script>
        // js a zkono pass kora data k josn a convert korte hoi:
        // const products = @json($products);
        // console.log(products);

        //In Alpine
        const data = {
            //ekhane products er por : dite hoise knona products ekta object tai
            products: @json($products)
        }
    </script>
</body>
</html>