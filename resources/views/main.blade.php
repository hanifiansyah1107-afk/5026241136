<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 5026241136</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #1a1919;
            font-family: 'Oswald', sans-serif;
            padding: 40px 16px;
        }


        .profile-img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 3px solid #191818;
            object-fit: cover;
        }


        .btn-loreal {
            display: block;
            width: 100%;
            padding: 14px;
            margin-bottom: 10px;
            background-color: #121212;
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            border-radius: 50px;
        }


        .btn-loreal:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }


        .social-icons a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background-color: #222;
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 15px;
            margin: 0 4px;
            margin-bottom: 10px;
        }


        .social-icons a:hover {
            background-color: #1d1b1c;
        }

        .
    </style>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5">


                <div class="text-center mb-4">
                    <img src="https://ugc.production.linktr.ee/106b96f1-03d6-48b8-8119-e7a54c7e2a52_IG-Feed---Carousell--8-.png?io=true&size=avatar-v3_0"
                        class="profile-img mb-3" alt="L'Oreal Logo">
                    <h2 class="fw-bold text-uppercase text-white" style="font-size: 18px; letter-spacing: 2px;">Muhammad Hanifiansyah</h2>

                </div>



                <div class="mb-2">
                    <a href="{{ url('/pert1') }}" class="btn-loreal">Pertemuan 1</a>
                    <a href="{{ url('/pert2') }}" class="btn-loreal">Pertemuan 2</a>
                    <a href="{{ url('/pert3') }}" class="btn-loreal">Pertemuan 3</a>
                    <a href="{{ url('/pert4') }}" class="btn-loreal">Pertemuan 4</a>
                    <a href="{{ url('/pert5') }}" class="btn-loreal">Pertemuan 5</a>
                </div>






            </div>
        </div>
    </div>

</body>

</html>
