<?php
if (isset($_POST["submit"])) {
    $name = $_POST["firstname"] ?? '';
    $regno = $_POST["regno"] ?? '';
    $rating = $_POST["rating"] ?? '';
    $fav_segment = $_POST["segment"] ?? '';
    $feedback = $_POST["feedback"] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Received</title>

    <link rel="stylesheet" type="text/css" href="eventFeedbackStyle.css">
    <style>
        /* Extra background styling only for PHP page */
        body {
            background-color: #f4e1c1; 
            padding: 20px;
        }
        .feedback-box {
            background-color: beige;
            padding: 20px;
            border: 7px solid black;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="feedback-box">
    <h2>Feedback Received:</h2>
    <h3>Thank you so much for participating, <?php echo htmlspecialchars($name); ?>!</h3>

    <?php if ($rating > 3) { ?>
        <p><b><i>Glad you enjoyed our event, looking forward to your participation more!</i></b></p>
    <?php } else { ?>
        <p>We are sorry to make you uncomfortable today, we promise to make you satisfied at our next event.</p>
    <?php } ?>

    <p>Happy to know that your favourite segment is 
        <b><?php echo htmlspecialchars($fav_segment); ?></b> — it's a cool one!</p>

    <p>Your Feedback: <b><i><?php echo htmlspecialchars($feedback); ?></i></b>  
    is with us, and we will definitely keep this in mind to make future events even better.</p>
</div>

</body>
</html>
<?php
} 
else {
    echo "Please submit the form first.";
}

