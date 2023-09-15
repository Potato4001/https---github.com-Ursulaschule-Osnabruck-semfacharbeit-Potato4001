<html>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    .font-fantasy {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }    
</style>

<body class="flex-shrink-0">
    <x-layout>
        <section class="bg-gray-100 border border-black border-opacity-5 rounded-xl py-10 px-2 mx-10 mt-6">
            <div class="flex">
                <aside class="w-1/2">
                    <div class="container ml-20 mt-20" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <!--Carousel items-->
                        <div class="carousel-inner rounded-xl mb-16 flex items-center">
                            <!--First item-->
                            <div class="carousel-item active">
                                <img src="./images/basketball.jpg" class="block w-100" alt="basketball" />
                            </div>
                            <!--Second item-->
                            <div class="carousel-item">
                                <img src="./images/fußball.jpg" class="block w-100" alt="fußball" />
                            </div>
                            <!--Third item-->
                            <div class="carousel-item">
                                <img src="./images/tischtennis1.jpg" class="block w-100" alt="tischtennis" />
                            </div>
                        </div>
                    </div>
                </aside>
                <main class="flex-1">
                    <div class="flex flex-col">
                        <div class="ml-32 mt-20">
                            <h1 class="font-bold text-xl uppercase font-fantasy">
                                Want to organize your team?
                            </h1>
                            <div class="flex inline-flex items-center my-20">
                                <div class="flex inline-flex items-center mr-20 px-3 py-2 hover:bg-green-500 bg-green-700 rounded-full text-white font-fantasy text-lg">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                    </svg>
                                    <button>
                                        <a href="./team" class="hover:text-white">Create a team!</a>
                                    </button>
                                </div>
                                <div class="flex inline-flex items-center px-3 py-2 hover:bg-green-500 bg-green-700 rounded-full text-white font-fantasy text-lg">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                    <button>
                                        <a href="./join" class="hover:text-white">Join your team!</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>
    </x-layout>
</body>

</html>