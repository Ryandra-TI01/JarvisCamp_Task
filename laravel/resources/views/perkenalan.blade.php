<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | perkenalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root{
            --black:#161616;
        }
        /* -----header------ */
        header{
            background-color: rgba(0, 0, 0, 0);
        }
        .title-header{
            width: 30vw;
            display: flex;
            justify-content: center
        }
        .navbar-collapse{
            display: flex;
            justify-content: center;
        }
        .social-header{
            width: 30vw;
            display: flex;
            justify-content: center;
        }
        .social-header>a{
            margin-right: 1rem;
        }
        /* -----akhir header------ */

        /* -------main------ */
        main{
            padding-top: 10vh;
            height: 100vh;
            background: linear-gradient(var(--black),#9AC8CD);
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        main>img{
            margin-top: 3rem;
            width: 120px;
            height: 120px;
        }
        main>h1{
            margin-top: 1rem;
        }
        main>p{
            margin-top: 1rem; 
            text-align: center;
            width: 40vw;
        }
        main>a{
            margin-top: 1rem;
        }
        main>a>button{
           width: 150px;
           border-radius: 0 !important;
        }
    </style>
  </head>
  <body>
    {{-- header --}}
    <header class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <div class="title-header">
                <a class="navbar-brand text-light" href="#">Ryandra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="social-header">
                <a href=""><svg class="text-light" xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg></a>
                <a href=""><svg class="text-light" xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M8 11l0 5" /><path d="M8 8l0 .01" /><path d="M12 16l0 -5" /><path d="M16 16v-3a2 2 0 0 0 -4 0" /></svg></a>
                <a href=""><svg class="text-light" xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-github"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg> </a>
            </div>
        </div>
      </header>
    {{-- akhir header --}}

    {{-- main --}}
    <main>
        <img src="{{ asset('images/profile-picture.jpeg') }}" class="rounded-circle" alt="...">
        <h1 class="text-center text-light">HI! I Am <br>Ryandra Athaya Saleh</h1>
        <p class="text-light">I am a web developer with experience in building modern web applications using the latest technology. I have a passion to keep learning and growing in the field of technology.</p>
        <a href=""><button class="btn btn-light">Contact Me</button></a>
    </main>
    {{-- akhir main --}}




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>