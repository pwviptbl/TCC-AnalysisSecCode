<?php

function test($var) {
mysql_query();
    echo $var;
}

test('Hello World');

// Exemplo de código PHP com vulnerabilidades
eval('echo "Hello World";'); // vulnerabilidade: uso de eval

$command = 'ls';
exec($command); // vulnerabilidade: uso de exec?>
<script>
        // Exemplo de vulnerabilidade: JavaScript inseguro (XSS)
        function showAlert(userInput) {
            alert("User input: " + userInput);
        }
        
        // Exemplo de vulnerabilidade: Código JavaScript com eval
        function evaluateCode(userCode) {
            eval(userCode);  // Vulnerabilidade de execução de código
        }

        // Chamadas de exemplo para as funções vulneráveis
        showAlert("<script>alert('XSS Attack');</script>");
        evaluateCode("alert('Eval Attack');");
    </script>
