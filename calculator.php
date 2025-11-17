<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Calculator</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: Arial; 
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #667eea;
        }
        button {
            width: 100%;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover { opacity: 0.9; }
        .result {
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }
        .result-item {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }
        .total {
            font-size: 1.2em;
            font-weight: bold;
            color: #667eea;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧮 Premium Calculator</h1>
        
        <form method="POST">
            <div class="form-group">
                <label>Asosiy Miqdor ($):</label>
                <input type="number" name="amount" value="<?php echo $_POST['amount'] ?? '1000'; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Oy Soni:</label>
                <input type="number" name="months" value="<?php echo $_POST['months'] ?? '12'; ?>" min="1" required>
            </div>
            
            <div class="form-group">
                <label>Yillik Foiz (%):</label>
                <input type="number" name="interest" value="<?php echo $_POST['interest'] ?? '5.5'; ?>" step="0.1" required>
            </div>
            
            <div class="form-group">
                <label>Premium Turi:</label>
                <select name="premiumType">
                    <option value="basic" <?php echo ($_POST['premiumType'] ?? '') == 'basic' ? 'selected' : ''; ?>>Basic (+0%)</option>
                    <option value="standard" <?php echo ($_POST['premiumType'] ?? '') == 'standard' ? 'selected' : ''; ?>>Standard (+2%)</option>
                    <option value="premium" <?php echo ($_POST['premiumType'] ?? '') == 'premium' ? 'selected' : ''; ?>>Premium (+5%)</option>
                    <option value="vip" <?php echo ($_POST['premiumType'] ?? '') == 'vip' ? 'selected' : ''; ?>>VIP (+10%)</option>
                </select>
            </div>
            
            <button type="submit">Hisoblash</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = floatval($_POST['amount']);
            $months = intval($_POST['months']);
            $annual_interest = floatval($_POST['interest']);
            $premium_type = $_POST['premiumType'];
            
            // Premium bonus
            $premium_bonus = 0;
            switch ($premium_type) {
                case 'basic': $premium_bonus = 0; break;
                case 'standard': $premium_bonus = 2; break;
                case 'premium': $premium_bonus = 5; break;
                case 'vip': $premium_bonus = 10; break;
            }
            
            // Hisob-kitoblar
            $monthly_interest = ($annual_interest + $premium_bonus) / 12 / 100;
            $future_value = $amount * pow(1 + $monthly_interest, $months);
            $total_interest = $future_value - $amount;
            $monthly_payment = $future_value / $months;
            
            echo '<div class="result">';
            echo '<h3>Natijalar:</h3>';
            echo '<div class="result-item"><span>Asosiy Miqdor:</span><span>$' . number_format($amount, 2) . '</span></div>';
            echo '<div class="result-item"><span>Premium Bonus:</span><span>' . $premium_bonus . '%</span></div>';
            echo '<div class="result-item"><span>Jami Foiz:</span><span>$' . number_format($total_interest, 2) . '</span></div>';
            echo '<div class="result-item"><span>Oylik To\'lov:</span><span>$' . number_format($monthly_payment, 2) . '</span></div>';
            echo '<div class="result-item total"><span>Jami Summa:</span><span>$' . number_format($future_value, 2) . '</span></div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
