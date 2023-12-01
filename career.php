<?php include '_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="util.css">
    <link rel="stylesheet" href="career.css">
    <title>Career</title>
</head>

<body>
    <div class="banner">
        <div class="text">
            <h1 class="title">Job Portal</h1>
            <p>Find the you best suitable Job</p>
        </div>
    </div>
    <div class="content row jobs">
        <?php $sql="SELECT `cname`,`position`,`jdesc`,`skill`,`ctc`,`location` from `jobs`";
        $result=mysqli_query($conn,$sql);
        $i=0;
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                echo'
                <div class="box">
                    <h2>'.$rows['position'].'</h2>
                    <h3>'.$rows['cname'].'</h3>
                    <p class="des">'.$rows['jdesc'].'</p>
                    <p><span class="head">Skills Required: </span>'.$rows['skill'].'</p>
                    <p><span class="head">CTC: </span> '.$rows['ctc'].'</p>
                    <p><span class="head">Location: </span> '.$rows['location'].'</p>
                    <button type="button" class="apply_now" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                </div>';
            }
        }
        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter details to apply...</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For:</label>
            <input type="text" class="form-control" name="desg">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply">Apply</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>