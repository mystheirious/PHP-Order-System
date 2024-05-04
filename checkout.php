<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt</title>
  <style>
    body {
      background-color: #fcebf3;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .receipt {
      width: 300px;
      padding: 20px;
      border: 2px solid #382208;
      border-radius: 10px;
      background-color: #fbeee6;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="receipt">
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve values from form
        $order = $_GET["order"];
        $quantity = $_GET["q"];
        $cash = $_GET["c"];

        // Define prices for each drink
        $prices = array(
            "Espresso" => 120,
            "Macchiato" => 130,
            "Americano" => 130,
            "Cappuccino" => 140,
            "Mocha" => 150
        );

        // Calculate total cost
        $totalCost = $prices[$order] * $quantity;

        // Calculate change
        $change = $cash - $totalCost;
        
        // Output order summary
        echo "<h1>Mysthy Cafe's Receipt</h1>";
        echo "<p>Total cost: $totalCost</p>";
        echo "<p>Cash: $cash</p>";
        echo "<p>Change: $change</p>";
        echo "<h3>Thank you for ordering!</h3>";
    } else {
        // If form is not submitted, show an error message
        echo "<p>Error: Form not submitted.</p>";
    }
    ?>
  </div>
</body>
</html>
