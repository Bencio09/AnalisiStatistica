<html>

<head>
    <title>Analisi Statistica Testo</title>
    <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
    <script src="./JS/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h1 class="alert alert-primary" style="border-radius: 5px; text-align: center;">ANALISI STATISTICA</h1>
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 alert alert-success">
                <form action="./Pages/analisi.php" method="post">
                    <label for="Textarea1" class="form-label">Testo da Decifrare</label>
                    <textarea class="form-control" id="Textarea1" rows="3" cols="30" name="text" placeholder="Inserisci qui il testo"  maxlength="5000" required></textarea>
                    <br>
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-2"><input class="btn btn-success" type="submit" value="Analizza" onclick="alert('Il file è stato spostato nell apposita cartella');"></div>
                        <div class="col-5"></div>
                    </div>
                    
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>