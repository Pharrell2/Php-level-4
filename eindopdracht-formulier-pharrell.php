<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Reisadvies</title>
    <style>
        .kader {
            border: 1px solid white;
            padding: 25px;
            margin-bottom: 15px;
        }

        .container {
            width: 100%;
            padding-right: 0px;
            padding-left: 0px;
        }
    </style>
</head>

<body>
    <main style="width: 900px; margin: 20px auto;">
        
<div class="alert alert-secondary">
</div>

<div class="alert alert-primary">
    <h4>Je kunt maar beter met de fiets gaan!</h4></div><div class="container">

    <div class="card">
        <div class="card-header bg-success">
            <h4>Gegevens voor reisadvies</h4>
        </div>
        <div class="card-body bg-dark">


        <form action="eindopdracht-resultaat-pharrell.php" method="post">
                <div class="kader">
                    <div class="alert alert-success">weg</div>
                    <div class="form-group">
                        <label for="afstand">Lengte (in KM):</label>
                        <input type="number" class="form-control" id="afstand" placeholder="Voer het aantal KM in." name="afstand" value="8" required>
                    </div>
                    <!-- 
        <div class="form-group">
            <label for="soortOndergrond">Soort ondergrond:</label>
            <select class="form-control" id="soortOndergrond" name="soortOndergrond">
                <option>Asfalt</option>
                <option>Zand</option>
            </select>
        </div> -->
                    <div class="form-group">
                        <label for="vertragingDoorFile">Vertraging door file (in minuten):</label>
                        <input type="number" class="form-control" id="vertragingFile" placeholder="Aantal minuten vertraging door file" name="vertragingFile" value="90" required>
                    </div>
                </div>
                <div class="kader">
                    <div class="alert alert-success">fiets</div>
                    <div class="form-group">
                        <label for="bandenspanningvanFiets">Bandenspanning (in %):</label>
                        <input type="number" class="form-control" id="bandenspanningvanFiets" placeholder="Bandenspanning Fiets" name="bandenspanningvanFiets" value="41" required>
                    </div>

                    <label class="checkbox-inline" style="margin-right: 20px;">
                        <input type="radio" name="welNietElektrische" value="15" style="opacity: 1;"  checked required> Niet Elektrisch br(fietssnelheid = 15km/u)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="welNietElektrische" value="25" style="opacity: 1;"  required> Elektrisch (fietssnelheid = 25km/u)
                    </label>
                </div>
                <div class="kader">
                    <div class="alert alert-success">scooter</div>
                    <div class="form-group">
                        <label for="bandenspanningvanScooter">bandenspanning (in %):</label>
                        <input type="number" class="form-control" id="bandenspanningvanScooter" placeholder="Bandenspanning Scooter" name="bandenspanningvanScooter" value="20" required>
                    </div>
                    <div class="form-group">
                        <label for="maximaleSnelheidvanScooter">snelheid:</label>
                        <select class="form-control" id="maximaleSnelheidScooter" name="maximaleSnelheidvanScooter">
                            <option value="25">25 KM/u (snorscooter)</option>
                            <option value="45" >45 KM/u (bromscooter)</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Geef reisadvies</button>
            </form>
        </div>
    </div>
</div>    </main>
</body>

</html>