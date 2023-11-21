<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>PNV Club application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            height: 500px;
            margin: 20px;
            border:2px dashed red;
            width: 1300px;
        }

        .btn-primary {
            background-color: #ffc107;
            color: #000;
        }

        .name,
        .club,
        .time,
        .skills {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .name label,
        .club label,
        .time label,
        .skills label {
            width: 200px;
            margin-right: 20px;
        }

        h1 {
            text-align: center;
        }
        .skillHobbies {
            width: 10px;
            display: flex;
        }

        #submit {
            background-color: #ffc107;
            color: white;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PNV Club application</h1>
        <form action="result.php" method="post">
            <div class="name">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="club">
                <label for="club" class="form-label">Club you want to apply</label>
                <select name="club" id="club" class="form-control">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="Art Club" selected>Art Club</option>
                    <option value="Music Club">Music Club</option>
                    <option value="Sports Club">Sports Club</option>
                </select>
            </div>
            <div class="time">
                <label for="time" class="form-label">Best time for you</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="timeSaturdayMorning" name="time" value="Saturday morning" checked>
                    <label class="form-check-label" for="timeSaturdayMorning">Saturday morning</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="timeSaturdayAfternoon" name="time" value="Saturday afternoon">
                    <label class="form-check-label" for="timeSaturdayAfternoon">Saturday afternoon</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="timeSundayAfternoon" name="time" value="Sunday afternoon">
                    <label class="form-check-label" for="timeSundayAfternoon">Sunday afternoon</label>
</div>
            </div>
            <div class="skills">
                <label for="skills" class="form-label">Your skills</label>
                <div class="skillHobbies">
                    <div class="one">
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" name="skills[]" value="the best coder">
                            <label class="form-check-label " for="TheBestCoder">The best coder</label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" name="skills[]" value="good in arts">
                            <label class="form-check-label " for="skillsGoodInArts">Good in arts</label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label " for="skillsASuperStar">A super star</label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label " for="skillsASuperStar">A crazy dancer</label>
                        </div>
                    </div>
                    <div class="one">
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label " for="skillsASuperStar">Singer</label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label " for="skillsASuperStar">Good in design</label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label " for="skillsASuperStar">The best eater</label>
                        </div>
                        <div class="form-check ">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label " for="skillsASuperStar">Good in speeches</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
    </div>
</body>

</html>