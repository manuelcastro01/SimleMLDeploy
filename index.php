<!DOCTYPE html>
<html>
<head>
    <title>PML - Prediction</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript">

    function Predict(){

    $.ajax({
            url:'Predict.php',
            type:'post',
            data:$('#predictors').serialize(),
            success:function(data){
            document.getElementById("prediction").innerHTML=data;

            }
        });
    }

</script>

</head>
<body>
    <div class="maindiv">
        <h1>PML - Prediction</h1>
        <form id = "predictors" name="predictors" enctype="multipart/form-data">
            <table class="pred_table">
                <tr><td>raw_timestamp_part_1</td> <td>yaw_belt</td></tr>
                <tr>
                    <td><input type="text" class="Predictor_input" name="P1" id="P1"/></td>
                    <td><input type="text" class="Predictor_input" name="P2" id="P2"/></td>
                </tr>
            </table>

        </form>

        <div class="PredButton" onclick="Predict()">Predict</div>


        <table  style="margin-top: 10%;" class="pred_table">
                <tr> <td>Prediction:</td></tr>
                <tr>
                    <td><a class="Prediction" id="prediction">Your Prediction will appear here</a></td>

                </tr>
            </table>
    </div>
</body>

</html>
