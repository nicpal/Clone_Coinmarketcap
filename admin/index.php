<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
    <title>Save Images</title>
</head>
<body>

    <div class="container">
    
        <div class="form-container">
            <a href="../" class="mb-5">Home</a>

            <div id="alert" class="alert alert-success <?php if (isset($_GET['error'])) { echo "d-block"; } ?>" role="alert">
                Images Saved!
            </div>            
            <form method="POST" id="form" action="saveimages.php" style="text-align: center;">
                <div class="form-row" style="display: flex; justify-content: center;">
                    <div class="form-group">
                        <label for="inputState">Limit</label>
                        <select id="inputState" name="limit" class="form-control" style="width:100px;">
                            <option value="10">10</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="2500">2500</option>
                            <option value="5000">5000</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Save Images</button>
            </form>

            <div id="spinner" class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>

            
        </div>
    
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>