<?php
// Artista Master Academy — submit.php
// Carrega as configurações do ficheiro config.php (não incluído no repositório)

if (file_exists(__DIR__ . '/config.php')) {
    require_once __DIR__ . '/config.php';
} else {
    http_response_code(500);
    echo json_encode(["error" => "Configuração em falta. Copia config.example.php para config.php."]);
    exit;
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Método não permitido"]);
    exit;
}

$input = json_decode(file_get_contents("php://input"), true);
$nome  = isset($input['nome'])  ? htmlspecialchars(trim($input['nome']))  : '';
$email = isset($input['email']) ? htmlspecialchars(trim($input['email'])) : '';

if (empty($nome) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["error" => "Dados inválidos"]);
    exit;
}

$data = json_encode(["nome" => $nome, "email" => $email]);

$options = [
    "http" => [
        "header"  => "Content-Type: application/json\r\n",
        "method"  => "POST",
        "content" => $data,
        "ignore_errors" => true
    ]
];

$context = stream_context_create($options);
file_get_contents(GOOGLE_SCRIPT_URL, false, $context);

echo json_encode(["success" => true]);
