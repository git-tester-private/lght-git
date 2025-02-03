<?php
header('Access-Control-Allow-Origin: *'); // Разрешаем запросы с любого домена
header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); // Разрешаем методы
header('Access-Control-Allow-Headers: Content-Type, Authorization'); // Разрешаем заголовки
header('Content-Type: application/json'); // Указываем, что возвращаем JSON
header("Access-Control-Allow-Origin: http://localhost:5173");


$host = 'mysql_container'; // Хост базы данных
$port = 3307;              // Порт базы данных
$dbname = 'lamp_store';        // Имя базы данных
$user = 'root';            // Имя пользователя
$password = 'root';        // Пароль

try {
    // Подключение к базе данных
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = $_GET['name'] ?? null;

    $stmt = $pdo->prepare("select *from products where name = :name");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($product);

} catch (PDOException $e) {
    // Возвращаем ошибку 500 и сообщение об ошибке
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
