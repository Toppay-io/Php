<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico" />
    <title>TOPA - Demo Connect TOPPAY API Via PHP</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Call TOPA Checkout Library -->
    <script src="../topa-checkout.js"></script>
</head>

<body>
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header text-center">
                    <img src="./assets/img/logo.png" />
                    <h6>Demo send TOPA token via PHP</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="from_address">From address</label>
                            <input type="text" class="form-control" id="from_address" placeholder="From TOPA Wallet Address">
                        </div>
                        <div class="form-group">
                            <label for="to_address">To Address</label>
                            <input type="text" class="form-control" id="to_address" placeholder="To TOPA Wallet Address">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" class="form-control" id="amount" placeholder="Amount TOPA you want to send">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
                <div class="card-footer bg-transparent">
		            <button type="button" class="btn btn-outline-primary"><a href="https://toppay.io" alt="Toppay"><i class="fas fa-home"></i> Homepage</a></button>
		            <button type="button" class="btn btn-outline-primary"><a href="https://github.com/Toppay-io" alt="Github Toppay"><i class="fab fa-github"></i> Github</a></button>
		        </div>
            </div>            
        </div>
    </div>    
</body>

</html>