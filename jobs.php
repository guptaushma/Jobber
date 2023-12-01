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
    <title>Jobs</title>
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
            <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Candidate Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Qualification</th>
                            <th scope="col">Year Passout</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sql="SELECT `name`,`desg`,`qual`,`year` FROM `candidates`";
                        $result=mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                                echo'
                                <tr>
                                    <th scope="row">'.++$i.'</th>
                                    <td>'.$rows['name'].'</td>
                                    <td>'.$rows['desg'].'</td>
                                    <td>'.$rows['qual'].'</td>
                                    <td>'.$rows['year'].'</td>
                                </tr>';
                            }
                        }else{
                            echo"";
                        }
                        ?>
                        <!-- <tr>
                            <th scope="row">1</th>
                            <td>ABC</td>
                            <td>Software Developer</td>
                            <td><a href=""><i class="uil uil-arrow-to-bottom"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>TCS</td>
                            <td>UI/UX Designer</td>
                            <td><a href=""><i class="uil uil-arrow-to-bottom"></i></a></td>
                        </tr> -->
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