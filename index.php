<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Feedback</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
    
            h1 {
                text-align: center;
                color: #333;
            }
    
            .feedback-form {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }
    
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
                color: #555;
            }
    
            input[type="text"], input[type="email"], textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
                box-sizing: border-box;
            }
    
            textarea {
                resize: none;
            }
    
            button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                width: 100%;
            }
    
            button:hover {
                background-color: #45a049;
            }
    
            .thank-you {
                text-align: center;
                color: #4CAF50;
                margin-top: 20px;
            }
        </style>
    </head>
        <body>
            <div class="feedback-form">
                <h1>Envie seu Feedback</h1>
                <form action="process.php" method="POST">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
        
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="message">Mensagem:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
        
                    <button type="submit">Enviar Feedback</button>
                </form>
            </div>
        </body>
</html>

