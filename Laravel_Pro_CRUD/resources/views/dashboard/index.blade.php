<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pro1</title>

    <!-- Bootstrap css -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- font-awesome css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        .background-imgg {
            width: 100%;
        }

        /* .perforamce {
            line-height: 4;
        } */

        .perforamce p {
            font-size: 3rem;
            font-weight: 500;
        }

        .perforamce h2 {
            font-size: 3.5rem;
            font-weight: 700;
            width: 100%;
            max-width: 400px;
        }

        .perforamce h2 span {
            color: #fff;
            background-color: #f8137d;
        }

        .perforamce .name-color {
            color: #32bac0;
            font-size: 5rem;
        }

        .perforamce .employ-number {
            font-size: 3rem;
            font-weight: 500;
        }

        .count-values h2 {
            font-size: 5rem;
            font-weight: 700;
        }

        .count-values p {
            font-size: 3rem;
            font-weight: 500;
        }

        .line-image2 {
            position: absolute;
            top: 0;
            right: -64px;
            width: 244px;
        }

        .circle-image2 {
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 200px;
        }

        .circle-employ {
            position: absolute;
            width: 430px;
            border-radius: 69%;
            height: 430px;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 25%;
        }
    </style>
</head>
<body class="overflow-hidden">

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
         @foreach ($individualproductionDataList as $key => $individualproduction)
          {{-- <div class="carousel-item active">
            <img src="{{ asset('uploads/' . $individualproduction->file_path) }}" class="d-block w-50" alt="...">
          </div> --}}
          <section class="p-5 carousel-item {{ $loop->first ? 'active' : ''}}" style="height: 100vh">
            <div class="row position-relative">
                <div class="col-md-6">
                    <img src="./images/background-image(1).png" alt="" class="background-imgg" />
                </div>
                <div class="col-md-6 ps-5">
                    <div class="text-end">
                        <img src="./images/PRO1 1.png" alt="" />
                    </div>
                    <div class="perforamce">
                        <p class="m-0 mb-3">{{ $individualproduction['created_at']->format('d M Y')  }}</p>
                        <h2 class="m-0 mb-5">OVERALL TOP <span class="px-3">PERFORMACE </span> OF THE DAY</h2>
                        <h2 class="name-color m-0">{{ Str::ucfirst($individualproduction['coder_name'])  }}</h2>
                        <p class="employ-number mb-5">#{{ $individualproduction['coder_id']  }}</p>
                    </div>
                    <div class="d-flex count-values mt-5">
                        <div class="me-5 pe-5">
                            <h2>{{ $individualproduction['count']  }}</h2>
                            <p>Chart Count</p>
                        </div>
                        <div class="ms-5 ps-5">
                            <h2>{{ $individualproduction['quality']  }}%</h2>
                            <p>Quality</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./images/background-image(2).png" alt="" class="line-image2" />
                    <img src="./images/background-image(3).png" alt="" class="circle-image2" />
                    <img src="{{ asset('uploads/' . $individualproduction->file_path) }}" width="60" class="circle-employ">
                </div>
            </div>
        </section>
          @endforeach 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- @foreach ($individualproductionDataList as $key => $individualproduction)
    <section class="p-5" style="height: 100vh">
        <div class="row position-relative">
            <div class="col-md-6">
                <img src="./images/background-image(1).png" alt="" class="background-imgg" />
            </div>
            <div class="col-md-6 ps-5">
                <div class="text-end">
                    <img src="./images/PRO1 1.png" alt="" />
                </div>
                <div class="perforamce">
                    <p class="m-0 mb-3">{{ $individualproduction['created_at']->format('d M Y')  }}</p>
                    <h2 class="m-0 mb-5">OVERALL TOP <span class="px-3">PERFORMACE </span> OF THE DAY</h2>
                    <h2 class="name-color m-0">{{ $individualproduction['coder_name']  }}</h2>
                    <p class="employ-number mb-5">{{ $individualproduction['coder_id']  }}</p>
                </div>
                <div class="d-flex count-values justify-content-between mt-5">
                    <div>
                        <h2>{{ $individualproduction['count']  }}</h2>
                        <p>Chart Count</p>
                    </div>
                    <div style="margin-right: 40%">
                        <h2>{{ $individualproduction['quality']  }}</h2>
                        <p>Quality</p>
                    </div>
                </div>
            </div>
            <div>
                <img src="./images/background-image(2).png" alt="" class="line-image2" />
                <img src="./images/background-image(3).png" alt="" class="circle-image2" />
                <img src="{{ asset('uploads/' . $individualproduction->file_path) }}" width="60" class="circle-employ">
            </div>
        </div>
    </section>
    @endforeach --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- <script>
        setInterval(() => {
            window.location.reload();
        }, 5000);
    </script> --}}
</body>
</html>
