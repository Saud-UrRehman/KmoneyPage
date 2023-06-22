<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ijaz Aga</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    /* Your custom styles here */
  </style>
</head>
<body>
  <div class="main container">
    {{-- Header Content --}}
    <header class='mb-5'></header>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Sardex Account</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#"><strong>Account Status: </strong><i class="fa fa-circle" aria-hidden="true" style="color: green; font-size: 0.7rem;"></i> Active</a>
            <a class="nav-link" href="#"><strong>Mode: </strong><span style="font-size: 1rem;">Purchases and Sales</span></a>
            <a class="nav-link" href="#"><strong>Visibility: </strong><span style="font-size: 1rem;">Visibility</span></a>
          </div>
        </div>
      </div>
    </nav>

    <hr>

    <div class="MainMenu p-5">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          {{-- Card Section --}}
          <div class="card">
            <div class="">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card</h5>
                  <h5 class="mt-4">Owner:</h5>  
                  <h5>Francesco Brogna</h5>
                  <hr>
                  <h5 class="mt-4">Number:</h5>  
                  <h5>0312 6532 9390 0972</h5>
                  <h6>Status: <i class="fa fa-circle" aria-hidden="true" style="color: green; font-size: 0.8rem;"></i> Active</h6>
                </div>
              </div>
            </div>
          </div>

          {{-- Rapid Operatives Section --}}
          <div class="card ml-5 mt-3">
            <div class="">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Rapid Operatives</h5>
                  <h5 class="mt-4">Owner:</h5>  
                  <div class="d-grid gap-2 mx-auto">
                    <button class="btn btn-sm btn-primary" style="border-radius: 0" type="button">PAY</button>
                    <button class="btn btn-sm btn-primary" style="border-radius: 0" type="button">CASH</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-8">
          {{-- Progress Section --}}
          <div class="mx-4">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <canvas id="myChart" style="width:100%;max-width:830px"></canvas>
            <script style="border:2px Solid #F8F9FA">
              const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"];
              new Chart("myChart", {
                type: "line",
                data: {
                  labels: monthNames,
                  datasets: [{ 
                    data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                    borderColor: "black",
                    fill: false
                  }, { 
                    data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                    borderColor: "green",
                    fill: false
                  }, { 
                    data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                    borderColor: "blue",
                    fill: false
                  }]
                },
                options: {
                  legend: { display: false },
                  scales: {
                    x: {
                      ticks: {
                        maxRotation: 90,
                        minRotation: 90
                      }
                    },
                    y: {
                      ticks: {
                        callback: function(value, index, values) {
                          return value + " SRD";
                        },
                        min: -6000,
                        max: 6000
                      }
                    }
                  }
                }
              });
            </script>
          </div>

          {{-- Account Summary Section --}}
          <div class="mt-5 mx-4 px-3">
            <div class="card">
              <div class="row no-gutters">
                <div class="col-md-7">
                  <div class="card-body">
                    <h4 class="card-title">Account Summary</h4>
                    <h4 class="card-text mt-3 mb-0">Current Balance</h4>
                    <p class="balance">5.026,72 SRD</p>
                    <h4 class="card-text mt-3 mb-0">Available Balance</h4>
                    <p class="balance">10.026,72 SRD</p>
                  </div>
                </div>

                <div class="col-md-5" style="background-color: #162E46">
                  <div class="card-body" style="color: white">
                    <h5 class="card-text" style="color: rgb(30, 216, 237)">Average Cash</h5>
                    <p class="my-0">5.026,72 SRD</p>
                    <p class="my-0">From input to the circuit</p>
                    <h5 class="card-text mt-4 mb-0" style="color: rgb(30, 216, 237)">Average Outputs</h5>
                    <p class="my-0">10.026,72 SRD</p>
                    <p class="mt-0 mb-3">From input to the circuit</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>
