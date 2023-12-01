<?php include '_config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="util.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="uil uil-bars"></i>
                    </a>
                    <span>Dashboard</span>
                </div>
            </div>
            <div class="content">
                <p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWidthExample" aria-expanded="false"
                        aria-controls="collapseWidthExample">
                        Post Job
                    </button>
                </p>
                <div class="form_con">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div class="card card-body" style="width: 100%;">
                            <form class="row g-3" method="POST">
                                <div class="col-12 m-t-15 m-b-15">
                                    <label for="cname" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="inputName" name="cname">
                                </div>
                                <div class="col-md-6 m-t-15 m-b-15">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="exampleInputPosition" name="position">
                                </div>
                                <div class="col-md-6 m-t-15 m-b-15">
                                    <label for="jdesc" class="form-label">Job Description</label>
                                    <input type="text" class="form-control" id="jdesc" name="jdesc">
                                </div>
                                <div class="col-md-6 m-t-15 m-b-15">
                                    <label for="skill" class="form-label">Skills</label>
                                    <input type="text" class="form-control" id="skill" name="skill">
                                </div>
                                <div class="col-md-6 m-t-15 m-b-15">
                                    <label for="ctc" class="form-label">CTC</label>
                                    <input type="text" class="form-control" id="CTC" name="ctc">
                                </div>
                                <div class="col-md-6 m-t-15 m-b-15">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="inputCity" name="location">
                                </div>
                                <div class="col-12 m-t-15 m-b-15">
                                    <button type="submit" class="btn btn-primary" name="postjob">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">CTC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <th scope="row">1</th>
                            <td>Microsoft</td>
                            <td>Software Developer</td>
                            <td>18LPA</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>TCS</td>
                            <td>UI/UX Designer</td>
                            <td>10LPA</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Google</td>
                            <td>Android Developer</td>
                            <td>17LPA</td>
                        </tr> -->
                        <?php $query="SELECT `cname`, `position`, `ctc` from `jobs`";
                        $result= mysqli_query($conn,$query);
                        $i=0;
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo"<tbody>
                                <tr>
                                <td >".++$i."</td>
                                <td>".$row['cname']."</td>
                                <td>".$row['position']."</td>
                                <td>".$row['ctc']."</td>
                                </tr>";
                            }}
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="sidebar">
            <div class="profile">
                <h3>Menu</h3>
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="uil uil-briefcase-alt"></i></span>
                        <span class="item">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="jobs.php">
                        <span class="icon"><i class="uil uil-user-plus"></i></span>
                        <span class="item">Applicants</span>
                    </a>
                </li>
        
                <li>
                    <a href="career.php">
                        <span class="icon"><i class="uil uil-ellipsis-h"></i></span>
                        <span class="item">All Jobs</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>