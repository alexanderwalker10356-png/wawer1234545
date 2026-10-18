<?php
/**
 * Dynamic white-label payment page.
 * Resolves brand theme from the current domain.
 *
 * Query params:
 *   order_id  — order identifier
 *   amount    — amount in minor units (centimes)
 */

$brandsFile = __DIR__ . '/brands.json';
$brands = json_decode(file_get_contents($brandsFile), true)['brands'];

$domain = strtolower(preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? 'default'));
$brand  = $brands[$domain] ?? $brands['default'];

$orderId = htmlspecialchars($_GET['order_id'] ?? '', ENT_QUOTES, 'UTF-8');
$amount  = intval($_GET['amount'] ?? 0);
$displayAmount = number_format($amount / 100, 2, '.', ' ');
$currency = htmlspecialchars($brand['currency']);
$csrfToken = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrfToken;
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($brand['locale']) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($brand['payment_description']) ?></title>
    <link rel="icon" href="<?= htmlspecialchars($brand['favicon']) ?>">
    <link rel="stylesheet" href="<?= htmlspecialchars($brand['font_url']) ?>">
    <style>
        :root {
            --primary: <?= htmlspecialchars($brand['colors']['primary']) ?>;
            --secondary: <?= htmlspecialchars($brand['colors']['secondary']) ?>;
            --accent: <?= htmlspecialchars($brand['colors']['accent']) ?>;
            --bg: <?= htmlspecialchars($brand['colors']['background']) ?>;
            --text: <?= htmlspecialchars($brand['colors']['text']) ?>;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: <?= htmlspecialchars($brand['font']) ?>;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .payment-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            max-width: 440px;
            width: 100%;
            overflow: hidden;
        }

        .payment-header {
            background: var(--primary);
            color: #fff;
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .payment-header img {
            height: 40px;
            width: auto;
        }

        .payment-header h1 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .payment-body {
            padding: 2rem;
        }

        .amount-display {
            text-align: center;
            margin-bottom: 2rem;
        }

        .amount-display .label {
            font-size: 0.85rem;
            color: #64748B;
            margin-bottom: 0.25rem;
        }

        .amount-display .value {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
        }

        .amount-display .currency {
            font-size: 1rem;
            color: #64748B;
            margin-left: 0.25rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
            color: #475569;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid #E2E8F0;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px color-mix(in srgb, var(--secondary) 20%, transparent);
        }

        .row {
            display: flex;
            gap: 1rem;
        }

        .row .form-group {
            flex: 1;
        }

        .btn-pay {
            width: 100%;
            padding: 0.9rem;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.05rem;
            font-weight: 600;
            font-family: inherit;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 0.5rem;
        }

        .btn-pay:hover {
            background: var(--secondary);
        }

        .btn-pay:active {
            transform: scale(0.98);
        }

        .secure-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            margin-top: 1.25rem;
            font-size: 0.8rem;
            color: #94A3B8;
        }

        .payment-footer {
            text-align: center;
            padding: 1rem 2rem;
            border-top: 1px solid #F1F5F9;
            font-size: 0.75rem;
            color: #94A3B8;
        }
    </style>
</head>
<body>
    <div class="payment-card">
        <div class="payment-header">
            <img src="<?= htmlspecialchars($brand['logo']) ?>" alt="<?= htmlspecialchars($brand['name']) ?>">
            <h1><?= htmlspecialchars($brand['payment_description']) ?></h1>
        </div>

        <div class="payment-body">
            <div class="amount-display">
                <div class="label">Montant à payer</div>
                <div>
                    <span class="value"><?= $displayAmount ?></span>
                    <span class="currency"><?= $currency ?></span>
                </div>
            </div>

            <form method="POST" action="/api/process-payment" id="payment-form">
                <input type="hidden" name="csrf_token" value="<?= $csrfToken ?>">
                <input type="hidden" name="order_id" value="<?= $orderId ?>">
                <input type="hidden" name="amount" value="<?= $amount ?>">
                <input type="hidden" name="domain" value="<?= htmlspecialchars($domain) ?>">

                <div class="form-group">
                    <label for="card_number">Numéro de carte</label>
                    <input type="text" id="card_number" name="card_number"
                           placeholder="0000 0000 0000 0000"
                           maxlength="19" inputmode="numeric" required
                           autocomplete="cc-number">
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="expiry">Expiration</label>
                        <input type="text" id="expiry" name="expiry"
                               placeholder="MM/YY" maxlength="5" required
                               autocomplete="cc-exp">
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv"
                               placeholder="123" maxlength="4" inputmode="numeric" required
                               autocomplete="cc-csc">
                    </div>
                </div>

                <button type="submit" class="btn-pay">
                    Payer <?= $displayAmount ?> <?= $currency ?>
                </button>
            </form>

            <div class="secure-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0110 0v4"/>
                </svg>
                Paiement sécurisé — Connexion chiffrée SSL
            </div>
        </div>

        <div class="payment-footer">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($brand['name']) ?>. Tous droits réservés.
        </div>
    </div>

    <script>
        document.getElementById('card_number').addEventListener('input', function(e) {
            let v = e.target.value.replace(/\D/g, '').substring(0, 16);
            e.target.value = v.replace(/(.{4})/g, '$1 ').trim();
        });
        document.getElementById('expiry').addEventListener('input', function(e) {
            let v = e.target.value.replace(/\D/g, '').substring(0, 4);
            if (v.length >= 2) v = v.substring(0, 2) + '/' + v.substring(2);
            e.target.value = v;
        });
    </script>
</body>
</html>
