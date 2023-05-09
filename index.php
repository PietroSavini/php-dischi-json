<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spotify</title>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <img src="./pngwing.com.png" alt="">
                </div>
            </div>
        </header>
        <main class="fl ac">
            <div class="wrapper ">
                <div class="row fl wrap jc ">
                    <div v-for="(disk,index) in dischi" class="col">
                        <div @click="handleDiskClick(index)" class="card fl dc">
                            <div class="card-img tc">
                                <img :src=" disk.poster" alt="">
                            </div>
                            <div class="card-body tc fl dc jc">
                                <h2 class="title">{{disk.title}}</h2>
                                <p class="author">{{disk.author}}</p>
                                <p class="date">{{disk.year}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas -->
            <!-- <div class="offcanvas" >

            </div> -->
            <!-- /offcanvas -->
        </main>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>